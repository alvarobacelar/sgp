
<?php

require_once 'mpdf/mpdf.php';


class PdfLib extends mPDF {


    public function PdfLib($mode = '', $format = 'A4', $default_font_size = 12, $default_font = "Times New Roman", $mgl = 15, $mgr = 15, $mgt = 17, $mgb = 10, $mgh = 9, $mgf = 9, $orientation = 'L') {
        parent::mPDF($mode, $format, $default_font_size, $default_font, $mgl, $mgr, $mgt, $mgb, $mgh, $mgf, $orientation);

        $this->defaultheaderfontsize = 10;  /* in pts */
        $this->defaultheaderfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultheaderline = 0;   /* 1 to include line below header/above footer */


        $this->setAutoTopMargin = true;

        $this->defaultfooterfontsize = 8;  /* in pts */
        $this->defaultfooterfontstyle = '';  /* blank, B, I, or BI */
        $this->defaultfooterline = 0;   /* 1 to include line below header/above footer */


        $h = '<br><br>';

        $this->SetHtmlHeader($h);
    }

}

?>
