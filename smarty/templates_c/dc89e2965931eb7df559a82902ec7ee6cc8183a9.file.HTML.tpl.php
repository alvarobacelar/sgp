<?php /* Smarty version Smarty-3.1.13, created on 2015-10-22 17:29:15
         compiled from "/home/www/html/sisGerPipa/smarty/templates/HTML.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9877520715550fafea42db1-26341689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc89e2965931eb7df559a82902ec7ee6cc8183a9' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/HTML.tpl',
      1 => 1445542153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9877520715550fafea42db1-26341689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5550fafeb2d6c9_01773401',
  'variables' => 
  array (
    'nivel' => 0,
    'funcao' => 0,
    'nomeUser' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550fafeb2d6c9_01773401')) {function content_5550fafeb2d6c9_01773401($_smarty_tpl) {?> 
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>SGP - Sistema de Gerenciamento de Pipeiro</title>

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- CSS geral da layout -->
        <link href="css/geral.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="lib/bootstrap/css/navbar-static-top.css" rel="stylesheet">

        <script src="js/valida.js" type="text/javascript"></script>


        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/IE/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/IE/html5shiv.min.js"></script>
          <script src="js/IE/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./"><span class="glyphicon glyphicon-home"></span> <strong>SGP</strong></a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">

                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"||$_smarty_tpl->tpl_vars['nivel']->value=="gerente"){?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pipeiros <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if ($_smarty_tpl->tpl_vars['funcao']->value=="Credenciamento"||$_smarty_tpl->tpl_vars['funcao']->value=="Administrador do Sistema"||$_smarty_tpl->tpl_vars['funcao']->value=="Chefe da prestação de contas"){?>
                                        <li role="presentation" class="dropdown-header">Novo Cadastro</li>
                                        <li><a href="cadastrarCidade.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Nova Cidade</a></li>
                                        <li><a href="cadastrarCarro.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Novo Carro</a></li>
                                        <li><a href="cadastrarPipeiro.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Novo Pipeiro</a></li>

                                        

                                        <li class="divider"></li>
                                        <?php }?>
                                    <li role="presentation" class="dropdown-header">Cadastrados no Sistema</li>
                                    <li><a href="cidadesCadastradas.php"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> Cidades Cadastradas</a></li>
                                    <li><a href="veiculosCadastrados.php"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> Carros Cadastrados</a></li>

                                    <li><a href="pipeirosCadastrados.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Todos Pipeiros</a></li>
                                    <li><a href="pipeirosDesativados.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Pipeiros Desativados</a></li>
                                    <li><a href="pipeirosAtivos.php"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pipeiros Ativos</a></li>
                                    <li class="divider"></li>
                                    <li role="presentation" class="dropdown-header">Gerar ...</li>
                                    <li><a href="gerarContrato.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Contrato</a></li>
                                    <!--<li><a href=""><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Ficha Cadastro</a></li>-->
                                    <!--<li><a href="gerarEntradaPipeiros.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Rel. entrada de pipeiros</a></li>-->                                    
                                    <li><a href="gerarTabelaGfip.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> GFIP</a></li>
                                </ul>
                            </li>
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="usuariosCadastrados.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuários Cadastrados</a></li>
                                    <li><a href="cadastrarUsuario.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Cadastrar Usuários</a></li>
                                    <li><a href="logAcesso.php">Log de Acessos</a></li>
                                </ul>
                            </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="vis"){?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">RPS e Declaração <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if ($_smarty_tpl->tpl_vars['funcao']->value=="Administrador do Sistema"||$_smarty_tpl->tpl_vars['funcao']->value=="Chefe da prestação de contas"||$_smarty_tpl->tpl_vars['funcao']->value=="Prestação de conta"){?>
                                        <li><a href="pesquisarPipeiro.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Gerar RPS</a></li>
                                        <li><a href="pesquisarPipeiroDeclaracao.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Gerar Declaração</a></li>
                                        <li class="divider"></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="user"){?>
                                        <li><a href="informeAlteracoes.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Informar Alterações</a></li>
                                        <?php }?>

                                    <li><a href="pesquisarRPS.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pesquisar RPS</a></li>
                                    <li><a href="pesquisarDeclaracao.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Alterações Declaração</a></li>
                                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"||$_smarty_tpl->tpl_vars['nivel']->value=="gerente"){?>
                                            <?php if ($_smarty_tpl->tpl_vars['funcao']->value=="Chefe da prestação de contas"||$_smarty_tpl->tpl_vars['funcao']->value=="Administrador do Sistema"){?>
                                            <li class="divider"></li>
                                            <li role="presentation" class="dropdown-header">Gerar ...</li>
                                            <li><a href="gerarRelDiarioRPS.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Relatório diário</a></li>
                                            <li><a href="gerarTabelaGfip.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Relatório por data</a></li>
                                            <?php }?>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>
                                        <li class="divider"></li>
                                        <li role="presentation" class="dropdown-header">Ver ...</li>
                                        <li><a href="rpsExcluidas.php"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Excluidas</a></li>
                                        <?php }?>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"&&$_smarty_tpl->tpl_vars['nivel']->value!="gerente"){?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciamento financeiro<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="empenho.php">Lançar empenho</a></li>
                                    <li><a href="">Opção 2</a></li>
                                    <li><a href="">Opção 3</a></li>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="admin"){?>
                            <li><a href="cadastrarOM.php">Cadastrar OM</a></li>
                            <?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="user"||$_smarty_tpl->tpl_vars['nivel']->value=="vis"){?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pipeiros e Cidades <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu"> 
                                    <li><a href="cidadesCadastradas.php"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> Cidades Cadastradas</a></li>
                                    <li class="divider"></li>
                                    <li role="presentation" class="dropdown-header">Todos Pipeiros</li>
                                    <li><a href="pipeirosCadastrados.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Pipeiros Credenciados</a></li>
                                    <li><a href="pipeirosDesativados.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Pipeiros Desativados</a></li>
                                    <li><a href="pipeirosAtivos.php"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pipeiros Ativos</a></li>
                                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="vis"){?>
                                        <li class="divider"></li>
                                        <li role="presentation" class="dropdown-header">Gerar ...</li>
                                        <li><a href="gerarTabelaGfip.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> GFIP</a></li>
                                        <?php }?>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value=="vis"){?>
                            <li><a href="pesquisarRPS.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pesquisar RPS</a></li>
                            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="admin"){?>
                            <form action="pipeirosCadastrados.php" method="get" class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="busca" name="busca" placeholder="Pesquisar pipeiro">
                                </div>
                                <button type="submit" class="btn btn-default">Pesquisar</button>
                            </form>
                        <?php }?>

                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">                        
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <small><?php echo $_smarty_tpl->tpl_vars['nomeUser']->value;?>
</small> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="usuario.php"><span class="glyphicon glyphicon-edit"></span> Alterar Senha</a></li>
                                <li><a href="logOUT.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">

                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

            </div>

        </div> <!-- /container -->


        <p class="text-center rodape">
            ©2014 - SGP Sistema de gerenciamento e prestação de contas de pipeiros<br />
            Idealizado, projetado e construído por <a href="http://alvarobacelar.com" target="_blank">Álvaro Bacelar</a><br />
            Versão 1.6.2
        </p>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="js/jQuery/jquery-1.8.3.min.js"></script>
        <script src="js/jQuery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="lib/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
        <script src="js/jQuery/jquery.maskedinput.min.js"></script>
        <script src="js/jQuery/jquery.validate.js"></script>
        <script src="js/jQuery/util.validate.js"></script>
        <script src="js/jQuery/validador.js"></script>
        <script src="js/jQuery/jquery.js"></script>
        <script src="js/jQuery/jquery.maskMoney.js"></script>
        <script src="js/jQuery/mascaras.js"></script>
        <script src="js/ajax.js"></script>
    </body>
</html><?php }} ?>