<?php /* Smarty version Smarty-3.1.13, created on 2015-08-31 15:31:01
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/fichaCadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212336142655e49d65526105-37419983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81c13178601f928bc0a652f77cc3de2ec73d0e21' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/fichaCadastro.tpl',
      1 => 1431538378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212336142655e49d65526105-37419983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erroFichaCad' => 0,
    'p' => 0,
    'om' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55e49d6557aa36_10776324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e49d6557aa36_10776324')) {function content_55e49d6557aa36_10776324($_smarty_tpl) {?><h2>Gerar Ficha Cadastro</h2>
<?php echo $_smarty_tpl->tpl_vars['erroFichaCad']->value;?>

<div id="fichaCadastro">

    <?php if ($_smarty_tpl->tpl_vars['p']->value!=''){?>
        <table width="100%" border="1">
            <tr>
                <td width="146" height="114"><center><img src="<?php echo $_smarty_tpl->tpl_vars['om']->value->logo_om;?>
" alt="logo_25bc" /></center></td>
            <td width="687">
                <p align="center" style="font-size:12px; font-family:'Times New Roman', Times, serif;"><strong><br />
                        MINISTÉRIO   DA DEFESA<br />
                        EXÉRCITO    BRASILEIRO<br />
                        CMNE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10ª RM<br />
                        <?php echo $_smarty_tpl->tpl_vars['om']->value->nome_om;?>
<br />
                        (Cia  Ped do MT/1754)<br />
                        BATALHÃO  ALFERES LEONARDO DE CARVALHO CASTELO BRANCO</strong></p>
            </td>
            </tr>
        </table><br/>
        <p align="center"><strong><u>FICHA CADASTRO DE CARRO - PIPA</u></strong></p>
        <div class="alert alert-warning" role="alert" style="font-size: 16px;"><strong>AS FOTOS DEVEM POSSUIR NO MÁXIMO 2MB</strong></div>
        <form action="fichaCadastroPDF.php" method="post"  enctype="multipart/form-data" name="formFichaCadastro" id="formFichaCadastro" role="form">
            <table width="100%" border="1" class="tableDados">

                <tr>
                    <td height="160"><center>Foto <br /> Motorista <br /> 3X4
                    <input type="file" name="fileFotoMotorista" id="fileFotoMotorista" title="Escolha a foto 3x4 do motorista" required="">
                </center>
                </td>
                <td heigth="160" colspan="3">
                <center>FOTO / CARRO-PIPA <br />COM O RESPECTIVO MOTORISTA
                    <input type="file" name="fileFotoCarro" id="fileFotoCarro" title="Escolha a foto do carro" required="">
                </center>
                </td>
                </tr>
                <tr>
                    <td height="40" colspan="4"><p><strong>1. DADOS DO PROPRIETÁRIO DO VEÍCULO </strong></p></td>
                </tr>
                <tr>
                    <td colspan="4"><strong>NOME:</strong> <div class="col-sm-12"><input type="text" class="form-control" id="inputNomeFC" name="inputNomeFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->nome_pipeiro;?>
" required=""></div></td>
                <input type="hidden" name="idPipeiro" id="idPipeiro" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id_pipeiro;?>
">
                </tr>
                <tr>
                    <td width="203" height="62" valign="top"><p>NR IDENTIDADE</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputIdentidadeFC" name="inputIdentidadeFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->identidade_pipeiro;?>
" required=""></div>
                    </td>
                    <td width="168" valign="top"><p>ORGÃO EMISSOR</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputOrgaoEmissor" name="inputOrgaoEmissorFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->orgao_expeditor;?>
" required=""></div>
                    </td>
                    <td width="188" valign="top"><p>NR CPF</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputNrCpfFC" name="inputNrCpfFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->cpf_pipeiro;?>
" required=""></div>
                    </td>
                    <td width="211" valign="top"><p>CART MOT: CATEG/VAL</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputCatMotoristaFC" name="inputCatMotoristaFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->cnh_pipeiro;?>
" required=""></div><br /><br />
                    </td>
                </tr>
                <tr>
                    <td colspan="3" valign="top"><p>ENDEREÇO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputEnderecoFC" name="inputEnderecoFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->logradouro;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>CIDADE/ESTADO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputCidadeEstadoFC" name="inputCidadeEstadoFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->cidade;?>
-<?php echo $_smarty_tpl->tpl_vars['p']->value->uf;?>
" required=""></div><br /><br />
                    </td>
                </tr>
                <tr>
                    <td valign="top"><p>CEP</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputCepFC" name="inputCepFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->cep;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>TELEFONE</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputTelefoneFC" name="inputTelefoneFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->telefone;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>NR CONTA BANCO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputContaBancoFC" name="inputContaBancoFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->conta;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>NR AGÊNCIA / BANCO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputAgenciaBancoFC" name="inputAgenciaBancoFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->agencia;?>
" required=""></div><br /><br />
                    </td>
                </tr>
                <tr>
                    <td height="36" colspan="4"><p><strong>2. DADOS DO VEÍCULO</strong></p></td>
                </tr>
                <tr>
                    <td valign="top"><p>MARCA</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputMarcaFC" name="inputMarcaFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->marca_veiculo;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>MODELO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputModeloFC" name="inputModeloFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->modelo_veiculo;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>ANO DE FABRICAÇÃO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputAnoFabFC" name="inputAnoFabFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->ano_fab_veiculo;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>NR DA PLACA / CIDADE</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputPlacaFC" name="inputPlacaFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->placa_veiculo;?>
" required=""></div><br /><br />
                    </td>
                </tr>
                <tr>
                    <td valign="top"><p>SIT LICENCIAMENTO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputLicenciamentoFC" name="inputLicenciamentoFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->ano_licenciamento_veiculo;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>COMBUSTÍVEL</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputCombustivelFC" name="CombustivelFC" required=""></div>
                    </td>
                    <td valign="top"><p>NR CHASSIS</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputNrChassisFC" name="inputNrChassisFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->chassis_veiculo;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>VENCIMENTO SEGURO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputVencimentoSeguroFC" name="inputVencimentoSeguroFC" required=""></div><br /><br />
                    </td>
                </tr>
                <tr>
                    <td height="35" colspan="4"><p><strong> VISTORIA</strong></p></td>
                </tr>
                <tr>
                    <td valign="top"><p>ESTADO GERAL</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputEstadoGeralFC" name="inputEstadoGeralFC" required=""></div>
                    </td>
                    <td valign="top"><p>FREIOS</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputFreiosFC" name="inputFreiosFC" required=""></div>
                    </td>
                    <td valign="top"><p>DIREÇÃO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputDirecaoFC" name="inputDirecaoFC" required=""></div>
                    </td>
                    <td valign="top"><p>SISTEMA ELÉTRICO</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputSistemaEletricoFC" name="inputSistemaEletricoFC" required=""></div><br /><br />
                    </td>
                </tr>
                <tr>
                    <td height="33" colspan="4"><p><strong>3. DADOS DO TANQUE E DA BOMBA D'ÁGUA</strong> </p></td>
                </tr>
                <tr>
                    <td valign="top"><p>CAPACIDADE (LITROS)</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputCapacidadePipaFC" name="inputCapacidadePipaFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->cap_lts_veiculo;?>
" required=""></div>
                    </td>
                    <td valign="top"><p>ESTADO GERAL</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputEstadoGeralFC" name="inputEstadoGeralFC" required=""></div>
                    </td>
                    <td valign="top"><p>ESTADO DA BOMBA</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputEstadoBombaFC" name="inputEstadoBombaFC" required=""></div>
                    </td>
                    <td valign="top"><p>TAMPA SUPERIOR</p>
                        <div class="col-sm-12"><input type="text" class="form-control" id="inputTampaSuperiorFC" name="inputTampaSuperiorFC" required=""></div><br /><br />
                    </td>
                </tr>
                <tr>
                    <td height="33" colspan="4"><p><strong>4. CONTATOS ANTERIORES</strong></p></td>
                </tr>
                <tr>
                    <td><p><strong>ORGÃO</strong></p></td>
                    <td colspan="2"><p><strong>SERVIÇO</strong></p></td>
                    <td><p><strong>PREÇO</strong></p></td>
                </tr>
                <tr>
                    <td height="32" colspan="4"><p><strong>5. REFERENCIAS</strong> </p></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2"><p>Município:<input type="text" class="form-control" id="inputMunicipioFC" name="inputMunicipioFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['p']->value->uf_cidade;?>
" required=""></p></td>
                    <td height="35" colspan="2"><p>Ass. Mot: </p></td>
                </tr>
                <tr>
                    <td height="35" colspan="2"><p>Nome Mot: <input type="text" class="form-control" id="inputNomeMotoristaFC" name="inputNomeMotoristaFC" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->nome_pipeiro;?>
" required=""></p></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2"><p>Data: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</p></td>
                    <td height="33" colspan="2"><p>Ass. Mil:</p></td>
                </tr>
                <tr>
                    <td height="30" colspan="2"><p>Nome Mil: <input type="text" class="form-control" id="inputNomeMilitarFC" name="inputNomeMilitarFC" required=""></p></td>
                </tr>

            </table>
            <p></p>
            <p>
                <button type="submit" class="btn btn-primary btn-sm">Gerar Ficha Cadastro</button>
                <button type="reset" class="btn btn-default btn-sm">Cancelar</button>
            </p>
        </form>
    <?php }else{ ?>
        <div class="alert alert-danger" role="alert" style="font-size: 18px;"><center>Impossível gerar ficha cadastro, pipeiro não está cadastrado em nenhuma cidade</center></div>
            <?php }?>
</div><center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> <?php }} ?>