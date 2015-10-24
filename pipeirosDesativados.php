<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './includes/classes/Pagination.php';

if ($estaLogado == "SIM" && !isset($active)) {
    
    $dataHoje = date("Y-m-d");

    if (isset($_SESSION["erroPipeiro"])) {
        if ($_SESSION["erroPipeiro"] == "excluir") {
            $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro excluido com sucesso!</div>");
        } else if ($_SESSION["erroPipeiro"] == "erro") {
            $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o pipeiro</div>");
        } else if ($_SESSION["erroPipeiro"] == "mudarCarro") {
            $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Carro alterado para o usuário</div>");
        } else if ($_SESSION["erroPipeiro"] == "duplicado") {
            $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro! Pipeiros Já cadastrado</div>");
        } else if ($_SESSION["erroPipeiro"] == "carro") {
            $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro! Carro cadastrado pra outro pipeiro</div>");
        } else if ($_SESSION["erroPipeiro"] == "editado") {
            $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro editado com sucesso!</div>");
        }
    } else {
        $smarty->assign("erroPipeiro", "");
    }
    unset($_SESSION["erroPipeiro"]);
   

    // se existir uma busca, o sistem busca somente aquele pipeiro que o usuaário buscou
    if (isset($_GET["busca"])) {

        $buscaPipeiro = addslashes($_GET["busca"]);

        $busca = new ManipulateData();
        $busca->setTable("pipeiro, cidade_atuante");
        $busca->setFieldId("nome_pipeiro");
        $busca->setValueId("$buscaPipeiro");
        $busca->pesquisarPipeiro(" = 10");


        $smarty->assign("busca", $buscaPipeiro); // nome da busca que aparecerá no navegador
        $smarty->assign("sit", "desativado");

        while ($dbPipeiro = $busca->fetch_object()) {
            $nomeCidadeAtuante[] = $dbPipeiro->nome_cidade_atuante;
            $idPipeiro[] = $dbPipeiro->id_pipeiro;
            $nomePipeiro[] = $dbPipeiro->nome_pipeiro;
            $uf[] = $dbPipeiro->uf;
            $cidade[] = $dbPipeiro->cidade;
            $ufCidade[] = $dbPipeiro->uf_cidade;
            $dataEdicaoPipeiro[] = $dbPipeiro->data_edicao_pipeiro;
            $usuarioEdicaoPipeiro[] =  $dbPipeiro->usuario_edicao_pipeiro;
            $idCidadeAtuante[] =  $dbPipeiro->id_cidade_atuante;
            
            $smarty->assign("id_cidade_atuante", $idCidadeAtuante);
            $smarty->assign("nome_cidade_atuante", $nomeCidadeAtuante);
            $smarty->assign("id_pipeiro", $idPipeiro);
            $smarty->assign("nome_pipeiro", $nomePipeiro);
            $smarty->assign("uf", $uf);
            $smarty->assign("cidade", $cidade);
            $smarty->assign("uf_cidade", $ufCidade);
            $smarty->assign("data_edicao_pipeiro", $dataEdicaoPipeiro);
            $smarty->assign("usuario_edicao_pipeiro", $usuarioEdicaoPipeiro);
            
            // fazendo a contagem de dias restantes de usuario ativo 
            $dataFimCrenden = $dbPipeiro->data_fim_credenciamento;
            
            $time_inicial = strtotime($dataHoje);
            $time_final = strtotime($dataFimCrenden);
            $diferenca = $time_final - $time_inicial; // 19522800 segundos
            $diasRestantes[] = floor($diferenca / (60 * 60 * 24));
            
            $smarty->assign("dias", $diasRestantes);
        }
        $smarty->assign("paginacao", "");
    } else {


// ########### PAGINAÇÃO #############//
        $paginacao = new ManipulateData();
        $paginacao->setTable("pipeiro, cidade_atuante, veiculo");
        if (isset($_GET["pg"])) { // se exitir uma variavel na URL é setado para a paginação
            $pg = $_GET["pg"];
        } else {
            $pg = 1;
        }
        $quantPipeiro = 20; // Quantidade de chamado por pagina
        $inicio = ($pg * $quantPipeiro) - $quantPipeiro; // Definindo o inicio da paginação
// ######### FIM DA PAGINAÇÃO ###########// 
        $piperoCadastrado = new ManipulateData();
        $piperoCadastrado->setTable("pipeiro, cidade_atuante, veiculo");
        $piperoCadastrado->setOrderTable("nome_pipeiro DESC LIMIT $inicio, $quantPipeiro"); // selecionando pipeiros dentro da paginação

        $pagina = new Pagination($pg, $quantPipeiro, $paginacao->CountPipeiroDesativado());
        $piperoCadastrado->selectPipeiroDesativado();
        $smarty->assign("total", $paginacao->CountPipeiroDesativado());
        $smarty->assign("local", "nao");

        while ($dbPipeiro = $piperoCadastrado->fetch_object()) {
            $nomeCidadeAtuante[] = $dbPipeiro->nome_cidade_atuante;
            $idPipeiro[] = $dbPipeiro->id_pipeiro;
            $nomePipeiro[] = $dbPipeiro->nome_pipeiro;
            $uf[] = $dbPipeiro->uf;
            $cidade[] = $dbPipeiro->cidade;
            $ufCidade[] = $dbPipeiro->uf_cidade;
            $dataEdicaoPipeiro[] = $dbPipeiro->data_edicao_pipeiro;
            $usuarioEdicaoPipeiro[] =  $dbPipeiro->usuario_edicao_pipeiro;
            $idCidadeAtuante[] =  $dbPipeiro->id_cidade_atuante;
            
            $smarty->assign("id_cidade_atuante", $idCidadeAtuante);
            $smarty->assign("nome_cidade_atuante", $nomeCidadeAtuante);
            $smarty->assign("id_pipeiro", $idPipeiro);
            $smarty->assign("nome_pipeiro", $nomePipeiro);
            $smarty->assign("uf", $uf);
            $smarty->assign("cidade", $cidade);
            $smarty->assign("uf_cidade", $ufCidade);
            $smarty->assign("data_edicao_pipeiro", $dataEdicaoPipeiro);
            $smarty->assign("usuario_edicao_pipeiro", $usuarioEdicaoPipeiro);
            
            // fazendo a contagem de dias restantes de usuario ativo 
            $dataFimCrenden = $dbPipeiro->data_fim_credenciamento;
            
            $time_inicial = strtotime($dataHoje);
            $time_final = strtotime($dataFimCrenden);
            $diferenca = $time_final - $time_inicial; // 19522800 segundos
            $diasRestantes[] = floor($diferenca / (60 * 60 * 24));
            
            $smarty->assign("dias", $diasRestantes);
        }
        $smarty->assign("paginacao", $pagina->paginacao());
    }
    $smarty->assign("nivel", $_SESSION["nivel"]);

    $smarty->assign("conteudo", "paginas/pipeirosCadastrados.tpl");
    $smarty->display("HTML.tpl");
}



    