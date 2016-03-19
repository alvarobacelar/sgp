<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './includes/classes/GerarRps.php';
require_once './lib/PdfLib.php';

if ($estaLogado == "SIM" && !isset($active)) {

    $cpf = addslashes($_POST["cpf"]);
    $valorRS = addslashes($_POST["valor"]);
    $mes = addslashes($_POST["mes"]);
    $mesNumero = addslashes($_POST["mesNumero"]);

    // busca os dados da OM
    $buscaOM = new ManipulateData();
    $buscaOM->setTable("om");
    $buscaOM->select();
    $om = $buscaOM->fetch_object();

    $ano = $om->ano_prestacao;
    $mostraDespacho = $om->status;


    //verificando se existe RPS já gerada no mês corrente do cpf informado
    $rpsGerada = new ManipulateData();
    $rpsGerada->setCampoBancoSelect("rps.id_rps, rps.nome_militar, COUNT(*) AS total");
    $rpsGerada->setTable("rps, pipeiro");
    $rpsGerada->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND pipeiro.cpf_pipeiro = '$cpf' AND rps.mes_rps = '$mes' AND rps.ano_rps = '$ano' AND status_remove='0'");
    $rpsGerada->select();
    $valor = $rpsGerada->fetch_object();
    $total = $valor->total;
    $quemGerou = $valor->nome_militar;
    $idRps = $valor->id_rps;


    if ($total >= 1) {
        //$smarty->assign("existente", "A RPS deste Pipeiro já foi gerada neste mês por <i><strong>$quemGerou</strong></i>. <br />Para excuir esta RPS e gerar outra, entre em contato com o Oficial Gerenciador do sistema");
        echo "<script>
                alert ('RPS ja gerada, nao eh permitido gerar mais de uma vez');
                window.location.href = 'pesquisarRPS.php?idRps=$idRps';
                </script>";
        exit;
        //$smarty->assign("idRps", $idRps);
    }


    if (!empty($cpf) && !empty($valorRS) && !empty($mes)) {

        $pdf = new PdfLib();
        $mpdf = new mPDF();

        // selecionar pipeiro para gerar RPS
        $gerarRps = new ManipulateData();
        $gerarRps->setTable("pipeiro, cidade_atuante");
        $gerarRps->setValueId("$cpf");
        $gerarRps->selectRPS();
        $dbRps = $gerarRps->fetch_object();

        if ($mostraDespacho == 0) {
            $smarty->assign("mostraDespacho", "S");
        } else {
            $smarty->assign("mostraDespacho", "N");
        }

        $imposto = new GerarRps();
        $imposto->setValorBruto($valorRS);
        $imposto->calcularImposto();

        // formatando o valor liquido
        $valorRS = number_format($valorRS, 2, ",", ".");

        // função para gravar RPS no banco de dados
        $imposto->gravarRps($dbRps->id_pipeiro, $dbRps->nome_cidade_atuante, $dbRps->id_veiculo, $valorRS, $mes, $ano);

        $smarty->assign("anoImprimir", $ano);
        $smarty->assign("mesNumero", $mesNumero);
        $smarty->assign("om", $om);
        $smarty->assign("inss", $imposto->getRetencaoInss());
        $smarty->assign("senat", $imposto->getSestSenatImposto());
        $smarty->assign("somaImposto", $imposto->getSomaImpostos());
        $smarty->assign("valorLiquido", $imposto->getValorLiquido());

        $smarty->assign("rps", $dbRps); // dados do pipeiro para rps
        $smarty->assign("nome", $_SESSION["nome"]);
        $smarty->assign("posto", $_SESSION["posto"]);
        $smarty->assign("valor", $valorRS);
        $smarty->assign("valorExtenco", $imposto->getValorExtenso());
        $smarty->assign("mes", $mes);
        $smarty->assign("data", date("d/m/Y"));


        $pdf->WriteHTML($smarty->fetch('paginas/RPS.tpl'));
        //$arquivo = date("dmyhi") . "_RPS_" . $dbRps->nome_pipeiro . "_[" . "$dbRps->nome_cidade_atuante" . "].pdf";
        $pdf->Output();
        exit();
    } else {
        header("location: ./erro.php");
    }
}

