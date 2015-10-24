<?php /* Smarty version Smarty-3.1.13, created on 2015-01-25 15:42:40
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/cadastrarUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454688816547f668664cfd4-57735369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01740417efd2b214bd9d189e28429ba7336cb88f' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/cadastrarUsuario.tpl',
      1 => 1422207753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454688816547f668664cfd4-57735369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547f668665c6e5_32924294',
  'variables' => 
  array (
    'erroCadastro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f668665c6e5_32924294')) {function content_547f668665c6e5_32924294($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar novo usuário</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erroCadastro']->value;?>
 
        <form action="includes/controllers/cadastraUsuarioNovo.php" method="post" name="cadastrar" class="form-horizontal" role="form" onSubmit="return verificaSenha()">
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputNome">Nome</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="inputNome" name="inputNome" required="" placeholder="Nome do Usuário">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputCpf">Cpf </label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" id="inputCpf" name="inputCpf" title="O cadastro do cpf serve preencher automaticamente na declaração de recebimento de tickets" placeholder="Cpf do usuário">
                </div>
            </div> 
            <div class="row form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputLogin">Login</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="inputLogin" name="inputLogin" required="" placeholder="Login do usuário">

                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="selectNivel" name="selectNivel" required="">
                        <option value="">Nivel do usuário</option>
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
                    <input class="form-control" type="password" id="inputSenha" value="" name="inputSenha" required="" placeholder="Senha">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputSenha2">Repita a senha</label>
                <div class="col-sm-3">
                    <input class="form-control" type="password" id="inputSenha2" value="" name="inputSenha2" required="" onblur="verificaSenha()" placeholder="Repitir senha">
                    <span id="erro-senha"></span>
                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="selectPosto" name="selectPosto" required="">
                        <option value="" selected="">Posto/Graduação</option>
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
                    <input class="form-control" type="text" id="inputFuncao" name="inputFuncao" required="" placeholder="Função">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>
        <br />
        
    </div>
</div>
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>