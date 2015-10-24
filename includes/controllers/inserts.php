<?php

/*
 *CADASTROS
 */

/********************************************************
*** CADASTRO BASE
*********************************************************/
if($_POST["identificadosFRM"] == "nomeDoFormulario"){
	//CAPTANDO DADOS DO FORMULARIO
	$campo1 = $_POST["campo1"]; 
	$campo2 = $_POST["campo2"];
	$campo3 = $_POST["campo3"];
	$campo4 = $_POST["campo4"];
	
	//INSTACIANDO O OBJETO DE CADASTRO
	$cad = new ManipulaBanco(); //INSTACIANDO A CLASSE
	$cad->setTable("nomeDaTabela");//SETANDO O NOME DA TABELA
	$cad->setCampoTable("campoNaTabelaDoBanco");
	
	//VERIFICANDO SE EXISTE REGISTRO CADASTRADO
	if($cad->getDadosDuplicados("$campo1") >= 1){
		$erro = "ITEM JA CADASTRADO";
	}else{
		$cad->setCamposBanco("campo1,campo2,campo3,campo4"); //CAMPOS DO BANCO DE DADOS
		$cad->setDados("'$campo1', '$campo2', '$campo3', '$campo4'"); //DADOS DO FORMULARIOS
		$cad->insert(); //EFETUANDO CADASTRO
		$erro = $cad->getStatus();
	}
   @header("Location: ../?view=nomeDaTela&msn=$erro");
}


?>
