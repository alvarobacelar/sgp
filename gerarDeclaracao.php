<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './lib/PdfLibDeclara.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] != "vis") {

        $cpf = addslashes($_POST["inputCpfDeclacao"]);
        //$mes = addslashes($_POST["selectMes"]);
        $obs = addslashes($_POST["alteracoes"]);
        $ticket = addslashes($_POST["ticket"]);
        $assinatura = addslashes($_POST["assinatura"]);
        $nomeMilitar = addslashes($_POST["nomeMilitar"]);
        $postoGraduacao = addslashes($_POST["inputPostoGraducao"]);
        $cpfMilitar = addslashes($_POST["cpfMilitar"]);
        $anoAtual = date("Y");

        /*
         *  Pegando os valores passado por post do cpf do pipeiro e separando o mês do cpf 
         *  para poder pesquisar o mes corretamente
         */
        list($cpf2, $mesRps) = explode("|", $cpf);

        if (!empty($cpf) && !empty($nomeMilitar) && !empty($cpfMilitar) && !empty($postoGraduacao)) {

            $pdf = new PdfLib();
            $mpdf = new mPDF();
            // selecionar pipeiro para gerar RPS
            $gerarDeclaracao = new ManipulateData();
            $gerarDeclaracao->setTable("pipeiro, cidade_atuante");
            $gerarDeclaracao->setValueId("$cpf2");
            $gerarDeclaracao->selectRPS();
            $declaracao = $gerarDeclaracao->fetch_object();

            // buscando a OM para mostrar na declaracao
            $buscaOM = new ManipulateData();
            $buscaOM->setTable("om");
            $buscaOM->select();
            $om = $buscaOM->fetch_object();
            $anoRps = $om->ano_prestacao;
            
            $dataHoje = date("Y-m-d");

            // busca para pegar a id da rps solicitada para fazer a gravação de tickets recebido no banco
            $buscaRpsDec = new ManipulateData();
            $buscaRpsDec->setTable("rps,pipeiro");
            // consertado um bug que buscava a rps do ano passado.  
            $buscaRpsDec->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND pipeiro.cpf_pipeiro = '$cpf2' AND mes_rps = '$mesRps' AND ano_rps = '$anoRps' AND status_remove='0'");
            $buscaRpsDec->select();
            $dbRps = $buscaRpsDec->fetch_object();
            $idRps = $dbRps->id_rps;
            $cidadeAtuacaoRPS = $dbRps->cidade_atuacao_rps;

            //adicionando quatidade de tickets que o pipeiro entregou
            $tickts = new ManipulateData();
            $tickts->setTable("rps");
            $tickts->setCamposBanco("tickets_declaracao='$ticket', alteracoes_declaracao='$obs', assinatura_declaracao='$assinatura'");
            $tickts->setFieldId("id_rps");
            $tickts->setValueId("$idRps");
            $tickts->update();


            $smarty->assign("om", $om);
            $smarty->assign("postoGrad", $postoGraduacao);
            $smarty->assign("declaracao", $declaracao); // dados do pipeiro para rps
            $smarty->assign("cidadeAtuacaoRps", $cidadeAtuacaoRPS); // cidade de atuacao
            $smarty->assign("mes", $mesRps);
            $smarty->assign("data", $gerarDeclaracao->mostrarData());
            $smarty->assign("ticket", $ticket);
            $smarty->assign("assinatura", $assinatura);
            $smarty->assign("nomeMilitar", $nomeMilitar);
            $smarty->assign("obs", $obs);
            $smarty->assign("cpfMilitar", $cpfMilitar);
            $smarty->assign("nome", $_SESSION["nome"]);
            $smarty->assign("posto", $_SESSION["posto"]);

            $pdf->WriteHTML($smarty->fetch('paginas/gerarDeclaracao.tpl'));
            $pdf->Output();
        } else {
            header("location: ./erro.php");
        }
    } else {
        header("location: ./accessDenied.php");
    }
}

