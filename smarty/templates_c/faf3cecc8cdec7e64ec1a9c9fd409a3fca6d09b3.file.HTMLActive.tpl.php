<?php /* Smarty version Smarty-3.1.13, created on 2015-09-24 20:43:26
         compiled from "/home/www/html/sisGerPipa/smarty/templates/HTMLActive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5650513295604878f8ae754-62097252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf3cecc8cdec7e64ec1a9c9fd409a3fca6d09b3' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/HTMLActive.tpl',
      1 => 1443138204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5650513295604878f8ae754-62097252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5604878fae22a5_15499448',
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5604878fae22a5_15499448')) {function content_5604878fae22a5_15499448($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>SGP - Falha na ativação do sistema</title>

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
    

     <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">

                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

            </div>

        </div> <!-- /container -->

        <p class="text-center rodape">
            ©2014 - SGP Sistema de gerenciamento e prestação de contas de pipeiros<br />
            Idealizado, projetado e construído por <a href="http://alvarobacelar.com" target="_blank">Álvaro Bacelar</a><br />
            Versão 1.5.2
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