<?php /* Smarty version Smarty-3.1.13, created on 2015-09-25 19:02:17
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/cadastrarOM.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11617070235605c33d3d93d7-90300477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ebce1298591e9929cdbf5a6c2cc90d45c8a215' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/cadastrarOM.tpl',
      1 => 1443218534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11617070235605c33d3d93d7-90300477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5605c33d5c9072_90613368',
  'variables' => 
  array (
    'erroOM' => 0,
    'om' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5605c33d5c9072_90613368')) {function content_5605c33d5c9072_90613368($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar OM</h2>
    </div>
    <div class="panel-body">

        <?php echo $_smarty_tpl->tpl_vars['erroOM']->value;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?> <a href="includes/controllers/excluirOM.php?idExcluirOM=<?php echo $_smarty_tpl->tpl_vars['om']->value->id_om;?>
" class="btn btn-danger">Excluir OM cadastrada</a> <?php }?>
        <form enctype="multipart/form-data" action="includes/controllers/cadastrarOMControl.php" method="post" id="formCadastrarOM" name="formCadastrarOM" class="form-horizontal" role="form">

            <?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?>
                <input type="hidden" id="idOM" name="idOM" value="<?php echo $_smarty_tpl->tpl_vars['om']->value->id_om;?>
" >

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Imagem do Carimbo da RPS</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="fileCarimboRPS" value="" name="fileCarimboRPS" title="Faça o upload da imagem digitalizada do carimbo que saiŕa junto com a RPS"><br />
                        <?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><img src="<?php echo $_smarty_tpl->tpl_vars['om']->value->carimbo_rps_om;?>
" width="400" alt="carimbo rps"><?php }?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Trocar despacho</button>
                    </div>
                </div>
            <?php }else{ ?>

                <?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?>
                    <input type="hidden" id="idOM" name="idOM" value="<?php echo $_smarty_tpl->tpl_vars['om']->value->id_om;?>
" >
                <?php }?>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputNomeOM">Nome da OM</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="inputNomeOM" name="inputNomeOM" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->nome_om;?>
<?php }?>" placeholder="Ex: 25º Batalhão de Caçadores">
                    </div>
                </div>
                <div class="row form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputCnpj">CNPJ</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputCnpj" name="inputCnpj" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->cnpj_om;?>
<?php }?>" placeholder="CNPJ da OM">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Local</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputLocal" value="" name="inputLocal" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->local_om;?>
<?php }?>" placeholder="Ex: Teresina-PI">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputEnderecoOM">Endereço OM</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="inputEnderecoOM" value="" name="inputEnderecoOM" required="" value="<?php echo $_smarty_tpl->tpl_vars['om']->value->endereco_om;?>
" placeholder="EX: Praça Marechal Floriano Peixoto, S/N">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputPostoGradCmt">Posto/Grad Comandante</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputPostoGradCmt" value="" name="inputPostoGradCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->post_grad_cmt_om;?>
<?php }?>" placeholder="EX: Ten Cel">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputComandanteCmt">Nome Comandante</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="inputComandanteCmt" value="" name="inputComandanteCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->endereco_cmt_om;?>
<?php }?>" placeholder="EX: Marcos Gomes Paulino">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputEnderecoCmt">Endereço Comandante</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="inputEnderecoCmt" value="" name="inputEnderecoCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->endereco_cmt_om;?>
<?php }?>" placeholder="EX: Rua Lisando Nogueira, 4444">
                    </div>

                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputCidadeCmt" value="" name="inputCidadeCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->cidade_cmt_om;?>
<?php }?>" placeholder="Cidade">
                    </div>

                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputBairroCmt" value="" name="inputBairroCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->bairro_cmt_om;?>
<?php }?>" placeholder="Bairro">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputNrPNRCmt">Nr PNR Comandante</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputNrPNRCmt" value="" name="inputNrPNRCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->numero_pnr_cmt_om;?>
<?php }?>" placeholder="EX: Numero PNR">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputIdentidadeCmt">Identidade Comandante</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputIdentidadeCmt" value="" name="inputIdentidadeCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->identidade_cmt_om;?>
<?php }?>" placeholder="EX: Identidade">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputCpfCmt">CPF Comandante</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputCpfCmt" value="" name="inputCpfCmt" required="" value="<?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->identidade_cmt_om;?>
<?php }?>" placeholder="EX: CPF Comandante">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Logo da OM</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="fileLogoOM" value="" name="fileLogoOM" <?php if (empty($_smarty_tpl->tpl_vars['om']->value)){?> required=""<?php }?>><br />
                        <?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><img src="<?php echo $_smarty_tpl->tpl_vars['om']->value->logo_om;?>
" alt="logo_om" width="60" align="left"><?php }?>
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Imagem do Carimbo da RPS</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="fileCarimboRPS" value="" name="fileCarimboRPS" title="Faça o upload da imagem digitalizada do carimbo que saiŕa junto com a RPS"><br />
                        <?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><img src="<?php echo $_smarty_tpl->tpl_vars['om']->value->carimbo_rps_om;?>
" width="400" alt="carimbo rps"><?php }?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            <?php }?>
        </form>
        </fieldset>
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div>
</div><?php }} ?>