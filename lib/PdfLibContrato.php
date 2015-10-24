
<?php

require_once 'mpdf/mpdf.php';


class PdfLibContrato extends mPDF {


    public function PdfLib($mode = '', $format = 'A4', $default_font_size = 12, $default_font = "Times New Roman", $mgl = 10, $mgr = 10, $mgt = 10, $mgb = 12, $mgh = 9, $mgf = 10, $orientation = 'L') {
        parent::mPDF($mode, $format, $default_font_size, $default_font, $mgl, $mgr, $mgt, $mgb, $mgh, $mgf, $orientation);

        $this->defaultheaderfontsize = 10;  /* in pts */
        $this->defaultheaderfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultheaderline = 0;   /* 1 to include line below header/above footer */


        $this->setAutoTopMargin = true;

        $this->defaultfooterfontsize = 8;  /* in pts */
        $this->defaultfooterfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultfooterline = 0;   /* 1 to include line below header/above footer */


        $h = '<br>';
        $f = '||Página {PAGENO} de {nb}';

        $this->SetHtmlHeader($h);
        $this->SetFooter($f);
    }

}

?>
