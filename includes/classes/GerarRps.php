<?php


/**
 * Classe de geração de RPS
 * @access public
 * @author Alvaro
 * @package SGP___Sistema_Gerenciamento_de_Pipeiros
 */
class GerarRps {

    /**
     * @AttributeType float
     */
    private $valorLiquido;

    /**
     * @AttributeType float
     */
    private $valorBruto;

    /**
     * @AttributeType string
     */
    private $valorExtenco;

    /**
     * @AttributeType string
     */
    private $dataGeracao;

    /**
     * @AttributeType float
     * pega o valor do INSS-SEST/SENAT e multiplica por 0.11 (11%)
     */
    private $retencaoInss;

    /**
     * @AttributeType float
     * multiplica o imposto INSS-SEST/SENAT em 0.025
     */
    private $sestSenatImposto;

    /**
     * @AttributeType float
     */
    private $somaImpostos;

    /**
     * @AttributeType float
     * Imposto inss-senat 20%
     */
    private $inssSenat;

    /**
     * @AttributeType float
     * Imposto de Renda 10%
     */
    private $irpf;

    /**
     * @AttributeType float
     * Deduz o imposto de renda, subtrai o IRPF com a retencaoo do INSS 11%
     */
    private $deducaoIrpf;
    
    
    private $valorExtenso;

    /**
     * Metodo para setar o valor bruto
     * @access public
     * @param aValor
     * @return void
     * @ParamType aValor 
     * @ReturnType void
     */
    public function setValorBruto($aValor) {
        $this->valorBruto = $aValor;
    }
    
    /**
     * Funcao para mostrar o valor liquido por extenso
     * @return string Valor liquido
     */
    public function getValorExtenso(){
        $this->valorExtenso = $this->extenso($this->valorLiquido);
        //$this->valorExtenso = ereg_replace(" E ", " e ", ucwords($this->valorExtenso));
        return strtoupper("(".$this->valorExtenso.")");
    }

    /**
     * Metodo para retornar o calculo do imposto do INSS
     * @return float Retorna Valor INSS
     */
    public function getRetencaoInss() {
        return number_format(floor($this->retencaoInss*100)/100, 2, ",", "");
    }

    public function getSestSenatImposto() {
        return number_format(floor($this->sestSenatImposto*100)/100, 2, ",", "");
    }

    public function getSomaImpostos() {
        return number_format($this->somaImpostos, 2, ",", "");
    }

    public function getDeducaoIrpf() {
        return $this->deducaoIrpf;
    }
    
    public function getInssSenat(){
        return number_format($this->inssSenat, 2, ",", ".");
    }

    /**
     * @access public
     * @return float
     * @ReturnType float
     */
    public function getValorLiquido() {
        return number_format($this->valorLiquido, 2, ",",".");
    }

    /**
     * Metodo que calcula o imposto da RPS
     * @access public
     * @return none
     */
    public function calcularImposto() {

        $this->inssSenat = $this->valorBruto * 0.2;
        $this->irpf = $this->valorBruto * 0.1;
        // os dois que irão aparecer na planilha
        $this->retencaoInss = $this->inssSenat * 0.11;
        $this->sestSenatImposto = $this->inssSenat * 0.025;
        
        // soma dos impostos
        $this->somaImpostos = number_format(floor($this->retencaoInss*100)/100,2) + number_format(floor($this->sestSenatImposto*100)/100, 2);
        
        $this->valorLiquido = $this->valorBruto - $this->somaImpostos;
        // fim 
        $this->deducaoIrpf = $this->irpf - $this->retencaoInss;
    } // 231,011 + 

    /**
     * Metodo que grava os dados da RPS
     * @access public
     * @return void
     * @ReturnType void
     */
    public function gravarRps($idPipeiro, $nomeCidade, $idVeiculo, $valor, $mes, $ano) {
        
        $data = date("d/m/Y");
        $hora = date("H:i:s");
        $dataPesquisa = date("Y-m-d");
       
        $extenso = $this->getValorExtenso();
        $valLiquido = $this->getValorLiquido();
        $inss = $this->getRetencaoInss();
        $sestSenat = $this->getSestSenatImposto();
        $somaImpostos = $this->getSomaImpostos();
        $calculoBase = $this->getInssSenat();
        $ip = $_SERVER["REMOTE_ADDR"];
        $nomeMilitar = $_SESSION["posto"] . " " . $_SESSION["nomeGuerra"];
        
        $gravar = new ManipulateData();
        $gravar->setTable("rps");
        $gravar->setCamposBanco("pipeiro_id_pipeiro, valor_bruto_rps, valor_liquido_rps, valor_ext_rps, data_emissao_rps, calculo_base_rps, inss_rps, sest_senat_rps, soma_impostos_rps, mes_rps, ano_rps, nome_militar, ip, hora, data_pesquisa,status_remove, cidade_atuacao_rps");
        $gravar->setDados("'$idPipeiro', '$valor', '$valLiquido', '$extenso', '$data', '$calculoBase', '$inss', '$sestSenat', '$somaImpostos', '$mes', '$ano','$nomeMilitar', '$ip', '$hora', '$dataPesquisa','0','$nomeCidade'");
        $gravar->insert();
        
        return "Sucesso";
    }

    function extenso($valor = 0, $maiusculas = false) {
        $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
        $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões",
            "quatrilhões");

        $c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
            "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
        $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
            "sessenta", "setenta", "oitenta", "noventa");
        $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
            "dezesseis", "dezesete", "dezoito", "dezenove");
        $u = array("", "um", "dois", "três", "quatro", "cinco", "seis",
            "sete", "oito", "nove");

        $z = 0;
        $rt = "";

        $valor = number_format($valor, 2, ".", ".");
        $inteiro = explode(".", $valor);
        for ($i = 0; $i < count($inteiro); $i++)
            for ($ii = strlen($inteiro[$i]); $ii < 3; $ii++)
                $inteiro[$i] = "0" . $inteiro[$i];

        $fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);
        for ($i = 0; $i < count($inteiro); $i++) {
            $valor = $inteiro[$i];
            $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
            $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
            $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

            $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd &&
                    $ru) ? " e " : "") . $ru;
            $t = count($inteiro) - 1 - $i;
            $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
            if ($valor == "000")
                $z++;
            elseif ($z > 0)
                $z--;
            if (($t == 1) && ($z > 0) && ($inteiro[0] > 0))
                $r .= (($z > 1) ? " de " : "") . $plural[$t];
            if ($r)
                $rt = $rt . ((($i > 0) && ($i <= $fim) &&
                        ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
        }

        if (!$maiusculas) {
            return($rt ? $rt : "zero");
        } else {

            if ($rt)
                $rt = ereg_replace(" E ", " e ", ucwords($rt));
            return (($rt) ? ($rt) : "Zero");
        }
    }

    // round_up:
    // rounds up a float to a specified number of decimal places
    // (basically acts like ceil() but allows for decimal places)
    function round_up($value, $places = 0) {
        if ($places < 0) {
            $places = 0;
        }
        $mult = pow(10, $places);
        return ceil($value * $mult) / $mult;
    }

    // round_out:
    // rounds a float away from zero to a specified number of decimal places
    function round_out($value, $places = 0) {
        if ($places < 0) {
            $places = 0;
        }
        $mult = pow(10, $places);
        return ($value >= 0 ? ceil($value * $mult) : floor($value * $mult)) / $mult;
    }

}
