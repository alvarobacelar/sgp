<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") { // verifica qual o nivel de usuário
        if (isset($_GET["id"])) {

            $idPipeiro = addslashes($_GET["id"]);

            $editaPipeiro = new ManipulateData();
            $editaPipeiro->setTable("pipeiro,cidade_atuante,veiculo");
            $editaPipeiro->setValueId($idPipeiro);
            $editaPipeiro->selectPipeiro();

            // verifica se o id solicitado existe. se não existir redireciona para a pagina de erro
            if ($editaPipeiro->registros_retornados() >= 1) {

                $pipeiro = $editaPipeiro->fetch_object();
                $smarty->assign("pipeiro", $pipeiro);

                // busca por cidades
                $buscaCidade = new ManipulateData();
                $buscaCidade->setTable("cidade_atuante");
                $buscaCidade->setOrderTable("nome_cidade_atuante");
                $buscaCidade->selectOrder();

                while ($dbCidade[] = $buscaCidade->fetch_object()) {
                    $smarty->assign("cidade", $dbCidade);
                }
                // fim da busca por cidades
                $smarty->assign("conteudo", "paginas/mudarCidade.tpl");
                $smarty->display("HTML.tpl");
            } else {
                header("location: erro.php");
            }
        }
    } else {
        header("location: ./accessDenied.php");
    }
}