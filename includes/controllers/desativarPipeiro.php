<?php

require_once '../models/ManipulateData.php';

session_start();
if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if (isset($_GET["id"])) {

        $idPipeiroDesativar = addslashes($_GET["id"]);
        $idCidade = addslashes($_GET["idCidade"]);

        $desativar = new ManipulateData();
        $desativar->setTable("pipeiro");
        $desativar->setCamposBanco("id_cidade_atuante='10'");
        $desativar->setFieldId("id_pipeiro");
        $desativar->setValueId("$idPipeiroDesativar");
        $desativar->update();

        if ($idCidade == "") {
            $_SESSION["erroPipeiro"] = "desativado";
            header("location: ../../pipeirosAtivos.php");
        } else {

            $_SESSION["erroPipeiro"] = "desativado";
            header("location: ../../verCidade.php?id=$idCidade");
        }
    } else {
        header("location: ../../erro/php");
    }
} else {
    header("location: ../../accessDenied.php");
}