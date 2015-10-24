﻿<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />

        {literal}
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
        {/literal}    
        <title></title>
    </head>
    <body>



        <div class="table-responsive">

            <table width="100%" border="1">
                <tr>
                    <td width="146" height="100">
                        <center>
                            <img src="imagens/logo.jpg" width="100" height="110">
                        </center>
                    </td>
                <td width="687">
                    <p style="font-size:12px; font-family:'Times New Roman', Times, serif;">
                        <strong>
                            <center>
                                MINISTÉRIO   DA DEFESA<br />
                                EXÉRCITO  &nbsp;  BRASILEIRO<br />
                                CMNE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10ª RM<br />
                                25º  BATALHÃO DE CAÇADORES<br />
                                (Cia  Ped do MT/1754)<br />
                                BATALHÃO  ALFERES LEONARDO DE CARVALHO CASTELO BRANCO
                            </center>
                        </strong>
                    </p>
                </td>
                </tr>
            </table>
            <p align="center"><strong><u>FICHA CADASTRO DE CARRO - PIPA</u></strong></p>
            <table width="100%" border="1" class="tableDados" style="font-family: 'Times New Roman', Times, serif;">

                
                <tr>
                    <td height="140"><center><img src="{$fotoMot}" width="140"></center></td>
                <td heigth="140" colspan="3"><center><img src="{$fotoPipa}" width="400" height='140'></center></td>
                </tr>
                <tr>
                    <td height="40" colspan="4"><p><strong>1. DADOS DO PROPRIETÁRIO DO VEÍCULO </strong></p></td>
                </tr>
                <tr>
                    <td colspan="4"><strong>NOME:</strong> {$nomePipeiro|upper}</td>
                </tr>
                <tr>
                    <td width="203" height="56" valign="top"><p>NR IDENTIDADE</p>
                        <br>{$identidade}
                    </td>
                    <td width="168" valign="top"><p>ORGÃO EMISSOR</p>
                        <br>{$orgaoEmissor|upper}
                    </td>
                    <td width="188" valign="top"><p>NR CPF</p>
                        <br>{$cpf}
                    </td>
                    <td width="211" valign="top"><p>CART MOT: CATEG/VAL</p>
                        <br>{$carteiraMot}
                    </td>
                </tr>
                <tr>
                    <td colspan="3" valign="top"><p>ENDEREÇO</p>
                        <br>{$endereco|upper}
                    </td>
                    <td valign="top"><p>CIDADE/ESTADO</p>
                        <br>{$cidadeEstado|upper}
                    </td>
                </tr>
                <tr>
                    <td valign="top"><p>CEP</p>
                        <br>{$cep}
                    </td>
                    <td valign="top"><p>TELEFONE</p>
                        <br>{$telefone}
                    </td>
                    <td valign="top"><p>NR CONTA BANCO</p>
                        <br>{$contaBanco}
                    </td>
                    <td valign="top"><p>NR AGÊNCIA / BANCO</p>
                        <br>{$agenciaBanco}
                    </td>
                </tr>
                <tr>
                    <td height="36" colspan="4"><p><strong>2. DADOS DO VEÍCULO</strong></p></td>
                </tr>
                <tr>
                    <td valign="top"><p>MARCA</p>
                        <br>{$marcaVeiculo|upper}
                    </td>
                    <td valign="top"><p>MODELO</p>
                        <br>{$modeloVeiculo|upper}
                    </td>
                    <td valign="top"><p>ANO DE FABRICAÇÃO</p>
                        <br>{$anoFabricacao|upper}
                    </td>
                    <td valign="top"><p>NR DA PLACA / CIDADE</p>
                        <br>{$placa|upper}
                    </td>
                </tr>
                <tr>
                    <td valign="top"><p>SIT LICENCIAMENTO</p>
                        <br>{$licenciamento|upper}
                    </td>
                    <td valign="top"><p>COMBUSTÍVEL</p>
                        <br>{$combustivel|upper}
                    </td>
                    <td valign="top"><p>NR CHASSIS</p>
                        <br>{$chassis|upper}
                    </td>
                    <td valign="top"><p>VENCIMENTO SEGURO</p>
                        <br>{$vencSeguro|upper}
                    </td>
                </tr>
                <tr>
                    <td height="35" colspan="4"><p> VISTORIA</p></td>
                </tr>
                <tr>
                    <td valign="top"><p>ESTADO GERAL</p>
                        <br>{$estadoGeral|upper}
                    </td>
                    <td valign="top"><p>FREIOS</p>
                        <br>{$freios|upper}
                    </td>
                    <td valign="top"><p>DIREÇÃO</p>
                        <br>{$direcao|upper}
                    </td>
                    <td valign="top"><p>SISTEMA ELÉTRICO</p>
                        <br>{$sistemaEletrico|upper}
                    </td>
                </tr>
                <tr>
                    <td height="33" colspan="4"><p><strong>3. DADOS DO TANQUE E DA BOMBA D'ÁGUA</strong> </p></td>
                </tr>
                <tr>
                    <td valign="top"><p>CAPACIDADE (LITROS)</p>
                        <br>{$capacidadePipa|upper}
                    </td>
                    <td valign="top"><p>ESTADO GERAL</p>
                        <br>{$estadoGeralPipa|upper}
                    </td>
                    <td valign="top"><p>ESTADO DA BOMBA</p>
                        <br>{$estadoBomba|upper}
                    </td>
                    <td valign="top"><p>TAMPA SUPERIOR</p>
                        <br>{$tampaSuperior|upper}
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
                    <td colspan="2" rowspan="2"><p>Município: {$municipio}</p></td>
                    <td height="35" colspan="2"><p>Ass. Mot: </p></td>
                </tr>
                <tr>
                    <td height="35" colspan="2"><p>Nome Mot: &nbsp;&nbsp;&nbsp;{$nomePipeiro|upper}</p></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2"><p>Data: {$data}</p></td>
                    <td height="33" colspan="2"><p>Ass. Mil:</p></td>
                </tr>
                <tr>
                    <td height="30" colspan="2"><p>Nome Mil: &nbsp;&nbsp;&nbsp;{$nomeMilitar|upper}</p></td>
                </tr>

            </table>

        </div>
    </body>
</html>