<?php /* Smarty version Smarty-3.1.13, created on 2016-03-01 11:00:41
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/RPS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71550886856d5a0891dca16-53328504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8106c2919cab98c4992b2ba48f15aec1681230b7' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/RPS.tpl',
      1 => 1455202547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71550886856d5a0891dca16-53328504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rps' => 0,
    'mesNumero' => 0,
    'om' => 0,
    'mes' => 0,
    'valorLiquido' => 0,
    'valorExtenco' => 0,
    'valor' => 0,
    'inss' => 0,
    'senat' => 0,
    'somaImposto' => 0,
    'data' => 0,
    'posto' => 0,
    'nome' => 0,
    'mostraDespacho' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56d5a089381ff2_71881198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d5a089381ff2_71881198')) {function content_56d5a089381ff2_71881198($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />

        
            <style>   
                .clearfix{*zoom:1;}.clearfix:before,.clearfix:after{display:table;content:"";line-height:0;}
                .clearfix:after{clear:both;}
                .hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
                .input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
                table{max-width:100%;background-color:transparent;border-collapse:collapse;border-spacing:0;}
                .table{width:100%;margin-bottom:20px;}.table th,.table td{padding:8px;line-height:20px;text-align:left;vertical-align:top;border-top:1px solid #dddddd;}
                .table th{font-weight:bold;}
                .table thead th{vertical-align:bottom;}
                .table caption+thead tr:first-child th,.table caption+thead tr:first-child td,.table colgroup+thead tr:first-child th,.table colgroup+thead tr:first-child td,.table thead:first-child tr:first-child th,.table thead:first-child tr:first-child td{border-top:0;}
                .table tbody+tbody{border-top:2px solid #dddddd;}
                .table-condensed th,.table-condensed td{padding:4px 5px;}
                .table-bordered{border:1px solid #dddddd;border-collapse:separate;*border-collapse:collapse;border-left:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}.table-bordered th,.table-bordered td{border-left:1px solid #dddddd;}
                .table-bordered caption+thead tr:first-child th,.table-bordered caption+tbody tr:first-child th,.table-bordered caption+tbody tr:first-child td,.table-bordered colgroup+thead tr:first-child th,.table-bordered colgroup+tbody tr:first-child th,.table-bordered colgroup+tbody tr:first-child td,.table-bordered thead:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child td{border-top:0;}
                .table-bordered thead:first-child tr:first-child th:first-child,.table-bordered tbody:first-child tr:first-child td:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
                .table-bordered thead:first-child tr:first-child th:last-child,.table-bordered tbody:first-child tr:first-child td:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
                .table-bordered thead:last-child tr:last-child th:first-child,.table-bordered tbody:last-child tr:last-child td:first-child,.table-bordered tfoot:last-child tr:last-child td:first-child{-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
                .table-bordered thead:last-child tr:last-child th:last-child,.table-bordered tbody:last-child tr:last-child td:last-child,.table-bordered tfoot:last-child tr:last-child td:last-child{-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;}
                .table-bordered caption+thead tr:first-child th:first-child,.table-bordered caption+tbody tr:first-child td:first-child,.table-bordered colgroup+thead tr:first-child th:first-child,.table-bordered colgroup+tbody tr:first-child td:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
                .table-bordered caption+thead tr:first-child th:last-child,.table-bordered caption+tbody tr:first-child td:last-child,.table-bordered colgroup+thead tr:first-child th:last-child,.table-bordered colgroup+tbody tr:first-child td:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
                .table-striped tbody tr:nth-child(odd) td,.table-striped tbody tr:nth-child(odd) th{background-color:#f9f9f9;}
                .table-hover tbody tr:hover td,.table-hover tbody tr:hover th{background-color:#f5f5f5;}
                table td[class*="span"],table th[class*="span"],.row-fluid table td[class*="span"],.row-fluid table th[class*="span"]{display:table-cell;float:none;margin-left:0;}
                .table td.span1,.table th.span1{float:none;width:44px;margin-left:0;}
                .table td.span2,.table th.span2{float:none;width:124px;margin-left:0;}
                .table td.span3,.table th.span3{float:none;width:204px;margin-left:0;}
                .table td.span4,.table th.span4{float:none;width:284px;margin-left:0;}
                .table td.span5,.table th.span5{float:none;width:364px;margin-left:0;}
                .table td.span6,.table th.span6{float:none;width:444px;margin-left:0;}
                .table td.span7,.table th.span7{float:none;width:524px;margin-left:0;}
                .table td.span8,.table th.span8{float:none;width:604px;margin-left:0;}
                .table td.span9,.table th.span9{float:none;width:684px;margin-left:0;}
                .table td.span10,.table th.span10{float:none;width:764px;margin-left:0;}
                .table td.span11,.table th.span11{float:none;width:844px;margin-left:0;}
                .table td.span12,.table th.span12{float:none;width:924px;margin-left:0;}
                .table tbody tr.success td{background-color:#dff0d8;}
                .table tbody tr.error td{background-color:#f2dede;}
                .table tbody tr.warning td{background-color:#fcf8e3;}
                .table tbody tr.info td{background-color:#d9edf7;}
                .table-hover tbody tr.success:hover td{background-color:#d0e9c6;}
                .table-hover tbody tr.error:hover td{background-color:#ebcccc;}
                .table-hover tbody tr.warning:hover td{background-color:#faf2cc;}
                .table-hover tbody tr.info:hover td{background-color:#c4e3f3;}
                .well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);-moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);}.well blockquote{border-color:#ddd;border-color:rgba(0, 0, 0, 0.15);}
                .well-large{padding:24px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
                .well-small{padding:9px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
            </style>
            
        <title>RPS - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['rps']->value->nome_pipeiro, 'UTF-8');?>
</title>
    </head>
    <body>


        <?php if (!empty($_smarty_tpl->tpl_vars['rps']->value)){?>
            <div class="table-responsive">
                <table width="1100" border="1">
                    <tr>
                        <td colspan="6" rowspan="3" align="center">RECIBO DE PRESTAÇÃO DE SERVIÇOS – RPS</td>
                        <td width="87" align="center"><strong style="font-size: 12px">Nº  RECIBO</strong></td>
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
                        <td colspan="6" align="center"><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['om']->value->nome_om, 'UTF-8');?>
</strong></td>
                        <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['om']->value->cnpj_om;?>
</strong></td>
                    </tr>
                    <tr>
                        <td height="47" colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8" align="right" style="font-size: 11px">Recebi da empresa acima identificada, pela prestação dos serviços</td>
                    </tr>
                    <tr>
                        <td width="97" style="font-size: 11px">Referente </td>
                        <td colspan="5" style="font-size: 13px">AO TRANSPORTE E DISTRIBUIÇÃO DE ÁGUA POTÁVEL DA OP PIPA NO MUNICÍPIO DE &nbsp;<strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['rps']->value->nome_cidade_atuante, 'UTF-8');?>
</strong></td>
                        <td colspan="2" nowrap style="font-size: 12px"><strong>, NO MÊS DE <?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
 DE <?php echo $_smarty_tpl->tpl_vars['om']->value->ano_prestacao;?>
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
                        <td height="44" colspan="4" valign="top" style="font-size: 14px">ESPECIFICAÇÃO</td>
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
                        <td width="25" rowspan="8" style="font-size: 12px">&nbsp;</td>
                        <td colspan="2"><strong>V – SEST/SENAT</strong></td>
                        <td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['senat']->value;?>
</td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px">  Nº PIS/PASEP</td>
                        <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->nit_pipeiro;?>
</strong></td>
                        <td colspan="2" align="right"><strong>Soma</strong></td>
                        <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['somaImposto']->value;?>
</strong></td>
                    </tr>
                    <tr>
                        <td style="font-size: 12px">Nº CPF</td>
                        <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->cpf_pipeiro;?>
</strong></td>
                        <td colspan="2" align="right">&nbsp;</td>
                        <td colspan="2" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center" style="font-size: 12px">DOCUMENTO DE IDENTIDADE</td>
                        <td colspan="2" align="right" style="font-size: 14px"><strong>VALOR LIQUIDO</strong></td>
                        <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['valorLiquido']->value;?>
</strong></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="font-size: 12px">NÚMERO</td>
                        <td width="239" align="center" style="font-size: 12px">ÓRGÃO EMISSOR</td>
                        <td colspan="4" rowspan="2" align="left" valign="top" style="font-size: 10px">ASSINATURA</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->identidade_pipeiro;?>
</strong></td>
                        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['rps']->value->orgao_expeditor;?>
</strong></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="font-size: 12px">LOCALIDADE</td>
                        <td align="center" style="font-size: 12px">DATA</td>
                        <td colspan="4" align="left" style="font-size: 12px">NOME COMPLETO</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['om']->value->local_om, 'UTF-8');?>
</strong></td>
                        <td align="center"><strong><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</strong></td>
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
                <br>
                <br>
                <br>
                <br>
                <br>
                <div style="text-align: center;"> 
                    __________________________________________
                    <small><?php echo $_smarty_tpl->tpl_vars['posto']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</small>
                </div>
            </div>
        <?php }else{ ?>
            <h3 class="text-danger" style="font-size: 11px;"><center>Não há cadastro para este CPF</center></h3>
                <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['om']->value->carimbo_rps_om!=''&&$_smarty_tpl->tpl_vars['mostraDespacho']->value=="S"){?>
            
            <?php echo $_smarty_tpl->getSubTemplate ("paginas/despacho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!--
            <div>
                <center><img src="<?php echo $_smarty_tpl->tpl_vars['om']->value->carimbo_rps_om;?>
" alt="carimbo om"></center>
            </div>
            -->
        <?php }?>
    </body>
</html>
<?php }} ?>