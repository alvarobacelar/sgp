<?php /* Smarty version Smarty-3.1.13, created on 2015-01-27 15:02:00
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/gerarContrato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60273440154be4f4aa3c279-59382575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d39e0f28ba427817f1b43537787f182359e8919' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/gerarContrato.tpl',
      1 => 1422378119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60273440154be4f4aa3c279-59382575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54be4f4aa58481_23973161',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be4f4aa58481_23973161')) {function content_54be4f4aa58481_23973161($_smarty_tpl) {?>
<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar Contrado pelo numero de CPF</h2>
    </div>
    <div class="panel-body">

        <form method="post" name="contrato" action="imprimeContrato.php" class="form-horizontal" role="form">
            <div class="form-group form-group">
                <label class="col-sm-2 control-label" for="buscaContrato">CPF do Credenciado</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="buscaContrato" name="buscaContrato" required="" placeholder="CPF do pipeiro">
                </div>
            </div>

            <div class="form-group form-group">
                <label class="col-sm-2 control-label" for="numeroContrato">Numero do Contrato</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="numeroContrato" name="numeroContrato" required="" placeholder="Numero do Contrato">
                </div>
            </div>
            
            <div class="form-group form-group">
                <label class="col-sm-2 control-label" for="dataInicio">Data Inicio</label>
                <div class="col-sm-2">
                    <input class="form-control" type="text" id="dataInicio" name="dataInicio" required="" placeholder="Inicio de Contrato">
                </div>
            </div>
            
            <div class="form-group form-group">
                <label class="col-sm-2 control-label" for="dataFim">Data Fim</label>
                <div class="col-sm-2">
                    <input class="form-control" type="text" id="dataFim" name="dataFim" required="" placeholder="Fim de Contrato">
                </div>
            </div>


            <div class="form-group form-group">
                <label class="col-sm-2 control-label" for="nomeEmpresa">Nome da Empresa</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nomeEmpresa" name="nomeEmpresa" required="" placeholder="Digite o nome da empresa do credenciado">
                </div>
            </div>

            <div class="form-group form-group">
                <label class="col-sm-2 control-label" for="testemunha1">Testemunha 1</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="testemunha1" name="testemunha1" required="" placeholder="Nome da testemunha 1">
                </div>

                <div class="col-sm-3">
                    <input class="form-control" type="text" id="rgTestemunha1" name="rgTestemunha1" required="" placeholder="RG da testemunha 1">
                </div>
            </div>

            <div class="row form-group form-group">
                <label class="col-sm-2 control-label" for="inputCpfBusca">Testemunha 2</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="testemuha2" name="testemunha2" placeholder="Nome da testemunha 2">
                </div>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="rgTestemunha2" name="rgTestemunha2" placeholder="RG da testemunha 2">
                </div>
            </div>



            <button type="submit" id="pesquisaVeiculo" class="btn btn-primary" onclick="this.form.target = '_blank'; return true;"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Gerar Contrato</button>
        </form>


        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div>
</div>
<?php }} ?>