<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 10:44:44
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/cadastrarCidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:940052249561d0accd30700-52568575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d579e23baf9c150f61de782e8db0807e78363a6' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/cadastrarCidade.tpl',
      1 => 1431538377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940052249561d0accd30700-52568575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561d0accd6c140_37049470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d0accd6c140_37049470')) {function content_561d0accd6c140_37049470($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar Cidade</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

        <form action="includes/controllers/cadastrarCidadeControl.php" method="post" name="formCadastrarCidade" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputNomeCidade" class="col-sm-3 control-label">Nome da Cidade e UF</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputNomeCidade" name="inputNomeCidade" required="" title="Cidade" placeholder="Digite o nome da cidade">
                </div> 
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="inputUf" name="inputUf" required="" title="UF" placeholder="UF">
                </div>
            </div>

            <div class="form-group">
                <label for="textAreaObs" class="col-sm-3 control-label">Localidades Atendidas</label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="textAreaObs" name="textAreaObs" rows="3"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputQntCarradas" class="col-sm-3 control-label">Quantidade de Carradas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputQntCarradas" name="inputQntCarradas" required="" title="Quantidades de Carradas" placeholder="Quantidade de Carradas">
                </div> 
            </div>
            
            <div class="form-group">
                <label for="inputNrRotas" class="col-sm-3 control-label">Numero de Rotas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputNrRotas" name="inputNrRotas" required="" title="Numero de Rotas" placeholder="Numero de Rotas">
                </div> 
            </div>
            
            <div class="form-group">
                <label for="inputValorRotas" class="col-sm-3 control-label">Valor estimado por Rota</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputValorRotas" name="inputValorRotas" required="" title="Valor Extimado Rota" placeholder="Valor estimado das rotas">
                </div> 
            </div>
            
            <div class="form-group">
                <label for="inputValorAnual" class="col-sm-3 control-label">Estimativa de Valor Anual</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputValorAnual" name="inputValorAnual" required="" title="Estimativa do Valor anual" placeholder="Estimativa do valor anual">
                </div> 
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
                </div>
            </div>
        </form>

        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div>
</div>
<?php }} ?>