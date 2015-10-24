<?php

require_once 'smarty/config/config.php';
require_once 'includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {
    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {


        if (isset($_SESSION["erroInforme"])) {
            if ($_SESSION["erroInforme"] == "excluido") {
                $smarty->assign("erroInforme", "div class='alert alert-success' role='alert'>Informe excluido!</div>");
            } else {
                $smarty->assign("erroInforme", "div class='alert alert-danger' role='alert'>Erro ao excluir.</div>");
            }
        } else {
            $smarty->assign("erroInforme", "");
        }
        unset($_SESSION["erroInforme"]);

        if (isset($_SESSION["erroPipeiro"])) {
            if ($_SESSION["erroPipeiro"] == "excluir") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro excluido com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "erro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o pipeiro</div>");
            } else if ($_SESSION["erroPipeiro"] == "mudarCarro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Carro alterado para o usuário</div>");
            } else if ($_SESSION["erroPipeiro"] == "editado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Informações de pipeiro atualizada com sucesso! Mensagem apagada.</div>");
            } else {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Alguma informação não correpondeu. Tente novamente.</div>");
            }
        } else {
            $smarty->assign("erroPipeiro", "");
        }
        unset($_SESSION["erroPipeiro"]);

        $buscaInforme = new ManipulateData();
        $buscaInforme->setTable("alteracoes");
        $buscaInforme->setOrderTable("ORDER BY id_alteracao DESC");
        $buscaInforme->selectAtivo();

        while ($infor[] = $buscaInforme->fetch_object()) {
            $smarty->assign("infor", $infor);
        }

        $smarty->assign("conteudo", "paginas/informacoesAlteracoes.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}

