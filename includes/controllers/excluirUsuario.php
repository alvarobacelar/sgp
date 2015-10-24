<?php

require_once '../models/ManipulateData.php';
/*
 * EXCLUSOES
 */

/* * *******************************************
 * ** EXCLUS�O BASICA
 * ******************************************** */
session_start();
if ($_SESSION["nivel"] == "admin" ) {

    if (isset($_GET["idExcluirUsuario"])) {        

        $idExcluirUsuario = addslashes($_GET["idExcluirUsuario"]);

        // excluindo os acessos desse usuario
        $deleteAcesso = new ManipulateData();
        $deleteAcesso->setTable("acesso_usuario");
        $deleteAcesso->setCampoTable("usuario_id_usuario");
        $deleteAcesso->setValueId("$idExcluirUsuario");
        $deleteAcesso->delete();
        
        $del = new ManipulateData();
        $del->setTable("usuario");
        $del->setCampoTable("id_usuario");
        $del->setValueId("$idExcluirUsuario");
        $del->delete();

        $_SESSION["excluirUsuario"] = "OK";
        header("Location: ../../usuariosCadastrados.php");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}
