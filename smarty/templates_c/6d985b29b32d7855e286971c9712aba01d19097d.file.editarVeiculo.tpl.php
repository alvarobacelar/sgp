<?php /* Smarty version Smarty-3.1.13, created on 2014-11-06 19:38:20
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/editarVeiculo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6584223545bea4c69b909-12969996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d985b29b32d7855e286971c9712aba01d19097d' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/editarVeiculo.tpl',
      1 => 1415212592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6584223545bea4c69b909-12969996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'veiculo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_545bea4c72e9b7_85054265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545bea4c72e9b7_85054265')) {function content_545bea4c72e9b7_85054265($_smarty_tpl) {?><fieldset>
    <legend>Editar Carro</legend>  

    <form action="includes/controllers/editarVeiculoControl.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">

        <input type="hidden" name="inputIdVeiculo" name="inputIdVeiculo" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->id_veiculo;?>
" />
        <div class="form-group">
            <label for="inputRenavan" class="col-sm-2 control-label">Ranavan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputRenavan" name="inputRenavan" required="" title="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->renavan_veiculo;?>
" placeholder="Renavan do veiculo">
            </div>
        </div>

        <div class="form-group">
            <label for="inputRenavan" class="col-sm-2 control-label">Cor</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputCor" name="inputCor" required="" title="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->cor_veiculo;?>
" placeholder="Preto">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPlaca" class="col-sm-2 control-label">Placa</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputPlaca" name="inputPlaca" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->placa_veiculo;?>
" required="" title="">
            </div>
        </div>

        <div class="form-group">
            <label for="inputTipoVeiculo" class="col-sm-2 control-label">Tipo de Veiculo</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputTipoVeiculo" name="inputTipoVeiculo" required="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->tipo_veiculo;?>
" title="" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputMarca" class="col-sm-2 control-label">Marca</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputMarca" name="inputMarca" required="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->marca_veiculo;?>
" title="" >
            </div>
        </div>

        <div class="form-group">
            <label for="inputModelo" class="col-sm-2 control-label">Modelo</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputModelo" name="inputModelo" required="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->modelo_veiculo;?>
" title="">
            </div>
        </div>

        <div class="form-group">
            <label for="inputAnoFabricacao" class="col-sm-2 control-label">Ano de Fabricação</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputAnoFabricacao" name="inputAnoFabricacao" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->ano_fab_veiculo;?>
" required="" title="">
            </div>
        </div>

        <div class="form-group">
            <label for="inputAnoModelo" class="col-sm-2 control-label">Ano de Modelo</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputAnoModelo" name="inputAnoModelo" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->ano_modelo_veiculo;?>
" required="" title="">
            </div>
        </div>

        <div class="form-group">
            <label for="inputCategoria" class="col-sm-2 control-label">Categoria</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputCategoria" name="inputCategoria" required="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->categoria_veiculo;?>
" title="">
            </div>
        </div>

        <div class="form-group">
            <label for="inputChassis" class="col-sm-2 control-label">Chassis</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputChassis" name="inputChassis" required="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->chassis_veiculo;?>
" title="">
            </div>
        </div>

        <div class="form-group">
            <label for="inputAnoLicenciamento" class="col-sm-2 control-label">Ano do licenciamento</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputAnoLicenciamento" name="inputAnoLicenciamento" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->ano_licenciamento_veiculo;?>
" required="" title="" >
            </div>
        </div>

        <div class="form-group">
            <label for="inputCapacidadePipa" class="col-sm-2 control-label">Capacidade da pipa</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputCapacidadePipa" name="inputCapacidadePipa" required="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->cap_lts_veiculo;?>
" title="" >
            </div>
        </div>

        <div class="form-group">
            <label for="inputCapacidadePipa" class="col-sm-2 control-label">Proprietario do veículo</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputProprietario" name="inputProprietario" required="" value="<?php echo $_smarty_tpl->tpl_vars['veiculo']->value->proprietario_veiculo;?>
" title="Nome do proprietario" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Editar</button>
            </div>
        </div>
    </form>
</fieldset>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a></center> <?php }} ?>