<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") { // verifica qual o nivel de usuário
        if (isset($_GET["id"])) {

            $idPipeiro = addslashes($_GET["id"]);
            if (isset($_GET["idCidade"])) {
                $idCidade = addslashes($_GET["idCidade"]);
                $smarty->assign("idCidade", $idCidade);
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
                // se existir uma busca, o sistem busca somente aquele pipeiro que o usuaário buscou
                if (isset($_POST["buscaCarro"])) {
                    $buscaCarro = addslashes($_POST["buscaCarro"]);
                    
                    $buscaPesquisa = new ManipulateData();
                    $buscaPesquisa->setTable("veiculo");
                    $buscaPesquisa->setFieldId("placa_veiculo");
                    $buscaPesquisa->setValueId($buscaCarro);
                    $buscaPesquisa->selectNome();
                    
                    while ($resultadoPesquisa[] = $buscaPesquisa->fetch_object()){
                        $smarty->assign("resultado", $resultadoPesquisa);
                    }
                            
                }
                    $smarty->assign("idPipeiro", $idPipeiro);
                    $smarty->assign("conteudo", "paginas/mudarCarro.tpl");
                    $smarty->display("HTML.tpl");
                } else {
                    header("location: erro.php");
                }
            }
        } else {
            header("location: ./accessDenied.php");
        }
    }    