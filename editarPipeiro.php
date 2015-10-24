<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") { // verifica qual o nivel de usuário
        if (isset($_GET["id"])) {

            $idPipeiro = addslashes($_GET["id"]);

            if (isset($_SESSION["erroPipeiro"])) {
                if ($_SESSION["erroPipeiro"] == "excluir") {
                    $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro excluido com sucesso!</div>");
                } else if ($_SESSION["erroPipeiro"] == "erro") {
                    $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o pipeiro</div>");
                } else if ($_SESSION["erroPipeiro"] == "erro") {
                    $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o pipeiro</div>");
                } else if ($_SESSION["erroPipeiro"] == "carro") {
                    $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro! Carro cadastrado pra outro pipeiro</div>");
                } else if ($_SESSION["erroPipeiro"] == "editado") {
                    $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro editado com sucesso!</div>");
                }
            } else {
                $smarty->assign("erroPipeiro", "");
            }
            unset($_SESSION["erroPipeiro"]);
            
            if (isset($_GET["alt"])){
                $smarty->assign("alt", addslashes($_GET["alt"]));
            } else {
                $smarty->assign("alt", "");
            }

            if (isset($_GET["alt"])){
                $idAlteracao = addslashes($_GET["idAlt"]);
                $smarty->assign("idAlt", $idAlteracao);
            }

            $editaPipeiro = new ManipulateData();
            $editaPipeiro->setTable("pipeiro,cidade_atuante,veiculo");
            $editaPipeiro->setValueId($idPipeiro);
            $editaPipeiro->selectPipeiro();

            // verifica se o id solicitado existe. se não existir redireciona para a pagina de erro
            if ($editaPipeiro->registros_retornados() >= 1) {

                $pipeiro = $editaPipeiro->fetch_object();
                $smarty->assign("pipeiro", $pipeiro);

                // busca por veiculos
                $buscaVeiculo = new ManipulateData();
                $buscaVeiculo->setTable("veiculo");
                $buscaVeiculo->select();

                while ($dbVeiculo[] = $buscaVeiculo->fetch_object()) {
                    $smarty->assign("veiculo", $dbVeiculo);
                }
                // fim da busca de veiculos
                // busca por cidades
                $buscaCidade = new ManipulateData();
                $buscaCidade->setTable("cidade_atuante");
                $buscaCidade->setOrderTable("nome_cidade_atuante");
                $buscaCidade->selectOrder();


                while ($dbCidade[] = $buscaCidade->fetch_object()) {
                    $smarty->assign("cidade", $dbCidade);
                }
                // fim da busca por cidades
                $smarty->assign("conteudo", "paginas/editarPipeiro.tpl");
                $smarty->display("HTML.tpl");
            } else {
                header("location: erro.php");
            }
        } else {
            header("location: erro.php");
        }
    } else {
        header("location: ./accessDenied.php");
    }
}
