<?php

require_once '../models/ManipulateData.php';

session_start();
if ($_SESSION["nivel"] == "admin") {

    if (isset($_GET["idExcluirOM"])) {

        $idExcluirOM = addslashes($_GET["idExcluirOM"]);

        $del = new ManipulateData();
        $del->setTable("om");
        $del->setCampoTable("id_om");
        $del->setValueId("$idExcluirOM");
        $del->delete();

        $_SESSION["erroOM"] = "exclui";
        header("Location: ../../cadastrarOM.php");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}