<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';


if ($estaLogado == "SIM" && !isset($active)) {

    // se existir busca irá mostrar a busca
    $buscaRPS = new ManipulateData();
    if (isset($_GET["buscaRPS"])) {

        $nomeBuscaPipeiro = addslashes($_GET["buscaRPS"]);

        $buscaRPS->setFieldId("pipeiro.nome_pipeiro");
        $buscaRPS->setValueId("$nomeBuscaPipeiro");
        $buscaRPS->pesquisaRPS();

        while ($valorBusca[] = $buscaRPS->fetch_object()) {
            $smarty->assign("valorBusca", $valorBusca);
        }
        $smarty->assign("buscaRPS", $nomeBuscaPipeiro);
    } else if (isset($_GET["buscaMilitar"])) {
        $nomeMilitar = addslashes($_GET["buscaMilitar"]);

        $buscaRPS->setFieldId("nome_militar");
        $buscaRPS->setValueId("$nomeMilitar");
        $buscaRPS->pesquisaRPS();

        while ($valorBusca[] = $buscaRPS->fetch_object()) {
            $smarty->assign("valorBusca", $valorBusca);
        }
        $smarty->assign("buscaMilitar", $nomeMilitar);

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

    /*
     * Caso o usuário clique para ver as RPS geradas por um usuário dentro do mês corrente.
     */
    } else if (isset($_GET["buscaRPSMes"])) {

        $mesBusca = date("m"); // setando a data do dia para buscar quais usuários geraram rps
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

        $nomeBuscaPipeiro = addslashes($_GET["buscaRPSMes"]);

        //buscando as rps geradas no dia da pesquisa por usuário
        $buscaRPS->setTable("rps,pipeiro");
        $buscaRPS->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro AND nome_militar = '$nomeBuscaPipeiro' AND mes_rps = '$mesAnt[$mesBusca]' AND status_remove='0'");
        $buscaRPS->select();

        while ($valorBusca[] = $buscaRPS->fetch_object()) {
            $smarty->assign("valorBusca", $valorBusca);
        }
        $smarty->assign("buscaRPS", $nomeBuscaPipeiro);
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
    $smarty->assign("conteudo", "paginas/pesquisarRPS.tpl");
    $smarty->display("HTML.tpl");
}
