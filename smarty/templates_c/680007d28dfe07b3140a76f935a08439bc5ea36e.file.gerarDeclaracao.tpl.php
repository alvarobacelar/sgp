<?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 02:29:40
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/gerarDeclaracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243505275547ca60bcd2bd4-34829194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680007d28dfe07b3140a76f935a08439bc5ea36e' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/gerarDeclaracao.tpl',
      1 => 1417573777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243505275547ca60bcd2bd4-34829194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547ca60bd16955_59539657',
  'variables' => 
  array (
    'declaracao' => 0,
    'nomeMilitar' => 0,
    'cpfMilitar' => 0,
    'om' => 0,
    'ticket' => 0,
    'mes' => 0,
    'obs' => 0,
    'data' => 0,
    'postoGrad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ca60bd16955_59539657')) {function content_547ca60bd16955_59539657($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/sisGerPipa/smarty/lib/plugins/modifier.date_format.php';
?>
<?php if (!empty($_smarty_tpl->tpl_vars['declaracao']->value)){?>
    <h2 style="text-align: center;">DECLARAÇÃO DE RECEBIMENTO DE TICKET</h2>
    <br /><br /><br /><br /><br />

    <div style="text-align: justify;">

        Eu, <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['nomeMilitar']->value, 'UTF-8');?>
, CPF: <?php echo $_smarty_tpl->tpl_vars['cpfMilitar']->value;?>
, militar do <?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->nome_om;?>
<?php }else{ ?><span style="color: red;"> <strong>OM NÃO CADASTRADA</strong></span> <?php }?>, recebi do Sr (ª). 
        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['declaracao']->value->nome_pipeiro, 'UTF-8');?>
, CPF: <?php echo $_smarty_tpl->tpl_vars['declaracao']->value->cpf_pipeiro;?>
, contratado, na presente data, a seguinte quantidade de tickets: 
        <?php echo $_smarty_tpl->tpl_vars['ticket']->value;?>
, referente à produção de distribuição de água do mês de <?php echo mb_strtolower($_smarty_tpl->tpl_vars['mes']->value, 'UTF-8');?>
 de <?php echo smarty_modifier_date_format(time(),"%Y");?>
, no município de 
        <?php echo $_smarty_tpl->tpl_vars['declaracao']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['declaracao']->value->uf_cidade;?>
.<?php if (!empty($_smarty_tpl->tpl_vars['obs']->value)){?> Declaro ainda que foi(am) verificado(s) a(s) seguinte(s) situação(ões) particular(es): <br /><?php echo $_smarty_tpl->tpl_vars['obs']->value;?>
 <?php }else{ ?>Declaro ainda que não foi verificada nenhuma situação em particular. <?php }?>

    </div><br /><br />

    <div >
        Por fim dou fé do acima citado e assino abaixo:
    </div>
    <br />
    <div style="text-align: center;">

        Teresina-PI, <?php echo $_smarty_tpl->tpl_vars['data']->value;?>


    </div><br /><br /><br /><br />

    <div style="text-align: center;">
        ______________________________________________________<br />
        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['nomeMilitar']->value, 'UTF-8');?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['postoGrad']->value, 'UTF-8');?>

    </div>
    <br /><br /><br /><br /><br />
    <div style="text-align: center;">
        ______________________________________________________<br />
        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['declaracao']->value->nome_pipeiro, 'UTF-8');?>

    </div>
<?php }else{ ?>
    CPF informado não cadastrado!
<?php }?><?php }} ?>