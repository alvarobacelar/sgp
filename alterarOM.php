<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin") { // se o usuário logado fo administrador, mostra a página
    
        
        $smarty->assign("conteudo", "paginas/alterarOM.tpl");
        $smarty->display("HTML.tpl");
        
    } else {
        header("location: ./accessDenied.php");
    }
}
