<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if (!empty($_GET["id"])) {

        // condições de freeadbak
        if (isset($_SESSION["erroPipeiro"])) {
            if ($_SESSION["erroPipeiro"] == "excluir") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro excluido com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "erro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o pipeiro</div>");
            } else if ($_SESSION["erroPipeiro"] == "mudarCarro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Carro alterado para o pipeiro</div>");
            } else if ($_SESSION["erroPipeiro"] == "duplicado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro! Pipeiros Já cadastrado</div>");
            } else if ($_SESSION["erroPipeiro"] == "carro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro! Carro cadastrado pra outro pipeiro</div>");
            } else if ($_SESSION["erroPipeiro"] == "editado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro editado com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "cidade") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Cidade alterada com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "mudado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiros adicionados!</div>");
            } else if ($_SESSION["erroPipeiro"] == "desativado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro desativado para esta cidade!</div>");
            } else {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro na sua solicitação</div>");
            }
        } else {
            $smarty->assign("erroPipeiro", "");
        }
        unset($_SESSION["erroPipeiro"]);
        // fim da condições de retorno

        $idCidade = addslashes($_GET["id"]);

        $verCidade = new ManipulateData();
        $verCidade->setCamposBanco("cidade_atuante.id_cidade_atuante");
        $verCidade->setDados("$idCidade");
        $verCidade->selectCidadeAtuacao();

        $cidade = new ManipulateData();
        $cidade->setTable("cidade_atuante");
        $cidade->setFieldId("id_cidade_atuante");
        $cidade->setValueId("$idCidade");
        $cidade->selectAlterar();

        // buscando no banco de dados todos os pipeiros desabilitados
        $pipeiroEsc = new ManipulateData();
        $pipeiroEsc->setTable("pipeiro");
        $pipeiroEsc->setOrderTable("nome_pipeiro");
        $pipeiroEsc->selectPipeirosDesativados();
        while ($dbEscolha[] = $pipeiroEsc->fetch_object()) {
            $smarty->assign("pipeiroEscolha", $dbEscolha);
        }

        $idPipeiro = addslashes($_GET["id"]);

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
        }

        // verifica se o id solicitado existe. se não existir redireciona para a pagina de erro
        if ($cidade->registros_retornados() >= 1) {

            $dbCidade = $cidade->fetch_object();
            $smarty->assign("cidade", $dbCidade);

            while ($dbVerCidade[] = $verCidade->fetch_object()) {

                $smarty->assign("verCidade", $dbVerCidade);
            }
        } else {
            header("location: ./erro.php");
        }

        $smarty->assign("nivel", $_SESSION["nivel"]);
        $smarty->assign("conteudo", "paginas/verCidade.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./erro.php");
    }
}
            
            
            
            
            