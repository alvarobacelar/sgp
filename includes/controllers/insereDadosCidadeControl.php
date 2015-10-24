<?php

require_once '../classes/dadosExternos.php';

// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = '../../uploads/';
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 4Mb
// Array com as extensões permitidas
$_UP['extensoes'] = 'csv';

// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;

// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

session_start();
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {

    // $_SESSION["upload"] = $_UP['erros'][$_FILES['arquivo']['error']];
    $_SESSION["erro-upload"] = "erroUp";
    header("location: ../../importarDados.php");
    // die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
    // exit; // Para a execução do script
}

// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {

    $_SESSION["erro-upload"] = "extensao";
    header("location: ../../importarDados.php");
    // echo "Por favor, envie arquivos com as seguintes extensões: cvs, png ou gif";
}

// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {

    $_SESSION["erro-upload"] = "limite";
    header("location: ../../importarDados.php");
    // echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}

// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
    // Primeiro verifica se deve trocar o nome do arquivo
    if ($_UP['renomeia'] == true) {
        // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
        $nome_final = time() . '.jpg';
    } else {
        // Mantém o nome original do arquivo
        $nome_final = $_FILES['arquivo']['name'];
    }

    // Depois verifica se é possível mover o arquivo para a pasta escolhida
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
        
        $arquivo = new DadosExcel(); // instanciando objeto da classe upload de arquivos
        $arquivo->setArquivoExcel($_UP['pasta'] . $nome_final); // passando o arquivo recem feito upload
        if ($_POST["upload"] == "cidade") { // se o usuário estiver enviando dados da cidade, está função será escolhida
            $arquivo->insereDadosCidade();
        } else if ($_POST["upload"] == "veiculo") {
            $arquivo->insereDadosVeiculo(); // caso seja do veiculo, será está função.
        } else if ($_POST["upload"] == "pipeiro"){
            $arquivo->insereDadosPipeiro(); // e caso seja do prestador de serviço, será dessa.
        } else {
            header("location: ../../erro.php");
        }
        $_SESSION["erro-upload"] = "ok";
        header("location:../../importarDados.php");
    } else {
        // Não foi possível fazer o upload, provavelmente a pasta está incorreta
        // echo "Não foi possível enviar o arquivo, tente novamente";
        $_SESSION["erro-upload"] = "erro";
        header("location:../../importarDados.php");
    }
}
