<?php /* Smarty version Smarty-3.1.13, created on 2015-01-27 15:51:01
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/informeAlteracoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:568008646547f51f5e57175-55483308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b99edf0837439bafa859e5376492a2c9f431d34' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/informeAlteracoes.tpl',
      1 => 1422381060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568008646547f51f5e57175-55483308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547f51f629e040_16632949',
  'variables' => 
  array (
    'erroAlteracao' => 0,
    'nomeUser' => 0,
    'nomeInfo' => 0,
    'posto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f51f629e040_16632949')) {function content_547f51f629e040_16632949($_smarty_tpl) {?><fieldset>
    <legend>Informe alterações</legend>
    <?php echo $_smarty_tpl->tpl_vars['erroAlteracao']->value;?>

    <form action="includes/controllers/informeAlteracoesControl.php" method="post" name="formInfoAlteracao" class="form-horizontal" role="form">

        <input type="hidden" id="inputNomeLogin" name="inputNomeLogin" value="<?php echo $_smarty_tpl->tpl_vars['nomeUser']->value;?>
">
        <input type="hidden" id="inputIdPipeiro" name="inputIdPipeiro" value="<?php echo $_smarty_tpl->tpl_vars['nomeInfo']->value->id_pipeiro;?>
">
        
        <div class="form-group">
            <label for="inputNomePipeiro" class="col-sm-2 control-label">Nome do Pipeiro</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputNomePipeiroAlt" name="inputNomePipeiroAlt" required="" title="" value="<?php if (!empty($_smarty_tpl->tpl_vars['nomeInfo']->value)){?><?php echo $_smarty_tpl->tpl_vars['nomeInfo']->value->nome_pipeiro;?>
<?php }?>" placeholder="Nome do Pipeiro">
            </div>
        </div>

        <div class="form-group">
            <label for="textAreaInforme" class="col-sm-2 control-label">Alterações</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="textAreaInforme" rows="6" name="textAreaInforme" required="" rows="3"></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputNomeSolicitante" class="col-sm-2 control-label">Nome do Informante</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputNomeSolicitante" name="inputNomeSolicitante" value="<?php echo $_smarty_tpl->tpl_vars['posto']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nomeUser']->value;?>
" required="" title="" placeholder="Nome do Militar">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> Enviar</button>
            </div>
        </div>

    </form>
</fieldset>
            <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>