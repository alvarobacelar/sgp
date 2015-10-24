<?php

/*
 *ALTERAÇÕES
 */

/***********************************************************
** ALTERAÇÃO BASE
************************************************************/	
if($_POST["identificadosFRM"] == "nomeDoFormulario" ){
        
        //CAPTANDO OS CAMPOS DO FORMULARIO
        $idCampo = $_POST["idCampo"];
        $campo1 = $_POST["campo1"]; 
		$campo2 = $_POST["campo2"];
		$campo3 = $_POST["campo3"];
		$campo4 = $_POST["campo4"];

        //INSTACIANDO O OBJETO DE ALTERACAO
        $alt = new ManipulateData();  //INSTACIANDO A CLASSE
        $alt->setTable("nomeTabela");  //SETANDO O NOME DA TABELA
        
        //SETANDO OS CAMPOS PARA O BANCO DE DADOS
        $alt->setCamposBanco("campo1='$campo1', campo2='$campo2', campo3='$campo3', campo4 = '$campo4'");
        $alt->setCampoTable("idCampo"); //ENVIANDO O CAMPO REFERENTE AO CODIGO PADRAO DE PESQUISA
        $alt->setValueId("$idCampo"); //ENVIANDO O VALOR DO CAMPO DE PESQUISA
        $alt->update(); //EFETUANDO A ALTERAÃ‡ÃƒO

        @header("Location: ../?view=nomeDaTela");
}

?>
