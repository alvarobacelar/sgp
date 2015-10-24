<?php

require_once '../models/ManipulateData.php';

class DadosExcel {

    private $arquivoExcel;

    public function setArquivoExcel($e) {
        $this->arquivoExcel = $e;
    }

    public function insereDadosCidade() {

        // abre o arquivo no mode de leitura
        $arquivo = fopen("$this->arquivoExcel", 'r');

        $gravarDados = new ManipulateData();
        $gravarDados->setTable("cidade_atuante");
        $data = date("Y-m-d") . " " . date("H:i:s");

        // le o conteudo do arquivo
        while (!feof($arquivo)) {

            //pega os dados da linha 
            $linha = fgets($arquivo, 1024);
            //divide as informações da celula para poder salvar
            $dados = explode(';', $linha);

            // Verifica se o Dados Não é o cabeçalho ou não esta em branco
            if ($dados[0] != 'Cidade' && !empty($linha)) {
                $gravarDados->setCamposBanco("nome_cidade_atuante, uf_cidade, obs_cidade_atuante, data_cadastro");
                $gravarDados->setDados("'$dados[0]', '$dados[1]', '$dados[2]', '$data'");
                $gravarDados->insert();
            }
        }
        fclose($arquivo); // fecha arquivo
    }

    public function insereDadosVeiculo() {
        // abre o arquivo no mode de leitura
        $arquivo = fopen("$this->arquivoExcel", 'r');

        $gravarDados = new ManipulateData();
        $gravarDados->setTable("veiculo");
        $data = date("Y-m-d") . " " . date("H:i:s");

        // le o conteudo do arquivo
        while (!feof($arquivo)) {

            //pega os dados da linha 
            $linha = fgets($arquivo, 1024);
            //divide as informações da celula para poder salvar
            $dados = explode(';', $linha);

            // Verifica se o Dados Não é o cabeçalho ou não esta em branco
            if ($dados[0] != 'cor' && !empty($linha)) {
                $gravarDados->setCamposBanco("cor_veiculo, renavan_veiculo, tipo_veiculo, marca_veiculo, modelo_veiculo, ano_fab_veiculo, ano_modelo_veiculo, categoria_veiculo, placa_veiculo, chassis_veiculo, ano_licenciamento_veiculo, proprietario_veiculo, cap_lts_veiculo, data_cadastro");
                $gravarDados->setDados("'$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$dados[4]', '$dados[5]', '$dados[6]', '$dados[7]', '$dados[8]', '$dados[9]', '$dados[10]', '$dados[11]', '$dados[12]', '$data'");
                $gravarDados->insert();
            }
        }
        fclose($arquivo); // fecha arquivo
    }

    public function insereDadosPipeiro() {

        // abre o arquivo no mode de leitura
        $arquivo = fopen("$this->arquivoExcel", 'r');

        $gravarDados = new ManipulateData();
        $gravarDados->setTable("pipeiro");
        $data = date("Y-m-d") . " " . date("H:i:s");
        $status = 1;

        // le o conteudo do arquivo
        while (!feof($arquivo)) {

            //pega os dados da linha 
            $linha = fgets($arquivo, 1024);
            //divide as informações da celula para poder salvar
            $dados = explode(';', $linha);

            // Verifica se o Dados Não é o cabeçalho ou não esta em branco
            if ($dados[0] != 'id cidade' && !empty($linha)) {
                $gravarDados->setCamposBanco("id_veiculo, id_cidade_atuante, nome_pipeiro, cpf_pipeiro, identidade_pipeiro, orgao_expeditor, cnh_pipeiro, validade_cnh_pipeiro, nit_pipeiro, nr_rps_pipeiro, status_pipeiro, numero_endereco, complemento_contato, telefone, cep, cidade, uf, bairro, logradouro, agencia, conta, banco, data_cadastro");
                $gravarDados->setDados("'2', '$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$dados[4]', '$dados[5]', '$dados[6]', '$dados[7]', '$dados[8]', '$dados[9]', $status, '$dados[10]', '$dados[11]', '$dados[12]', '$dados[13]', '$dados[14]', '$dados[15]', '$dados[16]', '$dados[17]', '$dados[18]', '$dados[19]', '$data'");
                $gravarDados->insert();
            }
        }
        fclose($arquivo); // fecha arquivo
    }

}
