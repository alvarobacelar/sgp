<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if (!empty($_GET["id"])) {

        // condições de freeadbak
        if (isset($_SESSION["erroPipeiro"])) {
            if ($_SESSION["erroPipeiro"] == "excluido") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Empenho excluido com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "erro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o pipeiro</div>");
            } else if ($_SESSION["erroPipeiro"] == "mudarCarro") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Carro alterado para o pipeiro</div>");
            } else if ($_SESSION["erroPipeiro"] == "liquidado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Valor Liquidado! </div>");
            } else if ($_SESSION["erroPipeiro"] == "naoliquidado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro ao liquidar o empenho</div>");
            } else if ($_SESSION["erroPipeiro"] == "editado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro editado com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "cidade") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Cidade alterada com sucesso!</div>");
            } else if ($_SESSION["erroPipeiro"] == "mudado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiros adicionados!</div>");
            } else if ($_SESSION["erroPipeiro"] == "desativado") {
                $smarty->assign("erroPipeiro", "<div class='alert alert-success' role='alert'>Pipeiro desativado para esta cidade!</div>");
            } else {
                $smarty->assign("erroPipeiro", "<div class='alert alert-danger' role='alert'>Erro na sua solicitação</div>");
            }
        } else {
            $smarty->assign("erroPipeiro", "");
        }
        unset($_SESSION["erroPipeiro"]);
        // fim da condições de retorno

        $idCidade = addslashes($_GET["id"]);

        $verCidade = new ManipulateData();
        $verCidade->setCamposBanco("cidade_atuante.id_cidade_atuante");
        $verCidade->setDados("$idCidade");
        $verCidade->selectCidadeAtuacao();

        /*
         * Buscando no banco de dados o ultimo empenho lançado
         */
        $buscaEmpenho = new ManipulateData();
        $buscaRps = new ManipulateData();
        
        $smarty->assign("mesAnt",$buscaEmpenho->mostrarMesAnt());

        // INACABADO

        $cidade = new ManipulateData();
        $cidade->setTable("cidade_atuante");
        $cidade->setFieldId("id_cidade_atuante");
        $cidade->setValueId("$idCidade");
        $cidade->selectAlterar();

        // buscando no banco de dados todos os pipeiros desabilitados
        $pipeiroEsc = new ManipulateData();
        $pipeiroEsc->setTable("pipeiro");
        $pipeiroEsc->setOrderTable("nome_pipeiro");
        $pipeiroEsc->selectPipeirosDesativados();
        while ($dbEscolha[] = $pipeiroEsc->fetch_object()) {
            $smarty->assign("pipeiroEscolha", $dbEscolha);
        }

        $idPipeiro = addslashes($_GET["id"]);

        $editaPipeiro = new ManipulateData();
        $editaPipeiro->setTable("pipeiro,cidade_atuante,veiculo");
        $editaPipeiro->setValueId($idPipeiro);
        $editaPipeiro->selectPipeiro();

        // verifica se o id solicitado existe. se não existir redireciona para a pagina de erro
        if ($editaPipeiro->registros_retornados() >= 1) {

            $pipeiro = $editaPipeiro->fetch_object();
            $smarty->assign("pipeiro", $pipeiro);

            // busca por veiculos
            $buscaVeiculo = new ManipulateData();
            $buscaVeiculo->setTable("veiculo");
            $buscaVeiculo->select();

            while ($dbVeiculo[] = $buscaVeiculo->fetch_object()) {
                $smarty->assign("veiculo", $dbVeiculo);
            }
        }

        // verifica se o id solicitado existe. se não existir redireciona para a pagina de erro
        if ($cidade->registros_retornados() >= 1) {

            $dbCidade = $cidade->fetch_object();
            $smarty->assign("cidade", $dbCidade);

            while ($dbVerCidade = $verCidade->fetch_object()) {

                $nomePipeiro[] = $dbVerCidade->nome_pipeiro;
                $idCidadeAtua[] = $dbVerCidade->id_cidade_atuante;
                $idPipeiroEmp[] = $dbVerCidade->id_pipeiro;

                $smarty->assign("nomePipeiro", $nomePipeiro);
                $smarty->assign("idCidadeAtua", $idCidadeAtua);
                $smarty->assign("idPipeiro", $idPipeiroEmp);

                /*
                 * Buscando os dados da RPS para liquidação
                 */
                $mesRps = $buscaRps->mostrarMesAnt();
                $buscaRps->setTable("rps, pipeiro");
                $buscaRps->setOrderTable("WHERE rps.pipeiro_id_pipeiro = pipeiro.id_pipeiro "
                        . "AND id_pipeiro = '$dbVerCidade->id_pipeiro'"
                        . "AND mes_rps = '$mesRps'"
                        . "AND status_remove='0'");
                $buscaRps->select();
                $valRps = $buscaRps->fetch_object();
                
                if (!empty($valRps)) {
                    $valorRps[] = $valRps->valor_liquido_rps;
                    $smarty->assign("valorRps", $valorRps);
                }

                /*
                 * Buscando no banco de dados o último empenho do mês corrente. 
                 */
                $mesEmp = $buscaEmpenho->mostrarMesAnt();
                $buscaEmpenho->setTable("empenho, liquidacao_empenho, pipeiro");
                $orderBusca = "WHERE empenho.id_empenho = liquidacao_empenho.empenho_id_empenho 
                      AND liquidacao_empenho.pipeiro_id_pipeiro = pipeiro.id_pipeiro 
                      AND pipeiro_id_pipeiro = '$dbVerCidade->id_pipeiro'
                      AND empenho.mes_pgto_empenho  = '$mesEmp'";
                $buscaEmpenho->setOrderTable($orderBusca);
                $buscaEmpenho->select();
                $buscaEmp = $buscaEmpenho->fetch_object();
                if (!empty($buscaEmp)) {
                    $idEmpenho[] = $buscaEmp->id_empenho;
                    $idLiquida[] = $buscaEmp->id_liquidacao;
                    $credito[] = $buscaEmp->nc_empenho;
                    $empenho[] = $buscaEmp->ne_empenho;
                    $mesEmpenho[] = $buscaEmp->mes_pgto_empenho;
                    $valorEmpenho[] = $buscaEmp->valor_empenho;
                    $valorLiq[] = $buscaEmp->saldo_liquidacao;
                    $ordBanco[] = $buscaEmp->nr_ob_liquidacao;

                    $smarty->assign("ordBanco", $ordBanco);
                    $smarty->assign("valLiq", $valorLiq);
                    $smarty->assign("id_empenho", $idEmpenho);
                    $smarty->assign("id_liquidacao", $idLiquida);
                    $smarty->assign("nc_empenho", $credito);
                    $smarty->assign("ne_empenho", $empenho);
                    $smarty->assign("mes_pgto_empenho", $mesEmpenho);
                    $smarty->assign("valor_empenho", $valorEmpenho);
                }
            }
        } else {
            header("location: ./erro.php");
        }

        $smarty->assign("nivel", $_SESSION["nivel"]);
        $smarty->assign("conteudo", "paginas/liquidarEmpenho.tpl");
        $smarty->display("HTML.tpl");
    } else {
        header("location: ./erro.php");
    }
}