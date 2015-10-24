<?php

require_once '../models/ManipulateData.php';



$nomeOM = addslashes($_POST["inputNomeOM"]);
$cnpj = addslashes($_POST["inputCnpj"]);
$local = addslashes($_POST["inputLocal"]);
$idOM = addslashes($_POST["idOM"]);
$enderecoOM = addslashes($_POST["inputEnderecoOM"]);
$postoGradCmt = addslashes($_POST["inputPostoGradCmt"]);
$nomeCmt = addslashes($_POST["inputComandanteCmt"]);
$enderecoCmt = addslashes($_POST["inputEnderecoCmt"]);
$cidadeCmt = addslashes($_POST["inputCidadeCmt"]);
$bairroCmt = addslashes($_POST["inputBairroCmt"]);
$pnrPnrCmt = addslashes($_POST["inputNrPNRCmt"]);
$identidadeCmt = addslashes($_POST["inputIdentidadeCmt"]);
$cpfCmt = addslashes($_POST["inputCpfCmt"]);

session_start();

if ($_SESSION["nivel"] == "admin") {

########################################################################
################ FAZENDO O UPLOAD DE ARQUIVO DA FOTO ###################
########################################################################
//Filedata é a variável que o flex envia com o arquivo para upload
    $fotoOM = $_FILES['fileLogoOM'];
    $fotoRPS = $_FILES['fileCarimboRPS'];

    if (!empty($fotoOM) || !empty($fotoRPS)) {
// Pasta onde o arquivo vai ser salvo
        $_UP['pasta'] = '../../imagens/';

// Tamanho máximo do arquivo (em Bytes)
        $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
// Array com as extensões permitidas
        $_UP['extensoes'] = array('jpg', 'JPG', 'JPEG');

// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
        $_UP['renomeia'] = true;

// Array com os tipos de erros de upload do PHP
        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
        if ($_FILES['fileLogoOM']['error'] != 0) {
//                die("Não foi possível fazer o upload, erro:<br />" .
//                        $_UP['erros'][$_FILES['fileFotoMotorista']['error']]);
//                exit; // Para a execução do script
            $_SESSION["erroOM"] = "erro";
            header("location: ../../cadastrarOM.php");
            exit();
        }

// Caso script chegue a este ponto, não houve erro com o processo de  upload e o PHP pode continuar
// Faz a verificação da extensão do arquivo
// $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        $arquivo = $_FILES['fileLogoOM']['name'];
        $arquivo2 = $_FILES['fileCarimboRPS']['name'];
        $extensao = substr($arquivo, - 3);
        $extensao2 = substr($arquivo2, -3);
        if (array_search($extensao, $_UP['extensoes']) === false && array_search($extensao2, $_UP['extensoes']) === false) {
//echo "Por favor, envie arquivos com as seguintes extensões: jpg ou JPEG";
            $_SESSION["erroOM"] = "extensao";
            header("location: ../../cadastrarOM.php");
        }

// Faz a verificação do tamanho do arquivo enviado
        else if ($_UP['tamanho'] < $_FILES['fileLogoOM'] ['size'] && $_UP['tamanho'] < $_FILES['fileCarimboRPS']['size']) {
//echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
            $_SESSION["erroOM"] = "tamanho";
            header("location: ../../cadastrarOM.php");
        }

// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
        else {
// Primeiro verifica se deve trocar o nome do arquivo
// Cria um nome baseado no UNIX TIMESTAMP atual e comextensão .jpg
            $nome_final = date("dmyhi") . "logo_om." . "$extensao";
            $nome_final2 = date("dmyhi") . "despacho." . "$extensao2";

// Depois verifica se é possível mover o arquivo para a pasta escolhida
            if (move_uploaded_file($_FILES['fileLogoOM'] ['tmp_name'], $_UP['pasta'] . $nome_final) && move_uploaded_file($_FILES['fileCarimboRPS'] ['tmp_name'], $_UP['pasta'] . $nome_final2)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
//echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>;
                $fotoOM = "imagens/" . $nome_final;
                $fotoRPS = "imagens/" . $nome_final2;
            } else {
                $_SESSION["erroOM"] = "erroUpload";
                header("location: ../../cadastrarOM.php");
            }
        }
########################################################################
######################## FIM DA FUNÇÃO DE UPLOAD #######################
########################################################################
    }

    if (!empty($nomeOM) && !empty($cnpj) && !empty($local)) {


        $cadastraOM = new ManipulateData();
        $cadastraOM->setTable("om");
        $cadastraOM->select();

// se já ouver OM cadastrada, não cadastra outra, pois somente uma poderá esta cadastrada.
        if ($cadastraOM->registros_retornados() >= 1) {
            $editaOM = new ManipulateData();
            $editaOM->setTable("om");
            $editaOM->setCamposBanco("nome_om='$nomeOM', cnpj_om='$cnpj', local_om='$local', logo_om='$fotoOM', carimbo_rps_om='$fotoRPS', endereco_om='$enderecoOM', post_grad_cmt_om='$postoGradCmt', comandante_om='$nomeCmt', endereco_cmt_om='$enderecoCmt', bairro_cmt_om='$bairroCmt', cidade_cmt_om='$cidadeCmt', numero_pnr_cmt_om='$pnrPnrCmt', identidade_cmt_om='$identidadeCmt', cpf_cmt_om='$cpfCmt'");
            $editaOM->setFieldId("id_om");
            $editaOM->setValueId($idOM);
            $editaOM->update();
            $_SESSION["erroOM"] = "editado";
            header("location: ../../cadastrarOM.php");
        } else { // se não houver om cadastrada, realiza o cadastro
            $cadastraOM->setCamposBanco("nome_om, cnpj_om, local_om, logo_om, carimbo_rps_om, endereco_om, post_grad_cmt_om, comandante_om, endereco_cmt_om, bairro_cmt_om, cidade_cmt_om, numero_pnr_cmt_om, identidade_cmt_om, cpf_cmt_om");
            $cadastraOM->setDados("'$nomeOM', '$cnpj', '$local', '$fotoOM', '$fotoRPS', '$enderecoOM', '$postoGradCmt', '$nomeCmt', '$enderecoCmt', '$bairroCmt', '$cidadeCmt', '$pnrPnrCmt', '$identidadeCmt', '$cpfCmt'");
            $cadastraOM->insert();

            $_SESSION["erroOM"] = "cadastrado";
            header("location: ../../cadastrarOM.php");
        }
    } else {
        header("location: ../../erro.php");
    }
} else {
    header("location: ../../accessDenied.php");
}