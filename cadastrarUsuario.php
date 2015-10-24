<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin") { // se o usuário logado fo administrador, mostra a página
        
        // verificação de erro de senhas ou de duplicação de usuário
        if (isset($_SESSION["erro"])) {
            if ($_SESSION["erro"] == "ERRO") {
                $smarty->assign("erroCadastro", "<div class='alert alert-danger' role='alert'>As senhas não conferem</div>");
            } else if ($_SESSION["erro"] == "duplicado") {
                $smarty->assign("erroCadastro", "<div class='alert alert-danger' role='alert'>Usuário já cadastrado</div>");
            } else if($_SESSION["erro"] == "Cadastrado"){
                $smarty->assign("erroCadastro", "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>");
            }
        } else {
            $smarty->assign("erroCadastro", "");
        }
        unset($_SESSION["erro"]);
        // fim da verificação de errro de cadastro
        
        $smarty->assign("conteudo", "paginas/cadastrarUsuario.tpl");
        $smarty->display("HTML.tpl");
    } else {

        header("location: ./accessDenied.php");
    }
}