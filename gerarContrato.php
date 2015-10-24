<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)){
    
    $smarty->assign("conteudo", "paginas/gerarContrato.tpl");
    $smarty->display("HTML.tpl");
    
}
