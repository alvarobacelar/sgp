<?php

require_once 'smarty/config/config.php';
require_once 'includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
//require_once './smarty/config/config2.php';

if ($estaLogado == "SIM" && !isset($active)) {


    $contInforme = new ManipulateData();
    $contInforme->setTable("alteracoes");

    $smarty->assign("contInforme", $contInforme->countTotal());

    // buscando OM cadastrada
    $buscaOM = new ManipulateData();
    $buscaOM->setTable("om");
    $buscaOM->select();
    $om = $buscaOM->fetch_object();
    
    // verificando se o ano cadastrado é diferente do ano corrente. 
    $anoCorrente = date("Y");
    $anoCad = $om->ano_prestacao;
    if ($anoCorrente != $anoCad){
        $smarty->assign("anoCorrente", $anoCorrente);
        $smarty->assign("anoCad", $anoCad);
    } 

    if (!empty($om)) {
        // verificando qual o status de amostragem do despacho
        $mostraDespacho = $om->status;
        if ($mostraDespacho == 0) {
            $smarty->assign("mostraDespacho", "S");
        } else {
            $smarty->assign("mostraDespacho", "N");
        }
    }

    $buscaMensagem = new ManipulateData();
    $buscaMensagem->setTable("mensagem");
    $buscaMensagem->setOrderTable("ORDER BY id_mensagem DESC");
    $buscaMensagem->selectAtivo();

    while ($resultadoMensagem[] = $buscaMensagem->fetch_object()) {
        $smarty->assign("mensagemADM", $resultadoMensagem);
    }

    $usuario = $_SESSION["posto"] . " " . $_SESSION['nome']; // setando o usuário para buscar as rps geradas por este
    // contar todas as rps geradas por um usuário
    $contRPS = new ManipulateData();
    $contRPS->setTable("rps");
    $contRPS->setOrderTable("WHERE nome_militar = '$usuario' AND status_remove='0'");

    $smarty->assign("contRPS", $contRPS->countTotal());
    $smarty->assign("buscaMilitar", $usuario);

    // mensagem de confirmação de envio de informativo para usuário
    if (isset($_SESSION["erroMensagem"])) {
        if ($_SESSION["erroMensagem"] == "cadastrada") {
            $smarty->assign("erroMensagem", "<div class='alert alert-success' role='alert'>Mensagem enviada para os usuários</div>");
        } else {
            $smarty->assign("erroMensagem", "<div class='alert alert-danger' role='alert'></div>");
        }
    } else {
        $smarty->assign("erroMensagem", "");
    }
    unset($_SESSION["erroMensagem"]);

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

    $dataHoje = date("Y-m-d"); // setando a data do dia para buscar quais usuários geraram rps
    // fazendo a busca dos usuários que geraram rps no dia para mostrar o quantitativo na tela home
    $usersDia = new ManipulateData();
    $usersDia->setTable("rps");
    $usersDia->setCampoBancoSelect("nome_militar, COUNT(nome_militar) AS total");
    $usersDia->setOrderTable("WHERE data_pesquisa = '$dataHoje' AND status_remove='0' GROUP BY nome_militar");
    $usersDia->select();

    while ($usuariosRPSDIa = $usersDia->fetch_object()) {

        $nomeMil[] = $usuariosRPSDIa->nome_militar;
        $total[] = $usuariosRPSDIa->total;
        $smarty->assign("usrRpsDia", $usuariosRPSDIa);
        // fazendo a contagem das RPS geradas no mês corrente
        $contaTotalRPSUser = new ManipulateData();
        $contaTotalRPSUser->setTable("rps");
        $contaTotalRPSUser->setOrderTable("WHERE rps.nome_militar = '$usuariosRPSDIa->nome_militar' AND data_pesquisa = '$dataHoje' AND status_remove='0'");
        //$totalRPSUser = $contaTotalRPSUser->countTotal();
        //var_dump($nomeMil);
        $smarty->assign("nome", $nomeMil);
        $smarty->assign("total", $total);
        $smarty->assign("contNome", $contaTotalRPSUser->countTotal());
    }

    // fazendo a busca dos usuários que geraram rps no dia para mostrar o quantitativo na tela home
    $usersMes = new ManipulateData();
    $usersMes->setTable("rps");
    $usersMes->setCampoBancoSelect("rps.nome_militar, COUNT(*) AS total");
    $usersMes->setOrderTable("WHERE rps.mes_rps = '$mesAnt[$dataMes]' AND rps.ano_rps = '$anoCad' AND status_remove='0' GROUP BY nome_militar");
    $usersMes->select();

    while ($usuarioMes[] = $usersMes->fetch_object()) {
        $smarty->assign("rpsMes", $usuarioMes);
    }

    // fazendo a contagem das RPS geradas no mês corrente
    $contaTotalRPS = new ManipulateData();
    $contaTotalRPS->setTable("rps");
    $contaTotalRPS->setOrderTable("WHERE mes_rps = '$mesAnt[$dataMes]' AND ano_rps = '$anoCad' AND status_remove='0'");
    $totalRPSMes = $contaTotalRPS->countTotal();

    // fazendo contagem das rps geradas no dia corrente
    $contaHjRps = new ManipulateData();
    $contaHjRps->setTable("rps");
    $contaHjRps->setOrderTable("WHERE data_pesquisa = '$dataHoje' AND status_remove='0'");
    $totalRpsHj = $contaHjRps->countTotal();
    // fim da contagem das rps do dia corrente
    // setando uma array para mostrar o mês atual para o supoervisor
    $mes_extenso = array(
        '01' => 'Janeiro',
        '02' => 'Fevereiro',
        '03' => 'Março',
        '04' => 'Abril',
        '05' => 'Maio',
        '06' => 'Junho',
        '07' => 'Julho',
        '08' => 'Agosto',
        '09' => 'Setembro',
        '10' => 'Outubro',
        '11' => 'Novembro',
        '12' => 'Dezembro'
    );

//    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {
//        $smarty->assign("reload", "<meta HTTP-EQUIV='refresh' CONTENT='15'>");
//    }

    $smarty->assign("dataHjEx",$contaHjRps->mostrarData());
    $smarty->assign("mesExtenco", $mes_extenso[$dataMes]);
    $smarty->assign("mesAnt", $mesAnt[$dataMes]);
    $smarty->assign("totalRpsMes", $totalRPSMes);
    $smarty->assign("totalRpsHj", $totalRpsHj);
    $smarty->assign("om", $om);
    $smarty->assign("nivel", $_SESSION["nivel"]);
    $smarty->assign("conteudo", "paginas/home.tpl");
    $smarty->display("HTML.tpl");
}