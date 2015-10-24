<?php /* Smarty version Smarty-3.1.13, created on 2015-09-09 23:21:26
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/accessDenied.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179913610255f0e8259390b0-91201112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7487933203cb3177fd6d33ed0e802163e5eb425b' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/accessDenied.tpl',
      1 => 1441851683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179913610255f0e8259390b0-91201112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55f0e825941673_09004906',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f0e825941673_09004906')) {function content_55f0e825941673_09004906($_smarty_tpl) {?><img src="imagens/erro404.png" align="left" alt="erro" />
<br /><br /><br />

<h1><strong>Oops!</strong></h1>

<h2><small>
        Parece que você não tem permissão para acessar esta página! Caso precise acessar essa página, entre em contato com o administrador do sistema.
    </small></h2><br />
<p> 
    <a href="./" class="btn btn-success"><span class="glyphicon glyphicon-circle-arrow-left"></span> Ir para página principal</a>
    <a href="informeErro.php" class="btn btn-danger" title="Informar alteração para o Administador ou Gerente do sistema"><span class="glyphicon glyphicon-info-sign"></span> Informar erro</a>
</p>

<br /><br /><br /><br /><?php }} ?>