<?php /* Smarty version Smarty-3.1.13, created on 2015-10-14 08:25:55
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/empenho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:399290803561e36011803c9-19066136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '448ffd0bd2d76805d326334e1aa3d939f4c9bd5c' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/empenho.tpl',
      1 => 1444821953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399290803561e36011803c9-19066136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561e3601288804_10458421',
  'variables' => 
  array (
    'erroCidade' => 0,
    'nomeCidade' => 0,
    'totalPipeiro' => 0,
    'status' => 0,
    'uf' => 0,
    'idCidade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e3601288804_10458421')) {function content_561e3601288804_10458421($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar empenho por cidade</h2>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['erroCidade']->value;?>

    <div class="table-responsive table-bordered">
        <table class="table">


            <?php if (isset($_smarty_tpl->tpl_vars['nomeCidade']->value)){?>
                <th><center>Cidade</center></th>
                <th><center>Estado</center></th>
                <th><center>Qnt. Pipeiros</center></th>
                <th><center>Ação</center></th>

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nomeCidade']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
                    <tr class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]=="-"){?>
                            <td class="active"><small><i>Pipeiros desativados</i></small></td>
                            <td class="active"> - </td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</strong></td>
                            <td class="active"><a href="#" class="btn btn-default btn-xs disabled"> <span class="glyphicon glyphicon-off"></span> Pipeiros Desativados</a></td>
                        <?php }elseif($_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]=="1"){?>
                            <td class="active cidadeDesativada"><?php echo $_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                            <td class="active cidadeDesativada"><?php echo $_smarty_tpl->tpl_vars['uf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                            <td class="active cidadeDesativada"><?php echo $_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>                                             
                            <td class="active">
                                <?php if ($_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]<=0){?>
                                    <a class="btn btn-info btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-eye-open"></span> Desativada</a>
                                <?php }?>
                                
                            </td>
                        <?php }else{ ?>
                            <td class="active"><a href="lancarEmpenho.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" id="ver" data-toggle="tooltip" data-placement="left" title="Cadastrar empenho para pipeiros de <?php echo $_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</a></td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['uf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                            <td class="active"><strong><?php echo $_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</strong></td>
                            <td class="active">
                                <a href="lancarEmpenho.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-primary btn-xs"> <span class="glyphicon glyphicon-usd"></span> Lançar empenho</a>
                                
                            </td>
                        <?php }?>

                    </tr>
                <?php endfor; endif; ?>
            <?php }else{ ?>
                <tr class="text-center"><td><h2>Nenhuma cidade cadastrada</h2></td></tr>
                        <?php }?>
        </table>
    </div>
    <br />
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 

</div><?php }} ?>