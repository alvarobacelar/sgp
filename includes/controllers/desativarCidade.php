<?php

require_once '../models/ManipulateData.php';

session_start();
if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente"){

if (isset($_GET["idDesativarCidade"])) {
    
    $idDesativaCidade = addslashes($_GET["idDesativarCidade"]);
    
    $desativa = new ManipulateData();
    $desativa->setTable("cidade_atuante");
    $desativa->setCamposBanco("status='1'"); // desativando a cidade no sistema (o 1 significa que a cidade está sendo desativada do sistema)
    $desativa->setFieldId("id_cidade_atuante");
    $desativa->setValueId("$idDesativaCidade");
    $desativa->update();
    
    $_SESSION["erroCidade"] = "desativa";
    header("location: ../../cidadesCadastradas.php");
    
}else{
    header("location: ../../erro.php");
}
}else {
    header("location: ../../acessDenied.php");
}