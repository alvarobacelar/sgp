<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';

if ($estaLogado == "SIM"){
    
    $smarty->assign("conteudo","paginas/accessDenied.tpl");
    $smarty->display("HTML.tpl");
}
