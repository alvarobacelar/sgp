
<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Mudar Cidade de atuação de <u>{$pipeiro->nome_pipeiro}</h2>
    </div>
    <div class="panel-body">

        <form action="includes/controllers/editarPipeirosControl.php" method="post" name="formMudarCidade" class="form-horizontal" role="form">
            <input type="hidden" name="inputIdPipeiro" id="inputIdPipeiro" value="{$pipeiro->id_pipeiro}" />
            <input type="hidden" name="inputMudar" id="inputMudar" value="mudarCidade" />
            <div class="form-group">
                <label for="inputIdCidade" class="col-sm-2 control-label">Escolha a Cidade</label>
                <div class="col-sm-4">
                    <select name="selectIdCidade" required="" id="selectIdCidade" class="form-control">
                        <option value="{$pipeiro->id_cidade_atuante}">{$pipeiro->nome_cidade_atuante}</option>
                        {foreach $cidade as $c}
                            <option value="{$c->id_cidade_atuante}">{$c->nome_cidade_atuante}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDataInicio" class="col-sm-2 control-label">Data Inicio</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="inputDataInicio" name="inputDataInicio" value="" required="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputdataFim" class="col-sm-2 control-label">Data Fim</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="inputDataFim" name="inputDataFim" value="" required="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 