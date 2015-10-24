<?php /* Smarty version Smarty-3.1.13, created on 2015-09-09 23:23:09
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/erro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21190760085557aa0c035da5-51846058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00809d65970ab9c82d849626c8db272a34b186bf' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/erro.tpl',
      1 => 1441851785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21190760085557aa0c035da5-51846058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5557aa0c12e168_47334330',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557aa0c12e168_47334330')) {function content_5557aa0c12e168_47334330($_smarty_tpl) {?><img src="imagens/erro404.png" align="left" alt="erro" />
<br /><br /><br />

<h1><strong>Oops!</strong></h1>

<h2><small style="color: red;">
        A página solicitada não está disponível, ou tentou acessar de forma indevida!
        Tente novamente. Caso o erro insista, procure o responsável pelo sistema.
    </small></h2><br />
<p> 
    <a href="javascript:history.back()" class="btn btn-success"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar a página anterior</a>
    <a href="informeErro.php" class="btn btn-danger" title="Informar alteração para o Administador ou Gerente do sistema"><span class="glyphicon glyphicon-info-sign"></span> Informar erro</a>
</p>

<br /><br /><br /><br /><?php }} ?>