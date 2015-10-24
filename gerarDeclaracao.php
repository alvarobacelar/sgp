<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './lib/PdfLibDeclara.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] != "vis") {

        $cpf = addslashes($_POST["inputCpf"]);
        //$mes = addslashes($_POST["selectMes"]);
        $obs = addslashes($_POST["alteracoes"]);
        $ticket = addslashes($_POST["ticket"]);
        $nomeMilitar = addslashes($_POST["nomeMilitar"]);
        $postoGraduacao = addslashes($_POST["inputPostoGraducao"]);
        $cpfMilitar = addslashes($_POST["cpfMilitar"]);

        if (!empty($cpf) && !empty($nomeMilitar) && !empty($cpfMilitar) && !empty($postoGraduacao)) {

            $pdf = new PdfLib();
            $mpdf = new mPDF();
            // selecionar pipeiro para gerar RPS
            $gerarDeclaracao = new ManipulateData();
            $gerarDeclaracao->setTable("pipeiro, cidade_atuante");
            $gerarDeclaracao->setValueId("$cpf");
            $gerarDeclaracao->selectRPS();
            $declaracao = $gerarDeclaracao->fetch_object();

            // buscando a OM para mostrar na rps
            $buscaOM = new ManipulateData();
            $buscaOM->setTable("om");
            $buscaOM->select();
            $om = $buscaOM->fetch_object();
            
            $dataHoje = date("Y-m-d");
            
            // busca para pegar a id da rps solicitada para fazer a gravação de tickets recebido no banco
            $buscaRpsDec = new ManipulateData();
            $buscaRpsDec->setTable("rps,pipeiro");
            $buscaRpsDec->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND pipeiro.cpf_pipeiro = '$cpf' AND data_pesquisa = '$dataHoje' AND status_remove='0'");
            $buscaRpsDec->select();
            $dbRps = $buscaRpsDec->fetch_object();
            $idRps = $dbRps->id_rps;
            $mes = $dbRps->mes_rps;
            
            //adicionando quatidade de tickets que o pipeiro entregou
            $tickts = new ManipulateData();
            $tickts->setTable("rps");
            $tickts->setCamposBanco("tickets_declaracao='$ticket', alteracoes_declaracao='$obs'");
            $tickts->setFieldId("id_rps");
            $tickts->setValueId("$idRps");
            $tickts->update();


            $smarty->assign("om", $om);
            $smarty->assign("postoGrad", $postoGraduacao);
            $smarty->assign("declaracao", $declaracao); // dados do pipeiro para rps
            $smarty->assign("mes", $mes);
            $smarty->assign("data", $gerarDeclaracao->mostrarData());
            $smarty->assign("ticket", $ticket);
            $smarty->assign("nomeMilitar", $nomeMilitar);
            $smarty->assign("obs", $obs);
            $smarty->assign("cpfMilitar", $cpfMilitar);

            $pdf->WriteHTML($smarty->fetch('paginas/gerarDeclaracao.tpl'));
            $pdf->Output();
        } else {
            header("location: ./erro.php");
        }
    } else {
        header("location: ./accessDenied.php");
    }
}

