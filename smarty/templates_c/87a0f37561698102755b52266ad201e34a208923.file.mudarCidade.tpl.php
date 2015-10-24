<?php /* Smarty version Smarty-3.1.13, created on 2015-10-16 10:43:45
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/mudarCidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63825687355e4a201ad94e9-80958342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a0f37561698102755b52266ad201e34a208923' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/mudarCidade.tpl',
      1 => 1445003022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63825687355e4a201ad94e9-80958342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55e4a201b0f924_57419715',
  'variables' => 
  array (
    'pipeiro' => 0,
    'cidade' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e4a201b0f924_57419715')) {function content_55e4a201b0f924_57419715($_smarty_tpl) {?>
<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Mudar Cidade de atuação de <u><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_pipeiro;?>
</h2>
    </div>
    <div class="panel-body">

        <form action="includes/controllers/editarPipeirosControl.php" method="post" name="formMudarCidade" class="form-horizontal" role="form">
            <input type="hidden" name="inputIdPipeiro" id="inputIdPipeiro" value="<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_pipeiro;?>
" />
            <input type="hidden" name="inputMudar" id="inputMudar" value="mudarCidade" />
            <div class="form-group">
                <label for="inputIdCidade" class="col-sm-2 control-label">Escolha a Cidade</label>
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
            <div class="form-group">
                <label for="inputDataInicio" class="col-sm-2 control-label">Data Inicio</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="inputDataInicio" name="inputDataInicio" value="" required="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputdataFim" class="col-sm-2 control-label">Data Fim</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" id="inputDataFim" name="inputDataFim" value="" required="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>