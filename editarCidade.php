<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") { // verifica qual o nivel de usuário
        if (isset($_GET["id"])) {

            $idCidade = addslashes($_GET["id"]);

            $editarCidade = new ManipulateData();
            $editarCidade->setTable("cidade_atuante");
            $editarCidade->setFieldId("id_cidade_atuante");
            $editarCidade->setValueId("$idCidade");
            $editarCidade->selectAlterar();

            // verifica se o id solicitado existe. se não existir redireciona para a pagina de erro
            if ($editarCidade->registros_retornados() >= 1) {

                $dbCidade = $editarCidade->fetch_object();
                $smarty->assign("cidade", $dbCidade);
            } else {
                header("location: ./erro.php");
            }

            $smarty->assign("conteudo", "paginas/editarCidade.tpl");
            $smarty->display("HTML.tpl");
        } else {
            header("location: ./erro.php");
        }
    } else {
        header("location: ./accessDenied.php");
    }
}
    