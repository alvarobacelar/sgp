<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">
            {if $cidade->id_cidade_atuante == 10}
                Pipeiros Desabilidados 
            {else} 
                Liquidar empenho do municipio de <u>{$cidade->nome_cidade_atuante}-{$cidade->uf_cidade}</u> <span class="label label-default"> Mês de {$mesAnt} </span>
                {/if}
                {if $cidade->usuario_edicao_cidade != ""}<small>Útima edição: {$cidade->usuario_edicao_cidade}, {$cidade->data_edicao_cidade} </small> {/if}
        </h2>
    </div>

    {$erroPipeiro}
    <div class="table-responsive">
        <table class="table table-striped">

            {if isset($nomePipeiro)}

                <th><center>Pipeiro</center></th>
                <th><center>NC, NE, Valor NE, Valor RPS </center></th>


                {section name=e loop=$nomePipeiro}
                    <tr class="active">

                        {if !isset($nc_empenho[e])}
                            <td width="300">{$nomePipeiro[e]}</td>
                            <td class="text-center">
                                <form action="includes/controllers/cadastrarEmpenho.php" method="post" name="cadastrar" class="form-inline">

                                    <input type="hidden" id="inputCidadeEmpenho" name="inputCidadeEmpenho" value="{$idCidadeAtua[e]}">
                                    <input type="hidden" id="inputPipeiroEmpenho" name="inputPipeiroEmpenho" value="{$idPipeiro[e]}">

                                    <small><i>Impossível Liquidar empenho para este pipeiro, não há lançamento anteriores</i></small>
                                    <!--
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
                                        <input class="form-control" type="text" id="inputAnoEmpenho" value="{$smarty.now|date_format:"%Y"}" name="inputAnoEmpenho" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Liquidar</button>
                                    -->
                                </form>
                            {else}
                                {if $valLiq[e] == NULL}
                                <td width="300" class="success"><strong>{$nomePipeiro[e]}</strong></td>
                                <td class="text-center success">
                                    <form action="includes/controllers/liquidarEmpenhoControl.php" method="post" name="cadastrar" class="form-inline">

                                        <input type="hidden" id="inputCidadeEmpenho" name="inputCidadeEmpenho" value="{$idCidadeAtua[e]}">
                                        <input type="hidden" id="inputPipeiroEmpenho" name="inputPipeiroEmpenho" value="{$idPipeiro[e]}">

                                        <!--<button type="button" class="btn btn-warning disabled btn-xs">{$mes_pgto_empenho[e]}</button>-->
                                        <input type="hidden" id="inputValorEmpLiquida" name="inputValorEmpLiquida" value="{$valor_empenho[e]}">
                                        <input type="hidden" id="inputIdLiquida" name="inputIdLiquida" value="{$id_liquidacao[e]}">

                                        <button type="button" class="btn btn-default disabled btn-xs"> NC {$nc_empenho[e]} </button>
                                        <button type="button" class="btn btn-default disabled btn-xs"> NE {$ne_empenho[e]} </button>
                                        <button type="button" class="btn btn-success disabled btn-xs">R$ {$valor_empenho[e]}</button>
                                        {if isset($valorRps[e])}
                                            - 
                                            <input type="hidden" id="inputValorRpsLiquida" name="inputValorRpsLiquida" value="{$valorRps[e]}">
                                            <button type="button" class="btn btn-success disabled btn-xs">RPS R$ {$valorRps[e]}</button>
                                            <div class="form-group form-group-sm">
                                                <input class="form-control" type="text" id="inputOB" value="" title="Referente ao mês de {$mes_pgto_empenho[e]}" name="inputOB" required="" placeholder="Ordem Bancária">
                                            </div>

                                            <button type="submit" title="Uma vez liquidado não será mais possível voltar atrás!" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Liquidar</button>
                                        {else}
                                            <i> <span class="label label-default"> RPS não gerada para este pipeiro</span></i>
                                        {/if}
                                    {else}
                                        <td width="300" class="success"><strong>{$nomePipeiro[e]}</strong></td>
                                        <td class="text-center success">
                                            <button type="button" class="btn btn-warning disabled btn-xs"> LIQUIDADO </button>
                                            <button type="button" class="btn btn-default disabled btn-xs"> NC {$nc_empenho[e]} </button>
                                            <button type="button" class="btn btn-default disabled btn-xs"> NE {$ne_empenho[e]} </button>
                                            {if $valLiq[e] <= 0}
                                                <button type="button" class="btn btn-danger disabled btn-xs"> Saldo R$ {$valLiq[e]}</button>
                                            {else}
                                                <button type="button" class="btn btn-primary disabled btn-xs"> Saldo R$ {$valLiq[e]}</button>
                                            {/if}
                                            <button type="button" class="btn btn-info disabled btn-xs"> OB {$ordBanco[e]} </button>
                                        </td>

                                    {/if}
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
