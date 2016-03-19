
<script>
    setInterval("atualiza()", 1000);
</script>

<h2 class="text-center"><strong>Sistema de Gerencia de Pipeiros</strong></h2>
<div class="row">
    <div class="col-md-pull-9">
        <div class="alert alert-success" role="alert">
            {if !empty($om->logo_om)}
                {*<img src="{$om->logo_om}" alt="logo OM" width="50" align="right">*}
            {/if}
            <div style="float: left;">
                <div class="text-success text-uppercase" style="font-size: 28px; font-weight: bold;">
                    <i>{if !empty($om)}{$om->nome_om}{else}<i><small class="text-danger"> OM não cadastrada</small></i> {/if}</i>
                </div>
                <div class="text-success">
                    <i>{if !empty($om)}{$om->local_om}, {$dataHjEx}{/if}</i>
                </div>
            </div>
                
            <small>
                <div class="text-info" style=" float: right;">
                    <strong>DADOS DO DESPACHO</strong> {if $nivel == "admin"}<a href="cadastrarOM.php" class="btn btn-primary btn-xs" >Alterar parâmetros</a>{/if}<br>
                    <i>{if !empty($om)}<strong>OD:</strong> {$om->comandante_om|upper} - {$om->post_grad_cmt_om}{/if}</i><br>
                    <i>{if !empty($om)}<strong>Chefe Op Pipa:</strong> {$om->chefe_pipa}{/if}</i><br>
                    <i>{if !empty($om)}<strong>Fiscal de contrato:</strong> {$om->fisc_contrato}{/if}</i><br>
                </div>
            </small>
            {*<h4><small>{if $nivel =="admin" || $nivel == "gerente"}P.S. Foi adicionada funções de exclusão automatica de informação. A mensagem será excluida automaticamente ao corrigir a alteração informada. {else}P.S. Agora ao gerar declaração, os dados, devidamente cadastrados do usuário, será automaticamente preenchido pelo sistema. Caso não vigore, saia e entre no  sistema novamente.{/if} Att. Sgt Álvaro</small></h4>*}
            <div class="clear"></div>
        </div>
    </div>
</div>

{if isset($anoCorrente)}
    <div class="row">
        <div class="col-md-pull-9">
            <div class="alert alert-danger" role="alert">
                <center>
                    <p style="font-size: 26px; font-weight: bold;">Atenção!</p>
                    <strong>Ano de prestação de conta diferente do ano correte.</strong><br>
                    Ano cadastrado que irá aparecer na RPS e Declaração: <strong>{$anoCad}</strong> {if $nivel == "admin"}<a href="cadastrarOM.php" class="btn btn-primary btn-xs" >Alterar ano</a>{/if}<br>
                    <i>Para alterar o ano da prestação de conta fale com o administrador do sistema.</i><br>
                    <small><i>Situação normal somente em prestação de conta em janeiro referente ao mês de dezembro do ano passado</i></small>
                </center>
            </div>
        </div>
    </div>
{/if}

{if isset($mensagemADM)}
    {foreach $mensagemADM as $m}
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p><strong>AVISO</strong></p>
            {$m->texto}<br />
            <p class="text-right" style='font-size: 14px' ><span class="label label-default"> Enviada por: {$m->nome_autor} - {$m->data_hora}</i></span></p>
            {if $nivel == "admin"}
                <a href="includes/controllers/desativaMensagem.php?id={$m->id_mensagem}" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove-circle"></span> Excluir Informação</a>
            {/if}
        </div>
    {/foreach}
{/if}


{if $nivel == "admin" || $nivel == "gerente"}


    {if $contInforme != 0}

        <span class="label label-danger">Informação de alteração de dados</span><br /><br />
        <ul class="nav nav-pills">
            <li class="active">
                <a href="verAlteracoes.php">
                    <span class="badge pull-left">{$contInforme}</span>&ApplyFunction;
                    {if $contInforme <= 1}Mensagem{else}Mensagens{/if}
                </a>
            </li>
        </ul><br />
    {/if}

{/if}

