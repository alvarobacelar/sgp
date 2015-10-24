<?php

require_once '../models/ManipulateData.php';
/*
 * EXCLUSOES
 */

/* * *******************************************
 * ** EXCLUS�O BASICA
 * ******************************************** */
session_start();
if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if (isset($_GET["id"])) {
        

        $idExcluirPipeiro = addslashes($_GET["id"]);

        $deleta = new ManipulateData();
        $deleta->setTable("pipeiro");
        $deleta->setCampoTable("id_pipeiro");
        $deleta->setValueId("$idExcluirPipeiro");
        $deleta->delete();

        $_SESSION["erroPipeiro"] = "excluir";
        header("Location: ../../pipeirosCadastrados.php");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}