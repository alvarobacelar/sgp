<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';


if ($estaLogado == "SIM" && !isset($active)) {

    // busca por cidades
    $buscaCidade = new ManipulateData();
    $buscaCidade->setTable("cidade_atuante");
    $buscaCidade->setOrderTable("nome_cidade_atuante");
    $buscaCidade->selectOrder();

    while ($dbCidade[] = $buscaCidade->fetch_object()) {
        $smarty->assign("cidade", $dbCidade);
    }
    // fim da busca por cidades

    $dataMes = date("m");

    $mesAnt = array(
        '01' => 'DEZEMBRO',
        '02' => 'JANEIRO',
        '03' => 'FEVEREIRO',
        '04' => 'MARÇO',
        '05' => 'ABRIL',
        '06' => 'MAIO',
        '07' => 'JUNHO',
        '08' => 'JULHO',
        '09' => 'AGOSTO',
        '10' => 'SETEMBRO',
        '11' => 'OUTUBRO',
        '12' => 'NOVEMBRO'
    );

    // Pesquisando rps por cpf do pipeiro
    $buscaRPS = new ManipulateData();
    if (isset($_POST["inputCpf"])) {

        $nomeBuscaPipeiro = addslashes($_POST["inputCpf"]);

        $buscaRPS->setFieldId("pipeiro.cpf_pipeiro");
        $buscaRPS->setValueId("$nomeBuscaPipeiro");
        $buscaRPS->setOrderTable("AND mes_rps = '$mesAnt[$dataMes]'"); // buscando somente rps geradas no mês corrente.
        $buscaRPS->pesquisaRPS();

        while ($valorBusca[] = $buscaRPS->fetch_object()) {
            $smarty->assign("valorBusca", $valorBusca);
        }
        $smarty->assign("buscaRPS", $nomeBuscaPipeiro);
        
        // pesquisando rps por cidade (somente estará disponível na versão 1.6.2 do sistema)
    } else if (isset($_POST["selectIdCidade"])) {
        $nomeCidade = addslashes($_POST["selectIdCidade"]);

        $buscaRPS->setFieldId("cidade_atuacao_rps");
        $buscaRPS->setValueId("$nomeCidade");
        $buscaRPS->setOrderTable("AND mes_rps = '$mesAnt[$dataMes]'");
        $buscaRPS->pesquisaRPS();

        while ($valorBusca[] = $buscaRPS->fetch_object()) {
            $smarty->assign("valorBusca", $valorBusca);
        }
        $smarty->assign("buscaRPS", $nomeCidade);
        // buscando RPS geradas no dia da pesquisa de um unico militar
    } else if (isset($_GET["buscaRPSMilitar"])) {

        $dataHoje = date("Y-m-d"); // setando a data do dia para buscar quais usuários geraram rps
        $nomeBuscaPipeiro = addslashes($_GET["buscaRPSMilitar"]);

        //buscando as rps geradas no dia da pesquisa por usuário
        $buscaRPS->setTable("rps,pipeiro");
        $buscaRPS->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND nome_militar = '$nomeBuscaPipeiro' AND data_pesquisa = '$dataHoje' AND status_remove='0'");
        $buscaRPS->select();

        while ($valorBusca[] = $buscaRPS->fetch_object()) {
            $smarty->assign("valorBusca", $valorBusca);
        }
        $smarty->assign("buscaRPS", $nomeBuscaPipeiro);
        // busca rps por ID (vem da página de gps geradas )
    } else if (isset($_GET["idRps"])) {

        $dataHoje = date("Y-m-d"); // setando a data do dia para buscar quais usuários geraram rps
        $idPipeiro = addslashes($_GET["idRps"]);

        //buscando as rps geradas no dia da pesquisa por usuário
        $buscaRPS->setTable("rps,pipeiro");
        $buscaRPS->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND rps.id_rps = '$idPipeiro' AND status_remove='0'");
        $buscaRPS->select();
        $valorBusca[] = $buscaRPS->fetch_object();

        //$nomePipeiroRps = $valorBusca->nome_pipeiro;
        $smarty->assign("valorBusca", $valorBusca);

        //$smarty->assign("buscaRPS", $nomePipeiroRps);
    }

    if (isset($_SESSION["erroRPS"])) {
        if ($_SESSION["erroRPS"] == "excluido") {
            $smarty->assign("erroRPS", "<div class='alert alert-success' role='alert'>RPS excluida com sucesso!</div>");
        } else {
            $smarty->assign("erroRPS", "<div class='alert alert-danger' role='alert'>Erro. Algo deu errado.</div>");
        }
    } else {
        $smarty->assign("erroRPS", "");
    }
    unset($_SESSION["erroRPS"]);


    $smarty->assign("nivel", $_SESSION["nivel"]);
    $smarty->assign("conteudo", "paginas/pesquisarDeclaracao.tpl");
    $smarty->display("HTML.tpl");
}
