<?php /* Smarty version Smarty-3.1.13, created on 2015-01-26 00:21:53
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/pipeirosCadastrados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1628655650547bcfa23911b4-40265363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129586f0c7f8a9e8421e4e589b5a93fb84769316' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/pipeirosCadastrados.tpl',
      1 => 1422238905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1628655650547bcfa23911b4-40265363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547bcfa24239c3_99334441',
  'variables' => 
  array (
    'busca' => 0,
    'sit' => 0,
    'local' => 0,
    'erroPipeiro' => 0,
    'total' => 0,
    'pipeiro' => 0,
    'p' => 0,
    'nivel' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547bcfa24239c3_99334441')) {function content_547bcfa24239c3_99334441($_smarty_tpl) {?><div class="panel panel-default">

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
                    <div class="alert alert-success" role="alert">
                        <strong><?php if ($_smarty_tpl->tpl_vars['local']->value=="sim"){?>Todal de Pipeiro Ativos<?php }elseif($_smarty_tpl->tpl_vars['local']->value=="nao"){?>Total de Pipeiros Desativados<?php }else{ ?> Total de pipeiros credenciados <?php }?></strong> <span class="badge"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
                    </div>
                <?php }?>
                <table class="table">


                    <?php if (isset($_smarty_tpl->tpl_vars['pipeiro']->value)){?>
                        <th><center>Nr RPS</center></th>
                        <th><center>Nome</center></th>
                        <th><center>CPF</center></th>
                        <th><center>Cidade de atuação</center></th>
                        <th><center>Ações</center></th>

                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pipeiro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <tr class="text-center">
                                <td class="active"><?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
</td>
                                <td class="active" width="200"><?php echo $_smarty_tpl->tpl_vars['p']->value->nome_pipeiro;?>
</td>
                                <td class="active"><?php echo $_smarty_tpl->tpl_vars['p']->value->cpf_pipeiro;?>
</td>

                                <?php if (isset($_smarty_tpl->tpl_vars['p']->value->nome_cidade_atuante)){?>
                                    <td class="active"><a href="verCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_cidade_atuante;?>
"><?php if ($_smarty_tpl->tpl_vars['p']->value->nome_cidade_atuante=="Desabilitado"){?><strong>Desabilitado</strong><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['p']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['p']->value->uf_cidade;?>
<?php }?></a></td>
                                <?php }else{ ?>
                                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['p']->value->cidade;?>
-<?php echo $_smarty_tpl->tpl_vars['p']->value->uf;?>
</td>
                                <?php }?>
                                <td class="active" width="490">
                                    <a href="verPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
" class="btn btn-info btn-xs" id="ver" data-toggle="tooltip" data-placement="left" title="<?php if ($_smarty_tpl->tpl_vars['p']->value->usuario_edicao_pipeiro!=''){?>Ultima edição: <?php echo $_smarty_tpl->tpl_vars['p']->value->usuario_edicao_pipeiro;?>
, <?php echo $_smarty_tpl->tpl_vars['p']->value->data_edicao_pipeiro;?>
<?php }else{ ?>Nenhuma edição registrada <?php }?>"> <span class="glyphicon glyphicon-eye-open"></span> Ver</a>
                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="user"){?>
                                        <a href="pesquisarPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-open"></span> Gerar RPS</a>
                                        <a href="informeAlteracoes.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-info-sign"></span> Informar Alteração</a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?>
                                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"){?>
                                            <a href="fichaCadastro.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-open"></span>Ficha Cadastro</a>
                                            <a href="editarPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                            <a href="mudarCidade.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
" class="btn btn-success btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Cidade</a>
                                            <a href="mudarCarro.php?id=<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-edit"></span> Mudar Carro</a>
                                            
                                        <?php }?>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr class="text-center"><td><h2>Nenhum pipeiro corresponde a sua busca</h2></td></tr>
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