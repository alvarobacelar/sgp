<?php /* Smarty version Smarty-3.1.13, created on 2015-04-29 10:20:22
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/verCidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12973122515460b6d510ee50-75390750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc85e55cde155a1e484b119c7b571dd6339d75a' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/verCidade.tpl',
      1 => 1429368952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12973122515460b6d510ee50-75390750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460b6d51f9e55_53830161',
  'variables' => 
  array (
    'cidade' => 0,
    'nivel' => 0,
    'erroPipeiro' => 0,
    'verCidade' => 0,
    'c' => 0,
    'pipeiroEscolha' => 0,
    'pipe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460b6d51f9e55_53830161')) {function content_5460b6d51f9e55_53830161($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">
            <?php if ($_smarty_tpl->tpl_vars['cidade']->value->id_cidade_atuante==10){?>
                Pipeiros Desabilidados <a class="btn btn-info btn-xs" href="pipeirosCadastrados.php">Ver todos pipeiros</a> <a href="cidadesCadastradas.php" class="btn btn-default btn-xs">Todas as cidades</a>
            <?php }else{ ?> 
                Municipio de <u><?php echo $_smarty_tpl->tpl_vars['cidade']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['cidade']->value->uf_cidade;?>
</u> | <a class="btn btn-info btn-xs" href="pipeirosCadastrados.php">Ver todos pipeiros</a> <a href="cidadesCadastradas.php" class="btn btn-default btn-xs">Todas as cidades</a>
                <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Escolher Pipeiros para esta cidade</button><?php }?>
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
                <th><center>Carro</center></th>
                <th><center>Tipo veiculo</center></th>
                <th><center>Opções</center></th>

                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['verCidade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <tr class="active">
                        <td><a href="verPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['c']->value->id_pipeiro;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->nome_pipeiro;?>
</a> </td>
                        <td class="text-center">
                            <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?>
                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->placa_veiculo!="SEM CARRO"){?>
                                        <a href="editarVeiculo.php?id=<?php echo $_smarty_tpl->tpl_vars['c']->value->id_veiculo;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->placa_veiculo;?>
</a> 
                                    <?php }else{ ?>
                                        <strong> SEM CARRO </strong> 
                                    <?php }?>
                                <?php }else{ ?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['c']->value->placa_veiculo;?>
</strong>
                                <?php }?>
                            </td>
                            <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['c']->value->placa_veiculo!="SEM CARRO"){?> <?php echo $_smarty_tpl->tpl_vars['c']->value->tipo_veiculo;?>
 <?php }else{ ?><strong> SEM CARRO </strong><?php }?></td>
                            <td class="text-center"> 
                                <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?>
                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"){?>
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->id_cidade_atuante!="10"){?><button type="button" onclick="desativarPipeiro(<?php echo $_smarty_tpl->tpl_vars['c']->value->id_pipeiro;?>
,<?php echo $_smarty_tpl->tpl_vars['cidade']->value->id_cidade_atuante;?>
)" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Desativar</button><?php }?>
                                        <a href="mudarCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['c']->value->id_pipeiro;?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Cidade</a>
                                        <a href="mudarCarro.php?id=<?php echo $_smarty_tpl->tpl_vars['c']->value->id_pipeiro;?>
&idCidade=<?php echo $_smarty_tpl->tpl_vars['cidade']->value->id_cidade_atuante;?>
" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Carro</a>
                                    <?php }else{ ?>
                                        <button type="button" class="btn btn-success btn-xs" disabled="disabled">Nenhuma opção</button>
                                    <?php }?>
                                <?php }else{ ?>
                                    <button type="button" class="btn btn-success btn-xs" disabled="disabled">Nenhuma opção</button>
                                <?php }?>
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