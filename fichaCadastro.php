<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

        if (isset($_GET["id"])) {

            if (isset($_SESSION["erroFichaCad"])) {
                if ($_SESSION["erroFichaCad"] == "extensao") {
                    $smarty->assign("erroFichaCad", "<div class='alert alert-danger' role='alert'>Erro ao fazer upload da imagem, tipo de arquivo não aceito</div>");
                } else if ($_SESSION["erroFichaCad"] == "tamanho") {
                    $smarty->assign("erroFichaCad", "<div class='alert alert-danger' role='alert'>Erro ao fazer upload da imagem, tamanho máximo para a imagem é de 2MB</div>");
                } else if ($_SESSION["erroFichaCad"] == "erro") {
                    $smarty->assign("erroFichaCad", "<div class='alert alert-danger' role='alert'>Erro ao fazer upload da imagem.</div>");
                } else if ($_SESSION["erroFichaCad"] == "erroEnviar") {
                    $smarty->assign("erroFichaCad", "<div class='alert alert-danger' role='alert'>Alguma coisa deu errado ao realizar o upload das imagens. Tente novamente! </div>");
                }
            } else {
                $smarty->assign("erroFichaCad", "");
            }
            unset($_SESSION["erroFichaCad"]);

            $idPipeiroFC = addslashes($_GET["id"]);

            // buscando o pipeiros especifico para gerar Ficha cadastro
            $buscaFC = new ManipulateData();
            $buscaFC->setTable("pipeiro, cidade_atuante, veiculo");
            $buscaFC->setValueId("$idPipeiroFC");
            $buscaFC->selectPipeiro();

            $resultado = $buscaFC->fetch_object();

            if ($resultado->id_cidade_atuante != 10) {
                $smarty->assign("p", $resultado);
            } else {
                $smarty->assign("p", "");
            }

            // busca informações da OM
            $buscaOM = new ManipulateData();
            $buscaOM->setTable("om");
            $buscaOM->select();
            $om = $buscaOM->fetch_object();

            if ($buscaOM->registros_retornados() >= 1) {
                $smarty->assign("om", $om);
            } else {
                $smarty->assign("om", "");
            }

            $smarty->assign("data", $buscaFC->mostrarData());
            $smarty->assign("conteudo", "paginas/fichaCadastro.tpl");
            $smarty->display("HTML.tpl");
        } else {
            header("location: ./erro.php");
        }
    } else {
        header("location: ./accessDenied.php");
    }
}

