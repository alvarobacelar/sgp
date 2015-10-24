<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './includes/classes/GerarRps.php';

if ($estaLogado == "SIM" && !isset($active)) {

    $cpf = addslashes($_POST["inputCpf"]);
    $valorRS = addslashes($_POST["inputValor"]);
    $mes = addslashes($_POST["selectMes"]);

    if (!empty($cpf) && !empty($valorRS) && !empty($mes)) {
        

        // selecionar pipeiro para gerar RPS
        $gerarRps = new ManipulateData();
        $gerarRps->setTable("pipeiro, cidade_atuante");
        $gerarRps->setValueId("$cpf");
        $gerarRps->selectRPS();
        $dbRps = $gerarRps->fetch_object();

        // buscando a OM para mostrar na rps
        $buscaOM = new ManipulateData();
        $buscaOM->setTable("om");
        $buscaOM->select();
        $om = $buscaOM->fetch_object();

        // caso o ano seja diferente, será mudado conforme o usuário passar
        if (isset($_POST["inputAno"])) {
            $anoPestacao = addslashes($_POST["inputAno"]);
            $smarty->assign("anoPrestacao", $anoPestacao);
            $anoPres = $_POST["inputAno"];
        } else {
            $smarty->assign("anoPrestacao", date("Y"));
            $anoPres = date("Y");
        }
        
        //verificando se existe RPS já gerada no mês corrente do cpf informado
        $rpsGerada = new ManipulateData();
        $rpsGerada->setCampoBancoSelect("rps.id_rps, rps.nome_militar, COUNT(*) AS total");
        $rpsGerada->setTable("rps, pipeiro");
        $rpsGerada->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND pipeiro.cpf_pipeiro = '$cpf' AND rps.mes_rps = '$mes' AND rps.ano_rps = '$anoPres' AND status_remove='0'");
        $rpsGerada->select();
        $valor = $rpsGerada->fetch_object();
        $total = $valor->total;
        $quemGerou = $valor->nome_militar;
        $idRps = $valor->id_rps;
        
        if ($total >= 1){
            $smarty->assign("existente", "A RPS deste Pipeiro já foi gerada neste mês por <i><strong>$quemGerou</strong></i>. <br />Para excuir esta RPS e gerar outra, entre em contato com o Oficial Gerenciador do sistema");
            $smarty->assign("idRps", $idRps);
        } else {
            $smarty->assign("existente", "");
        }
        
        $mesNumero = array(
            'JANEIRO' => '01',
            'FEVEREIRO' => '02',
            'MARÇO' => '03',
            'ABRIL' => '04',
            'MAIO' => '05',
            'JUNHO' => '06',
            'JULHO' => '07',
            'AGOSTO' => '08',
            'SETEMBRO' => '09',
            'OUTUBRO' => '10',
            'NOVEMBRO' => '11',
            'DEZEMBRO' => '12'
        );
        
        $smarty->assign("mesNumero", $mesNumero["$mes"]);

        $imposto = new GerarRps();
        $imposto->setValorBruto($valorRS);
        $imposto->calcularImposto();

        $smarty->assign("cpfImprimir", $cpf);
        $smarty->assign("valorImprimir", $valorRS);
        $smarty->assign("mesImprimir", $mes);

        // formatando o valor liquido
        $valorRS = number_format($valorRS, 2, ",", ".");

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
        $smarty->assign("nivel", $_SESSION["nivel"]);
        $smarty->assign("conteudo", "paginas/rpsHtml.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./erro.php");
    }
}
