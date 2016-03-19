<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Usuários Cadastrados <a href="cadastrarUsuario.php" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Cadastrar Novo</a></h2>
    </div>

    {$excluirUsuario}
    <div class="table-responsive table-bordered">
        <table class="table">


            {if isset($busca)}
                <th><center>Pos/Grad</center></th>
                <th><center>Nome</center></th>
                <th><center>Nome guerra</center></th>
                <th><center>Login</center></th>
                <th><center>Nivel</center></th>
                <th><center>Função</center></th>
                <th><center>Opção</center></th>
                    {foreach $busca as $u}
                    <tr class="text-center">
                        <td class="active">{$u->posto_grad_usuario}</td>
                        <td class="active">{$u->nome_usuario}</td>
                        <td class="active">{$u->nome_guerra}</td>
                        <td class="active">{$u->login_usuario}</td>
                        <td class="active">{if $u->nivel == 0}Administrador{else if $u->nivel == 2}RPS{else if $u->nivel == 1}Supervisor{else if $u->nivel == 3}Setor Financeiro{/if}</td>
                        <td class="active">{$u->funcao_usuario}</td>
                        <td class="active">
                            <a href="editarUsuario.php?id={$u->id_usuario}" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                            <button type="button" onclick="excluirUsuario({$u->id_usuario})" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button>
                        </td>
                    </tr>
                {/foreach}
            {else}
                <tr class="text-center"><td><h3>Nenhum usuário cadastrado</h3></td></tr>
                        {/if}
        </table>
    </div>
    <br />
    
</div>
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 