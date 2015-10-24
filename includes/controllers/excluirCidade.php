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

    if (isset($_GET["idExcluirCidade"])) {
        

        $idExcluirCidade = addslashes($_GET["idExcluirCidade"]);

        $verifica = new ManipulateData();
        $verifica->setTable("cidade_atuante");
        $verifica->setFieldId("id_cidade_atuante");
        $verifica->setValueId("$idExcluirCidade");
        $verifica->selectAlterar();
        $valor = $verifica->fetch_object();

        if ($valor->status != 0) {

            $deleta = new ManipulateData();
            $deleta->setTable("cidade_atuante");
            $deleta->setCampoTable("id_cidade_atuante");
            $deleta->setValueId("$idExcluirCidade");
            $deleta->delete();

            $_SESSION["erroCidade"] = "excluir";
            header("Location: ../../cidadesCadastradas.php");
        } else {
            $_SESSION["erroCidade"] = "erroExcluir";
            header("Location: ../../cidadesCadastradas.php");
        }
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}