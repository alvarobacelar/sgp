<?php

/*
 * CLASSE PARA AUTENTICACAO DE USUARIO
 * VERSAO 0.1
 * DATA DA CRIACAO 22/03/2013
 * 
 */

/**
 * @author RalnyAndrade
 */
class LoginSistema extends MysqlConn {
    
    private $usuario, $senha;
    
    public function setUsuario($mail){
        $this->usuario = $mail;
    }
    
    public function setSenha($passwd){
        $this->senha = $passwd;
    }
    
    public function executeLogin(){
        //STORED PROCEDURE - VEREIFICA E EXISTE UM 
        $sql = ("CALL SP_USU_LOGIN_SISTEMA('$this->usuario', '$this->senha')");
        
        
        
        
        
        
    }
    
    
   
}

?>
