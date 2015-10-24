<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';


if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente" || $funcao == "Credenciamento" || $funcao == "Administrador do Sistema" || $funcao == "Chefe da prestação de contas") {
    
        
        if (isset($_SESSION["erroPipeiro"])){
            if ($_SESSION["erroPipeiro"] == "Cadastrado"){
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro caradastrado com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "erro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o pipeiro</div>");
            } else if ($_SESSION["erroPipeiro"] == "duplicado"){
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro! Pipeiro já cadastrado</div>");
            } else if ($_SESSION["erroPipeiro"] == "vazio"){
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro! Campos vazios, preencha todos os campos</div>");
            } else {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Algo deu errado, tente novamente</div>");
            }
        } else {
            $smarty->assign("erroPipeiro", "");
        }
        unset($_SESSION["erroPipeiro"]);
        unset($_SESSION["modal"]);
        
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
        
        while($dbCidade[] = $buscaCidade->fetch_object()){
            $smarty->assign("cidade", $dbCidade);
        }
        // fim da busca por cidades
        
        $smarty->assign("conteudo", "paginas/cadastrarPipeiro.tpl");
        $smarty->display("HTML.tpl");
        
    } else {
        header("location: ./accessDenied.php");
    }
}

        