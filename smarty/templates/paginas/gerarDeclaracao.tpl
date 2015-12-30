
{if !empty($declaracao)}
    <h2 style="text-align: center;">DECLARAÇÃO DE RECEBIMENTO DE PLANILHA AUXILIAR</h2>
    <br /><br /><br /><br /><br />

    <div style="text-align: justify;">

        Eu, {$nomeMilitar|upper}, CPF: {$cpfMilitar}, militar do {if !empty($om)}{$om->nome_om}{else}<span style="color: red;"> <strong>OM NÃO CADASTRADA</strong></span> {/if}, recebi do Sr (ª). 
        {$declaracao->nome_pipeiro|upper}, CPF: <strong>{$declaracao->cpf_pipeiro}</strong>, contratado, na presente data, a quantidade de:  
        <strong>{$ticket}</strong> {if $ticket == "01 (uma)" || $ticket == "01" || $ticket == "1 (uma)"} planilha auxiliar com{else} planilhas auxiliares com{/if} <strong>{$assinatura}</strong> {if $assinatura == "01 (uma)" || $assinatura == "01" || $assinatura == "1 (uma)"} assinatura do responsável {else} assinaturas dos responsáveis {/if}, referente à produção de distribuição de água do mês de <strong>{$mes|lower}</strong> de {$om->ano_prestacao}, no município de 
        <strong>{$cidadeAtuacaoRps}-{$declaracao->uf_cidade}</strong>.{if !empty($obs)} Declaro ainda que foi(am) verificado(s) a(s) seguinte(s) situação(ões) particular(es): <br />{$obs} {else}Declaro ainda que não foi verificada nenhuma situação em particular. {/if}
        <br />
        <br />

    </div><br /><br />

    <div >
        Por fim dou fé do acima citado e assino abaixo:
    </div>
    <br />
    <br />
    <div style="text-align: center;">

        {*Teresina-PI, ______ de _________________ de 2015*} {$data}

    </div><br /><br /><br /><br />

    <div style="text-align: center;">
        ______________________________________________________<br />
        {$nome|upper} - {$posto|upper}
    </div>
    <br /><br /><br /><br /><br />
    <div style="text-align: center;">
        ______________________________________________________<br />
        {$declaracao->nome_pipeiro|upper}
    </div>
{else}
    CPF informado não cadastrado!
{/if}