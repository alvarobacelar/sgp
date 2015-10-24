<?php /* Smarty version Smarty-3.1.13, created on 2015-10-22 15:08:14
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/cadastrarUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7510095655523405193776-74877509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1613aeb47c79a527f12f8be4e3d77d83a131ed5' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/cadastrarUsuario.tpl',
      1 => 1445533691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7510095655523405193776-74877509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_555234052142e5_50873975',
  'variables' => 
  array (
    'erroCadastro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555234052142e5_50873975')) {function content_555234052142e5_50873975($_smarty_tpl) {?><div class="panel panel-default">

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
                        <option value="1">Supervisor</option>
                        <option value="3">Usuário Financeiro</option>
                        <option value="2">Usuário Básico (RPS)</option>
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
                <div class="col-sm-3">
                    <select class="form-control" id="inputFuncao" name="inputFuncao" required="">
                        <option value="">Função do usuário</option>
                        <option value="Administrador do Sistema">Administrador do Sistema</option>
                        <option value="Chefe da prestação de contas">Chefe da prestação de contas</option>
                        <option value="Prestação de conta">Prestação de conta</option>
                        <option value="Financeiro">Financeiro</option>
                        <option value="GCDA">GCDA</option>
                        <option value="Aux Operação Pipa">Aux Operação Pipa</option>
                        <option value="Credenciamento">Credenciamento</option>
                        <option value="SALC">SALC</option>
                    </select>
                </div>
                <!--
                <div class="col-sm-5">
                    <input class="form-control" type="text" id="inputFuncao" name="inputFuncao" required="" placeholder="Função">
                </div>
                -->
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