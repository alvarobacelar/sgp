<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 10:10:15
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/mudarCidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67074626154ad4fa917ff49-67517479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e53b9344bd2918ed97cacb37254e4648bad16a1' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/mudarCidade.tpl',
      1 => 1429368907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67074626154ad4fa917ff49-67517479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ad4fa91fae70_15635619',
  'variables' => 
  array (
    'pipeiro' => 0,
    'cidade' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad4fa91fae70_15635619')) {function content_54ad4fa91fae70_15635619($_smarty_tpl) {?><p class="lead">Mudar Cidade de atuação de <u><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_pipeiro;?>
</u></p>

<form action="includes/controllers/editarPipeirosControl.php" method="post" name="formMudarCidade" class="form-horizontal" role="form">
    <input type="hidden" name="inputIdPipeiro" id="inputIdPipeiro" value="<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_pipeiro;?>
" />
    <input type="hidden" name="inputMudar" id="inputMudar" value="mudarCidade" />
    <div class="form-group">
        <label for="inputIdCidade" class="col-sm-2 control-label">Cidade Atual</label>
        <div class="col-sm-4">
            <select name="selectIdCidade" required="" id="selectIdCidade" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_cidade_atuante;?>
"><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_cidade_atuante;?>
</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cidade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id_cidade_atuante;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->nome_cidade_atuante;?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <p>
        <button type="submit" class="btn btn-primary">Confirmar</button>
        <button type="reset" class="btn btn-default">Cancelar</button>
    </p>
</form>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>