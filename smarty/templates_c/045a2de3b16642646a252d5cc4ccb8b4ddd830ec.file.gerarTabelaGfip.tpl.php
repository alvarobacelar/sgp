<?php /* Smarty version Smarty-3.1.13, created on 2015-05-12 14:58:08
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/gerarTabelaGfip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137823966154ce65b6a169a3-10511420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045a2de3b16642646a252d5cc4ccb8b4ddd830ec' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/gerarTabelaGfip.tpl',
      1 => 1431452395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137823966154ce65b6a169a3-10511420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ce65b6a45125_73814203',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce65b6a45125_73814203')) {function content_54ce65b6a45125_73814203($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar Tabela GFIP</h2>
    </div>
    <div class="panel-body">

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Para gerar a Tabela GFIP, digite a data inicio e a data fim referente as RPS geradas. 
        </div>

        <form action="imprimirGfip.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="dataInicio" class="col-sm-2 control-label">Data Inicio</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="dataInicio" name="dataInicio" required="" placeholder="Nome do pipeiro">
                </div>
            </div>

            <div class="form-group">
                <label for="dataFim" class="col-sm-2 control-label">Data Fim</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="dataFim" name="dataFim" required="" placeholder="Militar que gerou">
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