<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 11:32:19
         compiled from "/var/www/sisGerPipa/smarty/templates/paginas/importarDados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19415426525460be63997cf6-04751336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9dffe752a4aa9be34be9904224a4d253638bcb' => 
    array (
      0 => '/var/www/sisGerPipa/smarty/templates/paginas/importarDados.tpl',
      1 => 1415624884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19415426525460be63997cf6-04751336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erroUpload' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5460be639cf111_89009973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460be639cf111_89009973')) {function content_5460be639cf111_89009973($_smarty_tpl) {?><fieldset><legend>Importar dados da planilha do Excel</legend>
    <?php echo $_smarty_tpl->tpl_vars['erroUpload']->value;?>

    <p class="text-danger">
        <strong>Atenção:</strong> <small>para importar dados do excel, basta seguir os seguintes passos:</small></p>
    <p class="text-justify"> <small>1. O primeiro procedimento é baixar os arquivos, correspondentes à planilha que deseja migrar, para colocar o modelo atual nos modelos pré-definidos pelo sistema, para que seja realizado o upload sem alterações; <br />
            2. Logo depois, você deve salvar o arquivo do Excel no formato CSV (separado por vírgulas) (*.csv), como mostra a imagem abaixo:</small></p>
    <div class="row">
        <div class="col-md-12">

            <img src="imagens/importando-dados-do-excel-para-mysql.jpg" width="50%" align="left" alt="tuto" /> <br />
            <span style="padding: 10px;">Caso a planilha estejá já formada, não se esqueça de por os titulos, das colunas, nos padrões pré definidos nos exemplos abaixos.</span>
        </div>
    </div><br />
    <p><small>3. Depois de feitos os procedimentos acima, agora basta realizar o upload da planilha no formato definido(*.csv).</small></p>
    <br />

    <div class="row">
        <div class="col-md-4">
            <div class="alert alert-danger" role="alert">
                <strong>Clique para baixar</strong><br />
                <a href="modelos/modelo_planilha_veiculos.xlsx" target="_blank"><span class="glyphicon glyphicon-link"></span> Exemplo planilha cidade</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="alert alert-danger" role="alert">
                <strong>Clique para baixar</strong><br />
                <a href="modelos/modelo_planilha_cidades.xlsx" target="_blank"><span class="glyphicon glyphicon-link"></span> Exemplo planilha veiculo</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="alert alert-danger" role="alert">
                <strong>Clique para baixar</strong><br />
                <a href="modelos/modelo_planilha_prestador_sv.xlsx" target="_blank"><span class="glyphicon glyphicon-link"></span> Exemplo planilha Prestador de serviço</a>
            </div>
        </div>

        <!-- FORMULARIOS DE UPLOAD DE ARQUIVOS -->
        <div class="row">
            <div class="col-md-4">
                <div class="alert alert-success" role="alert">
                    <form enctype="multipart/form-data" action="includes/controllers/insereDadosCidadeControl.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="upload" value="cidade" />
                            <label for="exampleInputFile">Upload Planilha Cidade</label>
                            <input name="arquivo" type="file" /><br />
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> Enviar Arquivo </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="alert alert-success" role="alert">
                    <form enctype="multipart/form-data" action="includes/controllers/insereDadosCidadeControl.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="upload" value="veiculo" />
                            <label for="exampleInputFile">Upload Planilha Veículo</label>
                            <input name="arquivo" type="file" /><br />
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> Enviar Arquivo </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="alert alert-success" role="alert">
                    <form enctype="multipart/form-data" action="includes/controllers/insereDadosCidadeControl.php" method="post">
                        <div class="form-group">
                            <input type="hidden" name="upload" value="pipeiro" />
                            <label for="exampleInputFile">Upload Planilha Prestador de Serviço</label>
                            <input name="arquivo" type="file" /><br />
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> Enviar Arquivo </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</fieldset>
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a></center> <?php }} ?>