<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if (isset($_SESSION["erroCidade"])) {
        if ($_SESSION["erroCidade"] == "OK") {
            $smarty->assign("erroCidade", "<div class='alert alert-success' role='alert'>Cidade alterada com sucesso!</div>");
        } else if ($_SESSION["erroCidade"] == "erro") {
            $smarty->assign("erroCidade", "<div class='alert alert-danger' role='alert'>Erro! Algum paarâmetro passado erro. Tente novamente</div>");
        } else if ($_SESSION["erroCidade"] == "excluir") {
            $smarty->assign("erroCidade", "<div class='alert alert-success' role='alert'>Cidade excluida com sucesso!</div>");
        } else if ($_SESSION["erroCidade"] == "desativa") {
            $smarty->assign("erroCidade", "<div class='alert alert-success' role='alert'>Cidade desativada do programa!</div>");
        } else if ($_SESSION["erroCidade"] == "ativado") {
            $smarty->assign("erroCidade", "<div class='alert alert-success' role='alert'>Cidade reativada no programa!</div>");
        } else if ($_SESSION["erroCidade"] == "erroExcluir") {
            $smarty->assign("erroCidade", "<div class='alert alert-danger' role='alert'>Erro ao excluir esta cidade, pois ela encontra-se ativa no programa!</div>");
        } else {
            $smarty->assign("erroCidade", "<div class='alert alert-danger' role='alert'>Não foi possível realizar sua solicitação</div>");
        }
    } else {
        $smarty->assign("erroCidade", "");
    }
    unset($_SESSION["erroCidade"]);

    $buscaCidade = new ManipulateData();
    $buscaCidade->setTable("cidade_atuante");
    $buscaCidade->setOrderTable("nome_cidade_atuante");
    $buscaCidade->selectOrder();

    $buscaTotal = new ManipulateData();
    $buscaTotal->setTable("cidade_atuante, pipeiro");

    // fazendo a busca no banco de dados
    while ($dbCidade = $buscaCidade->fetch_object()) {
        $idCidadeAtuante[] = $dbCidade->id_cidade_atuante;
        $nomeCidade[] = $dbCidade->nome_cidade_atuante;
        $uf[] = $dbCidade->uf_cidade;
        $numeroCarradas[] = $dbCidade->qnt_carradas_cidade;
        $status[] = $dbCidade->status;
        $observacao[] = $dbCidade->obs_cidade_atuante;

        $smarty->assign("idCidade", $idCidadeAtuante);
        $smarty->assign("uf", $uf);
        $smarty->assign("nomeCidade", $nomeCidade);
        $smarty->assign("numeroCarradas", $numeroCarradas);
        $smarty->assign("status", $status);
        $smarty->assign("observacao", $observacao);

        // buscando a contagem de pipeiros por cidade
        $buscaTotal->setOrderTable("WHERE cidade_atuante.id_cidade_atuante = pipeiro.id_cidade_atuante "
                . "AND cidade_atuante.id_cidade_atuante ='$dbCidade->id_cidade_atuante'");

        $totalPipeiro[] = $buscaTotal->countTotal();
        $smarty->assign("totalPipeiro", $totalPipeiro);
    }

    $smarty->assign("nivel", $_SESSION["nivel"]);
    $smarty->assign("conteudo", "paginas/empenho.tpl");
    $smarty->display("HTML.tpl");
}
