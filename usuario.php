<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {
    
    // função de freadbak para o usuario 
    if (isset($_SESSION["erroSenha"])){
        if ($_SESSION["erroSenha"] == "alterada"){
            $smarty->assign("erroSenha", "<div class='alert alert-success' role='alert'>Senha alterada com sucesso!</div>");
        } else if ($_SESSION["erroSenha"] == "nao"){
            $smarty->assign("erroSenha", "<div class='alert alert-danger' role='alert'>Senha atual não confere. Tente novamente!</div>");
        } else if ($_SESSION["erroSenha"] == "senhasErradas"){
            $smarty->assign("erroSenha", "<div class='alert alert-danger' role='alert'>Senhas não conferem.</div>");
        } else {
            $smarty->assign("erroSenha", "<div class='alert alert-danger' role='alert'>Erro, Tente novamente.</div>");
        }
    } else {
        $smarty->assign("erroSenha", "");
    }
    unset($_SESSION["erroSenha"]);
    
    // pesquisa do usuário que está logado
    $idUsuario = $_SESSION["usuarioID"];
    $usr = new ManipulateData();
    $usr->setTable("usuario");
    $usr->setFieldId("id_usuario");
    $usr->setValueId("$idUsuario");
    $usr->selectAlterar();
    $resultadoUsuario = $usr->fetch_object();
    $smarty->assign("usuario", $resultadoUsuario);
    
    $smarty->assign("conteudo", "paginas/usuario.tpl");
    $smarty->display("HTML.tpl");
    
}
