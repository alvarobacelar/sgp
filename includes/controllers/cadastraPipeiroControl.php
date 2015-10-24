<?php

require_once '../models/ManipulateData.php';


$idCidade = addslashes($_POST["selectIdCidade"]);
$idCarro = addslashes($_POST["selectIdCarro"]);

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

$status = 1;
session_start();
$dataCadastro = date("Y-m-d") . " " . date("H:i:s");

if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

    $cadastraPipeiro = new ManipulateData();
    $validade = $cadastraPipeiro->formata_data_db($validadeCnh);

    if (!isset($_POST) || empty($_POST)) { // se não exixtir um formulario, nerá mostrado um erro
        $_SESSION["erroPipeiro"] = "erro";
        header("location: ../../cadastrarPipeiro.php");
    } else {

        $verificarCarro = new ManipulateData();
        $verificarCarro->setValueId($idVeiculo);
        $verificarCarro->selectCarroCadastrado();

// verificando se o carro já está cadastrado para outro pipeiro
        if ($verificarCarro->registros_retornados() >= 1) {

            $_SESSION["erroPipeiro"] = "carro";
            header("location: ../../pipeirosCadastrados.php");
        } else {


            $cadastraPipeiro->setTable("pipeiro");
            $cadastraPipeiro->setCampoTable("cpf_pipeiro");

            //VERIFICANDO SE EXISTE REGISTRO CADASTRADO
            if ($cadastraPipeiro->getDadosDuplicados("$cpf") >= 1) {
                $_SESSION["erroPipeiro"] = "duplicado";
                header("Location: ../../cadastrarPipeiro.php");
            } else {

                if ($nome != "" && $cpf != "" && $identidade != "" && $nit != "" && $banco != "" && $conta != "" && $agencia != "" && $orgao != "") {

                    $cadastraPipeiro->setCamposBanco("id_veiculo, id_cidade_atuante, nome_pipeiro, cpf_pipeiro, identidade_pipeiro, orgao_expeditor, cnh_pipeiro, validade_cnh_pipeiro, nit_pipeiro, nr_rps_pipeiro, status_pipeiro, numero_endereco, complemento_contato, telefone, cep, cidade, uf, bairro, logradouro, agencia, conta, banco, data_cadastro");
                    $cadastraPipeiro->setDados("'$idCarro','$idCidade', '$nome', '$cpf', '$identidade', '$orgao', '$cnh', '$validade', '$nit', '$numeroRPS', '$status', '$numero', '$complemento', '$telefone', '$cep', '$cidade', '$uf', '$bairro', '$logradouro', '$agencia', '$conta', '$banco', '$dataCadastro'");
                    $cadastraPipeiro->insert();

                    $_SESSION["erroPipeiro"] = $cadastraPipeiro->getStatus();
                    header("location: ../../cadastrarPipeiro.php");
                } else {
                    $_SESSION["erroPipeiro"] = "vazio";
                    header("location: ../../cadastrarPipeiro.php");
                }
            }
        }
    }
} else {
    header("location: ../../accessDenied.php");
}