<?php

require_once '../models/ManipulateData.php';
/*
 * CADASTROS
 */

/* * ******************************************************
 * ** CADASTRO BASE
 * ******************************************************* */

//CAPTANDO DADOS DO FORMULARIO
$renavan = addslashes($_POST["inputRenavan"]);
$placa = addslashes($_POST["inputPlaca"]);
$tipo = addslashes($_POST["inputTipoVeiculo"]);
$marca = addslashes($_POST["inputMarca"]);
$modelo = addslashes($_POST["inputModelo"]);
$anoFabricacao = addslashes($_POST["inputAnoFabricacao"]);
$categoria = addslashes($_POST["inputCategoria"]);
$chassis = addslashes($_POST["inputChassis"]);
$anoLicenciamento = addslashes($_POST["inputAnoLicenciamento"]);
$cor = addslashes($_POST["inputCor"]);
$proprietario = addslashes($_POST["inputProprietario"]);
$anoModelo = addslashes($_POST["inputAnoModelo"]);
$capacidadePipa = addslashes($_POST["inputCapacidadePipa"]);
$data = date("Y-m-d") . " " . date("H:i:s");

$modal = $_SESSION["modal"];

session_start();

if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if ($renavan != "" || $placa != "" || $anoFabricacao != "" || $chassis != "" || $capacidadePipa != "") {

        // SETANDO DADOS PARA VERIFICAÇÃO DE DADOS DUPLICADOS
        $cadastra = new ManipulateData(); //INSTACIANDO A CLASSE
        $cadastra->setTable("veiculo"); //SETANDO O NOME DA TABELA
        $cadastra->setCampoTable("placa_veiculo");

        //VERIFICANDO SE EXISTE REGISTRO CADASTRADO
        if ($cadastra->getDadosDuplicados("$placa") >= 1) {
            $_SESSION["erroVeiculo"] = "duplicado";
            header("Location: ../../cadastrarCarro.php");
        } else {
            $cadastra->setCamposBanco("cor_veiculo,renavan_veiculo,tipo_veiculo,marca_veiculo,modelo_veiculo,ano_fab_veiculo,ano_modelo_veiculo,categoria_veiculo,placa_veiculo,chassis_veiculo,ano_licenciamento_veiculo,proprietario_veiculo,cap_lts_veiculo,data_cadastro"); //CAMPOS DO BANCO DE DADOS
            $cadastra->setDados("'$cor', '$renavan', '$tipo', '$marca', '$modelo', '$anoFabricacao', '$anoModelo', '$categoria', '$placa', '$chassis', '$anoLicenciamento', '$proprietario', '$capacidadePipa', '$data'"); //DADOS DO FORMULARIOS
            $cadastra->insert(); //EFETUANDO CADASTRO
            if (isset($modal)) { // se o cadastro vier da pagina de cadastro de pipeiro será direcionado para a mesma pagina
                $_SESSION["erroVeiculo"] = $cadastra->getStatus();
                header("location: ../../cadastrarPipeiro.php");
            } else {
                $_SESSION["erroVeiculo"] = $cadastra->getStatus();
                header("location: ../../cadastrarCarro.php");
            }
        }
    } else {
        $_SESSION["erroVeiculo"] = "ERRO";
        header("location: ../../cadastrarCarro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}