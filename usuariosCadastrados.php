<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {
    if ($_SESSION["nivel"] == "admin") {

        //verificando se o usuario foi excluso para mostrar freeadback
        if (isset($_SESSION["excluirUsuario"])) {
            if ($_SESSION["excluirUsuario"] == "OK") {
                $smarty->assign("excluirUsuario", "<div class='alert alert-success' role='alert'>Usuário excluido com sucesso!</div>");
            } else {
                $smarty->assign("excluirUsuario", "<div class='alert alert-danger' role='alert'>Erro ao excluir!</div>");
            }
        } else {
            $smarty->assign("excluirUsuario", "");
        }
        unset($_SESSION["excluirUsuario"]);

        $buscaUser = new ManipulateData();
        $buscaUser->setTable("usuario");
        $buscaUser->select();

        while ($busUser[] = $buscaUser->fetch_object()) {
            $smarty->assign("busca", $busUser);
        }

        $smarty->assign("conteudo", "paginas/usuariosCadastrados.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}