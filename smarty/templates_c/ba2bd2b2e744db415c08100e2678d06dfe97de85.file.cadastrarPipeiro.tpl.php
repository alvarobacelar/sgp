<?php /* Smarty version Smarty-3.1.13, created on 2015-04-29 10:18:44
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/cadastrarPipeiro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50785533654626e728016b1-02627023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba2bd2b2e744db415c08100e2678d06dfe97de85' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/cadastrarPipeiro.tpl',
      1 => 1429368972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50785533654626e728016b1-02627023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54626e728a1eb5_03171022',
  'variables' => 
  array (
    'erroPipeiro' => 0,
    'cidade' => 0,
    'c' => 0,
    'veiculo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54626e728a1eb5_03171022')) {function content_54626e728a1eb5_03171022($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar novo pipeiro</h2>
    </div>
    <div class="panel-body">


        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#settings" role="tab" data-toggle="tab">Cidade e Carro</a></li>
            <li><a href="#home" role="tab" data-toggle="tab">Dados Pessoais</a></li>
            <li><a href="#profile" role="tab" data-toggle="tab">Dados Bancários</a></li>
            <li><a href="#messages" role="tab" data-toggle="tab">Contato</a></li>

        </ul>
        <br />
        <?php echo $_smarty_tpl->tpl_vars['erroPipeiro']->value;?>

        <form action="includes/controllers/cadastraPipeiroControl.php" method="post" name="formCadastraPipeiro" id="formCadastraPipeiro" class="form-horizontal" role="form">

            <!-- Tab panes -->
            <div class="tab-content">

                <br />
                <!-- Dados pessoais -->
                <div class="tab-pane" id="home">

                    <h6><i> Os campos que tiverem * serão obrigatórios</i></h6>

                    <div class="form-group">
                        <label for="inputNome" class="col-sm-2 control-label">Nome Completo*</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputNome" name="inputNome" value="" required="" placeholder="Nome completo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCpf" class="col-sm-2 control-label">CPF*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputCpf" name="inputCpf" value="" required="" placeholder="000.000.000-00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputIdentidade" class="col-sm-2 control-label">Identidade*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputIdentidade" name="inputIdentidade" value="" required="" placeholder="Nr Identidade">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputIdentidade" class="col-sm-2 control-label">Orgão expeditor*</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputOrgao" name="inputOrgao" value="" required="" placeholder="Ex: SSP-PI">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCnh" class="col-sm-2 control-label">CNH*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputCnh" name="inputCnh" value="" required="" placeholder="Nr CNH">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputValidadeCnh" class="col-sm-2 control-label">Validade CNH*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputValidadeCnh" name="inputValidadeCnh" value="" required="" placeholder="Validade Cnh">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNit" class="col-sm-2 control-label">NIT/PIS*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputNit" name="inputNit" value="" required="" placeholder="Nr Nit">
                        </div>
                    </div>
                    
                    <!--
                    <div class="form-group">
                        <label for="inputNrRps" class="col-sm-2 control-label">Numero da RPS</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputNrRPS" name="inputNrRPS" value="">
                        </div>
                    </div>
                    -->

                </div> <!-- FIM DA DIV TAB 1 DADOS PESSOAIS  -->
                <!-- ################################################################################################################ -->


                <!-- TAB 2 Dados Bancarios  -->
                <div class="tab-pane" id="profile">
                    <h6><i> Os campos que tiverem * serão obrigatórios</i></h6>
                    <div class="form-group">
                        <label for="selectBanco" class="col-sm-2 control-label">Banco*</label>
                        <div class="col-sm-4">
                            <select name="selectBanco" id="selectBanco" class="form-control">
                                <option value="">Escolha o Banco</option>
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
                            <input type="text" class="form-control" id="inputAgencia" name="inputAgencia" value="" required="" placeholder="Nr da Agencia">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Conta*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputConta" name="inputConta" value="" required="" placeholder="Numero da Conta">
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
                            <input type="text" class="form-control" id="inputlogradouro" name="inputLogradouro" value="" required="" placeholder="Endereço">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputNumero" name="inputNumero" value="" required="" placeholder="Numero">
                        </div>  
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Complemento</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputComplemento" name="inputComplemento" value="" placeholder="Ponto de Referencia">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">CEP*</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputCep" name="inputCep" value="" required="" placeholder="CEP">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Bairro*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputBairro" name="inputBairro" value="" required="" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Cidade*</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputCidade" name="inputCidade" value="" required="" placeholder="Cidade residente">
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="inputUf" name="inputUf" required="" title="UF" placeholder="UF">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConta" class="col-sm-2 control-label">Telefone*</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputTelefone" name="inputTelefone" value="" required="" placeholder="Telefone">
                        </div>
                    </div>

                </div> <!-- Fim TAB 3 CONTATO --> 
                <!-- ############################################################################################################# -->

                <!-- TAB 4 Cidade e Carro -->
                <div class="tab-pane active" id="settings">
                    <p><small><i> OBS: Se não tiver cadastrado a Cidade e o Carro, realize o cadastro antes de prosseguir com o cadastro de pipeiro!</i></small></p>
                    <p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Cadastrar Cidade</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Cadastrar Carro</button>
                    </p>
                    <div class="form-group">
                        <label for="inputIdCidade" class="col-sm-2 control-label">Cidade Que Atua*</label>
                        <div class="col-sm-4">
                            <select name="selectIdCidade" required="" id="selectIdCidade" class="form-control">
                                <option value="10">Escolha a Cidade</option>
                                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cidade']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id_cidade_atuante;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->nome_cidade_atuante;?>
</option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inpuIdCarro" class="col-sm-2 control-label">Carro que trabalha*</label>
                        <div class="col-sm-4">
                            <select name="selectIdCarro" required="" id="selectIdCarro" class="form-control">
                                <option value="2">Escolha o Carro</option>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['veiculo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id_veiculo;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->placa_veiculo;?>
</option>
                                <?php } ?>

                            </select>
                        </div>

                    </div>

                </div> <!-- FIM DA DIV TAB 4 CIDADE E CARRO -->
                <!-- ########################################################################################################## -->

                <!-- Botões submit --><br />
                <p>
                    <button type="submit" title="Preencha todos os campos" class="btn btn-primary">Cadastrar</button>
                    <button type="reset" class="btn btn-default">Cancelar</button>
                </p>

            </div>

        </form> <!-- Fim do formulario de cadastro de pipeiro -->

    </div>
</div> <!-- fim panel -->


<!-- modal para cadastro de cidade -->
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
                        <label for="inputNomeCidade" class="col-sm-3 control-label">Nome da Cidade e UF</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputNomeCidade" name="inputNomeCidade" required="" title="Cidade" placeholder="Digite o nome da cidade">
                        </div> 
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="inputUf" name="inputUf" required="" title="UF" placeholder="UF">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textAreaObs" class="col-sm-3 control-label">Localidades Atendidas</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" id="textAreaObs" name="textAreaObs" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputQntCarradas" class="col-sm-3 control-label">Quantidade de Carradas</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputQntCarradas" name="inputQntCarradas" required="" title="Quantidades de Carradas" placeholder="Quantidade de Carradas">
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="inputNrRotas" class="col-sm-3 control-label">Numero de Rotas</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputNrRotas" name="inputNrRotas" required="" title="Numero de Rotas" placeholder="Numero de Rotas">
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="inputValorRotas" class="col-sm-3 control-label">Valor estimado por Rota</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputValorRotas" name="inputValorRotas" required="" title="Valor Extimado Rota" placeholder="Valor estimado das rotas">
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="inputValorAnual" class="col-sm-3 control-label">Estimativa de Valor Anual</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputValorAnual" name="inputValorAnual" required="" title="Estimativa do Valor anual" placeholder="Estimativa do valor anual">
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
                        <label for="inputCor" class="col-sm-2 control-label">Cor do Veículo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputCor" name="inputCor" required="" title="" placeholder="Ex: Preto">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputRenavan" class="col-sm-2 control-label">Renavan</label>
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
                        <label for="inputAnoModelo" class="col-sm-2 control-label">Ano de Modelo</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="inputAnoModelo" name="inputAnoModelo" required="" title="" placeholder="Ex: 1987">
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
                        <label for="inputProprietario" class="col-sm-2 control-label">Proprietário do Veículo</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputProprietario" name="inputProprietario" required="" title="" placeholder="Nome do Proprietario">
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

<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>