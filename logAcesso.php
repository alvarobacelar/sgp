<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './includes/classes/Pagination.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin") { // se o usuário logado fo administrador, mostra a página
          
        // ########### PAGINAÇÃO #############//
        $paginacao = new ManipulateData();
        $paginacao->setTable("acesso_usuario");
        if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
            $pg = $_GET["pg"];
        } else {
            $pg = 1;
        }
        $quantPipeiro = 20;// Quantidade de chamado por pagina
        $inicio = ($pg * $quantPipeiro) - $quantPipeiro; // Definindo o inicio da paginação
        // ######### FIM DA PAGINAÇÃO ###########// 
        
        $log = new ManipulateData();
        $log->setTable("acesso_usuario, usuario");
        $log->setOrderTable("idacesso_usuario DESC LIMIT $inicio, $quantPipeiro"); // selecionando pipeiros dentro da paginação
        $pagina = new Pagination($pg, $quantPipeiro, $paginacao->countTotal());
        
        $log->selectLogAcesso();
       
        
        while ($logAcesso[] = $log->fetch_object()){
            $smarty->assign("log", $logAcesso);
        }
        $smarty->assign("paginacao", $pagina->paginacao());
        
        $smarty->assign("conteudo", "paginas/logAcesso.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}
