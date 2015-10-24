<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Editar Pipeiro: {$pipeiro->nome_pipeiro}</h2>
    </div>
    <div class="panel-body">

        <!-- Nav tabs -->
        {if $alt != ""}<div class='alert alert-warning' role='alert'><strong>Alteração informada pelo usuário:</strong> <i>{$alt}</i></div>{/if}
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#settings" role="tab" data-toggle="tab">Cidade</a></li>
            <li><a href="#home" role="tab" data-toggle="tab">Dados Pessoais</a></li>
            <li><a href="#profile" role="tab" data-toggle="tab">Dados Bancários</a></li>
            <li><a href="#messages" role="tab" data-toggle="tab">Contato</a></li>

        </ul>
        <br />
        {$erroPipeiro}
        <form action="includes/controllers/editarPipeirosControl.php" method="post" name="formEditaPipeiro" id="formCadastraPipeiro" class="form-horizontal" role="form">
            <input type="hidden" name="inputIdPipeiro" id="inputIdPipeiro" value="{$pipeiro->id_pipeiro}" />
            {if isset($idAlt)}<input type="hidden" name="inputIdAlt" id="inputIdAlt" value="{$idAlt}" />{/if}
            <!-- Tab panes -->
            <div class="tab-content">

                <br />
                <!-- Dados pessoais -->
                <div class="tab-pane" id="home">

                    <h6><i> Os campos que tiverem * serão obrigatórios</i></h6>

                    <div class="form-group">
                        <label for="inputNome" class="col-sm-2 control-label">Nome Completo*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputNome" name="inputNome" value="{$pipeiro->nome_pipeiro}" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCpf" class="col-sm-2 control-label">CPF*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputCpf" name="inputCpf" value="{$pipeiro->cpf_pipeiro}" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputIdentidade" class="col-sm-2 control-label">Identidade*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputIdentidade" name="inputIdentidade" value="{$pipeiro->identidade_pipeiro}" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputIdentidade" class="col-sm-2 control-label">Orgão expeditor*</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputOrgao" name="inputOrgao" value="{$pipeiro->orgao_expeditor}" required="" placeholder="Ex: SSP-PI">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCnh" class="col-sm-2 control-label">CNH*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputCnh" name="inputCnh" value="{$pipeiro->cnh_pipeiro}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputValidadeCnh" class="col-sm-2 control-label">Validade CNH*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputValidadeCnh" name="inputValidadeCnh" value="{$pipeiro->validade_cnh_pipeiro}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNit" class="col-sm-2 control-label">NIT/PIS*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputNit" name="inputNit" value="{$pipeiro->nit_pipeiro}" required="">
                        </div>
                    </div>
                    {* 
                    <div class="form-group">
                    <label for="inputNrRps" class="col-sm-2 control-label">Numero da RPS</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputNrRPS" name="inputNrRPS" value="{$pipeiro->id_pipeiro}">
                    </div>
                    </div>
                    *}

                </div> <!-- FIM DA DIV TAB 1 DADOS PESSOAIS  -->
                <!-- ################################################################################################################ -->


                <!-- TAB 2 Dados Bancarios  -->
                <div class="tab-pane" id="profile">
                    <h6><i> Os campos que tiverem * serão obrigatórios</i></h6>
                    <div class="form-group">
                        <label for="selectBanco" class="col-sm-2 control-label">Banco*</label>
                        <div class="col-sm-4">
                            <select name="selectBanco" id="selectBanco" class="form-control">
                                <option value="{$pipeiro->banco}">{$pipeiro->banco}</option>
                                <option value="001">Banco do Brasil S.A.</option>
                                <option value="237">Banco Bradesco S.A.</option>
                                <option value="745">Banco Citibank S.A.</option>
                                <option value="004">Banco do Nordeste do Brasil S.A.</option>
                                <option value="184">Banco Itaú BBA S.A.</option>
                                <option value="479">Banco ItaúBank S.A</option>
                                <option value="453">Banco Rural S.A.</option>
                                <option value="033">Banco Santander (Brasil) S.A.</option>
                                <option value="104">Caixa Econômica Federal</option>
                                <option value="341">Itaú Unibanco S.A.</option>
                                <option value="399">HSBC Bank Brasil S.A.</option>
                                <option value="409">UNIBANCO - União de Bancos Brasileiros S.A.</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAgencia" class="col-sm-2 control-label">Agência*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputAgencia" name="inputAgencia" value="{$pipeiro->agencia}" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Conta*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputConta" name="inputConta" value="{$pipeiro->conta}" required="">
                        </div>
                    </div>
                </div> <!-- FIM DA DIV TAB 2 DADOS BANCARIOS -->
                <!-- ########################################################################################################## -->

                <!-- TAB 3 CONTATO -->
                <div class="tab-pane" id="messages">

                    <h6><i> Os campos que tiverem * serão obrigatórios</i></h6>
                    <div class="form-group">
                        <label for="inputAgencia" class="col-sm-2 control-label">Logradouro*</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputlogradouro" name="inputLogradouro" value="{$pipeiro->logradouro}">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputNumero" name="inputNumero" value="{$pipeiro->numero_endereco}">
                        </div>  
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Complemento</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputComplemento" name="inputComplemento" value="{$pipeiro->complemento_contato}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">CEP*</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputCep" name="inputCep" value="{$pipeiro->cep}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Bairro*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputBairro" name="inputBairro" value="{$pipeiro->bairro}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Cidade*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputCidade" name="inputCidade" value="{$pipeiro->cidade}">
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="inputUf" name="inputUf" value="{$pipeiro->uf}" title="UF">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Telefone*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputTelefone" name="inputTelefone" value="{$pipeiro->telefone}">
                        </div>
                    </div>

                </div> <!-- Fim TAB 3 CONTATO --> 
                <!-- ############################################################################################################# -->

                <!-- TAB 4 Cidade e Carro -->
                <div class="tab-pane active" id="settings">


                    <div class="form-group">
                        <label for="inputIdCidade" class="col-sm-2 control-label">Cidade Que Atua*</label>
                        <div class="col-sm-4">
                            <select name="selectIdCidade" required="" id="selectIdCidade" class="form-control">
                                <option value="{$pipeiro->id_cidade_atuante}">{$pipeiro->nome_cidade_atuante}</option>
                                {foreach $cidade as $c}
                                    <option value="{$c->id_cidade_atuante}">{$c->nome_cidade_atuante}</option>
                                {/foreach}
                            </select>
                        </div>

                    </div>

                    {*
                    <div class="form-group">
                    <label for="inpuIdCarro" class="col-sm-2 control-label">Carro que trabalha*</label>
                    <div class="col-sm-4">
                    <select name="selectIdCarro" required="" id="selectIdCarro" class="form-control">
                    <option value="{$pipeiro->id_veiculo}">{$pipeiro->placa_veiculo}</option>
                    {foreach $veiculo as $v}
                    <option value="{$v->id_veiculo}">{$v->placa_veiculo}</option>
                    {/foreach}
                    </select>
                    </div>
                    </div>
                    *}

                </div> <!-- FIM DA DIV TAB 4 CIDADE E CARRO -->
                <!-- ########################################################################################################## -->

                <!-- Botões submit --><br />
                <p>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button>
                    <a href="javascript:history.back()" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar</a>
                </p>

            </div>

        </form> <!-- Fim do formulario de cadastro de pipeiro -->

    </div>
