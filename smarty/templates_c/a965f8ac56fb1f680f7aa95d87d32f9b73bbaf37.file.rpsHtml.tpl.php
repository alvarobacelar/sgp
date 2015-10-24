<?php /* Smarty version Smarty-3.1.13, created on 2015-01-27 15:54:21
         compiled from "/var/www/html/sisGerPipa/smarty/templates/paginas/rpsHtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011243024547e1a75bd98f6-61281349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a965f8ac56fb1f680f7aa95d87d32f9b73bbaf37' => 
    array (
      0 => '/var/www/html/sisGerPipa/smarty/templates/paginas/rpsHtml.tpl',
      1 => 1422381257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011243024547e1a75bd98f6-61281349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547e1a75c844f4_89424971',
  'variables' => 
  array (
    'rps' => 0,
    'cpfImprimir' => 0,
    'valorImprimir' => 0,
    'mesImprimir' => 0,
    'mesNumero' => 0,
    'anoPrestacao' => 0,
    'om' => 0,
    'mes' => 0,
    'valorLiquido' => 0,
    'valorExtenco' => 0,
    'valor' => 0,
    'inss' => 0,
    'senat' => 0,
    'somaImposto' => 0,
    'posto' => 0,
    'nome' => 0,
    'nivel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e1a75c844f4_89424971')) {function content_547e1a75c844f4_89424971($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar RPS</h2>
    </div>
    <div class="panel-body">

        <?php if (!empty($_smarty_tpl->tpl_vars['rps']->value)){?>

            <?php if ($_smarty_tpl->tpl_vars['rps']->value->id_cidade_atuante==10){?>
                <div class="alert alert-danger" role="alert">
                    <center><p>Impossível gerar RPS, pipeiro desativado do programa!</p></center>
                </div>
            <?php }else{ ?>

                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>OBS:</strong> Ao clicar no botão: Gerar PDF para impressão, essa RPS será salva em um banco de dados para futuras pesquisas e gerações de relatórios. Caso tenha gerado mais um uma vez a mesma RPS, entre em contato com o <a href="informeAlteracoes.php" class="alert-link">Gerente do sistema</a> para exclusão desta.
                </div>
                <form action="imprimirRPS.php" method="post" >
                    <input type="hidden" id="cpf" name="cpf" value="<?php echo $_smarty_tpl->tpl_vars['cpfImprimir']->value;?>
">
                    <input type="hidden" id="valor" name="valor" value="<?php echo $_smarty_tpl->tpl_vars['valorImprimir']->value;?>
">
                    <input type="hidden" id="mes" name="mes" value="<?php echo $_smarty_tpl->tpl_vars['mesImprimir']->value;?>
">
                    <input type="hidden" id="mesNumero" name="mesNumero" value="<?php echo $_smarty_tpl->tpl_vars['mesNumero']->value;?>
">
                    <input type="hidden" id="ano" name="ano" value="<?php echo $_smarty_tpl->tpl_vars['anoPrestacao']->value;?>
">
                    <center><button type="submit" onclick="this.form.target = '_blank';
                            return true;" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-print"></span> Gerar PDF para impressão </button><br /><br /></center>
                </form>

                <center><a href="informeAlteracoes.php?id=<?php echo $_smarty_tpl->tpl_vars['rps']->value->id_pipeiro;?>
" class="btn btn-danger btn-xs" title="Informar alteração para o Administador ou Gerente do sistema"><span class="glyphicon glyphicon-info-sign"></span> Informar alteração</a></center>
                <br />
                <div class="table-responsive">
                    <table width="100%" border="1">
                        <tr>
                            <td colspan="6" rowspan="3" align="center">RECIBO DE PRESTAÇÃO DE SERVIÇOS – RPS</td>
                            <td width="87" align="center"><strong style="font-size: 12px">Nº DO RECIBO</strong></td>
                            <td width="80" align="center" style="font-size: 12px">Nº DO TALÃO</td>
                        </tr>
                        <tr>
                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['rps']->value->id_pipeiro;?>
 /<?php echo $_smarty_tpl->tpl_vars['mesNumero']->value;?>
</td>
                            <td align="center"><strong>-</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="6" align="center"><strong><?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['om']->value->nome_om, 'UTF-8');?>
<?php }else{ ?> <a href="cadastrarOM.php" class="text-danger">CADASTRE A OM, CLIQUE AQUI</a><?php }?></strong></td>
                            <td colspan="2" align="center"><strong><?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo $_smarty_tpl->tpl_vars['om']->value->cnpj_om;?>
<?php }else{ ?><a href="cadastrarOM.php" class="text-danger">CADASTRE A OM</a><?php }?></strong></td>
                        </tr>
                        <tr>
                            <td height="47" colspan="8">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="8" align="right" style="font-size: 11px">Recebi da empresa acima identificada, pela prestação dos serviços</td>
                        </tr>
                        <tr>
                            <td width="97" style="font-size: 11px">Referente </td>
                            <td colspan="5" style="font-size: 13px"><strong>AO TRANSPORTE E DISTRIBUIÇÃO DE ÁGUA POTÁVEL DA OP PIPA NO MUNICÍPIO DE &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['rps']->value->nome_cidade_atuante;?>
</strong></td>
                            <td colspan="2" nowrap style="font-size: 12px"><strong>, NO MÊS DE <?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
 DE <?php echo $_smarty_tpl->tpl_vars['anoPrestacao']->value;?>
</strong></td>
                        </tr>
                        <tr>
                            <td style="font-size: 11px">A importancia de </td>
                            <td width="182" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['valorLiquido']->value;?>
</strong></td>
                            <td colspan="6"><strong><?php echo $_smarty_tpl->tpl_vars['valorExtenco']->value;?>
</strong></td>
                        </tr>
                        <tr>
                            <td height="48" colspan="8">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="8">&nbsp;</td>
                            <td height="44" colspan="2" valign="top" style="font-size: 14px">ESPECIFICAÇÃO</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>I – Valor do serviço prestado</strong></td>
                            <td colspan="2" align="center" valign="middle"><strong><?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-size: 12px;">II – Reembolso (10% até o salário-base)</td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right"><strong>Soma</strong></td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>DESCONTOS</strong></td>
                            <td colspan="2" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-size: 12px">III – Imposto de Renda Retido na Fonte</td>
                            <td colspan="2" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong style="font-size: 14px">IV – INSS </strong></td>
                            <td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['inss']->value;?>
</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" style="font-size: 12px">NÚMERO DE INSCRIÇÃO</td>
                            <td style="font-size: 12px">&nbsp;</td>
                            <td colspan="2"><strong>V – SEST/SENAT</strong></td>
                            <td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['senat']->value;?>
</td>
                        </tr>
                        <tr>
                            <td style="font-size: 12px">  Nº PIS/PASEP</td>
                            <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->nit_pipeiro;?>
</strong></td>
                            <td>&nbsp;</td>
                            <td colspan="2" align="right"><strong>Soma</strong></td>
                            <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['somaImposto']->value;?>
</strong></td>
                        </tr>
                        <tr>
                            <td style="font-size: 12px">Nº CPF</td>
                            <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->cpf_pipeiro;?>
</strong></td>
                            <td width="25">&nbsp;</td>
                            <td colspan="2" align="right">&nbsp;</td>
                            <td colspan="2" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" style="font-size: 12px">DOCUMENTO DE IDENTIDADE</td>
                            <td>&nbsp;</td>
                            <td colspan="2" align="right" style="font-size: 14px"><strong>VALOR LIQUIDO</strong></td>
                            <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['valorLiquido']->value;?>
</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" style="font-size: 12px">NÚMERO</td>
                            <td width="239" align="center" style="font-size: 12px">ÓRGÃO EMISSOR</td>
                            <td>&nbsp;</td>
                            <td colspan="4" rowspan="2" align="left" valign="top" style="font-size: 10px">ASSINATURA</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->identidade_pipeiro;?>
</strong></td>
                            <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->orgao_expeditor;?>
</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" style="font-size: 12px">LOCALIDADE</td>
                            <td align="center" style="font-size: 12px">DATA</td>
                            <td>&nbsp;</td>
                            <td colspan="4" align="left" style="font-size: 12px">NOME COMPLETO</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><strong><?php if (!empty($_smarty_tpl->tpl_vars['om']->value)){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['om']->value->local_om, 'UTF-8');?>
<?php }else{ ?> <i><a href="cadastrarOM.php" class="text-danger">CADASTRE A OM</a></i> <?php }?></strong></td>
                            <td align="center"><strong>____________________</strong></td>
                            <td>&nbsp;</td>
                            <td colspan="4" align="center" style="font-size: 14px"><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['rps']->value->nome_pipeiro, 'UTF-8');?>
</strong></td>
                        </tr>
                        <tr>
                            <td colspan="8">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">BANCO:</td>
                            <td colspan="2" align="center" style="font-size: 14px"><?php echo $_smarty_tpl->tpl_vars['rps']->value->banco;?>
</td>
                            <td width="140" align="center" style="font-size: 14px"><strong>AGÊNCIA:</strong></td>
                            <td width="127" align="center" style="font-size: 14px"><?php echo $_smarty_tpl->tpl_vars['rps']->value->agencia;?>
</td>
                            <td align="center" style="font-size: 14px"><strong>CONTA:</strong></td>
                            <td align="center" style="font-size: 14px"><?php echo $_smarty_tpl->tpl_vars['rps']->value->conta;?>
</td>
                        </tr>
                    </table><br />
                    RP____________________________ &nbsp;&nbsp;NE_______________________________&nbsp;&nbsp; NS____________________________
                    <br />
                    <small><?php echo $_smarty_tpl->tpl_vars['posto']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</small>
                </div>
            <?php }?>
            <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a></center> 
            <?php }else{ ?>
            <div class="alert alert-danger" role="alert"><center>Não há cadastro para este CPF.<?php if ($_smarty_tpl->tpl_vars['nivel']->value!="admin"){?> <a href="informeAlteracoes.php" class="btn btn-info btn-xs">Entre em contato com o Admistrador do sistema. </a><?php }else{ ?> <a href="cadastrarPipeiro.php" class="btn btn-info btn-xs">Cadastre este CPF</a><?php }?></center></div>
            <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
            <?php }?>
    </div>
</div><?php }} ?>