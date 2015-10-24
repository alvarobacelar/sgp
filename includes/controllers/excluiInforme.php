<?php

require_once '../models/ManipulateData.php';

if (isset($_GET["idInforme"])){
    
    $idInforme = addslashes($_GET["idInforme"]);
    $exclui = new ManipulateData();
    $exclui->setTable("alteracoes");
    $exclui->setCampoTable("id_alteracao");
    $exclui->setValueId("$idInforme");
    $exclui->delete();
    
    $_SESSION["erroInforme"] = "excluido";
    header("location: ../../verAlteracoes.php");
    
} else {
    header("location: ../../erro.php");
}
