<?php /* Smarty version Smarty-3.1.13, created on 2015-09-09 23:20:00
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/informeAlteracoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23196032455f0e83d0019f4-66684695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dee432a5116958647ad5c3b31e136a0fb20d4cba' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/informeAlteracoes.tpl',
      1 => 1441851596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23196032455f0e83d0019f4-66684695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55f0e83d019384_24407544',
  'variables' => 
  array (
    'erroAlteracao' => 0,
    'nomeUser' => 0,
    'nomeInfo' => 0,
    'posto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f0e83d019384_24407544')) {function content_55f0e83d019384_24407544($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Informar alteração</h2>
    </div>
    <div class="panel-body">

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

    </div>
    <div class="panel-footer">
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div><?php }} ?>