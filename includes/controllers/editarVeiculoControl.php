<?php

require_once '../models/ManipulateData.php';

session_start();

//CAPTANDO DADOS DO FORMULARIO
$idVeiculo = addslashes($_POST["inputIdVeiculo"]);
$renavan = addslashes($_POST["inputRenavan"]);
$placa = addslashes($_POST["inputPlaca"]);
$tipo = addslashes($_POST["inputTipoVeiculo"]);
$marca = addslashes($_POST["inputMarca"]);
$modelo = addslashes($_POST["inputModelo"]);
$anoFabricacao = addslashes($_POST["inputAnoFabricacao"]);
$categoria = addslashes($_POST["inputCategoria"]);
$chassis = addslashes($_POST["inputChassis"]);
$anoLicenciamento = addslashes($_POST["inputAnoLicenciamento"]);
$capacidadePipa = addslashes($_POST["inputCapacidadePipa"]);
$cor = addslashes($_POST["inputCor"]);
$anoModelo = addslashes($_POST["inputAnoModelo"]);
$proprietario = addslashes($_POST["inputProprietario"]);
$usuarioEdicao = $_SESSION["posto"] . " " . $_SESSION["nome"];
$dataEdicao = date("Y-m-d") . " " . date("H:i:s");

if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if (isset($idVeiculo)) {
        $editarVeiculo = new ManipulateData();
        $editarVeiculo->setTable("veiculo");
        $editarVeiculo->setCamposBanco("cor_veiculo='$cor', renavan_veiculo = '$renavan', placa_veiculo = '$placa', tipo_veiculo = '$tipo', marca_veiculo = '$marca', modelo_veiculo = '$modelo', ano_fab_veiculo = '$anoFabricacao', ano_modelo_veiculo='$anoModeloVeiculo', categoria_veiculo = '$categoria', chassis_veiculo = '$chassis', ano_licenciamento_veiculo = '$anoLicenciamento', proprietario_veiculo='$proprietario', cap_lts_veiculo = '$capacidadePipa', data_edicao_veiculo='$dataEdicao', usuario_edicao_veiculo='$usuarioEdicao'");
        $editarVeiculo->setFieldId("id_veiculo");
        $editarVeiculo->setValueId("$idVeiculo");
        $editarVeiculo->update();

        $_SESSION["erroVeiculo"] = "alterar";
        header("location: ../../veiculosCadastrados.php");
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}