<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';


if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $funcao == "Credenciamento") {
        
        
        // VERIFICANDO OS RETORNOS DE CADASTRO PARA MOSTRA AO USUÁRIO
        if (isset($_SESSION["erroVeiculo"])){
            if ($_SESSION["erroVeiculo"] == "duplicado"){
                $smarty->assign("erroVeiculo", "<div class='alert alert-danger' role='alert'>Erro! Veículo Já cadastrado</div>");
            } else  if ($_SESSION["erroVeiculo"] == "Cadastrado"){
                $smarty->assign("erroVeiculo", "<div class='alert alert-success' role='alert'>Veículo Cadastrado com Sucesso!</div>");
            } else if($_SESSION["erroVeiculo"] == "ERRO"){
                $smarty->assign("erroVeiculo", "<div class='alert alert-danger' role='alert'>Nenhum parâmetro passado. Tente novamente</div>");
            }
        } else {
            $smarty->assign("erroVeiculo", "");
        }
        unset($_SESSION["erroVeiculo"]);

        $smarty->assign("conteudo", "paginas/cadastrarCarro.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}
