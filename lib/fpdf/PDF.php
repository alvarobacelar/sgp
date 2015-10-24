<?php


/**
 * Description of PDF
 *
 * @author Alvaro-Dell
 */
class PDF extends FPDF {

    function Header() {
        // Seleciona fonte Arial bold 15
        $this->SetFont('times', 'B', 15);
        // Move para a direita
        //$this->Cell(80);
        // Titulo dentro de uma caixa
        $this->Cell(30, 10, 'Relatorio de Chamados', 0, 0, 'C');
        // Quebra de linha
        $this->Ln(20);
    }

}
