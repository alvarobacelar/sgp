<?php

require_once '../models/ManipulateData.php';

session_start();
if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if (isset($_GET["idAtivarCidade"])) {

        $idAtivarCidade = addslashes($_GET["idAtivarCidade"]);

        $ativar = new ManipulateData();
        $ativar->setTable("cidade_atuante");
        $ativar->setCamposBanco("status='0'"); // ativando cidade no sistema (o "0" siguinifica que a cidade está sendo ativa)
        $ativar->setFieldId("id_cidade_atuante");
        $ativar->setValueId("$idAtivarCidade");
        $ativar->update();

        $_SESSION["erroCidade"] = "ativado";
        header("location: ../../cidadesCadastradas.php");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}