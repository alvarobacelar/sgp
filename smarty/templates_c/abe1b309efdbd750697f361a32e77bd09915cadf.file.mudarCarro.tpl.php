<?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 18:38:32
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/mudarCarro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1546815541547bcdef5c0843-71806446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abe1b309efdbd750697f361a32e77bd09915cadf' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/mudarCarro.tpl',
      1 => 1417638301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1546815541547bcdef5c0843-71806446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547bcdef5fec25_07485831',
  'variables' => 
  array (
    'pipeiro' => 0,
    'idPipeiro' => 0,
    'veiculo' => 0,
    'c' => 0,
    'resultado' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547bcdef5fec25_07485831')) {function content_547bcdef5fec25_07485831($_smarty_tpl) {?><p class="lead">Mudar Carro de <u><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_pipeiro;?>
</u></p>

<form method="post" action="mudarCarro.php?id=<?php echo $_smarty_tpl->tpl_vars['idPipeiro']->value;?>
&idCidade<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_cidade_atuante;?>
" class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <div class="col-sm-4">
            <input type="text" class="form-control" id="buscaCarro" name="buscaCarro" placeholder="Pesquisar por nome">
        </div>
    </div>
    <button type="submit" id="pesquisaVeiculo" class="btn btn-default">Pesquisar</button>
</form><br />

<form action="includes/controllers/editarPipeirosControl.php" method="post" name="formMudarCidade" class="form-horizontal" role="form">
    <input type="hidden" name="inputIdPipeiro" id="inputIdPipeiro" value="<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_pipeiro;?>
" />
    <input type="hidden" name="inputMudar" id="inputMudar" value="mudarCarro" />
    <input type="hidden" name="idCidade" id="idCidade" value="<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_cidade_atuante;?>
" />
    <div class="form-group">
        <label for="inputIdCidade" class="col-sm-2 control-label">Veículo Atual</label>
        <div class="col-sm-4">
            <select name="selectIdCarro" required="" id="selectIdCarro" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_veiculo;?>
"><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->placa_veiculo;?>
</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['veiculo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id_veiculo;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->placa_veiculo;?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['resultado']->value)){?>


        <table class="table">
            <th><center>Selecionar Veículo</center></th>
            <th><center>Tipo Veículo</center></th>
            <th><center>Marca</center></th>
            <th><center>Modelo</center></th>
                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <tr>
                    <td class="active">
                        <label>
                            <input type="radio" name="selectIdCarro" id="selectIdCarro" value="<?php echo $_smarty_tpl->tpl_vars['r']->value->id_veiculo;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['r']->value->placa_veiculo;?>

                        </label>
                    </td>
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['r']->value->tipo_veiculo;?>
</td>
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['r']->value->marca_veiculo;?>
</td>
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['r']->value->modelo_veiculo;?>
</td>
                </tr>
            <?php } ?>
        </table>
    <?php }?>
    <p>
        <button type="submit" class="btn btn-primary">Mudar</button>
        <button type="reset" class="btn btn-default">Cancelar</button>
    </p>
</form>

<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>