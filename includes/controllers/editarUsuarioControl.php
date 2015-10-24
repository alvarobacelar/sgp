<?php

require_once '../models/ManipulateData.php';

//CAPTANDO OS CAMPOS DO FORMULARIO
$id = addslashes($_POST["inputId"]);
$nome = addslashes($_POST["inputNome"]);
$login = addslashes($_POST["inputLogin"]);
$senha = addslashes($_POST["inputSenha"]);
$senha2 = addslashes($_POST["inputSenha2"]);
$posto = addslashes($_POST["selectPosto"]);
$nivel = addslashes($_POST["selectNivel"]);
$funcao = addslashes($_POST["inputFuncao"]);
$cpf = addslashes($_POST["inputCpf"]);
session_start();

//INSTACIANDO O OBJETO DE ALTERACAO
$alt = new ManipulateData();  //INSTACIANDO A CLASSE
$alt->setTable("usuario");  //SETANDO O NOME DA TABELA

if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    if ($senha != "") {
        if ($senha == $senha2) {
            $senha = md5($senha);

            //SETANDO OS CAMPOS PARA O BANCO DE DADOS
            $alt->setCamposBanco("nome_usuario='$nome', login_usuario='$login', senha_usuario='$senha', posto_grad_usuario = '$posto', funcao_usuario = '$funcao', nivel = '$nivel', cpf_usuario = '$cpf'");
            $alt->setFieldId("id_usuario"); //ENVIANDO O CAMPO REFERENTE AO CODIGO PADRAO DE PESQUISA
            $alt->setValueId("$id"); //ENVIANDO O VALOR DO CAMPO DE PESQUISA
            $alt->update(); //EFETUANDO A ALTERAÇÃO
        } else {
            $_SESSION["alterar"] = "erro";
            header("location: ../../editarUsuario.php?=" . $id);
        }
    } else {
        //INSTACIANDO O OBJETO DE ALTERACAO
        //SETANDO OS CAMPOS PARA O BANCO DE DADOS
        $alt->setCamposBanco("nome_usuario='$nome', login_usuario='$login', posto_grad_usuario = '$posto', funcao_usuario = '$funcao', nivel = '$nivel', cpf_usuario = '$cpf'");
        $alt->setFieldId("id_usuario"); //ENVIANDO O CAMPO REFERENTE AO CODIGO PADRAO DE PESQUISA
        $alt->setValueId("$id"); //ENVIANDO O VALOR DO CAMPO DE PESQUISA
        $alt->update(); //EFETUANDO A ALTERAÇÃO
    }

    $_SESSION["alterar"] = "OK";
    header("Location: ../../usuariosCadastrados.php");
} else {
    header("location: ../../accessDenied.php");
}