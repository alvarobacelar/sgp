<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {


    if (isset($_SESSION["erroAlteracao"])) {
        if ($_SESSION["erroAlteracao"] == "cadastrado") {
            $smarty->assign("erroAlteracao", "<div class='alert alert-success' role='alert'>Alteração informada com sucesso.</div>");
        } else {
            $smarty->assign("erroAlteracao", "<div class='alert alert-danger' role='alert'>Erro ao registrar informação!</div>");
        }
    } else {
        $smarty->assign("erroAlteracao", "");
    }
    unset($_SESSION["erroAlteracao"]);

    if (isset($_GET["id"])) {
        $idPipeiroInfo = addslashes($_GET["id"]);

        $informeAlt = new ManipulateData();
        $informeAlt->setTable("pipeiro");
        $informeAlt->setFieldId("id_pipeiro");
        $informeAlt->setValueId("$idPipeiroInfo");
        $informeAlt->selectAlterar();
        $info = $informeAlt->fetch_object();
    } else {
        $info = "";
    }

    $smarty->assign("nomeInfo", $info);
    $smarty->assign("conteudo", "paginas/informeErro.tpl");
    $smarty->display("HTML.tpl");
}