<?php


require_once '../models/ManipulateData.php';

session_start();
$textoMensagem = addslashes($_POST["textoMensagem"]);
$usuario = $_SESSION["nome"];
$data = date("Y-m-d")." ".date("H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$status = 1;

$addMensagem = new ManipulateData();
$addMensagem->setTable("mensagem");
$addMensagem->setCamposBanco("nome_autor, texto, data_hora, ip, status");
$addMensagem->setDados("'$usuario', '$textoMensagem', '$data', '$ip', '$status'");
$addMensagem->insert();

$_SESSION["erroMensagem"] = "cadastrada";
header("location: ../../");