<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';


if ($estaLogado == "SIM" && !isset($active)) {

    $posto = addslashes($_SESSION["posto"]);
    $cpf = addslashes($_SESSION["cpf"]);
    $nome = addslashes($_SESSION["nome"]);

    $nomeBuscaDec = $posto . " " . $nome;
    $dataHoje = date("Y-m-d"); // setando a data do dia para buscar rps gerada no dia
    $buscaRPSDeclaracao = new ManipulateData();
    //buscando as rps geradas no dia da pesquisa por usuário
    $buscaRPSDeclaracao->setTable("rps,pipeiro");
    $buscaRPSDeclaracao->setCampoBancoSelect("pipeiro.nome_pipeiro,pipeiro.cpf_pipeiro");
    $buscaRPSDeclaracao->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND nome_militar = '$nomeBuscaDec' AND data_pesquisa = '$dataHoje' AND status_remove='0'");
    $buscaRPSDeclaracao->select();

    while ($valorBusca[] = $buscaRPSDeclaracao->fetch_object()) {
        $smarty->assign("valorBusca", $valorBusca);
    }

    $smarty->assign("cpf", $cpf);
    $smarty->assign("posto", $posto);
    $smarty->assign("conteudo", "paginas/pesquisarPipeiroDeclaracao.tpl");
    $smarty->display("HTML.tpl");
}