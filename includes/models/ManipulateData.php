<?php

require_once 'MysqlConn_MYSLQ.php';
/*
 * CLASSE EM PHP QUE FAZ A MANIPULAÇÃO DE DADOS NO BANCO DE DADOS MYSQL
 * VERSAO 0.1
 * DATA 24/03/2013
 * ESTA CLASSE SÓ PODER�? SER USANDO EM MODO DE HERANÇA
 */

/**
 * @author AlvaroBacelar
 */
class ManipulateData extends MysqlConn {

    private $sql, $table, $camposBanco, $dados, $status, $campoTable, $valueId, $fieldId, $orderTable = "", $campoBancoSelect = "*";

    //ENVIA O NOME DA TABELA A SER USADA NA CLASSE
    public function setTable($t) {
        $this->table = $t;
    }

    //ENVIA O NOME DA TABELA A SER USADA NA CLASSE
    public function setCampoBancoSelect($cb) {
        $this->campoBancoSelect = $cb;
    }

    //ENVIA OS CAMPOS A SEREM USADOS NA CLASSE
    public function setCamposBanco($f) {
        $this->camposBanco = $f;
    }

    //ENVIA OS DADOS A SEREM USADOS NA CLASSE
    public function setDados($d) {
        $this->dados = $d;
    }

    //ENVIA O CAMPO DE PESQUISA, NORMALMENTE O CAMPO CODIGO
    public function setCampoTable($fi) {
        $this->campoTable = $fi;
    }

    public function setFieldId($i) {
        $this->fieldId = $i;
    }

    //ENVIA OS DADOS A SEREM CADASTRADOS OU PESQUISADOS
    public function setValueId($vi) {
        $this->valueId = $vi;
    }

    public function setOrderTable($o) {
        $this->orderTable = $o;
    }

    //RECEBE O STATUS ATUAL,ERROS OU ACERTOS
    public function getStatus() {
        return $this->status;
    }

    //METODO QUE EFETUA CADASTROS DE DADOS NO BANCO
    public function insert() {
        $this->sql = "INSERT INTO $this->table($this->camposBanco)VALUES($this->dados)";
        if (self::execSql($this->sql)) {
            $this->status = "Cadastrado";
        }
    }

    //METODO QUE EFETUA A EXCLUSAO DE DADOS NO BANCO
    public function delete() {
        $this->sql = "DELETE FROM $this->table WHERE $this->campoTable = '$this->valueId'";
        self::execSQL($this->sql);
        $this->status = "Apagado com Sucesso!!!";
    }

    //METODO QUE FAZ A ALTERACAO DE DADOS NO BANCO
    public function update() {
        $this->sql = "UPDATE $this->table SET $this->camposBanco WHERE $this->fieldId = '$this->valueId'";
        self::execSql($this->sql);
    }

    // METODO QUE SELECIONA TODA A TABELA
    public function select() {
        $this->sql = "SELECT $this->campoBancoSelect FROM $this->table $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function selectAtivo() {
        $this->sql = "SELECT * FROM $this->table WHERE status = '1' $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function selectCarroCadastrado() {
        $this->sql = "SELECT veiculo.id_veiculo FROM pipeiro INNER JOIN veiculo 
                        ON pipeiro.id_veiculo = veiculo.id_veiculo 
                        AND veiculo.id_veiculo = '$this->valueId'";
        $this->execSQL($this->sql);
    }

    /**
     * Metodo para selecionar por ordem do parâmetro que definir 
     * @access public
     * @param ordemTable
     * @return string
     * @ParamType ordemTable 
     * @ReturnType string
     */
    public function selectOrder() {
        $this->sql = "SELECT * FROM $this->table ORDER BY $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function selectPipeirosDesativados() {
        $this->sql = "SELECT * FROM $this->table WHERE id_cidade_atuante = '10' ORDER BY $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function selectLogAcesso() {
        $this->sql = "SELECT * FROM $this->table WHERE acesso_usuario.usuario_id_usuario = usuario.id_usuario ORDER BY $this->orderTable";
        $this->execSQL($this->sql);
    }

    /**
     * Metodo para selecionar todos os Pipeiros
     * @access public
     * @param ordemTable
     * @return string
     * @ParamType ordemTable 
     * @ReturnType string
     */
    public function selectPipeiro() {
        $this->sql = "SELECT * FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                AND pipeiro.id_pipeiro = '$this->valueId'";
        $this->execSQL($this->sql);
    }

    public function selectPipeiroContrato() {
        $this->sql = "SELECT * FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                AND $this->fieldId = '$this->valueId'";
        $this->execSQL($this->sql);
    }

    public function selectPipeiroTodos() {
        $this->sql = "SELECT * FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                ORDER BY $this->orderTable";

        $this->execSQL($this->sql);
    }

