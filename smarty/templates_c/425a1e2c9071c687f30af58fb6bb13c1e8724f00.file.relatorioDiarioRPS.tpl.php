<?php /* Smarty version Smarty-3.1.13, created on 2015-09-09 22:47:05
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/relatorioDiarioRPS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12585530055f0e119c3f6e0-91624735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '425a1e2c9071c687f30af58fb6bb13c1e8724f00' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/relatorioDiarioRPS.tpl',
      1 => 1441849612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12585530055f0e119c3f6e0-91624735',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55f0e119c45c89_21013394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f0e119c45c89_21013394')) {function content_55f0e119c45c89_21013394($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar Relatorio de RPS</h2>
    </div>
    <div class="panel-body">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Digite a data para gerar o relatório de RPS geradas
        </div>

        <form action="imprimirGfip.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
            
            <input type="hidden" id="relDiario" name="relDiario" value="1">
            <div class="form-group">
                <label for="dataInicio" class="col-sm-2 control-label">Data do relatório</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="dataInicio" name="dataInicio" required="" placeholder="Data">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" id="pesquisaVeiculo" onclick="this.form.target = '_blank'; return true;" class="btn btn-default">Gerar Relatório de RPS</button>
                </div>
            </div>
        </form><br />

        <p></p>
    </div>
</div>
<hr>
<?php }} ?>