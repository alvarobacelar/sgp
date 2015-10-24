<?php

require_once '../models/ManipulateData.php';

$idCidade = addslashes($_GET["idCidade"]);
session_start();

if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if (isset($_REQUEST['ckbIdPipeiro'])) {
        $qt = count($_REQUEST['ckbIdPipeiro']);
        $k = 1;
        foreach ($_REQUEST['ckbIdPipeiro'] as $chkPipeiro) {

            $editarPipeiro = new ManipulateData();
            $editarPipeiro->setTable("pipeiro");
            $editarPipeiro->setCamposBanco("id_cidade_atuante='$idCidade'");
            $editarPipeiro->setFieldId("id_pipeiro");
            $editarPipeiro->setValueId("$chkPipeiro");
            $editarPipeiro->update();

            $k++;
        }
        $_SESSION["erroPipeiro"] = "mudado";
        header("location: ../../verCidade.php?id=$idCidade");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}