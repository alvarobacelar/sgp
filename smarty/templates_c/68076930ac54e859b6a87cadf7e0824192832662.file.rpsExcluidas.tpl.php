<?php /* Smarty version Smarty-3.1.13, created on 2015-10-22 17:48:45
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/rpsExcluidas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6876230456293934a03786-42200418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68076930ac54e859b6a87cadf7e0824192832662' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/rpsExcluidas.tpl',
      1 => 1445543322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6876230456293934a03786-42200418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56293934a47eb0_59994780',
  'variables' => 
  array (
    'valorBusca' => 0,
    'erroRPS' => 0,
    'v' => 0,
    'nivel' => 0,
    'funcao' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56293934a47eb0_59994780')) {function content_56293934a47eb0_59994780($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['valorBusca']->value)){?>
    <div class="panel panel-warning">

        <div class="panel-heading">

            <h2 class="panel-title">RPS Excluidas</h2>
        </div>

        <div class="panel-body">
            <?php echo $_smarty_tpl->tpl_vars['erroRPS']->value;?>



            <div class="table-responsive table-bordered">
                <table class="table">

                    <th><center>Nr RPS</center></th>
                    <th><center>Pipeiro</center></th>
                    <th><center>Valor Bruto</center></th>
                    <th><center>Data Hora Emissão</center></th>
                    <th><center>Mês ano do serviço</center></th>
                    <th><center>Quem Gerou</center></th>
                    <th><center>Excluida por</center></th>
                    <th><center>Ações</center></th>

                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['valorBusca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <tr class="alert-danger text-center">
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value->id_rps;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value->nome_pipeiro;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value->valor_bruto_rps;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value->data_emissao_rps;?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value->hora;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value->mes_rps;?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value->ano_rps;?>
</td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value->nome_militar;?>
</td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['v']->value->mil_remove_rps;?>
</strong></td>
                            <td width="150">
                                
                                <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?>
                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"&&$_smarty_tpl->tpl_vars['funcao']->value!="GCDA"){?>
                                        <a onclick="excluirRPS(<?php echo $_smarty_tpl->tpl_vars['v']->value->id_rps;?>
)" class="btn btn-info btn-xs"> <span class="glyphicon glyphicon-remove-circle"></span> Restaurar</a>
                                    <?php }?>
                                <?php }?>
                            </td>
                        </tr>                    
                    <?php } ?>

                </table>
                    <?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>

            </div>
        </div>

    <?php }else{ ?>

        <div class="panel panel-default">

            <div class="panel-heading">

                <h2 class="panel-title">RPS Excluidas</h2>
            </div>

            <div class="table-responsive table-bordered">
                <div class="panel-body">
                    <div class="alert alert-danger" role="alert">
                        <center>Nenhum resultado</center>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>



<?php }} ?>