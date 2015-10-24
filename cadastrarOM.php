<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {
    

    if ($_SESSION["nivel"] == "admin") { // se o usuário logado fo administrador, mostra a página
        if (isset($_SESSION["erroOM"])) {
            if ($_SESSION["erroOM"] == "cadastrado") {
                $smarty->assign("erroOM", "<div class='alert alert-success' role='alert'>OM cadastrada com sucesso!</div>");
            } else if ($_SESSION["erroOM"] == "editado") {
                $smarty->assign("erroOM", "<div class='alert alert-success' role='alert'>OM editada com sucesso.</div>");
            } else if ($_SESSION["erroOM"] == "exclui"){
                $smarty->assign("erroOM", "<div class='alert alert-success' role='alert'>OM excluida com sucesso!</div>");
            } else if ($_SESSION["erroOM"] == "erro"){
                $smarty->assign("erroOM", "<div class='alert alert-danger' role='alert'>Erro! alguma coisa deu errado ao fazer upload da imagem.</div>");
            } else if ($_SESSION["erroOM"] == "extensao"){
                $smarty->assign("erroOM", "<div class='alert alert-danger' role='alert'>Erro! Tipo de imagem não permitido, somente o formato *.jpg é permitido</div>");
            } else if ($_SESSION["erroOM"] == "tamanho"){
                $smarty->assign("erroOM", "<div class='alert alert-danger' role='alert'>Erro! Tamanho da imagem excedeu o máximo permitido, tamanho permitido de 2MB.</div>");
            } else if ($_SESSION["erroOM"] == "erroUpload"){
                $smarty->assign("erroOM", "<div class='alert alert-danger' role='alert'>Erro! Não foi possível mover as imagens para a pasta. </div>");
            }
        } else {
            $smarty->assign("erroOM", "");
        }
        unset($_SESSION["erroOM"]);


        $buscaOM = new ManipulateData();
        $buscaOM->setTable("om");
        $buscaOM->select();
        $om = $buscaOM->fetch_object();

        if ($buscaOM->registros_retornados() >= 1) {
            $smarty->assign("om", $om);
        } else {
            $smarty->assign("om", "");
        }
        $smarty->assign("conteudo", "paginas/cadastrarOM.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}
