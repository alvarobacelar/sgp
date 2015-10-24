<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Logs de acesso ao sistema</h2>
    </div>
    <div class="table-responsive table-bordered">
        <table class="table table-bordered">

            {if isset($log)}

                <th>Id</th>
                <th>Nome do usuário</th>
                <th>Login</th>
                <th>Função</th>
                <th>IP de acesso</th>
                <th>Data/hora do acesso</th>
                <th>Observação do acesso</th>
                    {foreach $log as $l}
                    <tr class="active">
                        <td>{$l->idacesso_usuario}</td>
                        <td>{$l->nome_usuario}</td>
                        <td>{$l->login_usuario}</td>
                        <td>{$l->funcao_usuario}</td>
                        <td>{$l->ip_acesso}</td>
                        <td>{$l->data_acesso}</td>
                        <td>{$l->obs_acesso}</td>
                    </tr>
                {/foreach}
            {else}
                <tr class="danger">
                    <td>Nenhum log registrado</td>
                </tr>

            {/if}

        </table>
    </div>
   
</div>
            <center>{$paginacao}</center><br />
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 