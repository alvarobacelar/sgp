<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Alterar Usuário {$usuario->nome_usuario}</h2>
    </div>
    <div class="panel-body">

        {$erroAlterar}
        <div class="alert alert-warning" role="alert">OBS: Se não definir nenhuma senha, a senha antiga prevalecerá.</div>
        <form action="includes/controllers/editarUsuarioControl.php" method="post" name="cadastrar" class="form-horizontal" role="form" onSubmit="return verificaSenha()">
            <input type="hidden" name="inputId" id="inputId" value="{$usuario->id_usuario}" />
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputNome">Nome</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="inputNome" name="inputNome" required="" value="{$usuario->nome_usuario}">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputCpf">CPF</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="inputCpf" name="inputCpf" value="{$usuario->cpf_usuario}">
                </div>
            </div> 
            <div class="row form-group form-group-sm">
                <label class="col-sm-2 control-label" for="inputLogin">Login</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="inputLogin" name="inputLogin" required="" value="{$usuario->login_usuario}">

                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="selectNivel" name="selectNivel" required="">
                        <option value="{$usuario->nivel}">{if $usuario->nivel == 0}Administrador{else if $usuario->nivel == 2}RPS{else if $usuario->nivel == 1}Supervisor{else if $usuario->nivel == 3}Setor Financeiro{/if}</option>
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
                        <option value="{$usuario->posto_grad_usuario}" selected="">{$usuario->posto_grad_usuario}</option>
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
                        <option value="{$usuario->funcao_usuario}">{$usuario->funcao_usuario}</option>
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
                    <input class="form-control" type="text" id="inputFuncao" name="inputFuncao" required="" value="{$usuario->funcao_usuario}">
                </div>
                -->
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
