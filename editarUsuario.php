<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin"){ // verifica qual o nivel de usuário
        if (isset($_GET["id"])) {

            $id = addslashes($_GET["id"]);
            
            // verificando se o usuário foi alterado para mostrar um freeadbak para o usuario
            if (isset($_SESSION["alterar"])){
                if ($_SESSION["alterar"] == "erro"){
                    $smarty->assign("erroAlterar","<div class='alert alert-success' role='alert'>Erro ao alterar o usuário, senhas não correspondem</div>");                    
                } else if ($_SESSION["alterar"] == "OK"){
                    $smarty->assign("erroAlterar","Usuário alterado com sucesso!");
                }
            } else {
                $smarty->assign("erroAlterar", "");
            }
            unset($_SESSION["alterar"]);

            $altera = new ManipulateData();
            $altera->setTable("usuario");
            $altera->setFieldId("id_usuario");
            $altera->setValueId("$id");
            $altera->selectAlterar();

            if ($altera->registros_retornados() >= 1) {
                                
                $db = $altera->fetch_object();
                $smarty->assign("usuario", $db);
            } else {
                header("location: ./erro.php");
            }

            $smarty->assign("conteudo", "paginas/editarUsuario.tpl");
            $smarty->display("HTML.tpl");
        } else {
            header("location: ./erro.php");
        }
    } else {
        header("location: ./accessDenied.php");
    }
}    