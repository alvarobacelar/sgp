<?php /* Smarty version Smarty-3.1.13, created on 2015-02-06 10:29:47
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/cadastrarCarro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185397582254626e6d98e7a6-77432437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb567b756a5d4af30c9bd15960e4c6a7afe284fe' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/cadastrarCarro.tpl',
      1 => 1423046315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185397582254626e6d98e7a6-77432437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54626e6d9fbc00_11255055',
  'variables' => 
  array (
    'erroVeiculo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54626e6d9fbc00_11255055')) {function content_54626e6d9fbc00_11255055($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar Carro</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erroVeiculo']->value;?>

        <form action="includes/controllers/cadastrarCarroControl.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputCor" class="col-sm-2 control-label">Cor do Veículo</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputCor" name="inputCor" required="" title="" placeholder="Ex: Preto">
                </div>
            </div>

            <div class="form-group">
                <label for="inputRenavan" class="col-sm-2 control-label">Renavan</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputRenavan" name="inputRenavan" required="" title="" placeholder="Renavan do veiculo">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPlaca" class="col-sm-2 control-label">Placa</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputPlaca" name="inputPlaca" required="" title="" placeholder="Ex: XXX-0000">
                </div>
            </div>

            <div class="form-group">
                <label for="inputTipoVeiculo" class="col-sm-2 control-label">Tipo de Veiculo</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTipoVeiculo" name="inputTipoVeiculo" required="" title="" placeholder="Ex: Caminhão | Trator">
                </div>
            </div>
            <div class="form-group">
                <label for="inputMarca" class="col-sm-2 control-label">Marca</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputMarca" name="inputMarca" required="" title="" placeholder="Ex: Mercedes">
                </div>
            </div>

            <div class="form-group">
                <label for="inputModelo" class="col-sm-2 control-label">Modelo</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputModelo" name="inputModelo" required="" title="" placeholder="Modelo">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAnoFabricacao" class="col-sm-2 control-label">Ano de Fabricação</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputAnoFabricacao" name="inputAnoFabricacao" required="" title="" placeholder="Ex: 1987">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAnoModelo" class="col-sm-2 control-label">Ano de Modelo</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputAnoModelo" name="inputAnoModelo" required="" title="" placeholder="Ex: 1987">
                </div>
            </div>

            <div class="form-group">
                <label for="inputCategoria" class="col-sm-2 control-label">Categoria</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputCategoria" name="inputCategoria" required="" title="" placeholder="Categoria">
                </div>
            </div>

            <div class="form-group">
                <label for="inputChassis" class="col-sm-2 control-label">Chassis</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputChassis" name="inputChassis" required="" title="" placeholder="Chassis">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAnoLicenciamento" class="col-sm-2 control-label">Ano do licenciamento</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="inputAnoLicenciamento" name="inputAnoLicenciamento" required="" title="" placeholder="Ex: 2015">
                </div>
            </div>

            <div class="form-group">
                <label for="inputCapacidadePipa" class="col-sm-2 control-label">Capacidade da pipa</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputCapacidadePipa" name="inputCapacidadePipa" required="" title="" placeholder="Ex: 8000 litros">
                </div>
            </div>

            <div class="form-group">
                <label for="inputProprietario" class="col-sm-2 control-label">Proprietário do Veículo</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputProprietario" name="inputProprietario" required="" title="" placeholder="Nome do Proprietario">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
                </div>
            </div>
        </form>
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div>
</div><?php }} ?>