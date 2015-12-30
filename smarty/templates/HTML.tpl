 
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

                        {if $nivel == "admin" || $nivel == "gerente"}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pipeiros <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    {if $funcao == "Credenciamento" || $funcao == "Administrador do Sistema" || $funcao == "Chefe da prestação de contas"}
                                        <li role="presentation" class="dropdown-header">Novo Cadastro</li>
                                        <li><a href="cadastrarCidade.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Nova Cidade</a></li>
                                        <li><a href="cadastrarCarro.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Novo Carro</a></li>
                                        <li><a href="cadastrarPipeiro.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Novo Pipeiro</a></li>

                                        {*  {if $nivel == "admin"}
                                        <li class="divider"></li>
                                        <li><a href="importarDados.php"><span class="glyphicon glyphicon-import"></span> Importar do Excel</a></li>
                                        {/if} *}

                                        <li class="divider"></li>
                                        {/if}
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
                        {/if}

                        {*esses menu abaixo so irão aparecer para o usuário Administrador*}
                        {if $nivel == "admin"}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="usuariosCadastrados.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuários Cadastrados</a></li>
                                    <li><a href="cadastrarUsuario.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Cadastrar Usuários</a></li>
                                    <li><a href="logAcesso.php">Log de Acessos</a></li>
                                </ul>
                            </li>
                        {/if}
                        {* fim da condição do menu do administrador *}
                        {if $nivel != "vis"}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">RPS e Declaração <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    {if $funcao == "Administrador do Sistema" || $funcao == "Chefe da prestação de contas" || $funcao == "Prestação de conta"}
                                        <li><a href="pesquisarPipeiro.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Gerar RPS</a></li>
                                        <li><a href="pesquisarPipeiroDeclaracao.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Gerar Declaração</a></li>
                                        <li class="divider"></li>
                                        {/if}
                                        {if $nivel == "user"}
                                        <li><a href="informeAlteracoes.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Informar Alterações</a></li>
                                        {/if}

                                    <li><a href="pesquisarRPS.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pesquisar RPS</a></li>
                                    <li><a href="pesquisarDeclaracao.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Alterações Declaração</a></li>
                                        {if $nivel == "admin" || $nivel == "gerente"}
                                            {if $funcao == "Chefe da prestação de contas" || $funcao == "Administrador do Sistema"}
                                            <li class="divider"></li>
                                            <li role="presentation" class="dropdown-header">Gerar ...</li>
                                            <li><a href="gerarRelDiarioRPS.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Relatório diário</a></li>
                                            <li><a href="gerarTabelaGfip.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Relatório por data</a></li>
                                            {/if}
                                        {/if}
                                        {if $nivel == "admin"}
                                        <li class="divider"></li>
                                        <li role="presentation" class="dropdown-header">Ver ...</li>
                                        <li><a href="rpsExcluidas.php"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Excluidas</a></li>
                                        {/if}
                                </ul>
                            </li>
                        {/if}
                        {if $nivel != "user" && $nivel != "gerente"}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciamento financeiro<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="empenho.php"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Lançar empenho</a></li>
                                    <li><a href="liquidacao.php"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Liquidar empenho</a></li>
                                </ul>
                            </li>
                        {/if}
                        {if $nivel == "admin"}
                            <li><a href="cadastrarOM.php">Cadastrar OM</a></li>
                            {/if}
                            {* mostra barra de busca somente para usuario comum e gerente *}
                            {if $nivel == "user" || $nivel == "vis"}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pipeiros e Cidades <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu"> 
                                    <li><a href="cidadesCadastradas.php"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> Cidades Cadastradas</a></li>
                                    <li class="divider"></li>
                                    <li role="presentation" class="dropdown-header">Todos Pipeiros</li>
                                    <li><a href="pipeirosCadastrados.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Pipeiros Credenciados</a></li>
                                    <li><a href="pipeirosDesativados.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Pipeiros Desativados</a></li>
                                    <li><a href="pipeirosAtivos.php"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pipeiros Ativos</a></li>
                                        {if $nivel == "vis"}
                                        <li class="divider"></li>
                                        <li role="presentation" class="dropdown-header">Gerar ...</li>
                                        <li><a href="gerarTabelaGfip.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> GFIP</a></li>
                                        {/if}
                                </ul>
                            </li>
                        {/if}
                        {if $nivel == "vis"}
                            <li><a href="pesquisarRPS.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pesquisar RPS</a></li>
                            {/if}

                        {if $nivel != "admin"}
                            <form action="pipeirosCadastrados.php" method="get" class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="busca" name="busca" placeholder="Pesquisar pipeiro">
                                </div>
                                <button type="submit" class="btn btn-default">Pesquisar</button>
                            </form>
                        {/if}

                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        {* <li><a href="../navbar/">Default</a></li> *}
                        <li class="dropdown">                        
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <small>{$nomeUser}</small> <span class="caret"></span></a>
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

                {include file=$conteudo} {*Conteúdo principal do sistema*}

            </div>

        </div> <!-- /container -->


        <p class="text-center rodape">
            ©2014 - SGP Sistema de gerenciamento e prestação de contas de pipeiros<br />
            Idealizado, projetado e construído por <a href="http://alvarobacelar.com" target="_blank">Álvaro Bacelar</a><br />
            {$versao}
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
</html>