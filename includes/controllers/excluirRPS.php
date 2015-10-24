<?php

require_once '../models/ManipulateData.php';

session_start();
if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if (isset($_GET["idExcluirRPS"])) {

        $milRemove = addslashes($_SESSION["login"]);
        $idExcluirRPS = addslashes($_GET["idExcluirRPS"]);

        $del = new ManipulateData();
        $del->setTable("rps");
        $del->setCamposBanco("status_remove='1', mil_remove_rps='$milRemove'");
        $del->setFieldId("id_rps");
        $del->setValueId("$idExcluirRPS");
        $del->update();

        $_SESSION["erroRPS"] = "excluido";
        header("Location: ../../pesquisarRPS.php");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}