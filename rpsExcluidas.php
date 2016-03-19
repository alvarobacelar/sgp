<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './includes/classes/Pagination.php';


if ($estaLogado == "SIM" && !isset($active)) {

    // ########### PAGINAÇÃO #############//
    $paginacao = new ManipulateData();
    $paginacao->setTable("rps,pipeiro");
    if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
        $pg = $_GET["pg"];
    } else {
        $pg = 1;
    }
    $quantPipeiro = 20; // Quantidade de chamado por pagina
    $inicio = ($pg * $quantPipeiro) - $quantPipeiro; // Definindo o inicio da paginação
// ######### FIM DA PAGINAÇÃO ###########// 

    $buscaRPSexcluido = new ManipulateData();
    $buscaRPSexcluido->setTable("rps,pipeiro");
    $buscaRPSexcluido->setOrderTable("ORDER BY id_rps DESC LIMIT $inicio, $quantPipeiro"); // selecionando pipeiros dentro da paginação

    $pagina = new Pagination($pg, $quantPipeiro, $paginacao->CountRpsExcluida());
    //$piperoCadastrado->selectPipeiroAtivo();
    $buscaRPSexcluido->pesquisaRPSexcluido();
    $smarty->assign("total", $paginacao->CountRpsExcluida());    

    while ($valorBusca[] = $buscaRPSexcluido->fetch_object()) {
        $smarty->assign("valorBusca", $valorBusca);
    }


    if (isset($_SESSION["erroRPS"])) {
        if ($_SESSION["erroRPS"] == "restaurado") {
            $smarty->assign("erroRPS", "<div class='alert alert-success' role='alert'>RPS restaurada com sucesso!</div>");
        } else {
            $smarty->assign("erroRPS", "<div class='alert alert-danger' role='alert'>Erro. Algo deu errado.</div>");
        }
    } else {
        $smarty->assign("erroRPS", "");
    }
    unset($_SESSION["erroRPS"]);

    $smarty->assign("paginacao", $pagina->paginacao());
    $smarty->assign("nivel", $_SESSION["nivel"]);
    $smarty->assign("conteudo", "paginas/rpsExcluidas.tpl");
    $smarty->display("HTML.tpl");
}
