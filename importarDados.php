<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin") { // se o usuário logado fo administrador, mostra a página
        
        if (isset($_SESSION["erro-upload"])) {
            if ($_SESSION["erro-upload"] == "ok") {
                $smarty->assign("erroUpload", "<div class='alert alert-success' role='alert'>Bando de dados migrado com sucesso!</div>");
            } else if ($_SESSION["erro-upload"] == "erro") {
                $smarty->assign("erroUpload", "<div class='alert alert-danger' role='alert'>Erro ao realizar o upload, tente novamente</div>");
            } else if ($_SESSION["erro-upload"] == "limite") {
                $smarty->assign("erroUpload", "<div class='alert alert-danger' role='alert'>Arquivo maior do que o permitido, tente novamente</div>");
            } else if ($_SESSION["erro-upload"] == "extensao"){
                $smarty->assign("erroUpload", "<div class='alert alert-danger' role='alert'>Erro ao migrar base de dados, extensão não aceita.</div>");
            } else if ($_SESSION["erro-upload"] == "erroUp"){
                $smarty->assign("erroUpload", "<div class='alert alert-danger' role='alert'>Erro ao migrar base de dados. </div>");
            }
        } else {
            $smarty->assign("erroUpload", "");
        }
        unset($_SESSION["erro-upload"]);

        $smarty->assign("conteudo", "paginas/importarDados.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}
