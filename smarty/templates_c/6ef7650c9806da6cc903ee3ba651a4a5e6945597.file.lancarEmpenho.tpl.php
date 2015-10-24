<?php /* Smarty version Smarty-3.1.13, created on 2015-10-16 17:32:03
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/lancarEmpenho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1879085515561d5c454ba2a3-40413498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef7650c9806da6cc903ee3ba651a4a5e6945597' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/lancarEmpenho.tpl',
      1 => 1445027521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1879085515561d5c454ba2a3-40413498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561d5c4555f773_20311806',
  'variables' => 
  array (
    'cidade' => 0,
    'erroPipeiro' => 0,
    'verCidade' => 0,
    'c' => 0,
    'pipeiroEscolha' => 0,
    'pipe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d5c4555f773_20311806')) {function content_561d5c4555f773_20311806($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/www/html/sisGerPipa/smarty/lib/plugins/modifier.date_format.php';
?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">
            <?php if ($_smarty_tpl->tpl_vars['cidade']->value->id_cidade_atuante==10){?>
                Pipeiros Desabilidados 
            <?php }else{ ?> 
                Lançar empenho para municipio de <u><?php echo $_smarty_tpl->tpl_vars['cidade']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['cidade']->value->uf_cidade;?>
</u> 
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cidade']->value->usuario_edicao_cidade!=''){?><small>Útima edição: <?php echo $_smarty_tpl->tpl_vars['cidade']->value->usuario_edicao_cidade;?>
, <?php echo $_smarty_tpl->tpl_vars['cidade']->value->data_edicao_cidade;?>
 </small> <?php }?>
        </h2>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['erroPipeiro']->value;?>

    <div class="table-responsive">
        <table class="table table-striped">

            <?php if (isset($_smarty_tpl->tpl_vars['verCidade']->value)){?>

                <th><center>Pipeiro</center></th>
                <th><center>NC, NE, valor, mês ..</center></th>


                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['verCidade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <tr class="active">
                        <td width="300"><?php echo $_smarty_tpl->tpl_vars['c']->value->nome_pipeiro;?>
</td>
                        <td class="text-center">
                            <form action="includes/controllers/cadastrarNE.php" method="post" name="cadastrar" class="form-inline">
                                <div class="form-group form-group-sm">
                                    <input class="form-control" type="text" id="inputNC" value="" name="inputNC" required="" placeholder="NC">
                                </div>
                                <div class="form-group form-group-sm">
                                    <input class="form-control" type="text" id="inputNE" value="" name="inputNE" required="" placeholder="NE">
                                </div>
                                <div class="form-group form-group-sm">
                                    <input class="form-control" type="text" id="inputValorEmpenho" value="" name="inputValorEmpenho" required="" placeholder="Valor R$">
                                </div>
                                <div class="form-group form-group-sm">
                                    <select class="form-control" id="selectMesEmpenho" name="selectMesEmpenho" required="">
                                        <option value="">Mês Pagamento</option>
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
                                </div>
                                <!--
                                <div class="form-group form-group-sm">
                                    <input class="form-control" type="text" id="inputAnoEmpenho" value="<?php echo smarty_modifier_date_format(time(),"%Y");?>
" name="inputAnoEmpenho" required="">
                                </div>
                                -->
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </td>

                    </tr>
                <?php } ?>

            <?php }else{ ?>
                <tr>
                    <td  class="danger text-center"><br /><p class="lead">Nenhum Pipeiro em <?php echo $_smarty_tpl->tpl_vars['cidade']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['cidade']->value->uf_cidade;?>
</p></td>
                </tr>
            <?php }?>
        </table>
    </div><!-- /responsive -->
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 

<!-- inicio da div modal  -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Escolher Pipeiro para <?php echo $_smarty_tpl->tpl_vars['cidade']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['cidade']->value->uf_cidade;?>
</h4>
            </div>
            <form action="includes/controllers/escolherPipeiros.php?idCidade=<?php echo $_smarty_tpl->tpl_vars['cidade']->value->id_cidade_atuante;?>
" method="post" name="formEscolherPipeiro" role="form" id="formEscolherPipeiro" >
                <div class="modal-body">
                    <table class="table table-condensed">
                        <th>Nome</th>
                        <th>CPF</th>
                            <?php  $_smarty_tpl->tpl_vars['pipe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pipe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pipeiroEscolha']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pipe']->key => $_smarty_tpl->tpl_vars['pipe']->value){
$_smarty_tpl->tpl_vars['pipe']->_loop = true;
?>
                            <tr>
                                <td><input type="checkbox" name="ckbIdPipeiro[]" value="<?php echo $_smarty_tpl->tpl_vars['pipe']->value->id_pipeiro;?>
"> <?php echo $_smarty_tpl->tpl_vars['pipe']->value->nome_pipeiro;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pipe']->value->cpf_pipeiro;?>
</td>
                            </tr>
                        <?php } ?>

                    </table>
                </div> <!-- fim modal-body -->

                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancela</button>
            </form>
        </div>
    </div>
</div>
<?php }} ?>