<?php /* Smarty version Smarty-3.1.13, created on 2015-01-27 13:07:26
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/editarCidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59566355854c5ac8dc2cda8-17430186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc7b60f0a7b603260f3ed397f8d702443c7c1d6b' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/editarCidade.tpl',
      1 => 1422371245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59566355854c5ac8dc2cda8-17430186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c5ac8dc432d8_02505928',
  'variables' => 
  array (
    'cidade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c5ac8dc432d8_02505928')) {function content_54c5ac8dc432d8_02505928($_smarty_tpl) {?><fieldset>
    <legend>Editar Cidade</legend>    

    <form action="includes/controllers/editarCidadeControl.php" method="post" name="formCadastrarCidade" class="form-horizontal" role="form">
        <div class="form-group">
            <input type="hidden" name="inputIdEditarCidade" id="inputIdEditarUsuario" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value->id_cidade_atuante;?>
" />
            <label for="inputNomeCidade" class="col-sm-3 control-label">Nome da Cidade e UF</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputNomeCidade" name="inputNomeCidade" required="" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value->nome_cidade_atuante;?>
" title="Cidade" placeholder="Digite o nome da cidade">
            </div> 
            <div class="col-sm-1">
                <input type="text" class="form-control" id="inputUf" name="inputUf" required="" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value->uf_cidade;?>
" title="UF" placeholder="UF">
            </div>
        </div>

        <div class="form-group">
            <label for="textAreaObs" class="col-sm-3 control-label">Localidades Atendidas</label>
            <div class="col-sm-5">
                <textarea class="form-control" id="textAreaObs" name="textAreaObs" rows="3"><?php echo $_smarty_tpl->tpl_vars['cidade']->value->obs_cidade_atuante;?>
</textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="inputQntCarradas" class="col-sm-3 control-label">Quantidade de Carradas</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputQntCarradas" name="inputQntCarradas" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value->qnt_carradas_cidade;?>
" required="" title="Quantidades de Carradas" placeholder="Quantidade de Carradas">
            </div> 
        </div>

        <div class="form-group">
            <label for="inputNrRotas" class="col-sm-3 control-label">Numero de Rotas</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputNrRotas" name="inputNrRotas" required="" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value->numero_rotas_cidade;?>
" title="Numero de Rotas" placeholder="Numero de Rotas">
            </div> 
        </div>

        <div class="form-group">
            <label for="inputValorRotas" class="col-sm-3 control-label">Valor estimado por Rota</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputValorRotas" name="inputValorRotas" required="" title="Valor Extimado Rota" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value->valor_estimado_cidade;?>
" placeholder="Valor estimado das rotas">
            </div> 
        </div>

        <div class="form-group">
            <label for="inputValorAnual" class="col-sm-3 control-label">Estimativa de Valor Anual</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputValorAnual" name="inputValorAnual" required="" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value->valor_anual_cidade;?>
" title="Estimativa do Valor anual" placeholder="Estimativa do valor anual">
            </div> 
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Editar</button>
            </div>
        </div>
    </form>
</fieldset>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>