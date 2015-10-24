<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 14:16:45
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/usuariosCadastrados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1515508755523406ce5bf0-85305238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3966bb5557b376a58f1898e62afa62779703de17' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/usuariosCadastrados.tpl',
      1 => 1444756533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1515508755523406ce5bf0-85305238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55523406d8d497_55071494',
  'variables' => 
  array (
    'excluirUsuario' => 0,
    'busca' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55523406d8d497_55071494')) {function content_55523406d8d497_55071494($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Usuários Cadastrados <a href="cadastrarUsuario.php" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Cadastrar Novo</a></h2>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['excluirUsuario']->value;?>

    <div class="table-responsive table-bordered">
        <table class="table">


            <?php if (isset($_smarty_tpl->tpl_vars['busca']->value)){?>
                <th><center>Pos/Grad</center></th>
                <th><center>Nome</center></th>
                <th><center>Login</center></th>
                <th><center>Nivel</center></th>
                <th><center>Função</center></th>
                <th><center>Opção</center></th>
                    <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['busca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                    <tr class="text-center">
                        <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->posto_grad_usuario;?>
</td>
                        <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->nome_usuario;?>
</td>
                        <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->login_usuario;?>
</td>
                        <td class="active"><?php if ($_smarty_tpl->tpl_vars['u']->value->nivel==0){?>Administrador<?php }elseif($_smarty_tpl->tpl_vars['u']->value->nivel==2){?>RPS<?php }elseif($_smarty_tpl->tpl_vars['u']->value->nivel==1){?>Supervisor<?php }elseif($_smarty_tpl->tpl_vars['u']->value->nivel==3){?>Setor Financeiro<?php }?></td>
                        <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->funcao_usuario;?>
</td>
                        <td class="active">
                            <a href="editarUsuario.php?id=<?php echo $_smarty_tpl->tpl_vars['u']->value->id_usuario;?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                            <button type="button" onclick="excluirUsuario(<?php echo $_smarty_tpl->tpl_vars['u']->value->id_usuario;?>
)" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button>
                        </td>
                    </tr>
                <?php } ?>
            <?php }else{ ?>
                <tr class="text-center"><td><h3>Nenhum usuário cadastrado</h3></td></tr>
                        <?php }?>
        </table>
    </div>
    <br />
    
</div>
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>