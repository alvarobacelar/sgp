<div class="panel panel-warning">

    <div class="panel-heading">

        <h2 class="panel-title">Pesquisar Alteração</h2>
    </div>
    <div class="panel-body">

        {$erroRPS}
        <form method="post" class="navbar-form navbar-left form-inline" >

            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCpf" name="inputCpf" required="" placeholder="CPF do pipeiro">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-warning">Pesquisar</button>
        </form>

        <form method="post" class="navbar-form navbar-left form-inline" >
            <div class="form-group">
                <div class="col-sm-10">
                    <select name="selectIdCidade" required="" id="selectIdCidade" class="form-control">
                        <option value="">Pesquisa por cidade</option>
                        {foreach $cidade as $c}
                            <option value="{$c->nome_cidade_atuante}">{$c->nome_cidade_atuante}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-warning">Pesquisar</button>
        </form>
        <!--
        <div class="form-group">
            <div class="col-sm-7">
                <input type="text" class="form-control" id="dataDeclaracao" name="dataDeclaracao" required="" placeholder="Data">
            </div>
        </div>
        -->


        <p></p>
    </div>
</div>
<hr>

{if isset($valorBusca)}
    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">{if isset($buscaRPS)}Resultado de: <u>{$buscaRPS}</u> {else if isset($buscaMilitar)} Resultado das RPS geradas por: <u>{$buscaMilitar}</u> {/if}</h2>
        </div>

        <div class="table-responsive table-bordered">
            <table class="table">

                <th><center>Nr RPS</center></th>
                <th><center>Pipeiro</center></th>
                <th><center>Valor Liquido</center></th>
                <th><center>Mês ano do serviço</center></th>
                <th><center>Qnt Planilhas</center></th>
                <th><center>Qnt Assinaturas</center></th>
                <th><center>Alterações</center></th>
                <th><center>Ações</center></th>

                {foreach $valorBusca as $v}
                    <tr class="text-center">
                        <td>{$v->id_rps}</td>
                        <td>{$v->nome_pipeiro}</td>
                        <td>{$v->valor_liquido_rps}</td>
                        <td>{$v->mes_rps} / {$v->ano_rps}</td> 
                        <td>{if !empty($v->tickets_declaracao)}{$v->tickets_declaracao}{else}<small><i>Sem informações</i></small>{/if}</td>
                        <td>{if !empty($v->assinatura_declaracao)}{$v->assinatura_declaracao}{else}<small><i>Sem informações</i></small>{/if}</td>
                        <td width="200">{if !empty($v->alteracoes_declaracao)}{$v->alteracoes_declaracao}{else}<small><i>Sem alterações</i></small>{/if}</td>
                        <td >
                            <a href="RPS2via.php?rps2via={$v->id_rps}" target="_blank" class="btn btn-info btn-xs"> Ver RPS</a><br>

                            {if $nivel != "user"}
                                {if $nivel != "vis" && $funcao != "GCDA"}
                                    <a onclick="excluirRPS({$v->id_rps})" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove-circle"></span> Excluir</a>
                                {/if}
                            {/if}
                        </td>
                    </tr>                    
                {/foreach}

            </table>
        </div>
    </div>

{else}

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">{if isset($buscaRPS)}Resultado de nome de pipeiro: <u>{$buscaRPS}</u> {else if isset($buscaMilitar)} Resultado das RPS geradas por: <u>{$buscaMilitar}</u> {/if}</h2>
        </div>

        <div class="table-responsive table-bordered">
            <div class="panel-body">
                <div class="alert alert-danger" role="alert">
                    <center>Nenhum resultado</center>
                </div>
            </div>
        </div>
    </div>

{/if}