<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar Relatorio de entrada de Pipeiros ao Batalhão</h2>
    </div>
    <div class="panel-body">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Digite a data para gerar o relatório de entrada e saida de pipeiros do batalhão
        </div>

        <form action="imprimirGfip.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
            
            <input type="hidden" id="relEntrada" name="relEntrada" value="1">
            <div class="form-group">
                <label for="dataInicio" class="col-sm-2 control-label">Data do relatório</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="dataInicio" name="dataInicio" required="" placeholder="Data">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" id="pesquisaVeiculo" onclick="this.form.target = '_blank'; return true;" class="btn btn-default">Gerar Relatório</button>
                </div>
            </div>
        </form><br />

        <p></p>
    </div>
</div>
<hr>
