<div class="panel panel-default">

    <div class="panel-heading">
        <h2 class="panel-title">{if isset($busca)}Busca por placa: <i><u>{$busca}</u></i> | <a href="veiculosCadastrados.php" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-list-alt"></span> Todos os Veículos</a>{else}Todos Veículos Cadastrados{/if}</h2>
    </div>

    {$erroVeiculo}
    <div id="ajaxCarro" class="table-responsive table-bordered">

        <form method="get" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" id="busca" name="busca" placeholder="Pesquisar po placa">
            </div>
            <button type="submit" id="pesquisaCarro" class="btn btn-default">Pesquisar</button>
        </form>

        <table class="table table-bordered">


            {if isset($veiculo)}
                <th><center>Placa</center></th>
                <th><center>Cor</center></th>
                <th><center>Renavan</center></th>
                <th><center>Proprietário</center></th>
                <th><center>Marca</center></th>
                <th><center>Modelo</center></th>
                <th><center>Ano Fab/Mod</center></th>
                <th><center>Cap. Pipa</center></th>
                <th><center>Ano Licen.</center></th>
                <th width="150"><center>Opções</center></th>

                {foreach $veiculo as $u}
                    <tr class="text-left">
                        {if $u->id_veiculo == 2}
                            <td class="active text-center"><strong>{$u->placa_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->cor_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->renavan_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->proprietario_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->marca_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->modelo_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->ano_fab_veiculo}/{$u->ano_modelo_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->cap_lts_veiculo}</strong></td>
                            <td class="active text-center"><strong>{$u->ano_licenciamento_veiculo}</strong></td>
                            <td class="active text-center">
                                <button class="btn btn-default btn-xs">Pipeiros Sem Veículos</button>
                            </td>

                        {else}
                            <td class="active">{$u->placa_veiculo}</td>
                            <td class="active">{$u->cor_veiculo}</td>
                            <td class="active">{$u->renavan_veiculo}</td>
                            <td class="active">{$u->proprietario_veiculo}</td>
                            <td class="active">{$u->marca_veiculo}</td>
                            <td class="active">{$u->modelo_veiculo}</td>
                            <td class="active">{$u->ano_fab_veiculo}/{$u->ano_modelo_veiculo}</td>
                            <td class="active">{$u->cap_lts_veiculo}</td>
                            <td class="active">{$u->ano_licenciamento_veiculo}</td>
                            <td class="active">
                                <a href="editarVeiculo.php?id={$u->id_veiculo}" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                <button type="button" onclick="excluirCarro({$u->id_veiculo})" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button>
                            </td>
                        {/if}
                    </tr>
                {/foreach}
            {else}
                <tr class="text-center"><td><h2>Nenhum carro cadastrado</h2></td></tr>
                        {/if}
        </table>
    </div>
</div>

{$paginacao}<br /> <br />
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
