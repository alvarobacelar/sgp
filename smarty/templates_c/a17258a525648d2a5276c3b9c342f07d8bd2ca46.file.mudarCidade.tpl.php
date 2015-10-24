<?php /* Smarty version Smarty-3.1.13, created on 2014-12-03 16:42:06
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/mudarCidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1688385368547f597e92a314-25494139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17258a525648d2a5276c3b9c342f07d8bd2ca46' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/mudarCidade.tpl',
      1 => 1411919945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688385368547f597e92a314-25494139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pipeiro' => 0,
    'cidade' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547f597e95f7b5_95574354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f597e95f7b5_95574354')) {function content_547f597e95f7b5_95574354($_smarty_tpl) {?><p class="lead">Mudar Cidade de atuação de <u><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_pipeiro;?>
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
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a></center> <?php }} ?>