<div class="panel panel-default">

    <div class="panel-heading">

        <h4 ><strong>Pipeiro</strong> <u><i> {$pipeiro->nome_pipeiro} </i></u></h4>
        <div class="btn-group btn-group-xs" role="group" aria-label="...">        
            {if $nivel != "user"} 
                <a href="editarPipeiro.php?id={$pipeiro->id_pipeiro}" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar Pipeiro</a> 
                <a href="fichaCadastro.php?id={$pipeiro->id_pipeiro}" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-open"></span> Gerar Ficha Cadastro</a>
            {else} 
                <a href="informeAlteracoes.php?id={$pipeiro->id_pipeiro}" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-info-sign"></span> Informar Alteração</a> 
            {/if} 
        </div>
        {if $pipeiro->usuario_edicao_pipeiro != ""} <span class="label label-default"> <i>Utima edição: {$pipeiro->usuario_edicao_pipeiro}, em: {$pipeiro->data_edicao_pipeiro}</i> </span>{/if}
    </div>
    <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped">

                {if isset($pipeiro)}
                    <tr>
                        <td colspan="2"><strong>Cidade de Atuação do programa</strong></td>
                    </tr>
                    <tr class="warning">
                        <td class="text-muted"><strong>Cidade Estado</strong></td>
                        <td> {$pipeiro->nome_cidade_atuante}-{$pipeiro->uf_cidade} </td>
                    </tr>
                    
                    <tr class="warning">
                        <td class="text-muted"><strong>Total de todas RPS geradas</strong></td>
                        <td> {$totalRPS} </td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Dados Pessoais</strong></td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted" width="250"><strong>Nome</strong></td>
                        <td> {$pipeiro->nome_pipeiro} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>CPF</strong></td>
                        <td> {$pipeiro->cpf_pipeiro} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Identidade</strong></td>
                        <td> {$pipeiro->identidade_pipeiro} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Nit/Pis</strong></td>
                        <td> {$pipeiro->nit_pipeiro} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Carteira de Motorista(Cnh)</strong></td>
                        <td> {$pipeiro->cnh_pipeiro} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Validade CNH</strong></td>
                        <td> {$pipeiro->validade_cnh_pipeiro} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Nr RPS</strong></td>
                        <td> {$pipeiro->id_pipeiro} </td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Contato</strong></td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Endereço</strong></td>
                        <td> {$pipeiro->logradouro} </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Numero</strong></td>
                        <td> {$pipeiro->numero_endereco} </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Complemento</strong></td>
                        <td> {$pipeiro->complemento_contato} </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>CEP</strong></td>
                        <td> {$pipeiro->cep} </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Cidade UF</strong></td>
                        <td> {$pipeiro->cidade}-{$pipeiro->uf} </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Bairro</strong></td>
                        <td> {$pipeiro->bairro} </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Telefone</strong></td>
                        <td> {$pipeiro->telefone} </td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Dados Bancários</strong></td>
                    </tr>
                    <tr class="info">
                        <td class="text-muted"><strong>Banco</strong></td>
                        <td> {$pipeiro->banco} </td>
                    </tr>
                    <tr class="info">
                        <td class="text-muted"><strong>Agência</strong></td>
                        <td> {$pipeiro->agencia} </td>
                    </tr>
                    <tr class="info">
                        <td class="text-muted"><strong>Conta</strong></td>
                        <td> {$pipeiro->conta} </td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Carro que trabalha</strong></td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Cor Veiculo</strong></td>
                        <td> {$pipeiro->cor_veiculo} </td>
                    </tr>            
                    <tr class="active">
                        <td class="text-muted"><strong>Placa Veiculo</strong></td>
                        <td> {$pipeiro->placa_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Renavan</strong></td>
                        <td> {$pipeiro->renavan_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Chassis</strong></td>
                        <td> {$pipeiro->chassis_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Tipo</strong></td>
                        <td> {$pipeiro->tipo_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Categoria</strong></td>
                        <td> {$pipeiro->categoria_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Marca</strong></td>
                        <td> {$pipeiro->marca_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Modelo</strong></td>
                        <td> {$pipeiro->modelo_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Ano de Modelo</strong></td>
                        <td> {$pipeiro->ano_modelo_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Ano de Fabricação</strong></td>
                        <td> {$pipeiro->ano_fab_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Ano Licenciamento</strong></td>
                        <td> {$pipeiro->ano_licenciamento_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Capacidade da Pipa</strong></td>
                        <td> {$pipeiro->cap_lts_veiculo} </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Proprietario do Veiculo</strong></td>
                        <td> {$pipeiro->proprietario_veiculo} </td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Data Cadastro</strong></td>
                    </tr>
                    <tr>
                        <td class="danger text-muted"><strong>Data Hora do Cadastro</strong></td>
                        <td class="danger">{$pipeiro->data_cadastro}</td>
                    </tr>

                {else}
                    <tr class="danger text-center">
                        <td><p>Este Pipeiro não foi devidamente cadastrado</p></td>
                    </tr>
                {/if}
            </table>
        </div>
    </div>
    <div class="panel-footer"><center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> </div>
</div>
