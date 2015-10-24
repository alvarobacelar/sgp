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

        $smarty->assign("conteudo", "paginas/pesquisarPipeiro.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./accessDenied.php");
    }
}

