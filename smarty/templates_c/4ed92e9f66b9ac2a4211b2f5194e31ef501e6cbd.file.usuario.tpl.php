<?php /* Smarty version Smarty-3.1.13, created on 2015-01-17 21:34:14
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85381328554badffedfc3b8-32500829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed92e9f66b9ac2a4211b2f5194e31ef501e6cbd' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/usuario.tpl',
      1 => 1421537049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85381328554badffedfc3b8-32500829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54badffee11ac4_02767280',
  'variables' => 
  array (
    'erroSenha' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54badffee11ac4_02767280')) {function content_54badffee11ac4_02767280($_smarty_tpl) {?>
<div class="row">
    <h2>Usuário</h2>
    <?php echo $_smarty_tpl->tpl_vars['erroSenha']->value;?>

    <div class="col-md-8 col-md-offset-3">
        <img src="imagens/user-militar.jpg" alt="usuario" width="150" class="img-circle"><br>
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
                    <button type="submit" class="btn btn-success">Mudar Senha</button>
                </div>
            </div>
        </form>        
    </div>
</div>
<?php }} ?>