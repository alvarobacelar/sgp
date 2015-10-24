<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") { // verifica qual o nivel de usuário
        if (isset($_GET["id"])) {

            $idVeiculo = addslashes($_GET["id"]);

            $editaVeiculo = new ManipulateData();
            $editaVeiculo->setTable("veiculo");
            $editaVeiculo->setFieldId("id_veiculo");
            $editaVeiculo->setValueId("$idVeiculo");
            $editaVeiculo->selectAlterar();

            // verifica se o id solicitado existe. se não existir redireciona para a pagina de erro
            if ($editaVeiculo->registros_retornados() >= 1) {

                $dbVeiculo = $editaVeiculo->fetch_object();
                $smarty->assign("veiculo", $dbVeiculo);

                $smarty->assign("conteudo", "paginas/editarVeiculo.tpl");
                $smarty->display("HTML.tpl");
            } else {
                header("location: erro.php");
            }
        } else {
            header("location: ./erro.php");
        }
    } else {
        header("location: ./accessDenied.php");
    }
}

