<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './lib/PdfLib.php';


if ($estaLogado == "SIM") {

    if (isset($_GET["rps2via"])) {
        $rps2via = addslashes($_GET["rps2via"]);

        $buscaRps2Via = new ManipulateData();
        $buscaRps2Via->setFieldId("id_rps");
        $buscaRps2Via->setValueId("$rps2via");
        $buscaRps2Via->pesquisaRPS2via();

        $resultadoRps2Via = $buscaRps2Via->fetch_object();

        // busca os dados da OM
        $buscaOM = new ManipulateData();
        $buscaOM->setTable("om");
        $buscaOM->select();
        $om = $buscaOM->fetch_object();
        
        $mostraDespacho = $om->status;
        
        if ($mostraDespacho == 0) {
            $smarty->assign("mostraDespacho", "S");
        } else {
            $smarty->assign("mostraDespacho", "N");
        }

        $mes = $resultadoRps2Via->mes_rps;

        $mesNumero = array(
            'JANEIRO' => '01',
            'FEVEREIRO' => '02',
            'MARÇO' => '03',
            'ABRIL' => '04',
            'MAIO' => '05',
            'JUNHO' => '06',
            'JULHO' => '07',
            'AGOSTO' => '08',
            'SETEMBRO' => '09',
            'OUTUBRO' => '10',
            'NOVEMBRO' => '11',
            'DEZEMBRO' => '12'
        );

        // instanciando o MPDF para gerar a RPS
        $pdf = new PdfLib();
        $mpdf = new mPDF();

        $smarty->assign("mesNumero", $mesNumero["$mes"]);
        $smarty->assign("om", $om);
        $smarty->assign("rps", $resultadoRps2Via);
        $pdf->WriteHTML($smarty->fetch("paginas/RPS2via.tpl"));
        //$smarty->display("HTML.tpl");
        $pdf->Output();
    } else {
        header("location: ./erro.php");
    }
}
