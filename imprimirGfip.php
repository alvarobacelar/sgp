<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './lib/PdfLibGFIP.php';

if ($estaLogado == "SIM" && !isset($active)) {


    if (isset($_POST["dataInicio"])) {
        $pdf = new PdfLibGfip();
        $mpdf = new mPDF();

        $dataInicial = addslashes($_POST["dataInicio"]);
        $dataFinal = addslashes($_POST["dataFim"]);

        // se não existir variável da data fim, esta é igualada para a data inicio (Para gerar relatório de entrada e saída do btl)
        if ($dataFinal == "") {
            $dataFinal = $dataInicial;
        }

        $GFIP = new ManipulateData();

        // formatando data para pesquisar no banco de dados
        $dataInicioFormatada = $GFIP->formata_data_db($dataInicial);
        $dataFimFormatada = $GFIP->formata_data_db($dataFinal);

        // query da pesquisa de contagem de RPS geradas
        $q = "WHERE status_remove='0' AND data_pesquisa BETWEEN ('$dataInicioFormatada') AND ('$dataFimFormatada')";
        $contRPSMes = new ManipulateData();
        $contRPSMes->setTable("rps");
        $contRPSMes->setOrderTable("$q");
        $totalRPS = $contRPSMes->countTotal();
        // fim da contagem de todas rps geradas no periodo.
        // pesquisa de todas as rps geradas no perido escolhido pelo usuário
        $GFIP->setTable("rps, pipeiro, cidade_atuante");
        $GFIP->setOrderTable("rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante AND status_remove='0' AND");
        $GFIP->selectRPSTodas($dataInicioFormatada, $dataFimFormatada);

        $somaValor = new ManipulateData();
        $somaValor->setTable("rps, pipeiro, cidade_atuante");
        $somaValor->setOrderTable("rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante AND status_remove='0' AND");
        $somaValor->selectSomaRPS($dataInicioFormatada, $dataFimFormatada);
        // fim da pesquisa 

         // buscando a soma de todos as rps geradas no intervaldo de tempo determinado
        while ($somaTotalRps = $somaValor->fetch_object()) {
            $valorLiquido = $somaTotalRps->valor_liquido_rps;
            $valorLiquido = str_replace(".", "", $valorLiquido);
            $valorLiquido = str_replace(",", ".", $valorLiquido);
            $total += $valorLiquido;
            
            $smarty->assign("somaRPS", number_format($total, 2, ",", "."));
        }
        
        while ($resultadoGfip[] = $GFIP->fetch_object()) { // instanciando os resultados para serem mostrados para o usuario
            $smarty->assign("gfip", $resultadoGfip);
            //$smarty->assign("somaVal", $resultadoGfip-);
        }

        $smarty->assign("dataInicio", $dataInicial);
        $smarty->assign("dataFim", $dataFinal);
        $smarty->assign("totalRps", $totalRPS);


        if (isset($_POST["relDiario"])) {

            $pdf->WriteHTML($smarty->fetch("paginas/imprimirRelDiario.tpl"));
            $pdf->Output();
        } else if (isset($_POST["relEntrada"])) {

            $pdf->WriteHTML($smarty->fetch("paginas/imprimirRelEntrada.tpl"));
            $pdf->Output();
        } else {
            $pdf->WriteHTML($smarty->fetch("paginas/imprimirGfip.tpl"));
            $pdf->Output();
        }
    } else {
        header("location: ./accessDenied.php");
    }
} else {
    header("location: ./erro.php");
}