    public function selectPipeiroAtivo() {
        $this->sql = "SELECT * FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                AND pipeiro.id_cidade_atuante != '10'
                                                ORDER BY $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function selectPipeiroDesativado() {
        $this->sql = "SELECT * FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                AND pipeiro.id_cidade_atuante = '10'
                                                ORDER BY $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function selectRPSTodas($dataInicio, $dataFim) {
        $this->sql = "SELECT * FROM $this->table WHERE $this->orderTable rps.data_pesquisa BETWEEN ('$dataInicio') AND ('$dataFim') ORDER BY cidade_atuante.nome_cidade_atuante";
        $this->execSQL($this->sql);
    }

    public function selectSomaRPS($dataInicio, $dataFim) {
        $this->sql = "SELECT rps.valor_liquido_rps FROM $this->table WHERE $this->orderTable rps.data_pesquisa BETWEEN ('$dataInicio') AND ('$dataFim')";
        $this->execSQL($this->sql);
    }

    public function CountPipeiroAtivo() {
        $this->sql = "SELECT count(*) as total FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                AND pipeiro.id_cidade_atuante != 10
                                                ORDER BY nome_pipeiro";
        $this->execSQL($this->sql);
        $total = $this->fetch_object();
        $cont = $total->total;
        return $cont;
    }

    public function CountRpsExcluida() {
        $this->sql = "SELECT count(*) as total FROM $this->table WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro
                             AND status_remove='1'";
        $this->execSQL($this->sql);
        $total = $this->fetch_object();
        $cont = $total->total;
        return $cont;
    }

    public function CountPipeiroDesativado() {
        $this->sql = "SELECT count(*) as total FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                AND pipeiro.id_cidade_atuante = 10
                                                ORDER BY nome_pipeiro";
        $this->execSQL($this->sql);
        $total = $this->fetch_object();
        $cont = $total->total;
        return $cont;
    }

    public function CountPipeiroTodos() {
        $this->sql = "SELECT count(*) as total FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                                ORDER BY nome_pipeiro";
        $this->execSQL($this->sql);
        $total = $this->fetch_object();
        $cont = $total->total;
        return $cont;
    }

    public function selectRPS() {
        $this->sql = "SELECT * FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante 
                                                AND pipeiro.cpf_pipeiro = '$this->valueId'";
        $this->execSQL($this->sql);
    }

    /**
     * Metodo para contar o total de registro de uma query
     * @access public 
     * @param type String Tabela do banco de dados
     * @return INT Numeros de registros
     */
    public function countTotal() {
        $this->sql = "SELECT count(*) as total FROM $this->table $this->orderTable";
        $this->execSQL($this->sql);
        $total = $this->fetch_object();
        $cont = $total->total;
        return $cont;
    }

    /**
     * Metodo para selecionar cidade e ver quais pipeiros estão trabalhando nesta
     * @access public
     * @param setDados
     * @return string
     * @ParamType setDados
     * @ReturnType string
     */
    public function selectCidadeAtuacao() {
        $this->sql = "SELECT * FROM pipeiro, cidade_atuante, veiculo 
                                WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante
                                AND pipeiro.id_veiculo = veiculo.id_veiculo
                                AND $this->camposBanco = '$this->dados'
                                ORDER BY pipeiro.nome_pipeiro";
        $this->execSQL($this->sql);
    }

    public function selectAlterar() {
        $this->sql = "SELECT * FROM $this->table WHERE $this->fieldId = '$this->valueId' $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function selectNome() {
        $this->sql = "SELECT * FROM $this->table WHERE $this->fieldId like '%$this->valueId%'";
        $this->execSQL($this->sql);
    }

    public function pesquisarPipeiro($a) {
        $this->sql = "SELECT * FROM $this->table WHERE pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante "
                . "AND pipeiro.id_cidade_atuante $a "
                . "AND nome_pipeiro like '%$this->valueId%'";
        $this->execSQL($this->sql);
    }

    /**
     * Metodo para pesquisar rps feita por nome
     * @access public
     * @param String $name nome do pipeiro
     * @return String Retorna a pesquisa feita em um determinado nome
     */
    public function pesquisaRPS() {
        $this->sql = "SELECT * FROM rps,pipeiro WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro
                            AND $this->fieldId like '%$this->valueId%' $this->orderTable AND status_remove='0' ORDER BY id_rps DESC";
        $this->execSQL($this->sql);
    }

    public function pesquisaRPSexcluido() {
        $this->sql = "SELECT * FROM rps,pipeiro WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro
                             AND status_remove='1' $this->orderTable";
        $this->execSQL($this->sql);
    }

    public function pesquisaRPS2via() {
        $this->sql = "SELECT * FROM rps,pipeiro,cidade_atuante WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro
                            AND pipeiro.id_cidade_atuante = cidade_atuante.id_cidade_atuante
                            AND $this->fieldId = '$this->valueId' AND status_remove='0'";
        $this->execSQL($this->sql);
    }

    public function login($user, $senha) {
        $this->sql = "SELECT * FROM $this->table WHERE login_usuario = '$user' AND senha_usuario = '$senha'";
        $this->execSQL($this->sql);
    }

    //METODO QUE BUSCA O ULTIMO CODIGO CADASTRADO NA TABELA
    public function getLastId() {
        $this->sql = "SELECT $this->campoTable FROM $this->table ORDER BY $this->campoTable DESC LIMIT 1";
        $this->qr = self::execSql($this->sql);
        $this->data = self::listQr($this->qr);
        return $this->data["$this->fieldId"];
    }

    //METODO QUE VERIFICA SE EXISTEM VALORES DUPLICADOS, RETORNA 1 EXISTE - RETORNA 0 NAO EXISTE
    public function getDadosDuplicados($valorPesquisado) {
        $this->sql = "SELECT $this->campoTable FROM $this->table WHERE $this->campoTable = '$valorPesquisado'";
        $this->execSql($this->sql);
        return self::countData($this->qr);
    }

    //METODO QUE BUSCA O TOTAL DE DADOS CADASTRADO EM UMA QUERY
    public function getTotalData() {
        $this->sql = "SELECT $this->campoTable FROM $this->table ORDER BY $this->campoTable";
        $this->qr = self::execSql($this->sql);
        return self::countData($this->qr);
    }

    function formataData($data) {
        list($ano, $mes, $dia) = explode("-", $data);
        return $dia . "/" . $mes . "/" . $ano;
    }

    function formata_data_db($data) {
        if (($data[4] != '-') || ($data[7] != '-')) {
            list($dia, $mes, $ano) = explode("/", $data);
            return $ano . "-" . $mes . "-" . $dia;
        } else {
            return $data;
        }
    }

    function fetch_object() {
        return @mysql_fetch_object($this->qr);
    }

    /**
     * metodo para mostrar os valores retornados em uma query
     * @access public
     * @param aSql
     * @return INT Quantidade de linhas
     * @ParamType aSql 
     * @ReturnType int
     */
    function registros_retornados() {
        $quantLinhas = @mysql_num_rows($this->qr);
        return $quantLinhas;
    }

    function registrosAfetados() {
        $quantLinhas = @mysql_affected_rows($this->qr);
        return $quantLinhas;
    }

    // TIRA TODOS OS CARACTERES QUE NÃO SEJA NUMEROS
    function somenteNumeros($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    function fetch_array() {
        return @mysql_fetch_array($this->qr);
    }

    /**
     * Mostra data no formato 05 de outubro de 2014
     * @return date
     */
    function mostrarData() {
        $data = date('D');
        $mes = date('M');
        $dia = date('d');
        $ano = date('Y');

        $semana = array(
            'Sun' => 'Domingo',
            'Mon' => 'Segunda-Feira',
            'Tue' => 'Terca-Feira',
            'Wed' => 'Quarta-Feira',
            'Thu' => 'Quinta-Feira',
            'Fri' => 'Sexta-Feira',
            'Sat' => 'Sábado'
        );

        $mes_extenso = array(
            'Jan' => 'Janeiro',
            'Feb' => 'Fevereiro',
            'Mar' => 'Março',
            'Apr' => 'Abril',
            'May' => 'Maio',
            'Jun' => 'Junho',
            'Jul' => 'Julho',
            'Aug' => 'Agosto',
            'Nov' => 'Novembro',
            'Sep' => 'Setembro',
            'Oct' => 'Outubro',
            'Dec' => 'Dezembro'
        );

        return "{$dia}" . " de " . $mes_extenso["$mes"] . " de {$ano}";
    }

    function mostrarMes() {
        $mes = date('M');
        $ano = date('Y');

        $mes_extenso = array(
            'Jan' => 'Janeiro',
            'Feb' => 'Fevereiro',
            'Mar' => 'Março',
            'Apr' => 'Abril',
            'May' => 'Maio',
            'Jun' => 'Junho',
            'Jul' => 'Julho',
            'Aug' => 'Agosto',
            'Nov' => 'Novembro',
            'Sep' => 'Setembro',
            'Oct' => 'Outubro',
            'Dec' => 'Dezembro'
        );

        return $mes_extenso["$mes"];
    }

    function mostrarMesAnt() {
        $mes = date('m');
        $ano = date('Y');

        $mes_extenso = array(
            '01' => 'DEZEMBRO',
            '02' => 'JANEIRO',
            '03' => 'FEVEREIRO',
            '04' => 'MARÇO',
            '05' => 'ABRIL',
            '06' => 'MAIO',
            '07' => 'JUNHO',
            '08' => 'JULHO',
            '09' => 'AGOSTO',
            '10' => 'SETEMBRO',
            '11' => 'OUTUBRO',
            '12' => 'NOVEMBRO'
        );

        return $mes_extenso["$mes"];
    }

}
?>

