<?php /* Smarty version Smarty-3.1.13, created on 2016-02-11 11:53:47
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/pesquisarRPS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78558670556bca07b6513f6-33250242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b580cf58be07aebbe4cb37a7338f5f891298988d' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/pesquisarRPS.tpl',
      1 => 1445535110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78558670556bca07b6513f6-33250242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erroRPS' => 0,
    'valorBusca' => 0,
    'buscaRPS' => 0,
    'buscaMilitar' => 0,
    'v' => 0,
    'nivel' => 0,
    'funcao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56bca07b7b8d27_07646612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bca07b7b8d27_07646612')) {function content_56bca07b7b8d27_07646612($_smarty_tpl) {?><div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Pesquisar RPS</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erroRPS']->value;?>

        <form method="get" class="navbar-form navbar-left form-inline" >
            <div class="form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="buscaRPS" name="buscaRPS" required="" placeholder="Nome do pipeiro">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-default">Pesquisar</button>
        </form>

        <form method="get" class="navbar-form navbar-left form-inline" >
            <div class="form-group">
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="buscaMilitar" name="buscaMilitar" required="" placeholder="Militar que gerou">
                </div>
            </div>
            <button type="submit" id="pesquisaVeiculo" class="btn btn-default">Pesquisar</button>
        </form><br />

        <p></p>
    </div>
</div>
<hr>

<?php if (isset($_smarty_tpl->tpl_vars['valorBusca']->value)){?>
    <div class="panel panel-default">

        <div class="panel-heading">

            <h2 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['buscaRPS']->value)){?>Resultado de nome de pipeiro: <u><?php echo $_smarty_tpl->tpl_vars['buscaRPS']->value;?>
</u> <?php }elseif(isset($_smarty_tpl->tpl_vars['buscaMilitar']->value)){?> Resultado das RPS geradas por: <u><?php echo $_smarty_tpl->tpl_vars['buscaMilitar']->value;?>
</u> <?php }?></h2>
        </div>

        <div class="table-responsive table-bordered">
            <table class="table">

                <th><center>Nr RPS</center></th>
                <th><center>Pipeiro</center></th>
                <th><center>Valor Bruto</center></th>
                <th><center>Data Hora Emissão</center></th>
                <th><center>Mês ano do serviço</center></th>
                <th><center>Quem Gerou</center></th>
                <th><center>IP</center></th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->valor_bruto_rps;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->data_emissao_rps;?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value->hora;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->mes_rps;?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value->ano_rps;?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->nome_militar;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value->ip;?>
</td>
                        <td width="150">
                            <a href="RPS2via.php?rps2via=<?php echo $_smarty_tpl->tpl_vars['v']->value->id_rps;?>
" target="_blank" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-open"></span> Ver</a>
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