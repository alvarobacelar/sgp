<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Mudar Carro de <u>{$pipeiro->nome_pipeiro}</h2>
    </div>
    <div class="panel-body">

        <form method="post" action="mudarCarro.php?id={$idPipeiro}&idCidade{$pipeiro->id_cidade_atuante}" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="buscaCarro" name="buscaCarro" placeholder="Pesquisar por nome">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-default">Pesquisar</button>
        </form>

        <form action="includes/controllers/editarPipeirosControl.php" method="post" name="formMudarCidade" class="form-horizontal" role="form">
            <input type="hidden" name="inputIdPipeiro" id="inputIdPipeiro" value="{$pipeiro->id_pipeiro}" />
            <input type="hidden" name="inputMudar" id="inputMudar" value="mudarCarro" />
            <input type="hidden" name="idCidade" id="idCidade" value="{$pipeiro->id_cidade_atuante}" />
            <div class="form-group">
                <label for="inputIdCidade" class="col-sm-2 control-label">Veículo Atual</label>
                <div class="col-sm-4">
                    <select name="selectIdCarro" required="" id="selectIdCarro" class="form-control">
                        <option value="{$pipeiro->id_veiculo}">{$pipeiro->placa_veiculo}</option>
                        {foreach $veiculo as $c}
                            <option value="{$c->id_veiculo}">{$c->placa_veiculo}</option>
                        {/foreach}
                    </select>
                </div>
            </div>

            {if isset($resultado)}


                <table class="table">
                    <th><center>Selecionar Veículo</center></th>
                    <th><center>Tipo Veículo</center></th>
                    <th><center>Marca</center></th>
                    <th><center>Modelo</center></th>
                        {foreach $resultado as $r}
                        <tr>
                            <td class="active">
                                <label>
                                    <input type="radio" name="selectIdCarro" id="selectIdCarro" value="{$r->id_veiculo}">
                                    {$r->placa_veiculo}
                                </label>
                            </td>
                            <td class="active">{$r->tipo_veiculo}</td>
                            <td class="active">{$r->marca_veiculo}</td>
                            <td class="active">{$r->modelo_veiculo}</td>
                        </tr>
                    {/foreach}
                </table>
            {/if}
            <p>
                <button type="submit" class="btn btn-primary">Mudar</button>
                <button type="reset" class="btn btn-default">Cancelar</button>
            </p>
        </form>
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 