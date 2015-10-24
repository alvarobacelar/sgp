<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './lib/PdfLibContrato.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if (isset($_POST["buscaContrato"])) {
        
        $pdf = new PdfLibContrato();
        $mpdf = new mPDF();
        
        $cpfContrato = addslashes($_POST["buscaContrato"]);
        $testemunha1 = addslashes($_POST["testemunha1"]);
        $testemunha2 = addslashes($_POST["testemunha2"]);
        $rgTestemunha1 = addslashes($_POST["rgTestemunha1"]);
        $rgTestemunha2 = addslashes($_POST["rgTestemunha2"]);
        $dataInicio = addslashes($_POST["dataInicio"]);
        $dataFim = addslashes($_POST["dataFim"]);
        $numeroContrato = addslashes($_POST["numeroContrato"]);
        $empresa = addslashes($_POST["nomeEmpresa"]);

        //busncando o pipeiro para gerar o contrato
        $buscaContrato = new ManipulateData();
        $buscaContrato->setTable("pipeiro, cidade_atuante, veiculo");
        $buscaContrato->setFieldId("cpf_pipeiro");
        $buscaContrato->setValueId($cpfContrato);
        $buscaContrato->selectPipeiroContrato();

        $resultatoContrato = $buscaContrato->fetch_object();

        $smarty->assign("cp", $resultatoContrato);
        
        // busca os dados da OM
        $buscaOM = new ManipulateData();
        $buscaOM->setTable("om");
        $buscaOM->select();
        $om = $buscaOM->fetch_object();
        
        $smarty->assign("om", $om); // variável da OM
        $smarty->assign("testemunha1", $testemunha1);
        $smarty->assign("testemunha2", $testemunha2);
        $smarty->assign("rgTestemunha1", $rgTestemunha1);
        $smarty->assign("rgTestemunha2", $rgTestemunha2);
        $smarty->assign("dataInicio", $dataInicio);
        $smarty->assign("dataFim", $dataFim);
        $smarty->assign("numeroContrato", $numeroContrato);
        $smarty->assign("empresa", $empresa);
        
        $smarty->assign("data", $buscaContrato->mostrarData());
        
        $pdf->WriteHTML($smarty->fetch('paginas/imprimeContrato.tpl'));
        $pdf->Output();
        
    } else {
        header("location: ./erro.php");
    }
}

