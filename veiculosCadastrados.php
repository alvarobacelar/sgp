<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './includes/classes/Pagination.php';

if ($estaLogado == "SIM" && !isset($active)) {
    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {


        if (isset($_SESSION["erroVeiculo"])) {
            if ($_SESSION["erroVeiculo"] == "excluir") {
                $smarty->assign("erroVeiculo", "<div class='alert alert-success' role='alert'>Veículo excluido com sucesso!</div>");
            } else if ($_SESSION["erroVeiculo"] == "alterar") {
                $smarty->assign("erroVeiculo", "<div class='alert alert-success' role='alert'>Veículo alterado com sucesso</div>");
            }
        } else {
            $smarty->assign("erroVeiculo", "");
        }
        unset($_SESSION["erroVeiculo"]);

        // se existir uma busca, o sistem busca somente aquele pipeiro que o usuaário buscou
        if (isset($_GET["busca"])) {

            $buscaPipeiro = addslashes($_GET["busca"]);

            $busca = new ManipulateData();
            $busca->setTable("veiculo");
            $busca->setFieldId("placa_veiculo");
            $busca->setValueId("$buscaPipeiro");
            $busca->setOrderTable("placa_veiculo");
            $busca->selectNome();

            $smarty->assign("busca", $buscaPipeiro);

            while ($dbPipeiro[] = $busca->fetch_object()) {
                $smarty->assign("veiculo", $dbPipeiro);
            }
            $smarty->assign("paginacao", "");
        } else {
            // ########### PAGINAÇÃO #############//
            $paginacao = new ManipulateData();
            $paginacao->setTable("veiculo");
            if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
                $pg = $_GET["pg"];
            } else {
                $pg = 1;
            }
            $quantCarro = 20; // Quantidade de chamado por pagina
            $inicio = ($pg * $quantCarro) - $quantCarro; // Definindo o inicio da paginação
            $pagina = new Pagination($pg, $quantCarro, $paginacao->countTotal());
            // ######### FIM DA PAGINAÇÃO ###########// 

            $buscaVeiculo = new ManipulateData();
            $buscaVeiculo->setTable("veiculo");
            $buscaVeiculo->setOrderTable("placa_veiculo LIMIT $inicio, $quantCarro");
            $buscaVeiculo->selectOrder();

            while ($dbVeiculo[] = $buscaVeiculo->fetch_object()) {
                $smarty->assign("veiculo", $dbVeiculo);
            }
            $smarty->assign("paginacao", $pagina->paginacao());
        }
        $smarty->assign("conteudo", "paginas/veiculosCadastrados.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}
