<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 13:20:08
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17793720305460a910d77c99-25993251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeb05af5e36ba7e5424720eec54873f896978292' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/home.tpl',
      1 => 1431533828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17793720305460a910d77c99-25993251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460a910db0a06_75629543',
  'variables' => 
  array (
    'om' => 0,
    'mensagemADM' => 0,
    'm' => 0,
    'nivel' => 0,
    'mesExtenco' => 0,
    'totalRpsMes' => 0,
    'totalRpsHj' => 0,
    'nome' => 0,
    'total' => 0,
    'mostraDespacho' => 0,
    'erroMensagem' => 0,
    'buscaMilitar' => 0,
    'contRPS' => 0,
    'contInforme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460a910db0a06_75629543')) {function content_5460a910db0a06_75629543($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/sisGerPipa/smarty/lib/plugins/modifier.date_format.php';
?>
<script>
    setInterval("atualiza()", 1000);
</script>

<h2 class="text-center"><strong>Sistema de Gerencia de Pipeiros</strong></h2>
<table class="table table-striped">
    <tr class="success">
        <td>
            <p> 
                <?php if (!empty($_smarty_tpl->tpl_vars['om']->value->logo_om)){?><img src="<?php echo $_smarty_tpl->tpl_vars['om']->value->logo_om;?>
" alt="logo OM" width="50" align="right"><?php }?>
                <strong>Organização Militar:</strong> <i><?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->nome_om;?>
<?php }else{ ?><i><small class="text-danger"> OM não cadastrada</small></i> <?php }?></i><br />
                <strong>Local:</strong> <i><?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->local_om;?>
<?php }else{ ?> <i><small class="text-danger"> OM não cadastrada</small></i> <?php }?></i>
                <br>
                
            </p>
        </td>
    </tr>  
</table>

<?php if (isset($_smarty_tpl->tpl_vars['mensagemADM']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mensagemADM']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p><strong>Informação</strong></p>
            <?php echo $_smarty_tpl->tpl_vars['m']->value->texto;?>
<br />
            <p class="text-right" style='font-size: 10px' ><i>Enviada por: <?php echo $_smarty_tpl->tpl_vars['m']->value->nome_autor;?>
 - <?php echo $_smarty_tpl->tpl_vars['m']->value->data_hora;?>
</i></p>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>
                <a href="includes/controllers/desativaMensagem.php?id=<?php echo $_smarty_tpl->tpl_vars['m']->value->id_mensagem;?>
" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove-circle"></span> Excluir Informação</a>
            <?php }?>
        </div>
    <?php } ?>
<?php }?>
<div class="row">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>Total de RPS Geradas no Mês de <strong><?php echo $_smarty_tpl->tpl_vars['mesExtenco']->value;?>
</strong> <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['totalRpsMes']->value;?>
</span></h4>
        </div>
    </div>

    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>Total de RPS Geradas Hoje <strong><?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
</strong> <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['totalRpsHj']->value;?>
</span></h4>
        </div>
    </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['nome']->value)){?>
    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nome']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
            <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>
                        <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
<br />
                        <span style='font-size: 13px;'> Total de RPS Geradas por <a href="pesquisarRPS.php?buscaRPSMilitar=<?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </strong></a></span> <span class="label label-default"> <?php echo $_smarty_tpl->tpl_vars['total']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</span>
                    </h4>
                </div>
            </div>
        <?php endfor; endif; ?>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>

    
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Ativar ou desativar Despacho na RPS</p>
        <form action="includes/controllers/statusDespacho.php" method="post" id="formStatusDespacho" name="formStatusDespacho">
            <input type="hidden" id="idStatusDespacho" name="idStatusDespacho" value="<?php echo $_smarty_tpl->tpl_vars['om']->value->id_om;?>
" />
            <div class="radio">
                <label>
                    <input type="radio" name="statusDespacho" id="statusDespacho" value="0" <?php if ($_smarty_tpl->tpl_vars['mostraDespacho']->value=="S"){?> checked<?php }?>>
                    Ativar Despacho na RPS
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="statusDespacho" id="statusDespacho" value="1" <?php if ($_smarty_tpl->tpl_vars['mostraDespacho']->value=="N"){?> checked<?php }?>>
                    Desativar Despacho na RPS
                </label>
            </div>
            <div class="form-group">
                <div class="radio">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Envie mensagens para os usuários</p>
        <?php echo $_smarty_tpl->tpl_vars['erroMensagem']->value;?>

        <form action="includes/controllers/mensagemControl.php" method="post" id="formMensagem" name="formMensagem" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="selectMes">Mensagem </label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="textoMensagem" rows="4" name="textoMensagem" required="" placeholder="Escreva aqui uma mensagem para ser mostrada para todos os usuários do sistema."></textarea>
                    <button type="submit" class="btn btn-primary">Enviar</button>    
                </div>
            </div>
        </form>
    </div>
    <p></p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"){?>
    <a href="pesquisarRPS.php?buscaMilitar=<?php echo $_smarty_tpl->tpl_vars['buscaMilitar']->value;?>
" class="btn btn-primary"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['contRPS']->value;?>
</span> RPS geradas</a><br /><br />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"||$_smarty_tpl->tpl_vars['nivel']->value=="gerente"){?>


    <?php if ($_smarty_tpl->tpl_vars['contInforme']->value!=0){?>

        <span class="label label-danger">Informação de alteração de dados</span><br /><br />
        <ul class="nav nav-pills">
            <li class="active">
                <a href="verAlteracoes.php">
                    <span class="badge pull-left"><?php echo $_smarty_tpl->tpl_vars['contInforme']->value;?>
</span>&ApplyFunction;
                    <?php if ($_smarty_tpl->tpl_vars['contInforme']->value<=1){?>Mensagem<?php }else{ ?>Mensagens<?php }?>
                </a>
            </li>
        </ul><br />
    <?php }?>

    <div class="row">
        <div class="col-md-pull-9">

            <div class="alert alert-success" role="alert"><p>Para realizar novo cadastro de pipeiro, é necessário seguir os passos:</p></div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <p class="text-center">
                1 - Cadastrar Nova Cidade<br />
                <a href="cadastrarCidade.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Cidade</a>
            </p>
        </div>
        <div class="col-md-6">
            <p class="text-center">
                2 - Cadastrar Novo Carro<br />
                <a href="cadastrarCarro.php" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Carro</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="text-center">
                3 - Cadastrar Novo Pipeiro<br />
                <a href="cadastrarPipeiro.php" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Pipeiro</a>
            </p>
        </div>
    </div><br />

    <div class="row">
        <div class="col-md-pull-9">

            <div class="alert alert-warning" role="alert"><p>Para Para visualizar os cadatros, escolha um item a seguir:</p></div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <p class="text-center">
                Ver Cidades Cadastradas no programa<br />
                <a href="cidadesCadastradas.php" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-list-alt"></span> Cidades Cadastradas</a>
            </p>
        </div>
        <div class="col-md-6">
            <p class="text-center">
                Ver Pipeiros Cadastrados no programa<br />
                <a href="pipeirosCadastrados.php" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-list-alt"></span> Pipeiros Cadastrados</a>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <p class="text-center">
                Ver todos os carros cadastrados<br />
                <a href="veiculosCadastrados.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-list-alt"></span> Carros Cadastradas</a>
            </p>
        </div>
        <div class="col-md-6">
            <p class="text-center">
                Ver pipeiros desabilitados do programa
                <a href="verCidade.php?id=10" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-list"></span> Pipeiros Desabilitados</a>
            </p>
        </div>
    </div>
<?php }?><?php }} ?>