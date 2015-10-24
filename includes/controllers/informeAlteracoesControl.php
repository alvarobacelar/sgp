<?php

require_once '../models/ManipulateData.php';

$nomePipeiroAlt = addslashes($_POST["inputNomePipeiroAlt"]);
$alteracao = addslashes($_POST["textAreaInforme"]);
$loginAlt = addslashes($_POST["inputNomeLogin"]);
$nomeInformante = addslashes($_POST["inputNomeSolicitante"]);
$idPipeiro = addslashes($_POST["inputIdPipeiro"]);
$dataAlt = date("Y-m-d") . " " . date("H:i:s");
$status = 1;

session_start();
if (!empty($alteracao) && !empty($nomePipeiroAlt) && !empty($nomeInformante)){
    
    $informe = new ManipulateData();
    $informe->setTable("alteracoes");
    $informe->setCamposBanco("id_pipeiro, nome_pipeiro_alt, alteracao, nome_informante, data_informacao, login_informante, status");
    $informe->setDados("'$idPipeiro', '$nomePipeiroAlt', '$alteracao', '$nomeInformante', '$dataAlt', '$loginAlt', '$status'");
    $informe->insert();
    
    $_SESSION["erroAlteracao"] = "cadastrado";
    header("location: ../../informeAlteracoes.php");
    
} else {
    header("location: ../../erro.php");
}