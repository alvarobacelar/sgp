<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 13:23:42
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/pesquisarPipeiro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4617942854626968b5ce83-72020975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e99548e6cc3c071115d8d90f8f90a6772af0d835' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/pesquisarPipeiro.tpl',
      1 => 1431533828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4617942854626968b5ce83-72020975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54626968c0c242_64917309',
  'variables' => 
  array (
    'cpfBusca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54626968c0c242_64917309')) {function content_54626968c0c242_64917309($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/sisGerPipa/smarty/lib/plugins/modifier.date_format.php';
?>
<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title"><?php if ($_smarty_tpl->tpl_vars['cpfBusca']->value==''){?>Pesquisar Pipeiro para gerar RPS<?php }else{ ?> Gerar RPS de <i><?php echo $_smarty_tpl->tpl_vars['cpfBusca']->value->nome_pipeiro;?>
</i> <?php }?></h2>
    </div>
    <div class="panel-body">

        <h4><small><strong>OBS: Todas as RPS geradas estão sendo gravadas no banco de dados.</strong></small></h4><br />
        
        <form action="gerarRPS.php" method="post" id="formBuscaPipeiro" name="formBuscaPipeiro" class="form-horizontal" role="form">
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputCpf">CPF pipeiro</label>
                <div class="input-group col-sm-6">
                    <input class="form-control" type="text" id="inputCpf" name="inputCpf" required="" value="<?php if ($_smarty_tpl->tpl_vars['cpfBusca']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['cpfBusca']->value->cpf_pipeiro;?>
<?php }?>" placeholder="Digite o CPF do pipeiro">
                    <div class="input-group-addon"><strong>Somente numeros</strong></div>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputValor">Valor Total R$</label>
                <div class="input-group col-sm-7">
                    <input class="form-control" type="text" id="inputValor" name="inputValor" required="" placeholder="Ex: 10330.90">
                    <div class="input-group-addon"><strong>Formato do valor: 10500.90</strong></div>
                </div>
            </div>


            <div class="row form-group form-group-lg">
                <label class="col-sm-2 control-label" for="selectMes">Mês Pres. Conta</label>
                <div class="input-group col-sm-5">
                    <select class="form-control" id="selectMes" name="selectMes" required="">
                        <option value="">Mês</option>
                        <option value="JANEIRO">JANEIRO</option>
                        <option value="FEVEREIRO">FEVEREIRO</option>
                        <option value="MARÇO">MARÇO</option>
                        <option value="ABRIL">ABRIL</option>
                        <option value="MAIO">MAIO</option>
                        <option value="JUNHO">JUNHO</option>
                        <option value="JULHO">JULHO</option>
                        <option value="AGOSTO">AGOSTO</option>
                        <option value="SETEMBRO">SETEMBRO</option>
                        <option value="OUTUBRO">OUTUBRO</option>
                        <option value="NOVEMBRO">NOVEMBRO</option>
                        <option value="DEZEMBRO">DEZEMBRO</option>
                    </select>
                    <div class="input-group-addon">
                        de <strong><?php echo smarty_modifier_date_format(time(),"%Y");?>
</strong>
                    </div>
                </div>

            </div>

            <div class="row form-group form-group-lg">
                <label class="col-sm-2 control-label" for="selectMes">Mudar Ano</label>
                <div class="input-group col-sm-5">
                    <input class="form-control" type="text" id="inputAno" name="inputAno" disabled="disabled" value="" >
                    <div class="input-group-addon">
                        Mudar o ano? 
                        
                            <label>
                                <input type="radio" name="optionsRadios" id="radiosSuccess1" value="option1"  onclick="if (document.getElementById('inputAno').disabled == true) {
                                        document.getElementById('inputAno').disabled = false
                                        }">
                                Sim
                            </label>

                            <label>
                                <input type="radio" name="optionsRadios" id="radiosSuccess2" value="option2" checked onclick="if (document.getElementById('inputAno').disabled == false) {
                                        document.getElementById('inputAno').disabled = true
                                        }" >
                                Não
                            </label>
                        
                    </div>
                </div>
            </div>



            <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
            <button type="reset" class="btn btn-default btn-lg">Cancelar</button>
        </form>

    </div>
</div>
<br />
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>