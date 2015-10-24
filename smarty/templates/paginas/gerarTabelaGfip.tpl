<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar relatório de RPS por intervalo de data</h2>
    </div>
    <div class="panel-body">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Para gerar a Tabela GFIP, digite a data inicio e a data fim referente as RPS geradas. 
        </div>

        <form action="imprimirGfip.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="dataInicio" class="col-sm-2 control-label">Data Inicio</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="dataInicio" name="dataInicio" required="" placeholder="Data Inicial">
                </div>
            </div>

            <div class="form-group">
                <label for="dataFim" class="col-sm-2 control-label">Data Fim</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="dataFim" name="dataFim" required="" placeholder="Data Final">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" id="pesquisaVeiculo" onclick="this.form.target = '_blank'; return true;" class="btn btn-default">Gerar GFIP</button>
                </div>
            </div>
        </form><br />

        <p></p>
    </div>
</div>
<hr>
