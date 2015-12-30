<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';


if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] != "vis") { // não permite que o usuário do financeiro entre na pagina 
        if (isset($_GET["id"])) {
            $idBuscar = addslashes($_GET["id"]);
            $buscaCPF = new ManipulateData();
            $buscaCPF->setTable("pipeiro");
            $buscaCPF->setFieldId("id_pipeiro");
            $buscaCPF->setValueId($idBuscar);
            $buscaCPF->selectAlterar();

            $busca = $buscaCPF->fetch_object();
            $smarty->assign("cpfBusca", $busca);
        } else {
            $smarty->assign("cpfBusca", "");
        }

        // buscando a OM para mostrar na declaracao
        $buscaOM2 = new ManipulateData();
        $buscaOM2->setTable("om");
        $buscaOM2->select();
        $om = $buscaOM2->fetch_object();

        $smarty->assign("om", $om); // variável da OM   

        $smarty->assign("conteudo", "paginas/pesquisarPipeiro.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}

