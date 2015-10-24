<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 10:05:55
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/pesquisarPipeiroDeclaracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9301620395462084dda9424-82429051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177812eb42046527f03d4d7b08acff5408c66222' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/pesquisarPipeiroDeclaracao.tpl',
      1 => 1431452396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9301620395462084dda9424-82429051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5462084de68e94_09076290',
  'variables' => 
  array (
    'nomeUser' => 0,
    'posto' => 0,
    'cpf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462084de68e94_09076290')) {function content_5462084de68e94_09076290($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Pesquisar pipeiro para gerar Declaração</h2>
    </div>
    <div class="panel-body">

        <form action="gerarDeclaracao.php" method="post" id="formDeclaracao" name="formaDeclaracao" class="form-horizontal" role="form">
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputCpfBusca">CPF pipeiro</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" id="inputCpf" name="inputCpf" required="" placeholder="Digite o CPF do pipeiro">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputValor">Quantidade Tickets</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="ticket" name="ticket" required="" placeholder="Ex: 32 (trinta e dois) tickets">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="selectMes">Mês Pres. Conta</label>
                <div class="col-sm-3">
                    <select class="form-control" id="selectMes" name="selectMes" required="">
                        <option value="">Mês</option>
                        <option value="janeiro">JANEIRO</option>
                        <option value="fevereiro">FEVEREIRO</option>
                        <option value="março">MARÇO</option>
                        <option value="ABRIL">ABRIL</option>
                        <option value="maio">MAIO</option>
                        <option value="junho">JUNHO</option>
                        <option value="julho">JULHO</option>
                        <option value="agosto">AGOSTO</option>
                        <option value="setembro">SETEMBRO</option>
                        <option value="outubro">OUTUBRO</option>
                        <option value="novembro">NOVEMBRO</option>
                        <option value="dezembro">DEZEMBRO</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="selectMes">Alterações</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alteracoes" rows="4" name="alteracoes" placeholder="Ex: 1. O modelo de alteração será dessa forma; 2. Aqui segue a segunda alteração; ..."></textarea>
                </div>
            </div>

            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputValor">Nome do militar</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="nomeMilitar" name="nomeMilitar" required="" value="<?php echo $_smarty_tpl->tpl_vars['nomeUser']->value;?>
" placeholder="Ex: Álvaro Bacelar de Sousa">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputPostoGraducao">Posto Graduação</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="inputPostoGraducao" name="inputPostoGraducao" required="" value="<?php echo $_smarty_tpl->tpl_vars['posto']->value;?>
" placeholder="3º SGT STT">
                </div>
            </div>

            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputValor">CPF do militar</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" id="cpfMilitar" name="cpfMilitar" required="" value="<?php echo $_smarty_tpl->tpl_vars['cpf']->value;?>
" placeholder="CPF do Militar">
                </div>
            </div>

            <button type="submit" onclick="this.form.target = '_blank';
                    return true;" class="btn btn-primary btn-lg">Buscar</button>
            <button type="reset" class="btn btn-default btn-lg">Cancelar</button>
        </form>
        </fieldset>
    </div>
</div>
<br />
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>