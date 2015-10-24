<?php

require_once '../models/ManipulateData.php';

session_start();

$idCidade = addslashes($_POST["selectIdCidade"]);
$idVeiculo = addslashes($_POST["selectIdCarro"]);

$nome = addslashes($_POST["inputNome"]);
$cpf = addslashes($_POST["inputCpf"]);
$identidade = addslashes($_POST["inputIdentidade"]);
$orgao = addslashes($_POST["inputOrgao"]);
$cnh = addslashes($_POST["inputCnh"]);
$nit = addslashes($_POST["inputNit"]);
$numeroRPS = addslashes($_POST["inputNrRPS"]);
$validadeCnh = addslashes($_POST["inputValidadeCnh"]);

$banco = addslashes($_POST["selectBanco"]);
$agencia = addslashes($_POST["inputAgencia"]);
$conta = addslashes($_POST["inputConta"]);

$logradouro = addslashes($_POST["inputLogradouro"]);
$numero = addslashes($_POST["inputNumero"]);
$complemento = addslashes($_POST["inputComplemento"]);
$cep = addslashes($_POST["inputCep"]);
$bairro = addslashes($_POST["inputBairro"]);
$cidade = addslashes($_POST["inputCidade"]);
$uf = addslashes($_POST["inputUf"]);
$telefone = addslashes($_POST["inputTelefone"]);

$usuarioEdicao = $_SESSION["posto"] . " " . $_SESSION["nome"];
$dataEdicao = date("Y-m-d") . " " . date("H:i:s");

if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

// definindo o retorno para a página de acordo de onde vem a requisição
    if (isset($_POST["idCidade"])) {
        $idCidadeRetorno = addslashes($_POST["idCidade"]);
        $retorno = "verCidade.php?id=$idCidadeRetorno";
    } else if (isset($_POST["inputIdAlt"])) {
        $retorno = "verAlteracoes.php";
    } else {
        $retorno = "pipeirosCadastrados.php";
    }

// veirifcando se existe o id de uma informação de alteração para deletar esta
    if (isset($_POST["inputIdAlt"])) {

        $idAlt = addslashes($_POST["inputIdAlt"]);
        $exclui = new ManipulateData();
        $exclui->setTable("alteracoes");
        $exclui->setCampoTable("id_alteracao");
        $exclui->setValueId("$idAlt");
        $exclui->delete();
    }

    $status = 1;
    $dataCadastro = date("Y-m-d") . " " . date("H:i:s");
    $dataDia = date("Y-m-d");
    $idPipeiro = addslashes($_POST["inputIdPipeiro"]);

// se a pagina vier de mudar cidade, este vai mudar somente a cidade do pipepeiro
    if (isset($_POST["inputMudar"])) {
        $mudar = $_POST["inputMudar"];

        if ($mudar == "mudarCidade") { // se a pagina vier de mudar cidade, irá mudar somente a cidade 
            $dataInicio = addslashes($_POST["inputDataInicio"]);
            $dataFim = addslashes($_POST["inputDataFim"]);
            
            $editarPipeiro = new ManipulateData();
            $editarPipeiro->setTable("pipeiro");
            // ao alterar a cidade, o pipeiro fica com o status igual a 1, mostrando que está ativo no sistema.
            $editarPipeiro->setCamposBanco("id_cidade_atuante='$idCidade', status_credenciamento='$status', data_ativo_credenciamento='$dataInicio', data_fim_credenciamento='$dataFim'");
            $editarPipeiro->setFieldId("id_pipeiro");
            $editarPipeiro->setValueId("$idPipeiro");
            $editarPipeiro->update();

            $_SESSION["erroPipeiro"] = "cidade";
            header("location: ../../verCidade.php?id=$idCidade");
        } else if ($mudar == "mudarCarro") { // se não vai mudar somente o carro
            $verificarCarro = new ManipulateData();
            $verificarCarro->setValueId($idVeiculo);
            $verificarCarro->selectCarroCadastrado();
            $obj = $verificarCarro->fetch_object();

            // verificando se o carro já está cadastrado para outro pipeiro
            if ($verificarCarro->registros_retornados() >= 1 && $obj->id_veiculo != 2) {

                $_SESSION["erroPipeiro"] = "carro";
                header("location: ../../$retorno");
            } else {
                $editarPipeiro = new ManipulateData();
                $editarPipeiro->setTable("pipeiro");
                $editarPipeiro->setCamposBanco("id_veiculo='$idVeiculo'");
                $editarPipeiro->setFieldId("id_pipeiro");
                $editarPipeiro->setValueId("$idPipeiro");
                $editarPipeiro->update();

                $_SESSION["erroPipeiro"] = "mudarCarro";
                header("location: ../../$retorno");
            }
        }
    } else {
        if (isset($idPipeiro)) {

            $editarPipeiro = new ManipulateData();
            $editarPipeiro->setTable("pipeiro");
            $editarPipeiro->setCamposBanco("id_cidade_atuante='$idCidade', nome_pipeiro='$nome', cpf_pipeiro='$cpf', identidade_pipeiro='$identidade', orgao_expeditor='$orgao', cnh_pipeiro='$cnh', validade_cnh_pipeiro='$validadeCnh', nit_pipeiro='$nit', nr_rps_pipeiro='$numeroRPS', numero_endereco='$numero', complemento_contato='$complemento', telefone='$telefone', cep='$cep', cidade='$cidade', uf='$uf', bairro='$bairro', logradouro='$logradouro', agencia='$agencia', conta='$conta', banco='$banco', data_edicao_pipeiro='$dataEdicao', usuario_edicao_pipeiro='$usuarioEdicao'");
            $editarPipeiro->setFieldId("id_pipeiro");
            $editarPipeiro->setValueId("$idPipeiro");
            $editarPipeiro->update();

            $_SESSION["erroPipeiro"] = "editado";
            header("location: ../../$retorno");
        } else {
            $_SESSION["erroPipeiro"] = "erro";
            header("location: ../../$retorno");
        }
    }
} else {
    header("location: ../../accessDenied.php");
}