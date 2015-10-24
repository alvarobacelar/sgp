<?php
require_once './smarty/config/config.php';
require_once './includes/models/ManipulateData.php';
require_once './includes/classes/logIN.php';

/**************************************************
 * CONTROLE DE LOGIN, RECEBE OS DADOS DO FORMULARIO
 * E ENVIA PARA A CLASSE FAZER A AUTENTICAÇÃo
 **************************************************/

$logar = new LoginIn();

$login = trim(addslashes($_POST['inputLogin']));
$senha = trim(addslashes($_POST['inputSenha']));

session_start();
$logar->autentica($login, $senha);
?>