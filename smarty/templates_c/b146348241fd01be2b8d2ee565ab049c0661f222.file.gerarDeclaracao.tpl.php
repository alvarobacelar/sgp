<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 17:45:50
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/gerarDeclaracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5592492805612a8f74993c1-96103629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b146348241fd01be2b8d2ee565ab049c0661f222' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/gerarDeclaracao.tpl',
      1 => 1444063545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5592492805612a8f74993c1-96103629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612a8f7805823_99200493',
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
<?php if ($_valid && !is_callable('content_5612a8f7805823_99200493')) {function content_5612a8f7805823_99200493($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/www/html/sisGerPipa/smarty/lib/plugins/modifier.date_format.php';
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
, CPF: <strong><?php echo $_smarty_tpl->tpl_vars['declaracao']->value->cpf_pipeiro;?>
</strong>, contratado, na presente data, a seguinte quantidade de tickets: 
        <strong><?php echo $_smarty_tpl->tpl_vars['ticket']->value;?>
</strong>, referente à produção de distribuição de água do mês de <strong><?php echo mb_strtolower($_smarty_tpl->tpl_vars['mes']->value, 'UTF-8');?>
</strong> de <?php echo smarty_modifier_date_format(time(),"%Y");?>
, no município de 
        <strong><?php echo $_smarty_tpl->tpl_vars['declaracao']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['declaracao']->value->uf_cidade;?>
</strong>.<?php if (!empty($_smarty_tpl->tpl_vars['obs']->value)){?> Declaro ainda que foi(am) verificado(s) a(s) seguinte(s) situação(ões) particular(es): <br /><?php echo $_smarty_tpl->tpl_vars['obs']->value;?>
 <?php }else{ ?>Declaro ainda que não foi verificada nenhuma situação em particular. <?php }?>
        <br />
        <br />

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