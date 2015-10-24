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

    if (isset($_GET["idExcluirCarro"])) { 

        $idExcluirCarro = addslashes($_GET["idExcluirCarro"]);

        $deleta = new ManipulateData();
        $deleta->setTable("veiculo");
        $deleta->setCampoTable("id_veiculo");
        $deleta->setValueId("$idExcluirCarro");
        $deleta->delete();

        $_SESSION["erroVeiculo"] = "excluir";
        header("Location: ../../veiculosCadastrados.php");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}