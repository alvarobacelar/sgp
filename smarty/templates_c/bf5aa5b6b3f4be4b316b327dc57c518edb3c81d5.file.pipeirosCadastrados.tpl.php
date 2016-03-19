<?php /* Smarty version Smarty-3.1.13, created on 2016-02-28 15:39:09
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/pipeirosCadastrados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53664999656d33ecdb2bbc9-30705153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5aa5b6b3f4be4b316b327dc57c518edb3c81d5' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/pipeirosCadastrados.tpl',
      1 => 1445026584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53664999656d33ecdb2bbc9-30705153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'busca' => 0,
    'sit' => 0,
    'local' => 0,
    'erroPipeiro' => 0,
    'total' => 0,
    'nome_cidade_atuante' => 0,
    'id_pipeiro' => 0,
    'nome_pipeiro' => 0,
    'dias' => 0,
    'id_cidade_atuante' => 0,
    'uf_cidade' => 0,
    'cidade' => 0,
    'uf' => 0,
    'usuario_edicao_pipeiro' => 0,
    'data_edicao_pipeiro' => 0,
    'nivel' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56d33ece1c3954_62087759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d33ece1c3954_62087759')) {function content_56d33ece1c3954_62087759($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">
        <h4><?php if (isset($_smarty_tpl->tpl_vars['busca']->value)){?>Busca por: <i><u><?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
</u></i>
            <?php if ($_smarty_tpl->tpl_vars['sit']->value=="ativo"){?> em todos ativos<?php }elseif($_smarty_tpl->tpl_vars['sit']->value=="desativado"){?> em todos desativados <?php }else{ ?> em todos credenciados <?php }?>
            <?php }else{ ?>
                <?php if ($_smarty_tpl->tpl_vars['local']->value=="sim"){?>
                    Pipeiros Ativos
                <?php }elseif($_smarty_tpl->tpl_vars['local']->value=="nao"){?>
                    Pipeiros Desativados
                <?php }else{ ?>
                    Pipeiros Cadastrados
                <?php }?>
                <?php }?> <a href="pipeirosAtivos.php" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-ok"></span> Ver pipeiros ativos</a> <a href="pipeirosDesativados.php" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-off"></span> Ver pipeiros desativados</a> <a href="pipeirosCadastrados.php" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-list"></span> Ver todos pipeiros</a></h4>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['erroPipeiro']->value;?>

            <div id="ajax" class="table-responsive table-bordered">

                <form method="get" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="busca" name="busca" placeholder="Pesquisar por nome">
                    </div>
                    <button type="submit" id="pesquisaPipeiro" class="btn btn-default">Pesquisar</button>
                </form> 
                <?php if (isset($_smarty_tpl->tpl_vars['local']->value)){?>

                    <strong><?php if ($_smarty_tpl->tpl_vars['local']->value=="sim"){?><div class="alert alert-info" role="alert">Todal de Pipeiro Ativos<?php }elseif($_smarty_tpl->tpl_vars['local']->value=="nao"){?><div class="alert alert-warning" role="alert">Total de Pipeiros Desativados<?php }else{ ?><div class="alert alert-success" role="alert"> Total de Pipeiros Credenciados <?php }?></strong> <span class="badge"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
                                </div>
                            <?php }?>
                            <table class="table">


                                <?php if (isset($_smarty_tpl->tpl_vars['nome_cidade_atuante']->value)){?>
                                    <th><center>Nr RPS</center></th>
                                    <th><center>Nome</center></th>
                                    <th><center>Validade do credenciamento</center></th>
                                    <th><center>Cidade de atuação</center></th>
                                    <th><center>Ações</center></th>

                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['id_pipeiro']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <tr class="text-center">
                                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                                            <td class="active" width="200"><?php echo $_smarty_tpl->tpl_vars['nome_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>

                                            
                                            <?php if ($_smarty_tpl->tpl_vars['nome_cidade_atuante']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]=="-"){?><td class="active"><small><i>Pipeiro desativado</i></small></td><?php }elseif($_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]<=0){?><td class="alert-danger"><small><i>Pipeiro com data de ativação vencida</i></small> <?php }elseif($_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]<=6){?><td class="warning"> <strong><mark>Menos de uma semana (<?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
 dias)</mark></strong> <?php }else{ ?><td class="alert-success"><strong><small><?php echo $_smarty_tpl->tpl_vars['dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
  <i>dias restantes</i></small></strong><?php }?></td>

                                            <?php if (isset($_smarty_tpl->tpl_vars['nome_cidade_atuante']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['a']['index']])){?>
                                                <td class="active"><?php if ($_smarty_tpl->tpl_vars['nome_cidade_atuante']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]=="-"){?><strong><small><i>Desativado</i></small></strong><?php }else{ ?><a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['id_cidade_atuante']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['nome_cidade_atuante']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['uf_cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
<?php }?></a></td>
                                                        <?php }else{ ?>
                                                <td class="active"><?php echo $_smarty_tpl->tpl_vars['cidade']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
-<?php echo $_smarty_tpl->tpl_vars['uf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
</td>
                                            <?php }?>
                                            <td class="active" width="490">
                                                <a href="verPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-info btn-xs" id="ver" data-toggle="tooltip" data-placement="left" title="<?php if ($_smarty_tpl->tpl_vars['usuario_edicao_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]!=''){?>Ultima edição: <?php echo $_smarty_tpl->tpl_vars['usuario_edicao_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
, <?php echo $_smarty_tpl->tpl_vars['data_edicao_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
<?php }else{ ?>Nenhuma edição registrada <?php }?>"> <span class="glyphicon glyphicon-eye-open"></span> Ver</a>

                                                <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="user"){?>
                                                    <a href="pesquisarPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-open"></span> Gerar RPS</a>
                                                    <a href="informeAlteracoes.php?id=<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-info-sign"></span> Informar Alteração</a>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?>
                                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"){?>
                                                        <?php if ($_smarty_tpl->tpl_vars['nome_cidade_atuante']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]=="-"){?>
                                                            <button type="button" class="btn btn-danger disabled btn-xs">  Desativado</button>
                                                        <?php }else{ ?>
                                                            <button type="button" onclick="desativarPipeiro(<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
, '')" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Desativar</button>
                                                        <?php }?>
                                                        <a href="editarPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                                        <?php if ($_smarty_tpl->tpl_vars['nome_cidade_atuante']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]=="-"){?>
                                                            <a href="mudarCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-success btn-xs"> <span class="glyphicon glyphicon-ok"></span> Ativar Pipeiro</a>
                                                        <?php }else{ ?>
                                                            <a href="mudarCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-primary btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Cidade</a>
                                                        <?php }?>
                                                        <a href="mudarCarro.php?id=<?php echo $_smarty_tpl->tpl_vars['id_pipeiro']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']];?>
" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Carro</a>
                                                        
                                                    <?php }?>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    <?php endfor; endif; ?>
                                <?php }else{ ?>
                                    <tr class="text-center">
                                        <td>
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3>Nenhum pipeiro corresponde a sua busca.</h3>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>

                            </table>

                        </div><br />

                        <script>
                            $('#ver').tooltip(options);
                        </script>
                    </div>
                    <center><?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>
</center>  

                    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
<?php }} ?>