<?php /* Smarty version Smarty-3.1.13, created on 2015-01-26 00:05:01
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/veiculosCadastrados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1824909265547f72b35aa1c1-51156458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19cdb6ae40d322d0b5f57868752c2ae74e6e2a9' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/veiculosCadastrados.tpl',
      1 => 1422237898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1824909265547f72b35aa1c1-51156458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547f72b360e569_21063528',
  'variables' => 
  array (
    'busca' => 0,
    'erroVeiculo' => 0,
    'veiculo' => 0,
    'u' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f72b360e569_21063528')) {function content_547f72b360e569_21063528($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">
        <h2 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['busca']->value)){?>Busca por placa: <i><u><?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
</u></i> | <a href="veiculosCadastrados.php" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-list-alt"></span> Todos os Veículos</a><?php }else{ ?>Todos Veículos Cadastrados<?php }?></h2>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['erroVeiculo']->value;?>

    <div id="ajaxCarro" class="table-responsive table-bordered">

        <form method="get" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" id="busca" name="busca" placeholder="Pesquisar po placa">
            </div>
            <button type="submit" id="pesquisaCarro" class="btn btn-default">Pesquisar</button>
        </form>

        <table class="table table-bordered">


            <?php if (isset($_smarty_tpl->tpl_vars['veiculo']->value)){?>
                <th><center>Placa</center></th>
                <th><center>Cor</center></th>
                <th><center>Renavan</center></th>
                <th><center>Proprietário</center></th>
                <th><center>Marca</center></th>
                <th><center>Modelo</center></th>
                <th><center>Ano Fab/Mod</center></th>
                <th><center>Cap. Pipa</center></th>
                <th><center>Ano Licen.</center></th>
                <th width="150"><center>Opções</center></th>

                <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['veiculo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                    <tr class="text-left">
                        <?php if ($_smarty_tpl->tpl_vars['u']->value->id_veiculo==2){?>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->placa_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->cor_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->renavan_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->proprietario_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->marca_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->modelo_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->ano_fab_veiculo;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->ano_modelo_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->cap_lts_veiculo;?>
</strong></td>
                            <td class="active text-center"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value->ano_licenciamento_veiculo;?>
</strong></td>
                            <td class="active text-center">
                                <button class="btn btn-default btn-xs">Pipeiros Sem Veículos</button>
                            </td>

                        <?php }else{ ?>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->placa_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->cor_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->renavan_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->proprietario_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->marca_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->modelo_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->ano_fab_veiculo;?>
/<?php echo $_smarty_tpl->tpl_vars['u']->value->ano_modelo_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->cap_lts_veiculo;?>
</td>
                            <td class="active"><?php echo $_smarty_tpl->tpl_vars['u']->value->ano_licenciamento_veiculo;?>
</td>
                            <td class="active">
                                <a href="editarVeiculo.php?id=<?php echo $_smarty_tpl->tpl_vars['u']->value->id_veiculo;?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
                                <button type="button" onclick="excluirCarro(<?php echo $_smarty_tpl->tpl_vars['u']->value->id_veiculo;?>
)" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-warning-sign"></span> Excluir</button>
                            </td>
                        <?php }?>
                    </tr>
                <?php } ?>
            <?php }else{ ?>
                <tr class="text-center"><td><h2>Nenhum carro cadastrado</h2></td></tr>
                        <?php }?>
        </table>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>
<br /> <br />
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
<?php }} ?>