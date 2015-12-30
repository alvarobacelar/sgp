<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';


if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $funcao == "Credenciamento") {

        // verificando se houve algum erro no cadastro da cidade para retornar um freaadbak para o usuario
        if(isset($_SESSION["erro"])){
            if ($_SESSION["erro"] == "duplicado"){
                $smarty->assign("erro", "<div class='alert alert-danger' role='alert'>Erro, Cidade já cadastrada</div>");
            } else if ($_SESSION["erro"] == "Cadastrado"){
                $smarty->assign("erro", "<div class='alert alert-success' role='alert'>Cidade Cadastrada com sucesso!</div>");
            } else if ($_SESSION["erro"] == "ERRO") {
                $smarty->assign("erro", "<div class='alert alert-danger' role='alert'>Nenhuma parâmetro foi passado, tente novamente</div>");
            }
        } else {
            $smarty->assign("erro", "");
        }
        unset($_SESSION["erro"]);
        
        $smarty->assign("conteudo", "paginas/cadastrarCidade.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}

