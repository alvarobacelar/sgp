<?php /* Smarty version Smarty-3.1.13, created on 2015-09-09 22:39:19
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/relatorioEntradaPipeiros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76923422555f0ce8db84a83-68634371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b3e7eee073288b219ec33e1d17e23439068ce7' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/relatorioEntradaPipeiros.tpl',
      1 => 1441848616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76923422555f0ce8db84a83-68634371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55f0ce8db8dee2_04229062',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f0ce8db8dee2_04229062')) {function content_55f0ce8db8dee2_04229062($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar Relatorio de entrada de Pipeiros ao Batalhão</h2>
    </div>
    <div class="panel-body">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Digite a data para gerar o relatório de entrada e saida de pipeiros do batalhão
        </div>

        <form action="imprimirGfip.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
            
            <input type="hidden" id="relEntrada" name="relEntrada" value="1">
            <div class="form-group">
                <label for="dataInicio" class="col-sm-2 control-label">Data do relatório</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="dataInicio" name="dataInicio" required="" placeholder="Data">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" id="pesquisaVeiculo" onclick="this.form.target = '_blank'; return true;" class="btn btn-default">Gerar Relatório</button>
                </div>
            </div>
        </form><br />

        <p></p>
    </div>
</div>
<hr>
<?php }} ?>