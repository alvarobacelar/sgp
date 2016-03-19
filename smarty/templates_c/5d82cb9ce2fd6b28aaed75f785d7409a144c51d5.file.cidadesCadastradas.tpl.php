<?php /* Smarty version Smarty-3.1.13, created on 2016-02-28 15:56:53
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/cidadesCadastradas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143195211156d342f58b76f8-09138336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d82cb9ce2fd6b28aaed75f785d7409a144c51d5' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/cidadesCadastradas.tpl',
      1 => 1445027009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143195211156d342f58b76f8-09138336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erroCidade' => 0,
    'nomeCidade' => 0,
    'idCidade' => 0,
    'totalPipeiro' => 0,
    'observacao' => 0,
    'status' => 0,
    'uf' => 0,
    'nivel' => 0,
    'usuario_edicao_cidade' => 0,
    'data_edicao_cidade' => 0,
    'numeroCarradas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56d342f59bd285_24564876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d342f59bd285_24564876')) {function content_56d342f59bd285_24564876($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cidades Cadastradas</h2>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['erroCidade']->value;?>

    <div class="table-responsive table-bordered">
        <table class="table">


            <?php if (isset($_smarty_tpl->tpl_vars['nomeCidade']->value)){?>
                <th><center>Cidade</center></th>
                <th><center>Estado</center></th>
                <th><center>Qnt de Pipeiros</center></th>
                <th><center>Qnt de Carradas para cada pipeiro</center></th>
                <th><center>Opções</center></th>

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
                            <td class="active"><strong><?php echo $_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</strong></td>
                            <td class="active"> - </td>
                            <td class="active"><strong><a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</a></strong></td>
                            <td class="active"><strong><?php if ($_smarty_tpl->tpl_vars['observacao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]==''){?><span style="color: #666;"><small><i>Não adicionado</i></small></span><?php }else{ ?><strong> <?php echo $_smarty_tpl->tpl_vars['observacao']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</strong> <?php }?></strong></td>
                            <td class="active"><a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-eye-open"></span> Ver Pipeiros Desativados</a></td>
                        <?php }elseif($_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]=="1"){?>
                            <td class="active cidadeDesativada"><?php echo $_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                            <td class="active cidadeDesativada"><?php echo $_smarty_tpl->tpl_vars['uf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                            <td class="active cidadeDesativada"><?php echo $_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                            <td class="active cidadeDesativada">CIDADE DESATIVADA</td>
                            <td class="active">
                                <?php if ($_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]<=0){?>
                                    <a class="btn btn-info btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-eye-open"></span> Ver Cidade</a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"||$_smarty_tpl->tpl_vars['nivel']->value!="vis"){?>
                                    <?php if ($_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]<=0){?>
                                        <a href="#" class="btn btn-warning btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]<=0){?>
                                        <button type="button" onclick="excluirCidade(<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button>
                                    <?php }else{ ?>
                                        <a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-info btn-xs" id="ver" data-toggle="tooltip" data-placement="left" title="<?php if ($_smarty_tpl->tpl_vars['usuario_edicao_cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]!=''){?>Ultima edição: <?php echo $_smarty_tpl->tpl_vars['usuario_edicao_cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
, <?php echo $_smarty_tpl->tpl_vars['data_edicao_cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
<?php }else{ ?>Nenhuma edição registrada <?php }?>"> <span class="glyphicon glyphicon-open"></span> Desativar pipeiros</a>
                                        <button type="button" class="btn btn-danger btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-warning-sign"></span> Desative Pipeiros para excluir</button>
                                    <?php }?>
                                    <button onclick="ativarCidade(<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)" title="Ativar Cidade de <?php echo $_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" type="button" class="btn btn-success btn-xs" > <span class="glyphicon glyphicon-ok"></span> Ativar</button>
                                <?php }?>
                            </td>
                        <?php }else{ ?>
                            <td class="active"><a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" id="ver" data-toggle="tooltip" data-placement="left" title="<?php if ($_smarty_tpl->tpl_vars['usuario_edicao_cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]!=''){?>Ultima edição: <?php echo $_smarty_tpl->tpl_vars['usuario_edicao_cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
, <?php echo $_smarty_tpl->tpl_vars['data_edicao_cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
<?php }else{ ?> Nenhuma edição registrada <?php }?>"><?php echo $_smarty_tpl->tpl_vars['nomeCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</a></td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['uf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                            <td class="active"><strong><a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['totalPipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</a></strong></td>
                            <td class="active"><?php if (empty($_smarty_tpl->tpl_vars['numeroCarradas']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['a']['index']])){?><span style="color: #666;"><small><i>Não adicionado</i></small></span><?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['numeroCarradas']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 <?php }?></td>

                            <td class="active">
                                <a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-info btn-xs"> <span class="glyphicon glyphicon-eye-open"></span> Ver Cidade</a>
                                <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?>
                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"){?>
                                        <a href="editarCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                        
                                        <button type="button" onclick="desativarCidade(<?php echo $_smarty_tpl->tpl_vars['idCidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
)" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove"></span> Desativar</button>
                                    <?php }?>
                                <?php }?>
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