<?php

require_once '../models/ManipulateData.php';
session_start();

$idCidade = addslashes($_POST["inputCidadeEmpenho"]);
$idPipeiroEmpenho = addslashes($_POST["inputPipeiroEmpenho"]);
$valorEmpenho = addslashes($_POST["inputValorEmpLiquida"]);
$valorRps = addslashes($_POST["inputValorRpsLiquida"]);
$idLiquidacao = addslashes($_POST["inputIdLiquida"]);
$dataLiquidacao = date("Y-m-d");
$milLiquidou = addslashes($_SESSION["login"]);
$ip = $_SERVER["REMOTE_ADDR"];
$ob = addslashes($_POST["inputOB"]);

if (isset($_POST)) {

    /*
     * Realizando a subtração do valor do empenho com o valor da RPS
     */
    $valorEmp = $valorEmpenho;
    $valorEmp = str_replace(".", "", $valorEmp);
    $valorEmp = str_replace(",", ".", $valorEmp);

    $valorRPSLiq = $valorRps;
    $valorRPSLiq = str_replace(".", "", $valorRPSLiq);
    $valorRPSLiq = str_replace(",", ".", $valorRPSLiq);

    $total = $valorEmp - $valorRPSLiq;

    $total2 = number_format($total, 2, ",", ".");

    $upEmpenho = new ManipulateData();
    $upEmpenho->setTable("liquidacao_empenho");
    $upEmpenho->setCamposBanco("saldo_liquidacao='$total2', data_liquidacao='$dataLiquidacao', militar_liquidou_liquidacao='$milLiquidou', nr_ob_liquidacao='$ob', status_liquidacao='1', ip_maquina_liquidacao='$ip'");
    $upEmpenho->setFieldId("id_liquidacao");
    $upEmpenho->setValueId("$idLiquidacao");
    $upEmpenho->update();

    $_SESSION["erroPipeiro"] = "liquidado";
    header("Location: ../../liquidarEmpenho.php?id=" . $idCidade);
} else {
    header("Location: ../../erro.php");
}

