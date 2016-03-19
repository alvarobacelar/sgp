<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Informar erro</h2>
    </div>
    <div class="panel-body">

        {$erroAlteracao}
        <form action="includes/controllers/informeAlteracoesControl.php" method="post" name="formInfoAlteracao" class="form-horizontal" role="form">

            <input type="hidden" id="inputNomeLogin" name="inputNomeLogin" value="{$nomeUser}">

            <div class="form-group">
                <label for="textAreaInforme" class="col-sm-2 control-label">Alterações</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="textAreaInforme" rows="6" name="textAreaInforme" required="" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="inputNomeSolicitante" class="col-sm-2 control-label">Nome do Informante</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputNomeSolicitante" name="inputNomeSolicitante" value="{$posto} {$nomeUser}" required="" title="" placeholder="Nome do Militar">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> Enviar</button>
                </div>
            </div>

        </form>

    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div>