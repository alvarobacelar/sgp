<?php

require_once '../models/ManipulateData.php';
session_start();
if (isset($_GET["idEmp"])){
    
    $cidade = addslashes($_GET["cidade"]);
    $idEmpenho = addslashes($_GET["idEmp"]);
    
    /*
     * Excluindo primeiramente a liquidação do empenho para depois excluir o empenho
     */
    $exclui2 = new ManipulateData();
    $exclui2->setTable("liquidacao_empenho");
    $exclui2->setCampoTable("empenho_id_empenho");
    $exclui2->setValueId("$idEmpenho");
    $exclui2->delete();
    
    /*
     * Excluindo o empenho
     */
    $exclui = new ManipulateData();
    $exclui->setTable("empenho");
    $exclui->setCampoTable("id_empenho");
    $exclui->setValueId("$idEmpenho");
    $exclui->delete();
    
    $_SESSION["erroPipeiro"] = "excluido";
    header("location: ../../lancarEmpenho.php?id=".$cidade);
    
} else {
    header("location: ../../erro.php");
}
