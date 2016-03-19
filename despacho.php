<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    // busca os dados da OM
    $buscaOM = new ManipulateData();
    $buscaOM->setTable("om");
    $buscaOM->select();
    $om = $buscaOM->fetch_object();

    $smarty->assign("om", $om);
    $smarty->assign("conteudo", "paginas/despacho.tpl");
    $smarty->display("HTML.tpl");
}