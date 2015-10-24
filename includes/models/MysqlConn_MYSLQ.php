<?php

/*
 * CLASSE PARA CONEXAO COM O BANCO DE DADOS MYSQL
 * TIPO DE CONEXAO MYSQL
 * VERSAO 0.1
 * DATA DA CRIACAO 22/03/2013
 * 
 * ESTA CLASSE SO PODERA SER USADA EM MODO DE HERANCA
 */

/**
 * @author RalnyAndrade
 */
abstract class MysqlConn {

    private $host, $usuario, $senha, $db, $conexao, $data, $totalFields;
    protected $qr;

    /**
     * metodo construtor que realiza a conex�o
     * @access public
     * @return void
     * @ReturnType void
     */
    public function __construct() {

        $this->host = "127.0.0.1";
        $this->usuario = "root";
        $this->senha = "258276";
        $this->db = "sgp";
        self::conectar();
    }

    /**
     * metodo de conectar ao banco de dados chamado pelo metodo contrutor
     * @access public
     * @return void
     * @ReturnType void
     */
    protected function conectar() {
        //ESTABELE CONEXAO COM A BASE DE DADOS
        $this->conexao = @mysql_connect($this->host, $this->usuario, $this->senha) or die
                        ("<b><cente>ERRO AO ACESSAR O BANCO DE DADOS</center></b>" . mysql_error());
        //SELECIONANDO O BANCO DE DADOS
        $this->db = @mysql_select_db($this->db) or die
                        ("<b><cente>ERRO AO ACESSAR O BANCO DE DADOS</center></b>" . mysql_error());
        //@mysql_set_charset('UTF8', $this->conexao);
    }

    /**
     * metodo para executar comandos sql
     * @access public
     * @param aSql
     * @return void
     * @ParamType aSql 
     * @ReturnType void
     */
    protected function execSQL($sql) {
        $this->qr = @mysql_query($sql) or die
                        ("<b><cente>ERRO AO EXECUTAR QUERY: $sql - </center></b>" . mysql_error());
        return $this->qr;
    }

    /**
     * metodo para listar registro do banco de dados
     * @access public
     * @param aQr
     * @return string
     * @ParamType aQr 
     * @ReturnType string
     */
    protected function listQr($qr) {
        $this->data = @mysql_fetch_assoc($qr);
        return $this->data;
    }

    /**
     * metodo para retornar o total de registro na query
     * @access public
     * @param aQuery
     * @ParamType aQuery 
     */
    protected function countData($query) {
        $this->totalFields = mysql_num_rows($query);
        return $this->totalFields;
    }

}

?>
