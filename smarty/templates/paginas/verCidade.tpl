<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">
            {if $cidade->id_cidade_atuante == 10}
                Pipeiros Desabilidados <a class="btn btn-info btn-xs" href="pipeirosCadastrados.php">Ver todos pipeiros</a> <a href="cidadesCadastradas.php" class="btn btn-default btn-xs">Todas as cidades</a>
            {else} 
                Municipio de <u>{$cidade->nome_cidade_atuante}-{$cidade->uf_cidade}</u> | <a class="btn btn-info btn-xs" href="pipeirosCadastrados.php">Ver todos pipeiros</a> <a href="cidadesCadastradas.php" class="btn btn-default btn-xs">Todas as cidades</a>
                {if $nivel != "user"}<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Escolher Pipeiros para esta cidade</button>{/if}
            {/if}
            {if $cidade->usuario_edicao_cidade != ""}<small>Útima edição: {$cidade->usuario_edicao_cidade}, {$cidade->data_edicao_cidade} </small> {/if}
        </h2>
    </div>

    {$erroPipeiro}
    <div class="table-responsive">
        <table class="table table-striped">

            {if isset($verCidade)}

                <th><center>Pipeiro</center></th>
                <th><center>Carro</center></th>
                <th><center>Tipo veiculo</center></th>
                <th><center>Opções</center></th>

                {foreach $verCidade as $c}
                    <tr class="active">
                        <td><a href="verPipeiro.php?id={$c->id_pipeiro}">{$c->nome_pipeiro}</a> </td>
                        <td class="text-center">
                            {if $nivel != "user"}{* se o usuario comum estiver logado, irá mostrar somente a placa sem link *}
                                    {if $c->placa_veiculo != "SEM CARRO"}
                                        <a href="editarVeiculo.php?id={$c->id_veiculo}">{$c->placa_veiculo}</a> 
                                    {else}
                                        <strong> SEM CARRO </strong> 
                                    {/if}
                                {else}
                                    <strong>{$c->placa_veiculo}</strong>
                                {/if}
                            </td>
                            <td class="text-center">{if $c->placa_veiculo != "SEM CARRO"} {$c->tipo_veiculo} {else}<strong> SEM CARRO </strong>{/if}</td>
                            <td class="text-center"> 
                                {if $nivel != "user"}
                                    {if $nivel != "vis"}
                                        {if $c->id_cidade_atuante != "10"}<button type="button" onclick="desativarPipeiro({$c->id_pipeiro},{$cidade->id_cidade_atuante})" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Desativar</button>{/if}
                                        <a href="mudarCidade.php?id={$c->id_pipeiro}" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Cidade</a>
                                        <a href="mudarCarro.php?id={$c->id_pipeiro}&idCidade={$cidade->id_cidade_atuante}" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Carro</a>
                                    {else}
                                        <button type="button" class="btn btn-success btn-xs" disabled="disabled">Nenhuma opção</button>
                                    {/if}

                                    
                                {else}
                                    <button type="button" class="btn btn-success btn-xs" disabled="disabled">Nenhuma opção</button>
                                {/if}
                            </td>
                        </tr>
                        {/foreach}

                            {else}
                                <tr>
                                    <td  class="danger text-center"><br /><p class="lead">Nenhum Pipeiro em {$cidade->nome_cidade_atuante}-{$cidade->uf_cidade}</p></td>
                                </tr>
                                {/if}
                                </table>
                            </div><!-- /responsive -->
                        </div>
                        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
                        
                        <!-- inicio da div modal  -->

                        {* div modal de escolha de pipeiros *}
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Escolher Pipeiro para {$cidade->nome_cidade_atuante}-{$cidade->uf_cidade}</h4>
                                    </div>
                                    <form action="includes/controllers/escolherPipeiros.php?idCidade={$cidade->id_cidade_atuante}" method="post" name="formEscolherPipeiro" role="form" id="formEscolherPipeiro" >
                                        <div class="modal-body">
                                            <table class="table table-condensed">
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                    {foreach $pipeiroEscolha as $pipe}
                                                    <tr>
                                                        <td><input type="checkbox" name="ckbIdPipeiro[]" value="{$pipe->id_pipeiro}"> {$pipe->nome_pipeiro}</td>
                                                        <td>{$pipe->cpf_pipeiro}</td>
                                                    </tr>
                                                {/foreach}

                                            </table>
                                        </div> <!-- fim modal-body -->

                                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancela</button>
                                    </form>
                                </div>
                            </div>
                        </div>
