<?php

require_once './smarty/config/config.php';
require_once './includes/funcoes/verifica.php';
require_once './includes/models/ManipulateData.php';
require_once './lib/PdfLibFichaCadastro.php';

if ($estaLogado == "SIM" && !isset($active)) {

    if ($_SESSION["nivel"] == "admin" || $_SESSION["nivel"] == "gerente") {

        if (isset($_POST["inputNomeFC"])) {

            $idPipeiro = addslashes($_POST["idPipeiro"]);
            $nomePipeiro = addslashes($_POST["inputNomeFC"]);
            $identidade = addslashes($_POST["inputIdentidadeFC"]);
            $orgaoEmissor = addslashes($_POST["inputOrgaoEmissorFC"]);
            $cpf = addslashes($_POST["inputNrCpfFC"]);
            $carteiraMot = addslashes($_POST["inputCatMotoristaFC"]);
            $endereco = addslashes($_POST["inputEnderecoFC"]);
            $cidadeEstado = addslashes($_POST["inputCidadeEstadoFC"]);
            $cep = addslashes($_POST["inputCepFC"]);
            $telefone = addslashes($_POST["inputTelefoneFC"]);
            $contaBanco = addslashes($_POST["inputContaBancoFC"]);
            $agenciaBanco = addslashes($_POST["inputAgenciaBancoFC"]);
            $marcaVeiculo = addslashes($_POST["inputMarcaFC"]);
            $modeloVeiculo = addslashes($_POST["inputModeloFC"]);
            $anoFabricacao = addslashes($_POST["inputAnoFabFC"]);
            $placa = addslashes($_POST["inputPlacaFC"]);
            $licenciamento = addslashes($_POST["inputLicenciamentoFC"]);
            $combustivel = addslashes($_POST["CombustivelFC"]);
            $chassis = addslashes($_POST["inputNrChassisFC"]);
            $vencSeguro = addslashes($_POST["inputVencimentoSeguroFC"]);
            $estadoGeral = addslashes($_POST["inputEstadoGeralFC"]);
            $freios = addslashes($_POST["inputFreiosFC"]);
            $dieracao = addslashes($_POST["inputDirecaoFC"]);
            $sistemaEletrico = addslashes($_POST["inputSistemaEletricoFC"]);
            $capacidadePipa = addslashes($_POST["inputCapacidadePipaFC"]);
            $estadoGeralPipa = addslashes($_POST["inputEstadoGeralFC"]);
            $estadoBomba = addslashes($_POST["inputEstadoBombaFC"]);
            $tampaSuperior = addslashes($_POST["inputTampaSuperiorFC"]);
            $municipio = addslashes($_POST["inputMunicipioFC"]);
            $nomeMilitar = addslashes($_POST["inputNomeMilitarFC"]);



            ########################################################################
            ################ FAZENDO O UPLOAD DE ARQUIVO DA FOTO ###################
            ########################################################################
            //Filedata é a variável que o flex envia com o arquivo para upload
            $fotoMotorista = $_FILES['fileFotoMotorista'];
            $fotoPipeiro = $_FILES['fileFotoCarro'];
            // Pasta onde o arquivo vai ser salvo
            $_UP['pasta'] = 'uploads/';

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
            if ($_FILES['fileFotoMotorista']['error'] != 0) {
//                die("Não foi possível fazer o upload, erro:<br />" .
//                        $_UP['erros'][$_FILES['fileFotoMotorista']['error']]);
//                exit; // Para a execução do script
                $_SESSION["erroFichaCad"] = "erro";
                header("location: fichaCadastro.php?id=$idPipeiro");
            }

            // Caso script chegue a este ponto, não houve erro com o processo de  upload e o PHP pode continuar
            // Faz a verificação da extensão do arquivo
            // $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
            $arquivo = $_FILES['fileFotoMotorista']['name'];
            $arquivo2 = $_FILES['fileFotoCarro']['name'];
            $extensao = substr($arquivo, -3);
            $extensao2 = substr($arquivo2, -3);
            if (array_search($extensao, $_UP['extensoes']) === false && array_search($extensao2, $_UP['extensoes']) === false) {
                //echo "Por favor, envie arquivos com as seguintes extensões: jpg ou JPEG";
                $_SESSION["erroFichaCad"] = "extensao";
                header("location: fichaCadastro.php?id=$idPipeiro");
            }

            // Faz a verificação do tamanho do arquivo enviado
            else if ($_UP['tamanho'] < $_FILES['fileFotoMotorista']['size'] && $_UP['tamanho'] < $_FILES['fileFotoCarro']['size']) {
                //echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
                $_SESSION["erroFichaCad"] = "tamanho";
                header("location: fichaCadastro.php?id=$idPipeiro");
            }

            // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
            else {
                // Primeiro verifica se deve trocar o nome do arquivo
                // Cria um nome baseado no UNIX TIMESTAMP atual e comextensão .jpg
                $nome_final = date("dmyhi") . "." . "$extensao";
                $nome_final2 = date("dmyhi") . "_2." . "$extensao2";

                // Depois verifica se é possível mover o arquivo para a pasta escolhida
                move_uploaded_file($_FILES['fileFotoMotorista']['tmp_name'], $_UP['pasta'] . $nome_final);
                move_uploaded_file($_FILES['fileFotoCarro']['tmp_name'], $_UP['pasta'] . $nome_final2);
                // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
                //echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>;
            }
            ########################################################################
            ######################## FIM DA FUNÇÃO DE UPLOAD #######################
            ########################################################################
            $fotoMot = $_UP['pasta'] . $nome_final;
            $fotoPipa = $_UP['pasta'] . $nome_final2;


            $pdf = new PdfLibFichaCad();
            $mpdf = new mPDF();

            $smarty->assign("nomePipeiro", $nomePipeiro);
            $smarty->assign("identidade", $identidade);
            $smarty->assign("orgaoEmissor", $orgaoEmissor);
            $smarty->assign("cpf", $cpf);
            $smarty->assign("carteiraMot", $carteiraMot);
            $smarty->assign("endereco", $endereco);
            $smarty->assign("cidadeEstado", $cidadeEstado);
            $smarty->assign("cep", $cep);
            $smarty->assign("telefone", $telefone);
            $smarty->assign("contaBanco", $contaBanco);
            $smarty->assign("agenciaBanco", $agenciaBanco);
            $smarty->assign("marcaVeiculo", $marcaVeiculo);
            $smarty->assign("modeloVeiculo", $modeloVeiculo);
            $smarty->assign("anoFabricacao", $anoFabricacao);
            $smarty->assign("placa", $placa);
            $smarty->assign("licenciamento", $licenciamento);
            $smarty->assign("combustivel", $combustivel);
            $smarty->assign("chassis", $chassis);
            $smarty->assign("vencSeguro", $vencSeguro);
            $smarty->assign("estadoGeral", $estadoGeral);
            $smarty->assign("freios", $freios);
            $smarty->assign("direcao", $dieracao);
            $smarty->assign("sistemaEletrico", $sistemaEletrico);
            $smarty->assign("capacidadePipa", $capacidadePipa);
            $smarty->assign("estadoGeralPipa", $estadoGeralPipa);
            $smarty->assign("estadoBomba", $estadoBomba);
            $smarty->assign("tampaSuperior", $tampaSuperior);
            $smarty->assign("municipio", $municipio);
            $smarty->assign("nomeMilitar", $nomeMilitar);
            $smarty->assign("fotoMot", "$fotoMot");
            $smarty->assign("fotoPipa", "$fotoPipa");

            $formData = new ManipulateData();
            $smarty->assign("data", $formData->mostrarData());

            $pdf->WriteHTML($smarty->fetch('paginas/fichaCadastroPDF.tpl'));
            $pdf->Output();
        } else {
            header("./erro.php");
        }
    }
}
