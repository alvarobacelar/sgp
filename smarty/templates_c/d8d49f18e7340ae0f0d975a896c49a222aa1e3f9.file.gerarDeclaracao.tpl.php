<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 14:06:30
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/gerarDeclaracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420524156547861a75773a7-66960229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d49f18e7340ae0f0d975a896c49a222aa1e3f9' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/gerarDeclaracao.tpl',
      1 => 1431452395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420524156547861a75773a7-66960229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547861a7600a93_74363359',
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
<?php if ($_valid && !is_callable('content_547861a7600a93_74363359')) {function content_547861a7600a93_74363359($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/sisGerPipa/smarty/lib/plugins/modifier.date_format.php';
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
        <br />
        <br />
        Outrossim, informo que o Módulo Embarcado de Monitoramento do Caminhão Pipa encontra-se __________________ alteração.

    </div><br /><br />

    <div >
        Por fim dou fé do acima citado e assino abaixo:
    </div>
    <br />
    <div style="text-align: center;">

         <?php echo $_smarty_tpl->tpl_vars['data']->value;?>


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