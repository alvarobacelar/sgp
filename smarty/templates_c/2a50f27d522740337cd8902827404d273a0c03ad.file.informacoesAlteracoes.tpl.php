<?php /* Smarty version Smarty-3.1.13, created on 2015-10-22 16:49:31
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/informacoesAlteracoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81852607756292fbb713860-36934428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a50f27d522740337cd8902827404d273a0c03ad' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/informacoesAlteracoes.tpl',
      1 => 1431538375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81852607756292fbb713860-36934428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erroPipeiro' => 0,
    'infor' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56292fbb79c527_93015600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56292fbb79c527_93015600')) {function content_56292fbb79c527_93015600($_smarty_tpl) {?>
<fieldset>
    <legend>Ver mensagens</legend>
    <?php echo $_smarty_tpl->tpl_vars['erroPipeiro']->value;?>

    <table class="table table-bordered">

        <?php if (isset($_smarty_tpl->tpl_vars['infor']->value)){?>
            <tr>
                <th><center>Data</center></th>
                <th><center>Nome Pipeiro</center></th>
                <th><center>Nome do informante</center></th>
                <th><center>Alteração</center></th>
                <th><center>Ação</center></th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <tr class="info">
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->data_informacao;?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['i']->value->id_pipeiro!=0){?><a href="editarPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value->id_pipeiro;?>
&alt=<?php echo $_smarty_tpl->tpl_vars['i']->value->alteracao;?>
" title="Ir para editar pipeiro"><?php echo $_smarty_tpl->tpl_vars['i']->value->nome_pipeiro_alt;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['i']->value->nome_pipeiro_alt;?>
 <?php }?></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->nome_informante;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->alteracao;?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value->id_pipeiro!=0){?><a href="editarPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value->id_pipeiro;?>
&idAlt=<?php echo $_smarty_tpl->tpl_vars['i']->value->id_alteracao;?>
&alt=<?php echo $_smarty_tpl->tpl_vars['i']->value->alteracao;?>
" class="btn btn-info btn-xs" title="Ir para editar pipeiro"><span class="glyphicon glyphicon-edit"></span> Corrigir</a><?php }?>
                        <a href="includes/controllers/excluiInforme.php?idInforme=<?php echo $_smarty_tpl->tpl_vars['i']->value->id_alteracao;?>
" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        <?php }else{ ?>
            <tr>  
                <td>Nenhuma nova mensagem</td>
            </tr>
        <?php }?>
    </table>
</fieldset>
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>