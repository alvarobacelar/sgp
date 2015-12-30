<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Gerar RPS</h2>
    </div>
    <div class="panel-body">

        {if !empty($rps)}

            {if $rps->id_cidade_atuante == 10}
                <div class="alert alert-danger" role="alert">
                    <center><p>Impossível gerar RPS, pipeiro desativado do programa!</p></center>
                </div>
            {else}
                {if $existente != ""}
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {$existente}<br>
                        <a href="pesquisarRPS.php?idRps={$idRps}">Clique aqui para ver esta RPS</a>
                    </div>
                {else}

                    <div class="alert alert-warning alert-dismissible text-justify" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>OBS:</strong> Ao clicar no botão: Gerar PDF para impressão, essa RPS será salva em um banco de dados para futuras pesquisas e gerações de relatórios. Contudo, não será possível gerar mais de uma RPS para o mesmo pipeiro no mês corrente. Qualquer duvida, entre em contato com o <a href="informeAlteracoes.php" class="alert-link">Administrador do sistema</a>.
                    </div>

                    <form action="imprimirRPS.php" method="post" >
                        <input type="hidden" id="cpf" name="cpf" value="{$cpfImprimir}">
                        <input type="hidden" id="valor" name="valor" value="{$valorImprimir}">
                        <input type="hidden" id="mes" name="mes" value="{$mesImprimir}">
                        <input type="hidden" id="mesNumero" name="mesNumero" value="{$mesNumero}">
                        <input type="hidden" id="ano" name="ano" value="{$anoPrestacao}">
                        <center><button type="submit" onclick="this.form.target = '_blank';
                                return true;
                                imprimeRPS();" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-print"></span> Gerar PDF para impressão </button><br /><br /></center>
                    </form>

                    <center><a href="informeAlteracoes.php?id={$rps->id_pipeiro}" class="btn btn-danger btn-xs" title="Informar alteração para o Administador ou Gerente do sistema"><span class="glyphicon glyphicon-info-sign"></span> Informar alteração</a></center>
                    <br />
                    <div class="table-responsive">
                        <table width="100%" border="1">
                            <tr>
                                <td colspan="6" rowspan="3" align="center">RECIBO DE PRESTAÇÃO DE SERVIÇOS – RPS</td>
                                <td width="87" align="center"><strong style="font-size: 12px">Nº DO RECIBO</strong></td>
                                <td width="80" align="center" style="font-size: 12px">Nº DO TALÃO</td>
                            </tr>
                            <tr>
                                <td align="center">{$rps->id_pipeiro} /{$mesNumero}</td>
                                <td align="center"><strong>-</strong></td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="6" align="center"><strong>{if !empty($om)}{$om->nome_om|upper}{else} <a href="cadastrarOM.php" class="text-danger">CADASTRE A OM, CLIQUE AQUI</a>{/if}</strong></td>
                                <td colspan="2" align="center"><strong>{if !empty($om)}{$om->cnpj_om}{else}<a href="cadastrarOM.php" class="text-danger">CADASTRE A OM</a>{/if}</strong></td>
                            </tr>
                            <tr>
                                <td height="47" colspan="8">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="8" align="right" style="font-size: 11px">Recebi da empresa acima identificada, pela prestação dos serviços</td>
                            </tr>
                            <tr>
                                <td width="97" style="font-size: 11px">Referente </td>
                                <td colspan="5" style="font-size: 13px">AO TRANSPORTE E DISTRIBUIÇÃO DE ÁGUA POTÁVEL DA OP PIPA NO MUNICÍPIO DE &nbsp;<strong>{$rps->nome_cidade_atuante|upper}</strong></td>
                                <td colspan="2" nowrap style="font-size: 12px"><strong>, NO MÊS DE {$mes} DE {$om->ano_prestacao}</strong></td>
                            </tr>
                            <tr>
                                <td style="font-size: 11px">A importancia de </td>
                                <td width="182" align="center"><strong>{$valorLiquido}</strong></td>
                                <td colspan="6"><strong>{$valorExtenco}</strong></td>
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
                                <td colspan="2" align="center" valign="middle"><strong>{$valor}</strong></td>
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
                                <td colspan="2" align="center">{$inss}</td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center" style="font-size: 12px">NÚMERO DE INSCRIÇÃO</td>
                                <td style="font-size: 12px">&nbsp;</td>
                                <td colspan="2"><strong>V – SEST/SENAT</strong></td>
                                <td colspan="2" align="center">{$senat}</td>
                            </tr>
                            <tr>
                                <td style="font-size: 12px">  Nº PIS/PASEP</td>
                                <td colspan="2" align="center"><strong>{$rps->nit_pipeiro}</strong></td>
                                <td>&nbsp;</td>
                                <td colspan="2" align="right"><strong>Soma</strong></td>
                                <td colspan="2" align="center"><strong>{$somaImposto}</strong></td>
                            </tr>
                            <tr>
                                <td style="font-size: 12px">Nº CPF</td>
                                <td colspan="2" align="center"><strong>{$rps->cpf_pipeiro}</strong></td>
                                <td width="25">&nbsp;</td>
                                <td colspan="2" align="right">&nbsp;</td>
                                <td colspan="2" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center" style="font-size: 12px">DOCUMENTO DE IDENTIDADE</td>
                                <td>&nbsp;</td>
                                <td colspan="2" align="right" style="font-size: 14px"><strong>VALOR LIQUIDO</strong></td>
                                <td colspan="2" align="center"><strong>{$valorLiquido}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center" style="font-size: 12px">NÚMERO</td>
                                <td width="239" align="center" style="font-size: 12px">ÓRGÃO EMISSOR</td>
                                <td>&nbsp;</td>
                                <td colspan="4" rowspan="2" align="left" valign="top" style="font-size: 10px">ASSINATURA</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><strong>{$rps->identidade_pipeiro}</strong></td>
                                <td align="center"><strong>{$rps->orgao_expeditor}</strong></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center" style="font-size: 12px">LOCALIDADE</td>
                                <td align="center" style="font-size: 12px">DATA</td>
                                <td>&nbsp;</td>
                                <td colspan="4" align="left" style="font-size: 12px">NOME COMPLETO</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><strong>{if !empty($om)}{$om->local_om|upper}{else} <i><a href="cadastrarOM.php" class="text-danger">CADASTRE A OM</a></i> {/if}</strong></td>
                                <td align="center"><strong>{$data}</strong></td>
                                <td>&nbsp;</td>
                                <td colspan="4" align="center" style="font-size: 14px"><strong>{$rps->nome_pipeiro|upper}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="8">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">BANCO:</td>
                                <td colspan="2" align="center" style="font-size: 14px">{$rps->banco}</td>
                                <td width="140" align="center" style="font-size: 14px"><strong>AGÊNCIA:</strong></td>
                                <td width="127" align="center" style="font-size: 14px">{$rps->agencia}</td>
                                <td align="center" style="font-size: 14px"><strong>CONTA:</strong></td>
                                <td align="center" style="font-size: 14px">{$rps->conta}</td>
                            </tr>
                        </table><br />
                        RP____________________________ &nbsp;&nbsp;NE_______________________________&nbsp;&nbsp; NS____________________________
                        <br />
                        <small>{$posto} {$nome}</small>
                    </div>
                {/if}
            {/if}
            <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a></center> 
            {else}
            <div class="alert alert-danger" role="alert"><center>Não há cadastro para este CPF.{if $nivel != "admin"} <a href="informeAlteracoes.php" class="btn btn-info btn-xs">Entre em contato com o Admistrador do sistema. </a>{else} <a href="cadastrarPipeiro.php" class="btn btn-info btn-xs">Cadastre este CPF</a>{/if}</center></div>
            <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
            {/if}


    </div>
</div>
