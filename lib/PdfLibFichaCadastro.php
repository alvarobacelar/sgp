<?php
require_once 'mpdf/mpdf.php';

class PdfLibFichaCad extends mPDF {


    public function PdfLibFichaCad($mode = '', $format = 'A4', $default_font_size = 11, $default_font = 'Times New Roman', $mgl = 4, $mgr = 4, $mgt = 1, $mgb = 2, $mgh = 4, $mgf = 4, $orientation = 'L') {
        parent::mPDF($mode, $format, $default_font_size, $default_font, $mgl, $mgr, $mgt, $mgb, $mgh, $mgf, $orientation);

        $this->defaultheaderfontsize = 10;  /* in pts */
        $this->defaultheaderfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultheaderline = 0;   /* 1 to include line below header/above footer */


        $this->setAutoTopMargin = true;

        $this->defaultfooterfontsize = 8;  /* in pts */
        $this->defaultfooterfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultfooterline = 0;   /* 1 to include line below header/above footer */


        //$h = '';

        //$this->SetHtmlHeader($h);
    }

}

?>

