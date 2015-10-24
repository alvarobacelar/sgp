<?php /* Smarty version Smarty-3.1.13, created on 2015-08-19 15:28:12
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/logAcesso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75870441555d4cabc12c024-71615510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaee36e7420629e70f0469728205c7ec89bbd243' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/logAcesso.tpl',
      1 => 1431538376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75870441555d4cabc12c024-71615510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'log' => 0,
    'l' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55d4cabc14dc46_89170459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4cabc14dc46_89170459')) {function content_55d4cabc14dc46_89170459($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Logs de acesso ao sistema</h2>
    </div>
    <div class="table-responsive table-bordered">
        <table class="table table-bordered">

            <?php if (isset($_smarty_tpl->tpl_vars['log']->value)){?>

                <th>Id</th>
                <th>Nome do usuário</th>
                <th>Login</th>
                <th>Função</th>
                <th>IP de acesso</th>
                <th>Data/hora do acesso</th>
                <th>Observação do acesso</th>
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                    <tr class="active">
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->idacesso_usuario;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->nome_usuario;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->login_usuario;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->funcao_usuario;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->ip_acesso;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->data_acesso;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value->obs_acesso;?>
</td>
                    </tr>
                <?php } ?>
            <?php }else{ ?>
                <tr class="danger">
                    <td>Nenhum log registrado</td>
                </tr>

            <?php }?>

        </table>
    </div>
   
</div>
            <center><?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>
</center><br />
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>