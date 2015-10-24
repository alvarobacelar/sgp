<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Editar Veículo</h2>
    </div>
    <div class="panel-body">

        <form action="includes/controllers/editarVeiculoControl.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">

            <input type="hidden" name="inputIdVeiculo" name="inputIdVeiculo" value="{$veiculo->id_veiculo}" />
            <div class="form-group">
                <label for="inputRenavan" class="col-sm-2 control-label">Ranavan</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputRenavan" name="inputRenavan" required="" title="" value="{$veiculo->renavan_veiculo}" placeholder="Renavan do veiculo">
                </div>
            </div>

            <div class="form-group">
                <label for="inputRenavan" class="col-sm-2 control-label">Cor</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputCor" name="inputCor" required="" title="" value="{$veiculo->cor_veiculo}" placeholder="Preto">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPlaca" class="col-sm-2 control-label">Placa</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputPlaca" name="inputPlaca" value="{$veiculo->placa_veiculo}" required="" title="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputTipoVeiculo" class="col-sm-2 control-label">Tipo de Veiculo</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTipoVeiculo" name="inputTipoVeiculo" required="" value="{$veiculo->tipo_veiculo}" title="" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputMarca" class="col-sm-2 control-label">Marca</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputMarca" name="inputMarca" required="" value="{$veiculo->marca_veiculo}" title="" >
                </div>
            </div>

            <div class="form-group">
                <label for="inputModelo" class="col-sm-2 control-label">Modelo</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputModelo" name="inputModelo" required="" value="{$veiculo->modelo_veiculo}" title="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAnoFabricacao" class="col-sm-2 control-label">Ano de Fabricação</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputAnoFabricacao" name="inputAnoFabricacao" value="{$veiculo->ano_fab_veiculo}" required="" title="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAnoModelo" class="col-sm-2 control-label">Ano de Modelo</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputAnoModelo" name="inputAnoModelo" value="{$veiculo->ano_modelo_veiculo}" required="" title="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputCategoria" class="col-sm-2 control-label">Categoria</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputCategoria" name="inputCategoria" required="" value="{$veiculo->categoria_veiculo}" title="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputChassis" class="col-sm-2 control-label">Chassis</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputChassis" name="inputChassis" required="" value="{$veiculo->chassis_veiculo}" title="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAnoLicenciamento" class="col-sm-2 control-label">Ano do licenciamento</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputAnoLicenciamento" name="inputAnoLicenciamento" value="{$veiculo->ano_licenciamento_veiculo}" required="" title="" >
                </div>
            </div>

            <div class="form-group">
                <label for="inputCapacidadePipa" class="col-sm-2 control-label">Capacidade da pipa</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputCapacidadePipa" name="inputCapacidadePipa" required="" value="{$veiculo->cap_lts_veiculo}" title="" >
                </div>
            </div>

            <div class="form-group">
                <label for="inputCapacidadePipa" class="col-sm-2 control-label">Proprietario do veículo</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputProprietario" name="inputProprietario" required="" value="{$veiculo->proprietario_veiculo}" title="Nome do proprietario" >
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