<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 14:35:27
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/gerarTabelaGfip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:425395686557065389ea049-46026801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b45c965b3e68884b8cc6b220cb553880b1f9c86' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/gerarTabelaGfip.tpl',
      1 => 1444757724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '425395686557065389ea049-46026801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55706538b09ce7_18710340',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706538b09ce7_18710340')) {function content_55706538b09ce7_18710340($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar relatório de RPS por intervalo de data</h2>
    </div>
    <div class="panel-body">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Para gerar a Tabela GFIP, digite a data inicio e a data fim referente as RPS geradas. 
        </div>

        <form action="imprimirGfip.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="dataInicio" class="col-sm-2 control-label">Data Inicio</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="dataInicio" name="dataInicio" required="" placeholder="Data Inicial">
                </div>
            </div>

            <div class="form-group">
                <label for="dataFim" class="col-sm-2 control-label">Data Fim</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="dataFim" name="dataFim" required="" placeholder="Data Final">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" id="pesquisaVeiculo" onclick="this.form.target = '_blank'; return true;" class="btn btn-default">Gerar GFIP</button>
                </div>
            </div>
        </form><br />

        <p></p>
    </div>
</div>
<hr>
<?php }} ?>