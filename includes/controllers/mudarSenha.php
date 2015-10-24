<?php

require_once '../models/ManipulateData.php';
session_start();

$senhaAtual = addslashes($_POST["inputSenhaAtual"]);
$senhaNova = addslashes($_POST["inputSenha"]);
$senhaRepitida = addslashes($_POST["inputSenha2"]);
$idUsuario = addslashes($_POST["idUsuario"]);

$senhaAtualCrip = md5($senhaAtual);

$verificaSenha = new ManipulateData();
$verificaSenha->setTable("usuario");
$verificaSenha->setFieldId("id_usuario");
$verificaSenha->setValueId("$idUsuario");
$verificaSenha->setOrderTable("AND senha_usuario = '$senhaAtualCrip'");
$verificaSenha->selectAlterar();


// primeiramente faz uma verificação se a senha digitada está correta.
if ($verificaSenha->registros_retornados() == 0) {
    $_SESSION["erroSenha"] = "nao";
    header("location: ../../usuario.php");
} else {
    // depois verifica se as duas senhas conferem.
    if ($senhaNova == $senhaRepitida) {
        $senhaNovaCrip = md5($senhaNova);
        $mudarSenha = new ManipulateData();
        $mudarSenha->setTable("usuario");
        $mudarSenha->setCamposBanco("senha_usuario='$senhaNovaCrip'");
        $mudarSenha->setFieldId("id_usuario");
        $mudarSenha->setValueId("$idUsuario");
        $mudarSenha->update();
        
        $_SESSION["erroSenha"] = "alterada";
        header("location: ../../usuario.php");
    } else { // caso a senha não conferirem envia para a página de usuario.php com uma mensagem de erro
        $_SESSION["erroSenha"] = "senhasErradas";
        header("location: ../../usuario.php");
    }
}




