<?php /* Smarty version Smarty-3.1.13, created on 2015-08-31 15:53:00
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/mudarCarro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104422548155e49f15c9bb36-64950876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1624d828aab76dd5ac102dfbd1b63c27b955252e' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/mudarCarro.tpl',
      1 => 1441047176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104422548155e49f15c9bb36-64950876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55e49f15cc7ec4_60345080',
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
<?php if ($_valid && !is_callable('content_55e49f15cc7ec4_60345080')) {function content_55e49f15cc7ec4_60345080($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Mudar Carro de <u><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_pipeiro;?>
</h2>
    </div>
    <div class="panel-body">

        <form method="post" action="mudarCarro.php?id=<?php echo $_smarty_tpl->tpl_vars['idPipeiro']->value;?>
&idCidade<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_cidade_atuante;?>
" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="buscaCarro" name="buscaCarro" placeholder="Pesquisar por nome">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-default">Pesquisar</button>
        </form>

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
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>