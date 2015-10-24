<?php

/*
 * EXCLUSOES
 */

/*********************************************
*** EXCLUSÃO BASICA
**********************************************/
if($_GET["identificadosFRM"] == "nomeDoFormulario"){
	$del = new ManipulateData();
	$del->setTable("nomeDaTabela");
	$del->setCampoTable("identificadorParaExclusao");
	$del->setValueId($_GET["idCampoDeletado"]);
	$del->delete();
	
	@header("Location: ");
}

?>
