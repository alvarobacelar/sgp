<?php


// arquivos de configuração inicial do Smarty setup.php
// @author Álvaro Bacelar
// @date 14/09/2014
//$root = getcwd();
//die($root);
// hack para rodar em linux e windows
// Smarty is assumend to be in 'includes/' dir under current script
define('SMARTY_DIR', str_replace("\\", "/", getcwd()) . '/smarty/lib/');
define("TEMPLATE", "");
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = str_replace("\\", "/", getcwd()) . "/smarty/templates/" . TEMPLATE;
$smarty->compile_dir = str_replace("\\", "/", getcwd()) . "/smarty/templates_c/";
$smarty->config_dir = str_replace("\\", "/", getcwd()) . "/smarty/setup/";
$smarty->cache_dir = str_replace("\\", "/", getcwd()) . "/smarty/cache/";

//$smarty->debugging = true; // debug para possivel verificação


