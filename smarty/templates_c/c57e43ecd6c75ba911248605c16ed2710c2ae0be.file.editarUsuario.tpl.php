<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 10:09:19
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/editarUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1674771381547882f8bca499-61866330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c57e43ecd6c75ba911248605c16ed2710c2ae0be' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/editarUsuario.tpl',
      1 => 1431452395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1674771381547882f8bca499-61866330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547882f8c3c832_49988218',
  'variables' => 
  array (
    'usuario' => 0,
    'erroAlterar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547882f8c3c832_49988218')) {function content_547882f8c3c832_49988218($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Alterar Usuário <?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome_usuario;?>
</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erroAlterar']->value;?>

        <div class="alert alert-warning" role="alert">OBS: Se não definir nenhuma senha, a senha antiga prevalecerá.</div>
        <form action="includes/controllers/editarUsuarioControl.php" method="post" name="cadastrar" class="form-horizontal" role="form" onSubmit="return verificaSenha()">
            <input type="hidden" name="inputId" id="inputId" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
" />
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputNome">Nome</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="inputNome" name="inputNome" required="" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome_usuario;?>
">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputCpf">CPF</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="inputCpf" name="inputCpf" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->cpf_usuario;?>
">
                </div>
            </div> 
            <div class="row form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputLogin">Login</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="inputLogin" name="inputLogin" required="" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->login_usuario;?>
">

                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="selectNivel" name="selectNivel" required="">
                        <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nivel;?>
"><?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel==0){?>Administrador<?php }?><?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel==1){?>Usuário<?php }?><?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel==2){?>Gerente<?php }?></option>
                        <option value="0">Administrador</option>
                        <option value="1">Gerente</option>
                        <option value="2">Usuário Comum</option>
                        <option value="3">Usuário Visualizador</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputSenha">Senha</label>
                <div class="col-sm-3">
                    <input class="form-control" type="password" value="" id="inputSenha" name="inputSenha">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputSenha2">Repita a senha</label>
                <div class="col-sm-3">
                    <input class="form-control" type="password" id="inputSenha2" onblur="verificaSenha()" name="inputSenha2">
                    <div id="erro-senha"></div>
                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="selectPosto" name="selectPosto" required="">
                        <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->posto_grad_usuario;?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['usuario']->value->posto_grad_usuario;?>
</option>
                        <option value="Gal">General</option>
                        <option value="Cel">Coronel</option>
                        <option value="TC">Tenete Coronel</option>
                        <option value="Maj">Major</option>
                        <option value="Cap">Capitão</option>
                        <option value="1º Ten">1º Tenente</option>
                        <option value="2º Ten">2º Tenente</option>
                        <option value="Asp">Aspirante</option>
                        <option value="S Ten">Sub-Tenente</option>
                        <option value="1º Sgt">1º Sargento</option>
                        <option value="2º Sgt">2º Sargento</option>
                        <option value="3º Sgt">3º Sargento</option>
                        <option value="Cb">Cabo</option>
                        <option value="Sd">Soldado</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputFuncao">Função</label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" id="inputFuncao" name="inputFuncao" required="" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->funcao_usuario;?>
">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Editar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
<?php }} ?>