<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';

if ($estaLogado == "SIM" && !isset($active)){
    
    $smarty->assign("conteudo","paginas/erro.tpl");
    $smarty->display("HTML.tpl");
}
