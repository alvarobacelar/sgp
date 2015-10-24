<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 10:09:47
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/cadastrarCidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13017226595460b8d8e44f79-25723254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63de8b49fab18eb40373f63dff4217b6ad219093' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/cadastrarCidade.tpl',
      1 => 1431452395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13017226595460b8d8e44f79-25723254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460b8d8e7b4f5_72303292',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460b8d8e7b4f5_72303292')) {function content_5460b8d8e7b4f5_72303292($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar Cidade</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

        <form action="includes/controllers/cadastrarCidadeControl.php" method="post" name="formCadastrarCidade" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputNomeCidade" class="col-sm-3 control-label">Nome da Cidade e UF</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputNomeCidade" name="inputNomeCidade" required="" title="Cidade" placeholder="Digite o nome da cidade">
                </div> 
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="inputUf" name="inputUf" required="" title="UF" placeholder="UF">
                </div>
            </div>

            <div class="form-group">
                <label for="textAreaObs" class="col-sm-3 control-label">Localidades Atendidas</label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="textAreaObs" name="textAreaObs" rows="3"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputQntCarradas" class="col-sm-3 control-label">Quantidade de Carradas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputQntCarradas" name="inputQntCarradas" required="" title="Quantidades de Carradas" placeholder="Quantidade de Carradas">
                </div> 
            </div>
            
            <div class="form-group">
                <label for="inputNrRotas" class="col-sm-3 control-label">Numero de Rotas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputNrRotas" name="inputNrRotas" required="" title="Numero de Rotas" placeholder="Numero de Rotas">
                </div> 
            </div>
            
            <div class="form-group">
                <label for="inputValorRotas" class="col-sm-3 control-label">Valor estimado por Rota</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputValorRotas" name="inputValorRotas" required="" title="Valor Extimado Rota" placeholder="Valor estimado das rotas">
                </div> 
            </div>
            
            <div class="form-group">
                <label for="inputValorAnual" class="col-sm-3 control-label">Estimativa de Valor Anual</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputValorAnual" name="inputValorAnual" required="" title="Estimativa do Valor anual" placeholder="Estimativa do valor anual">
                </div> 
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
                </div>
            </div>
        </form>

        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div>
</div>
<?php }} ?>