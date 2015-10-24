<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 14:25:41
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:559186245561d3765962a13-12397423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c838ef847edf3f87a2aacadb610492b9a118709' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/usuario.tpl',
      1 => 1444757137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '559186245561d3765962a13-12397423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561d376599d798_11753216',
  'variables' => 
  array (
    'erroSenha' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d376599d798_11753216')) {function content_561d376599d798_11753216($_smarty_tpl) {?>
<div class="row">

    <div class="panel panel-primary">

        <div class="panel-heading">

            <h2 class="panel-title">Alterar senha de usuário</h2>
        </div>

        <div class="panel-body">

            <?php echo $_smarty_tpl->tpl_vars['erroSenha']->value;?>

            <div class="col-md-8 col-md-offset-3">
                <img src="imagens/user-militar.jpg" alt="usuario" width="100" align="left" class="img-circle"><br>
                <p><strong>Nome:</strong> <small><?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome_usuario;?>
</small></p>
                <p><strong>Posto/Grad:</strong> <small><?php echo $_smarty_tpl->tpl_vars['usuario']->value->posto_grad_usuario;?>
</small></p>
                <p><strong>CPF:</strong> <small><?php echo $_smarty_tpl->tpl_vars['usuario']->value->cpf_usuario;?>
</small></p>
                <p><strong>Função:</strong> <small><?php echo $_smarty_tpl->tpl_vars['usuario']->value->funcao_usuario;?>
</small></p>
                <p><strong>Login:</strong> <small><?php echo $_smarty_tpl->tpl_vars['usuario']->value->login_usuario;?>
</small></p>
                <p><strong>Mudar Senha</strong></p>
                <form action="includes/controllers/mudarSenha.php" method="post" name="cadastrar" class="form-horizontal" role="form" onSubmit="return verificaSenha()">
                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="inputSenha">Senha Atual</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="password" value="" id="inputSenhaAtual" required="" name="inputSenhaAtual">
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="inputSenha">Nova Senha</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="password" value="" id="inputSenha" required="" name="inputSenha">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="inputSenha2">Repita a senha</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="password" id="inputSenha2" onblur="verificaSenha()" required="" name="inputSenha2">
                            <div id="erro-senha"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Mudar Senha</button>
                        </div>
                    </div>
                </form>        
            </div>
        </div>
    </div>
</div>
<?php }} ?>