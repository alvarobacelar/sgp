<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">
            {if $cidade->id_cidade_atuante == 10}
                Pipeiros Desabilidados 
            {else} 
                Lançar empenho para municipio de <u>{$cidade->nome_cidade_atuante}-{$cidade->uf_cidade}</u> 
                {/if}
                {if $cidade->usuario_edicao_cidade != ""}<small>Útima edição: {$cidade->usuario_edicao_cidade}, {$cidade->data_edicao_cidade} </small> {/if}
        </h2>
    </div>

    {$erroPipeiro}
    <div class="table-responsive">
        <table class="table table-striped">

            {if isset($nomePipeiro)}

                <th><center>Pipeiro</center></th>
                <th><center>NC, NE, valor, mês ..</center></th>


                {section name=e loop=$nomePipeiro}
                    <tr class="active">

                        {if !isset($nc_empenho[e])}
                            <td width="300">{$nomePipeiro[e]}</td>
                            <td class="text-center">
                                {if !empty($saldoEmpenho[e])}
                                    <span class="label label-default">Saldo Anterior {$saldoEmpenho[e]}</span>
                                {/if}
                                <form action="includes/controllers/cadastrarEmpenho.php" method="post" name="cadastrar" class="form-inline">

                                    <input type="hidden" id="inputCidadeEmpenho" name="inputCidadeEmpenho" value="{$idCidadeAtua[e]}">
                                    <input type="hidden" id="inputPipeiroEmpenho" name="inputPipeiroEmpenho" value="{$idPipeiro[e]}">
                                    {if !empty($saldoEmpenho[e])}
                                        <input type="hidden" id="inputSaldoEmpenho" name="inputSaldoEmpenho" value="{$saldoEmpenho[e]}">
                                    {/if}

                                    <div class="form-group form-group-sm">
                                        <input class="form-control" type="text" id="inputNC" value="" name="inputNC" required="" placeholder="NC">
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <input class="form-control" type="text" id="inputNE" value="" name="inputNE" required="" placeholder="NE">
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <input class="form-control" type="text" id="inputValorEmpenho" value="" name="inputValorEmpenho" required="" placeholder="Valor R$">
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <select class="form-control" id="selectMesEmpenho" name="selectMesEmpenho" required="">
                                            <option value="">Mês Pagamento</option>
                                            <option value="JANEIRO">JANEIRO</option>
                                            <option value="FEVEREIRO">FEVEREIRO</option>
                                            <option value="MARÇO">MARÇO</option>
                                            <option value="ABRIL">ABRIL</option>
                                            <option value="MAIO">MAIO</option>
                                            <option value="JUNHO">JUNHO</option>
                                            <option value="JULHO">JULHO</option>
                                            <option value="AGOSTO">AGOSTO</option>
                                            <option value="SETEMBRO">SETEMBRO</option>
                                            <option value="OUTUBRO">OUTUBRO</option>
                                            <option value="NOVEMBRO">NOVEMBRO</option>
                                            <option value="DEZEMBRO">DEZEMBRO</option>
                                        </select>
                                    </div>
                                    <!--
                                    <div class="form-group form-group-sm">
                                        <input class="form-control" type="text" id="inputAnoEmpenho" value="{$smarty.now|date_format:"%Y"}" name="inputAnoEmpenho" required="">
                                    </div>
                                    -->
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                            {else}
                            <td width="300" class="success"><strong>{$nomePipeiro[e]}</strong></td>
                            <td class="text-center success">
                                {* if !empty($saldoEmpenho[e])}
                                <small><span class="label label-default">Saldo Anterior {$saldoEmpenho[e]}</span></small>
                                {/if *}
                                <form action="#" method="post" name="cadastrar" class="form-inline">
                                    <div class="form-group form-group-sm">
                                        <input class="form-control" type="text" id="inputNC" value="{$nc_empenho[e]}" disabled="" name="inputNC" required="" placeholder="NC">
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <input class="form-control" type="text" id="inputNE" value="{$ne_empenho[e]}" disabled="" name="inputNE" required="" placeholder="NE">
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <input class="form-control" type="text" id="inputValorEmpenho" value="{$valor_empenho[e]}" disabled="" name="inputValorEmpenho" required="" placeholder="Valor R$">
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <select class="form-control" id="selectMesEmpenho" disabled="" name="selectMesEmpenho" required="">
                                            <option value="{$mes_pgto_empenho[e]}">{$mes_pgto_empenho[e]}</option>
                                        </select>
                                    </div>
                                    <a onclick="delEmpenho({$id_empenho[e]}, {$idCidadeAtua[e]})" class="btn btn-danger">Excluir</a>
                                </form>
                            </td>
                        {/if}


                    </tr>
                {/section}

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
