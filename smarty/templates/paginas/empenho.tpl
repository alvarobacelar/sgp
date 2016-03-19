<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar empenho por cidade</h2>
    </div>

    {$erroCidade}
    <div class="table-responsive table-bordered">
        <table class="table">


            {if isset($nomeCidade)}
                <th><center>Cidade</center></th>
                <th><center>Estado</center></th>
                <th><center>Qnt. Pipeiros</center></th>
                <th><center>Ação</center></th>

                {section name=a loop=$nomeCidade}
                    <tr class="text-center">
                        {if $nomeCidade[a] == "-"}
                            <td class="active"><small><i>Pipeiros desativados</i></small></td>
                            <td class="active"> - </td>
                            <td class="active">{$totalPipeiro[a]}</strong></td>
                            <td class="active"><a href="#" class="btn btn-default btn-xs disabled"> <span class="glyphicon glyphicon-off"></span> Pipeiros Desativados</a></td>
                        {else if $status[a] == "1"}
                            <td class="active cidadeDesativada">{$nomeCidade[a]}</td>
                            <td class="active cidadeDesativada">{$uf[a]}</td>
                            <td class="active cidadeDesativada">{$totalPipeiro[a]}</td>                                             
                            <td class="active">
                                {if $totalPipeiro[a] <= 0}
                                    <a class="btn btn-info btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-eye-open"></span> Desativada</a>
                                {/if}
                                
                            </td>
                        {else}
                            <td class="active"><a href="lancarEmpenho.php?id={$idCidade[a]}" id="ver" data-toggle="tooltip" data-placement="left" title="Cadastrar empenho para pipeiros de {$nomeCidade[a]}">{$nomeCidade[a]}</a></td>
                            <td class="active">{$uf[a]}</td>
                            <td class="active"><strong>{$totalPipeiro[a]}</strong></td>
                            <td class="active">
                                <a href="lancarEmpenho.php?id={$idCidade[a]}" class="btn btn-primary btn-xs"> <span class="glyphicon glyphicon-usd"></span> Lançar empenho</a>
                                
                            </td>
                        {/if}

                    </tr>
                {/section}
            {else}
                <tr class="text-center"><td><h2>Nenhuma cidade cadastrada</h2></td></tr>
                        {/if}
        </table>
    </div>
    <br />
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 

</div>