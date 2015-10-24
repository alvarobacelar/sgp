<?php

require_once '../models/ManipulateData.php';
/*
 * CADASTROS
 */

/* * ******************************************************
 * ** CADASTRO BASE
 * ******************************************************* */

//CAPTANDO DADOS DO FORMULARIO
$cidade = addslashes($_POST["inputNomeCidade"]);
$obs = addslashes($_POST["textAreaObs"]);
$uf = addslashes($_POST["inputUf"]);
$qntCarradasCidade = addslashes($_POST["inputQntCarradas"]);
$numeroRotasCidade = addslashes($_POST["inputNrRotas"]);
$valorEstimadoCidade = addslashes($_POST["inputValorRotas"]);
$ValorAnualCidade = addslashes($_POST["inputValorAnual"]);
$data = date("Y-m-d") . " " . date("H:i:s");

$redirect = addslashes($_POST["modal"]);

session_start();
if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente"){

if ($cidade != "" && $uf != "") {

//INSTACIANDO O OBJETO DE CADASTRO
    $cad = new ManipulateData(); //INSTACIANDO A CLASSE
    $cad->setTable("cidade_atuante"); //SETANDO O NOME DA TABELA
    $cad->setCampoTable("nome_cidade_atuante");

//VERIFICANDO SE EXISTE REGISTRO CADASTRADO
    if ($cad->getDadosDuplicados("$cidade") >= 1) {
        $_SESSION["erro"] = "duplicado";
        header("Location: ../../cadastrarCidade.php");
    } else {
        $cad->setCamposBanco("nome_cidade_atuante, uf_cidade, obs_cidade_atuante, qnt_carradas_cidade, numero_rotas_cidade, valor_estimado_cidade, valor_anual_cidade, data_cadastro, status"); //CAMPOS DO BANCO DE DADOS
        $cad->setDados("'$cidade', '$uf', '$obs', '$qntCarradasCidade', '$numeroRotasCidade', '$valorEstimadoCidade', '$ValorAnualCidade', '$data', '0'"); //DADOS DO FORMULARIOS
        $cad->insert(); //EFETUANDO CADASTRO
        if (isset($redirect)) {
            header("location: ../../cadastrarPipeiro.php");
        } else {

            $_SESSION["erro"] = $cad->getStatus();
            header("location: ../../cadastrarCidade.php");
        }
    }
} else {
    $_SESSION["erro"] = "ERRO";
    header("location: ../../cadastrarCidade.php");
}

} else {
    header("location: ../../accessDenied.php");
}