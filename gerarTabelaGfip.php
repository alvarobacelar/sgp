<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "vis") { // somento o administrador e o usuário do financeiro podem gerar a GFIP

        $smarty->assign("conteudo", "paginas/gerarTabelaGfip.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}

