<?php /* Smarty version Smarty-3.1.13, created on 2015-01-21 22:32:56
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:975417973547c67875d11a1-21587551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3933a668b49f3d5d17f5a55c73934bc7fe411ec9' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/home.tpl',
      1 => 1421886773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '975417973547c67875d11a1-21587551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547c6787699212_10544321',
  'variables' => 
  array (
    'om' => 0,
    'mensagemADM' => 0,
    'm' => 0,
    'nivel' => 0,
    'erroMensagem' => 0,
    'buscaMilitar' => 0,
    'contRPS' => 0,
    'contInforme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c6787699212_10544321')) {function content_547c6787699212_10544321($_smarty_tpl) {?>

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

<?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>
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



    <script>
        setInterval("atualiza()", 6000);
        }
    </script>

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
<?php }else{ ?>



<?php }?><?php }} ?>