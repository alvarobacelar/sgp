<?php

require_once '../models/ManipulateData.php';
/*
 * CADASTROS
 */

/* * ******************************************************
 * ** CADASTRO BASE
 * ******************************************************* */

//CAPTANDO DADOS DO FORMULARIO
$nome = addslashes($_POST["inputNome"]);
$login = addslashes($_POST["inputLogin"]);
$nivel = addslashes($_POST["selectNivel"]);
$posto = addslashes($_POST["selectPosto"]);
$senha = addslashes($_POST["inputSenha"]);
$senha2 = addslashes($_POST["inputSenha2"]);
$funcao = addslashes($_POST["inputFuncao"]);
$cpf = addslashes($_POST["inputCpf"]);
$data = date("Y-m-d") . " " . date("H:i:s");

session_start();
if ($_SESSION["nivel"] == "admin") {

    if ($senha == $senha2) {

        $senha = md5($senha);
//INSTACIANDO O OBJETO DE CADASTRO
        $cad = new ManipulateData(); //INSTACIANDO A CLASSE
        $cad->setTable("usuario"); //SETANDO O NOME DA TABELA
        $cad->setCampoTable("login_usuario");

//VERIFICANDO SE EXISTE REGISTRO CADASTRADO
        if ($cad->getDadosDuplicados("$login") >= 1) {
            $_SESSION["erro"] = "duplicado";
            header("Location: ../../cadastrarUsuario.php");
        } else {
            $cad->setCamposBanco("nome_usuario,login_usuario,senha_usuario,posto_grad_usuario,funcao_usuario,nivel, data_cadastro, cpf_usuario"); //CAMPOS DO BANCO DE DADOS
            $cad->setDados("'$nome', '$login', '$senha', '$posto', '$funcao', '$nivel', '$data', '$cpf'"); //DADOS DO FORMULARIOS
            $cad->insert(); //EFETUANDO CADASTRO
            $_SESSION["erro"] = $cad->getStatus();
            header("location: ../../cadastrarUsuario.php");
        }
    } else {
        $_SESSION["erro"] = "ERRO";
        header("location: ../../cadastrarUsuario.php");
    }
} else {
    header("location: ../../accessDenied.php");
}