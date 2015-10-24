<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if (isset($_GET["id"])) {

        $idPipeiro = addslashes($_GET["id"]);

        $verPipeiro = new ManipulateData();
        $verPipeiro->setCamposBanco("pipeiro.id_pipeiro");
        $verPipeiro->setDados("$idPipeiro");
        $verPipeiro->selectCidadeAtuacao();

        if ($verPipeiro->registros_retornados() >= 1) {

            $dbVerPipeiro = $verPipeiro->fetch_object();
            $data = $verPipeiro->formataData($dbVerPipeiro->data_edicao_pipeiro);
            $smarty->assign("pipeiro", $dbVerPipeiro);

            $smarty->assign("nivel", $nivel);
            $smarty->assign("data", $data);
            $smarty->assign("conteudo", "paginas/verPipeiro.tpl");
            $smarty->display("HTML.tpl");
        } else {
            header("location: ./erro.php");
        }
    } else {
        header("location: ./erro.php");
    }
}
