<?php

require_once '../models/ManipulateData.php';


if (isset($_POST["selectIdCarro"])) {
    session_start();

    $idPipeiro = addslashes($_POST["inputIdPipeiro"]);
    $idVeiculo = addslashes($_POST["selectIdCarro"]);

    $idRetorno = $_POST["idCidade"];

    $verificarCarro = new ManipulateData();
    $verificarCarro->setValueId($idVeiculo);
    $verificarCarro->selectCarroCadastrado();
    $obj = $verificarCarro->fetch_object();


// verificando se o carro já está cadastrado para outro pipeiro
    if ($verificarCarro->registros_retornados() >= 1 && $obj->id_veiculo != 2) {

        $_SESSION["erroPipeiro"] = "carro";
        header("../../pipeirosCadastrados.php");
        exit();
        
    } else {
        $editarPipeiro = new ManipulateData();
        $editarPipeiro->setTable("pipeiro");
        $editarPipeiro->setCamposBanco("id_veiculo='$idVeiculo'");
        $editarPipeiro->setFieldId("id_pipeiro");
        $editarPipeiro->setValueId("$idPipeiro");
        $editarPipeiro->update();

        $_SESSION["erroPipeiro"] = "mudarCarro";
        header("../../pipeirosCadastrados.php");
    }
} else {
    header("location: ../../erro.php");
}