</div>
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 

<!-- Inicio da div modal -->                     

<div class="modal fade bs-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Cadastrar Cidade</h4>
            </div>

            <div class="modal-body">

                <form action="includes/controllers/cadastrarCidadeControl.php" method="post" name="formCadastrarCidade" class="form-horizontal" role="form">
                    <div class="form-group">
                        <input type="hidden" name="modal" value="modal" id="modal" />
                        <label for="inputNomeCidade" class="col-sm-2 control-label">Nome da Cidade e UF</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputNomeCidade" name="inputNomeCidade" required="" title="Cidade" placeholder="Digite o nome da cidade">
                        </div> 
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="inputUf" name="inputUf" required="" title="UF" placeholder="UF">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textAreaObs" class="col-sm-2 control-label">Observações</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" id="textAreaObs" name="textAreaObs" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div> <!--  Fim div Modal-->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar Carro</h4>
            </div>
            <div class="modal-body">
                <form action="includes/controllers/cadastrarCarroControl.php" method="post" name="formCadastrarCarro" class="form-horizontal" role="form">
                    <input type="hidden" name="modal" value="1" id="modal" />
                    <div class="form-group">
                        <label for="inputRenavan" class="col-sm-2 control-label">Ranavan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputRenavan" name="inputRenavan" required="" title="" placeholder="Renavan do veiculo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPlaca" class="col-sm-2 control-label">Placa</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputPlaca" name="inputPlaca" required="" title="" placeholder="Ex: XXX-0000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputTipoVeiculo" class="col-sm-2 control-label">Tipo de Veiculo</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputTipoVeiculo" name="inputTipoVeiculo" required="" title="" placeholder="Ex: Caminhão | Trator">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMarca" class="col-sm-2 control-label">Marca</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputMarca" name="inputMarca" required="" title="" placeholder="Ex: Mercedes">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputModelo" class="col-sm-2 control-label">Modelo</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputModelo" name="inputModelo" required="" title="" placeholder="Modelo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAnoFabricacao" class="col-sm-2 control-label">Ano de Fabricação</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputAnoFabricacao" name="inputAnoFabricacao" required="" title="" placeholder="Ex: 1987">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputCategoria" class="col-sm-2 control-label">Categoria</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputCategoria" name="inputCategoria" required="" title="" placeholder="Categoria">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputChassis" class="col-sm-2 control-label">Chassis</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputChassis" name="inputChassis" required="" title="" placeholder="Chassis">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAnoLicenciamento" class="col-sm-2 control-label">Ano do licenciamento</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputAnoLicenciamento" name="inputAnoLicenciamento" required="" title="" placeholder="Ex: 2015">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputCapacidadePipa" class="col-sm-2 control-label">Capacidade da pipa</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputCapacidadePipa" name="inputCapacidadePipa" required="" title="" placeholder="Ex: 8000 litros">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>