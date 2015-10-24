<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Pesquisar RPS</h2>
    </div>
    <div class="panel-body">

        {$erroRPS}
        <form method="get" class="navbar-form navbar-left form-inline" >
            <div class="form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="buscaRPS" name="buscaRPS" required="" placeholder="Nome do pipeiro">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-default">Pesquisar</button>
        </form>

        <form method="get" class="navbar-form navbar-left form-inline" >
            <div class="form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="buscaMilitar" name="buscaMilitar" required="" placeholder="Militar que gerou">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-default">Pesquisar</button>
        </form><br />

        <p></p>
    </div>
</div>
<hr>

{if isset($valorBusca)}
    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title">{if isset($buscaRPS)}Resultado de nome de pipeiro: <u>{$buscaRPS}</u> {else if isset($buscaMilitar)} Resultado das RPS geradas por: <u>{$buscaMilitar}</u> {/if}</h2>
        </div>

        <div class="table-responsive table-bordered">
            <table class="table">

                <th><center>Nr RPS</center></th>
                <th><center>Pipeiro</center></th>
                <th><center>Valor Bruto</center></th>
                <th><center>Data Hora Emissão</center></th>
                <th><center>Mês ano do serviço</center></th>
                <th><center>Quem Gerou</center></th>
                <th><center>IP</center></th>
                <th><center>Ações</center></th>

                {foreach $valorBusca as $v}
                    <tr class="text-center">
                        <td>{$v->id_rps}</td>
                        <td>{$v->nome_pipeiro}</td>
                        <td>{$v->valor_bruto_rps}</td>
                        <td>{$v->data_emissao_rps} / {$v->hora}</td>
                        <td>{$v->mes_rps} / {$v->ano_rps}</td> 
                        <td>{$v->nome_militar}</td>
                        <td>{$v->ip}</td>
                        <td width="150">
                            <a href="RPS2via.php?rps2via={$v->id_rps}" target="_blank" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-open"></span> Ver</a>
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