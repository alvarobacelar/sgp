<?php /* Smarty version Smarty-3.1.13, created on 2015-01-27 00:54:52
         compiled from "/var/www/html/sisGerPipa/smarty/templates/HTMLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1755692286547c67804b3785-45882229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc5ef193b051cb3511c5f939a052538d7d16e90' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/HTMLogin.tpl',
      1 => 1422239785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1755692286547c67804b3785-45882229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547c67806e2b65_26597659',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c67806e2b65_26597659')) {function content_547c67806e2b65_26597659($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>SGP - Sistema de Gerenciamento de pipeiro</title>

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- CSS geral da layout -->
        <link href="css/geral.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="lib/bootstrap/css/navbar-static-top.css" rel="stylesheet">

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

        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><strong>SGP</strong></a>
                    <p class="navbar-text">Sistema de Gerenciamento de Pipeiros</p>   
                </div>

            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <!-- Main component for a primary marketing message or call to action -->
                <div class="jumbotron">
                    <p class="lead text-center">Realize o login para ter acesso ao sistema</p><br />
                    <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

                    <form action="logSistem.php" method="post" name="logar" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputLogin" class="col-sm-2 control-label">Usuário</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLogin" name="inputLogin" autofocus value="" placeholder="Usuário" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputSenha" name="inputSenha" value="" placeholder="Senha" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Lembre-me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Entrar</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <p class="text-center rodape">
            ©2014 - SGP Sistema de gerenciamento e prestação de contas de pipeiros<br />
            Idealizado, projetado e construído por  3º Sgt TTI <a href="http://alvarobacelar.com" target="_blank">Álvaro</a><br />
            Versão 1.4
        </p>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jQuery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="lib/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html><?php }} ?>