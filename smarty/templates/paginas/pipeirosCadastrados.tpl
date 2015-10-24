<div class="panel panel-default">

    <div class="panel-heading">
        <h4>{if isset($busca)}Busca por: <i><u>{$busca}</u></i>
            {if $sit == "ativo"} em todos ativos{else if $sit == "desativado"} em todos desativados {else} em todos credenciados {/if}
            {else}
                {if $local == "sim"}
                    Pipeiros Ativos
                {else if $local == "nao"}
                    Pipeiros Desativados
                {else}
                    Pipeiros Cadastrados
                {/if}
                {/if} <a href="pipeirosAtivos.php" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-ok"></span> Ver pipeiros ativos</a> <a href="pipeirosDesativados.php" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-off"></span> Ver pipeiros desativados</a> <a href="pipeirosCadastrados.php" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-list"></span> Ver todos pipeiros</a></h4>
            </div>
            {$erroPipeiro}
            <div id="ajax" class="table-responsive table-bordered">

                <form method="get" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="busca" name="busca" placeholder="Pesquisar por nome">
                    </div>
                    <button type="submit" id="pesquisaPipeiro" class="btn btn-default">Pesquisar</button>
                </form> 
                {if isset($local)}

                    <strong>{if $local == "sim"}<div class="alert alert-info" role="alert">Todal de Pipeiro Ativos{else if $local == "nao"}<div class="alert alert-warning" role="alert">Total de Pipeiros Desativados{else}<div class="alert alert-success" role="alert"> Total de Pipeiros Credenciados {/if}</strong> <span class="badge">{$total}</span>
                                </div>
                            {/if}
                            <table class="table">


                                {if isset($nome_cidade_atuante)}
                                    <th><center>Nr RPS</center></th>
                                    <th><center>Nome</center></th>
                                    <th><center>Validade do credenciamento</center></th>
                                    <th><center>Cidade de atuação</center></th>
                                    <th><center>Ações</center></th>

                                    {section name=a loop=$id_pipeiro}
                                        <tr class="text-center">
                                            <td class="active">{$id_pipeiro[a]}</td>
                                            <td class="active" width="200">{$nome_pipeiro[a]}</td>

                                            {* verificando qual a situação do pipeiro para mostrar as mensagems para o usuário *}
                                            {if $nome_cidade_atuante[a] == "-"}<td class="active"><small><i>Pipeiro desativado</i></small></td>{else if $dias[a] <= 0}<td class="alert-danger"><small><i>Pipeiro com data de ativação vencida</i></small> {else if $dias[a] <= 6}<td class="warning"> <strong><mark>Menos de uma semana ({$dias[a]} dias)</mark></strong> {else}<td class="alert-success"><strong><small>{$dias[a]}  <i>dias restantes</i></small></strong>{/if}</td>

                                            {if isset($nome_cidade_atuante[a])}
                                                <td class="active">{if $nome_cidade_atuante[a] == "-"}<strong><small><i>Desativado</i></small></strong>{else}<a href="verCidade.php?id={$id_cidade_atuante[a]}">{$nome_cidade_atuante[a]}-{$uf_cidade[a]}{/if}</a></td>
                                                        {else}
                                                <td class="active">{$cidade[a]}-{$uf[a]}</td>
                                            {/if}
                                            <td class="active" width="490">
                                                <a href="verPipeiro.php?id={$id_pipeiro[a]}" class="btn btn-info btn-xs" id="ver" data-toggle="tooltip" data-placement="left" title="{if $usuario_edicao_pipeiro[a] != ""}Ultima edição: {$usuario_edicao_pipeiro[a]}, {$data_edicao_pipeiro[a]}{else}Nenhuma edição registrada {/if}"> <span class="glyphicon glyphicon-eye-open"></span> Ver</a>

                                                {if $nivel == "user"}
                                                    <a href="pesquisarPipeiro.php?id={$id_pipeiro[a]}" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-open"></span> Gerar RPS</a>
                                                    <a href="informeAlteracoes.php?id={$id_pipeiro[a]}" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-info-sign"></span> Informar Alteração</a>
                                                {/if}
                                                {if $nivel != "user" }
                                                    {if $nivel != "vis"}
                                                        {if $nome_cidade_atuante[a] == "-"}
                                                            <button type="button" class="btn btn-danger disabled btn-xs">  Desativado</button>
                                                        {else}
                                                            <button type="button" onclick="desativarPipeiro({$id_pipeiro[a]}, '')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Desativar</button>
                                                        {/if}
                                                        <a href="editarPipeiro.php?id={$id_pipeiro[a]}" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                                        {if $nome_cidade_atuante[a] == "-"}
                                                            <a href="mudarCidade.php?id={$id_pipeiro[a]}" class="btn btn-success btn-xs"> <span class="glyphicon glyphicon-ok"></span> Ativar Pipeiro</a>
                                                        {else}
                                                            <a href="mudarCidade.php?id={$id_pipeiro[a]}" class="btn btn-primary btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Cidade</a>
                                                        {/if}
                                                        <a href="mudarCarro.php?id={$id_pipeiro[a]}" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Carro</a>
                                                        {* <button type="button" onclick="excluirPipeiro({$p->id_pipeiro})" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button> *}
                                                    {/if}
                                                {/if}
                                            </td>
                                        </tr>
                                    {/section}
                                {else}
                                    <tr class="text-center">
                                        <td>
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3>Nenhum pipeiro corresponde a sua busca.</h3>
                                            </div>
                                        </td>
                                    </tr>
                                {/if}

                            </table>

                        </div><br />

                        <script>
                            $('#ver').tooltip(options);
                        </script>
                    </div>
                    <center>{$paginacao}</center>  

                    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
