<?php /* Smarty version Smarty-3.1.13, created on 2015-01-25 15:42:12
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/logAcesso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348965881547f5a86e476b8-46035603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb3c0b4d0bdcf9cbfb3bf53f67612d83e48dcae' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/logAcesso.tpl',
      1 => 1422207729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348965881547f5a86e476b8-46035603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547f5a86ed0263_24782179',
  'variables' => 
  array (
    'log' => 0,
    'l' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f5a86ed0263_24782179')) {function content_547f5a86ed0263_24782179($_smarty_tpl) {?><div class="panel panel-default">

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