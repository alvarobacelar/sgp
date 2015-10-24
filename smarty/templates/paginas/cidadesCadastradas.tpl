<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cidades Cadastradas</h2>
    </div>

    {$erroCidade}
    <div class="table-responsive table-bordered">
        <table class="table">


            {if isset($nomeCidade)}
                <th><center>Cidade</center></th>
                <th><center>Estado</center></th>
                <th><center>Qnt de Pipeiros</center></th>
                <th><center>Qnt de Carradas para cada pipeiro</center></th>
                <th><center>Opções</center></th>

                {section name=a loop=$nomeCidade}
                    <tr class="text-center">
                        {if $nomeCidade[a] == "-"}
                            <td class="active"><strong>{$nomeCidade[a]}</strong></td>
                            <td class="active"> - </td>
                            <td class="active"><strong><a href="verCidade.php?id={$idCidade[a]}">{$totalPipeiro[a]}</a></strong></td>
                            <td class="active"><strong>{if $observacao[a] == ""}<span style="color: #666;"><small><i>Não adicionado</i></small></span>{else}<strong> {$observacao[a]}</strong> {/if}</strong></td>
                            <td class="active"><a href="verCidade.php?id={$idCidade[a]}" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-eye-open"></span> Ver Pipeiros Desativados</a></td>
                        {else if $status[a] == "1"}
                            <td class="active cidadeDesativada">{$nomeCidade[a]}</td>
                            <td class="active cidadeDesativada">{$uf[a]}</td>
                            <td class="active cidadeDesativada">{$totalPipeiro[a]}</td>
                            <td class="active cidadeDesativada">CIDADE DESATIVADA</td>
                            <td class="active">
                                {if $totalPipeiro[a] <= 0}
                                    <a class="btn btn-info btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-eye-open"></span> Ver Cidade</a>
                                {/if}
                                {if $nivel != "user" || $nivel != "vis"}
                                    {if $totalPipeiro[a] <= 0}
                                        <a href="#" class="btn btn-warning btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                    {/if}
                                    {if $totalPipeiro[a] <= 0}
                                        <button type="button" onclick="excluirCidade({$idCidade[a]})" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button>
                                    {else}
                                        <a href="verCidade.php?id={$idCidade[a]}" class="btn btn-info btn-xs" id="ver" data-toggle="tooltip" data-placement="left" title="{if $usuario_edicao_cidade[a] != ""}Ultima edição: {$usuario_edicao_cidade[a]}, {$data_edicao_cidade[a]}{else}Nenhuma edição registrada {/if}"> <span class="glyphicon glyphicon-open"></span> Desativar pipeiros</a>
                                        <button type="button" class="btn btn-danger btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-warning-sign"></span> Desative Pipeiros para excluir</button>
                                    {/if}
                                    <button onclick="ativarCidade({$idCidade[a]})" title="Ativar Cidade de {$nomeCidade[a]}" type="button" class="btn btn-success btn-xs" > <span class="glyphicon glyphicon-ok"></span> Ativar</button>
                                {/if}
                            </td>
                        {else}
                            <td class="active"><a href="verCidade.php?id={$idCidade[a]}" id="ver" data-toggle="tooltip" data-placement="left" title="{if $usuario_edicao_cidade[a] != ""}Ultima edição: {$usuario_edicao_cidade[a]}, {$data_edicao_cidade[a]}{else} Nenhuma edição registrada {/if}">{$nomeCidade[a]}</a></td>
                            <td class="active">{$uf[a]}</td>
                            <td class="active"><strong><a href="verCidade.php?id={$idCidade[a]}">{$totalPipeiro[a]}</a></strong></td>
                            <td class="active">{if empty($numeroCarradas[a])}<span style="color: #666;"><small><i>Não adicionado</i></small></span>{else} {$numeroCarradas[a]} {/if}</td>

                            <td class="active">
                                <a href="verCidade.php?id={$idCidade[a]}" class="btn btn-info btn-xs"> <span class="glyphicon glyphicon-eye-open"></span> Ver Cidade</a>
                                {if $nivel != "user"}
                                    {if $nivel != "vis"}
                                        <a href="editarCidade.php?id={$idCidade[a]}" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                        {* <button type="button" onclick="excluirCidade({$idCidade[a]})" class="btn btn-danger btn-xs" disabled="disabled"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button> *}
                                        <button type="button" onclick="desativarCidade({$idCidade[a]})" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove"></span> Desativar</button>
                                    {/if}
                                {/if}
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