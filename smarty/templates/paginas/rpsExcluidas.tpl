

{if isset($valorBusca)}
    <div class="panel panel-warning">

        <div class="panel-heading">

            <h2 class="panel-title">RPS Excluidas</h2>
        </div>

        <div class="panel-body">
            {$erroRPS}


            <div class="table-responsive table-bordered">
                <table class="table">

                    <th><center>Nr RPS</center></th>
                    <th><center>Pipeiro</center></th>
                    <th><center>Valor Bruto</center></th>
                    <th><center>Data Hora Emissão</center></th>
                    <th><center>Mês ano do serviço</center></th>
                    <th><center>Quem Gerou</center></th>
                    <th><center>Excluida por</center></th>
                    <th><center>Ações</center></th>

                    {foreach $valorBusca as $v}
                        <tr class="alert-danger text-center">
                            <td>{$v->id_rps}</td>
                            <td>{$v->nome_pipeiro}</td>
                            <td>{$v->valor_bruto_rps}</td>
                            <td>{$v->data_emissao_rps} / {$v->hora}</td>
                            <td>{$v->mes_rps} / {$v->ano_rps}</td> 
                            <td>{$v->nome_militar}</td>
                            <td><strong>{$v->mil_remove_rps}</strong></td>
                            <td width="150">
                                
                                {if $nivel != "user"}
                                    {if $nivel != "vis" && $funcao != "GCDA"}
                                        <a onclick="restaurarRPS({$v->id_rps})" class="btn btn-info btn-xs"> <span class="glyphicon glyphicon-remove-circle"></span> Restaurar</a>
                                    {/if}
                                {/if}
                            </td>
                        </tr>                    
                    {/foreach}

                </table>
                    {$paginacao}
            </div>
        </div>

    {else}

        <div class="panel panel-default">

            <div class="panel-heading">

                <h2 class="panel-title">RPS Excluidas</h2>
            </div>

            <div class="table-responsive table-bordered">
                <div class="panel-body">
                    <div class="alert alert-danger" role="alert">
                        <center>Nenhum resultado</center>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}