<div class="row">
    <div class="col-md-pull-9">
        <div class="alert alert-success" role="alert">
            <center>
                <p>
                    RPS geradas em <strong>{$smarty.now|date_format:"%d/%m/%Y"} <span class="label label-default">{$totalRpsHj}</span></strong>
                <form action="imprimirGfip.php" method="post" name="formCadastrarCarro">
                    <input type="hidden" id="relDiario" name="relDiario" value="1">
                    <input type="hidden" class="form-control" id="dataInicio" name="dataInicio" value="{$smarty.now|date_format:"%d/%m/%Y"}">
                    <input type="hidden" class="form-control" id="dataFim" name="dataFim" value="{$smarty.now|date_format:"%d/%m/%Y"}">
                    <button type="submit" id="pesquisaVeiculo" onclick="this.form.target = '_blank';
                            return true;" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Relatorio diário</button>
                </form>
                </p>
            </center>
        </div>
    </div>
    {if isset($nome)}

        {section name=a loop=$nome}
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <span style='font-size: 13px;'> Geradas por <a href="pesquisarRPS.php?buscaRPSMilitar={$nome[a]}" title="Clique aqui para visualizar todas."><strong>{$nome[a]} </strong></a></span> <span class="label label-default">{$total[a]}</span>
                </div>
            </div>
        {/section}

    {else}
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-warning" role="alert">
                <center>Nenhuma RPS gerada no dia de hoje</center>
            </div>
        </div>
    {/if}
</div>


{* rps geradas por cada usuário no mês *}

<div class="row">
    <div class="col-md-pull-9">
        <div class="alert alert-success" role="alert">
            <center><p>RPS geradas no mês de <strong>{$mesExtenco|upper}</strong> referente a prestação de serviço de <strong>{$mesAnt|capitalize}</strong> <span class="label label-default">{$totalRpsMes}</span> </p></center>
        </div>
    </div>

    {* loop para mostrar as rps geradas por cada usuário *}
    {if !empty($rpsMes)}
        {foreach $rpsMes as $rps}
            <div class="col-md-6">
                <div class="alert alert-warning" role="alert">
                    Geradas por <a href="pesquisarRPS.php?buscaRPSMes={$rps->nome_militar}" title="Clique aqui para visualizar todas"><strong>{$rps->nome_militar}</strong></a> 
                    <span class="label label-default"> {$rps->total}</span>
                </div>
            </div>
        {/foreach}
    {else}
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-warning" role="alert">
                <center>Nenhuma RPS gerada no mês de {$mesExtenco}</center>
            </div>
        </div>
    {/if}
    {* fim do loop *}
</div>
<hr>
{* fim mostrar rps geradas por cada usuário *}


{if $nivel == "admin"}
    {if isset($mostraDespacho)}

        {* Opção de desativar despacho *}
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>Ativar ou desativar Despacho na RPS</p>
            <form action="includes/controllers/statusDespacho.php" method="post" id="formStatusDespacho" name="formStatusDespacho">
                <input type="hidden" id="idStatusDespacho" name="idStatusDespacho" value="{$om->id_om}" />
                <div class="radio">
                    <label>
                        <input type="radio" name="statusDespacho" id="statusDespacho" value="0" {if $mostraDespacho == "S"} checked{/if}>
                        Ativar Despacho na RPS
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="statusDespacho" id="statusDespacho" value="1" {if $mostraDespacho == "N"} checked{/if}>
                        Desativar Despacho na RPS
                    </label>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <button type="submit" class="btn btn-default">Mudar</button>
                    </div>
                </div>
            </form>
        </div>
    {/if}
    {* Fim da ativação do despacho *}
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Envie mensagens para os usuários</p>
        {$erroMensagem}
        <form action="includes/controllers/mensagemControl.php" method="post" id="formMensagem" name="formMensagem" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="selectMes">Mensagem </label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="textoMensagem" rows="4" name="textoMensagem" required="" placeholder="Escreva aqui uma mensagem para ser mostrada para todos os usuários do sistema."></textarea>
                    <button type="submit" class="btn btn-primary">Enviar</button>    
                </div>
            </div>
        </form>
    </div>
    <p></p>
{/if}
{if $nivel != "vis"}
    <a href="pesquisarRPS.php?buscaMilitar={$buscaMilitar}" class="btn btn-primary"><span class="badge">{$contRPS}</span> RPS geradas</a><br /><br />
{/if}

