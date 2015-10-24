<?php /* Smarty version Smarty-3.1.13, created on 2015-10-23 10:29:44
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/pesquisarDeclaracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8114926265628ca6fe99c11-74429798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09f90d9a2274313baa2f845c41bb77561c0e1174' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/pesquisarDeclaracao.tpl',
      1 => 1445603381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8114926265628ca6fe99c11-74429798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5628ca6ff36f57_00743094',
  'variables' => 
  array (
    'erroRPS' => 0,
    'cidade' => 0,
    'c' => 0,
    'valorBusca' => 0,
    'buscaRPS' => 0,
    'buscaMilitar' => 0,
    'v' => 0,
    'nivel' => 0,
    'funcao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628ca6ff36f57_00743094')) {function content_5628ca6ff36f57_00743094($_smarty_tpl) {?><div class="panel panel-warning">

    <div class="panel-heading">

        <h2 class="panel-title">Pesquisar Alteração</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erroRPS']->value;?>

        <form method="post" class="navbar-form navbar-left form-inline" >

            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCpf" name="inputCpf" required="" placeholder="CPF do pipeiro">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-warning">Pesquisar</button>
        </form>

        <form method="post" class="navbar-form navbar-left form-inline" >
            <div class="form-group">
                <div class="col-sm-10">
                    <select name="selectIdCidade" required="" id="selectIdCidade" class="form-control">
                        <option value="">Pesquisa por cidade</option>
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cidade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->nome_cidade_atuante;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->nome_cidade_atuante;?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-warning">Pesquisar</button>
        </form>
        <!--
        <div class="form-group">
            <div class="col-sm-7">
                <input type="text" class="form-control" id="dataDeclaracao" name="dataDeclaracao" required="" placeholder="Data">
            </div>
        </div>
        -->


        <p></p>
    </div>
</div>
<hr>

<?php if (isset($_smarty_tpl->tpl_vars['valorBusca']->value)){?>
    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['buscaRPS']->value)){?>Resultado de: <u><?php echo $_smarty_tpl->tpl_vars['buscaRPS']->value;?>
</u> <?php }elseif(isset($_smarty_tpl->tpl_vars['buscaMilitar']->value)){?> Resultado das RPS geradas por: <u><?php echo $_smarty_tpl->tpl_vars['buscaMilitar']->value;?>
</u> <?php }?></h2>
        </div>

        <div class="table-responsive table-bordered">
            <table class="table">

                <th><center>Nr RPS</center></th>
                <th><center>Pipeiro</center></th>
                <th><center>Valor Liquido</center></th>
                <th><center>Mês ano do serviço</center></th>
                <th><center>Qnt Tickets</center></th>
                <th><center>Alterações</center></th>
                <th><center>Ações</center></th>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['valorBusca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr class="text-center">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->id_rps;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->nome_pipeiro;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->valor_liquido_rps;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->mes_rps;?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value->ano_rps;?>
</td> 
                        <td><?php if (!empty($_smarty_tpl->tpl_vars['v']->value->tickets_declaracao)){?><?php echo $_smarty_tpl->tpl_vars['v']->value->tickets_declaracao;?>
<?php }else{ ?><small><i>Sem informações</i></small><?php }?></td>
                        <td><?php if (!empty($_smarty_tpl->tpl_vars['v']->value->alteracoes_declaracao)){?><?php echo $_smarty_tpl->tpl_vars['v']->value->alteracoes_declaracao;?>
<?php }else{ ?><small><i>Sem alterações</i></small><?php }?></td>
                        <td >
                            <a href="RPS2via.php?rps2via=<?php echo $_smarty_tpl->tpl_vars['v']->value->id_rps;?>
" target="_blank" class="btn btn-info btn-xs"> Ver RPS</a><br>
                            
                            <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?>
                                <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"&&$_smarty_tpl->tpl_vars['funcao']->value!="GCDA"){?>
                                    <a onclick="excluirRPS(<?php echo $_smarty_tpl->tpl_vars['v']->value->id_rps;?>
)" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove-circle"></span> Excluir</a>
                                <?php }?>
                            <?php }?>
                        </td>
                    </tr>                    
                <?php } ?>

            </table>
        </div>
    </div>

<?php }else{ ?>

    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['buscaRPS']->value)){?>Resultado de nome de pipeiro: <u><?php echo $_smarty_tpl->tpl_vars['buscaRPS']->value;?>
</u> <?php }elseif(isset($_smarty_tpl->tpl_vars['buscaMilitar']->value)){?> Resultado das RPS geradas por: <u><?php echo $_smarty_tpl->tpl_vars['buscaMilitar']->value;?>
</u> <?php }?></h2>
        </div>

        <div class="table-responsive table-bordered">
            <div class="panel-body">
                <div class="alert alert-danger" role="alert">
                    <center>Nenhum resultado</center>
                </div>
            </div>
        </div>
    </div>

<?php }?><?php }} ?>