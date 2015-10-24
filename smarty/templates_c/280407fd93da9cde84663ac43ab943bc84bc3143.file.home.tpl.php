<?php /* Smarty version Smarty-3.1.13, created on 2015-10-22 16:48:17
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4509827755550fafeb2fd80-73802181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280407fd93da9cde84663ac43ab943bc84bc3143' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/home.tpl',
      1 => 1445539672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4509827755550fafeb2fd80-73802181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5550fafeb89561_05673619',
  'variables' => 
  array (
    'om' => 0,
    'mensagemADM' => 0,
    'm' => 0,
    'nivel' => 0,
    'contInforme' => 0,
    'totalRpsHj' => 0,
    'nome' => 0,
    'total' => 0,
    'mesExtenco' => 0,
    'totalRpsMes' => 0,
    'rpsMes' => 0,
    'rps' => 0,
    'mostraDespacho' => 0,
    'erroMensagem' => 0,
    'buscaMilitar' => 0,
    'contRPS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550fafeb89561_05673619')) {function content_5550fafeb89561_05673619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/www/html/sisGerPipa/smarty/lib/plugins/modifier.date_format.php';
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
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p><strong>AVISO</strong></p>
            <?php echo $_smarty_tpl->tpl_vars['m']->value->texto;?>
<br />
            <p class="text-right" style='font-size: 14px' ><span class="label label-default"> Enviada por: <?php echo $_smarty_tpl->tpl_vars['m']->value->nome_autor;?>
 - <?php echo $_smarty_tpl->tpl_vars['m']->value->data_hora;?>
</i></span></p>
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>
                <a href="includes/controllers/desativaMensagem.php?id=<?php echo $_smarty_tpl->tpl_vars['m']->value->id_mensagem;?>
" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove-circle"></span> Excluir Informação</a>
            <?php }?>
        </div>
    <?php } ?>
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

<?php }?>

<div class="row">
    <div class="col-md-pull-9">
        <div class="alert alert-info" role="alert">
            <center>
                <p>
                    Total de RPS geradas hoje <strong><?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
 <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['totalRpsHj']->value;?>
</span></strong>
                <form action="imprimirGfip.php" method="post" name="formCadastrarCarro">
                    <input type="hidden" id="relDiario" name="relDiario" value="1">
                    <input type="hidden" class="form-control" id="dataInicio" name="dataInicio" value="<?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
">
                    <input type="hidden" class="form-control" id="dataFim" name="dataFim" value="<?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
">
                    <button type="submit" id="pesquisaVeiculo" onclick="this.form.target = '_blank';
                            return true;" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Relatorio diário</button>
                </form>
                </p>
            </center>
        </div>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['nome']->value)){?>

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
                    <h4>
                        <span style='font-size: 13px;'> RPS Geradas por <a href="pesquisarRPS.php?buscaRPSMilitar=<?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['nome']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 </strong></a></span> <span class="label label-default"> <?php echo $_smarty_tpl->tpl_vars['total']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</span>
                    </h4>
                </div>
            </div>
        <?php endfor; endif; ?>

    <?php }else{ ?>
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-warning" role="alert">
                <center>Nenhuma RPS gerada no dia de hoje</center>
            </div>
        </div>
    <?php }?>
</div>




<div class="row">
    <div class="col-md-pull-9">
        <div class="alert alert-info" role="alert">
            <center><p>Total de RPS geradas no Mês de <strong><?php echo $_smarty_tpl->tpl_vars['mesExtenco']->value;?>
</strong> <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['totalRpsMes']->value;?>
</span> </p></center>
        </div>
    </div>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['rpsMes']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['rps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rpsMes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rps']->key => $_smarty_tpl->tpl_vars['rps']->value){
$_smarty_tpl->tpl_vars['rps']->_loop = true;
?>
            <div class="col-md-6">
                <div class="alert alert-success" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['rps']->value->nome_militar;?>
 
                    <span class="label label-default"> <?php echo $_smarty_tpl->tpl_vars['rps']->value->total;?>
</span>
                </div>
            </div>
        <?php } ?>
    <?php }else{ ?>
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-warning" role="alert">
                <center>Nenhuma RPS gerada no Mês de <?php echo $_smarty_tpl->tpl_vars['mesExtenco']->value;?>
</center>
            </div>
        </div>
    <?php }?>
    

</div>
<div class="row">
    <div class="col-md-pull-9">
        <div class="alert alert-info" role="alert">

        </div>
    </div>
</div>



<?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>
    <?php if (isset($_smarty_tpl->tpl_vars['mostraDespacho']->value)){?>

        
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
    <?php }?>
    
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

<?php }} ?>