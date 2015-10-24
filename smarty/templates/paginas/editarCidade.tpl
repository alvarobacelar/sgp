<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Editar Cidade</h2>
    </div>
    <div class="panel-body">

        <form action="includes/controllers/editarCidadeControl.php" method="post" name="formCadastrarCidade" class="form-horizontal" role="form">
            <div class="form-group">
                <input type="hidden" name="inputIdEditarCidade" id="inputIdEditarUsuario" value="{$cidade->id_cidade_atuante}" />
                <label for="inputNomeCidade" class="col-sm-3 control-label">Nome da Cidade e UF</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputNomeCidade" name="inputNomeCidade" required="" value="{$cidade->nome_cidade_atuante}" title="Cidade" placeholder="Digite o nome da cidade">
                </div> 
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="inputUf" name="inputUf" required="" value="{$cidade->uf_cidade}" title="UF" placeholder="UF">
                </div>
            </div>

            <div class="form-group">
                <label for="textAreaObs" class="col-sm-3 control-label">Localidades Atendidas</label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="textAreaObs" name="textAreaObs" rows="3">{$cidade->obs_cidade_atuante}</textarea>
                </div>
            </div>


            <div class="form-group">
                <label for="inputQntCarradas" class="col-sm-3 control-label">Quantidade de Carradas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputQntCarradas" name="inputQntCarradas" value="{$cidade->qnt_carradas_cidade}" required="" title="Quantidades de Carradas" placeholder="Quantidade de Carradas">
                </div> 
            </div>

            <div class="form-group">
                <label for="inputNrRotas" class="col-sm-3 control-label">Numero de Rotas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputNrRotas" name="inputNrRotas" required="" value="{$cidade->numero_rotas_cidade}" title="Numero de Rotas" placeholder="Numero de Rotas">
                </div> 
            </div>

            <div class="form-group">
                <label for="inputValorRotas" class="col-sm-3 control-label">Valor estimado por Rota</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputValorRotas" name="inputValorRotas" required="" title="Valor Extimado Rota" value="{$cidade->valor_estimado_cidade}" placeholder="Valor estimado das rotas">
                </div> 
            </div>

            <div class="form-group">
                <label for="inputValorAnual" class="col-sm-3 control-label">Estimativa de Valor Anual</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputValorAnual" name="inputValorAnual" required="" value="{$cidade->valor_anual_cidade}" title="Estimativa do Valor anual" placeholder="Estimativa do valor anual">
                </div> 
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Editar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 