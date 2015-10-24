<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Contrato</title>
        {literal}
            <style type="text/css">
                body p {
                    font-family: 'Times New Roman';
                    //font-size: 15px;
                    .row{
                        width: 100%;
                        text-align: center;
                    }
                    .col8{
                        width: 80%;
                        text-align: center;
                        float: left;
                    }
                    .col4{
                        width: 20%;
                        text-align: center;
                    }
                }
            </style>
        {/literal}
    </head>

    <body>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
        <!--  		@page { margin: 2cm }  		p { margin-bottom: 0.21cm; direction: ltr; color: #000000; widows: 0; orphans: 0 }  		p.western { font-family: "Liberation Serif", "Times New Roman", serif; font-size: 12pt; so-language: pt-BR }  		p.cjk { font-family: "WenQuanYi Micro Hei", "Times New Roman"; font-size: 12pt; so-language: zh-CN }  		p.ctl { font-family: "Lohit Hindi", "MS Mincho"; font-size: 12pt; so-language: hi-IN }  		a:link { color: #0000ff }  		a.western:link { so-language: zxx }  		a.ctl:link { so-language: zxx }  		a:visited { color: #000000; text-decoration: none }  		a.western:visited { so-language: pt-BR }  		a.cjk:visited { so-language: zh-CN }  		a.ctl:visited { so-language: hi-IN }  	-->
        <p align="center"> <img src="imagens/republica-brasil.jpg" alt="" name="Imagem1" alt="Imagem Republica" width="98" height="98" border="0" align="bottom" id="Imagem1" /></p>
        <p align="center" style="font-size: 12px;"> <strong>MINISTÉRIO  DA DEFESA</strong><br />
            <strong>EXÉRCITO  BRASILEIRO</strong><br />
            <strong>CMNE &ensp;&ensp;&ensp;&ensp; - &ensp;&ensp;&ensp;&ensp; 10ª /RM</strong><br />
            <strong>{$om->nome_om|upper}</strong><br />
            <strong>(Cia  Ped do MT/1754)</strong><br />
            <strong>(BATALHÃO  ALFERES LEONARDO DE CARVALHO CASTELO BRANCO)</strong></p>

        <p align="center"> <strong>PROCESSO  Nº 64024.0000699/2014-26.</strong></p>
        <p align="center"> <strong>CONTRATO  DE CREDENCIAMENTO NR {$numeroContrato}</strong><strong>/{$smarty.now|date_format:"%Y"}.</strong></p>
        <div style="width: 60%; margin-left: 40%;"> <!-- afastamento para a direita -->
            <p align="justify"> <strong>CREDENCIANTE</strong>:  A UNIÃO, POR INTERMÉDIO DO 25º BATALHÃO DE CAÇADORES - ÓRGÃO  DO MINISTÉRIO DA DEFESA - EXÉRCITO BRASILEIRO</p>
            <p align="justify"> <strong>CREDENCIADO: </strong>{$cp->nome_pipeiro|upper}</p>
            <p align="justify"> <strong>OBJETO:</strong> SERVIÇOS DE COLETA, TRANSPORTE E DISTRIBUIÇÃO DE ÁGUA POTÁVEL EM  VEÍCULO APROPRIADO (CARRO-PIPA)</p>
            <p align="justify"> <strong>NATUREZA:</strong> OSTENSIVO</p>
            <p align="justify"> <strong>VIGÊNCIA  DO CONTRATO DE CREDENCIAMENTO</strong> {$dataInicio} a {$dataFim} (da data da assinatura até o último dia  de vigência deste Edital)</p>
            <p align="justify"> <br />
            </p>
        </div>

        <p align="justify" style="padding-left: 120px;"> <strong>PREÂMBULO</strong></p>
        <p align="justify"> 
            &ensp;&ensp;&ensp;&ensp;&ensp; A <strong>União</strong>,  entidade de direito público interno, por intermédio do {$om->nome_om}, Unidade Militar do Comando do Exército,  sediado na Cidade de {$om->local_om}, na Praça Marechal Floriano  Peixoto, S/N, Centro, inscrito no Cadastro Nacional de Pessoa  Jurídica (CNPJ) sob Nr {$om->cnpj_om}, daqui por diante denominada <strong>CREDENCIADORA</strong>,  representado neste ato pelo Sr Ten Cel {$om->comandante_om|upper}, Comandante  e Ordenador de Despesas  do {$om->nome_om}, residente na {$om->endereco_cmt_om},  Bairro {$om->bairro_cmt_om}, Cidade {$om->cidade_cmt_om}, PNR Nr {$om->numero_pnr_cmt_om}, portador da Carteira  de Identidade Nr {$om->identidade_cmt_om}, expedida pelo Exército Brasileiro,  Cadastro de Pessoa Física (CPF) Nr {$cpf->cpf_cmt_om}, em conformidade com o  Art 81 das IG 12-02, aprovadas pela Portaria Ministerial Nr 305, de  24 de maio de 1995, e do outro lado, o Sr {$cp->nome_pipeiro|upper}  brasileiro, Profissional Autônomo, inscrito no INSS sob Nr {$cp->nit_pipeiro}, residente à {$cp->logradouro},  Nº, {$cp->numero_endereco},
            Identidade Nr {$cp->identidade_pipeiro}, Cadastro de Pessoa Física (CPF) Nr  &shy;&shy;&shy;&shy;{$cp->cpf_pipeiro}, <span lang="pt-PT" xml:lang="pt-PT">doravante  denominado </span><span lang="pt-PT" xml:lang="pt-PT"><strong>CREDENCIADO(A)</strong></span><span lang="pt-PT" xml:lang="pt-PT">, a cujos termos as partes se vinculam, tendo em vista  o que consta no Edital de Credenciamento nº 01/2014, firmar o  presente </span><span lang="pt-PT" xml:lang="pt-PT"><strong>CONTRATO</strong></span><span lang="pt-PT" xml:lang="pt-PT">,  respeitando as cláusulas e condições seguintes:</span></p>
        <br />
        <p align="justify"> <strong>CLÁUSULA  PRIMEIRA – DA LEGISLAÇÃO APLICÁVEL </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  presente Contrato será regido, em especial, pela Lei nº 8.666/1993,  e pelas instruções Gerais (IG 12-02), estas, aprovadas pela  Portaria nº 305/1995, baixada pelo então Sr. Ministro de Estado do  Exército. </p>
        <p align="justify"> <strong>CLÁUSULA  SEGUNDA – DA VINCULAÇÃO AO EDITAL E AO TERMO DE INEXIGIBILIDADE  DE LICITAÇÃO</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; Este  Contrato guarda inteira conformidade com o Edital de Credenciamento  nº 001/2014 e com o Termo de Inexigibilidade de Licitação nº  006/2014, dos quais é parte integrante, e se vincula, ainda, à  proposta do(a) <strong>CREDENCIADO(A</strong>)<strong>.</strong></p>
        <p align="justify"> <strong>CLÁUSULA  TERCEIRA – DO OBJETO </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  presente Contrato tem por objeto a prestação, por parte do(a)  CREDENCIADO(A), com utilização de carro pipa/trator pipa, dos  serviços de coleta, transporte e distribuição de água potável,  com relação à(s)  rota(s) estabelecidas em ordem(s) de serviço de  emissão pela CREDENCIANTE&rdquo;;<strong> </strong></p>
        <p align="justify"> <strong>SUBCLÁUSULA  ÚNICA </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 1.  O CREDENCIADO responsabiliza-se inteiramente pela legítima posse do  veículo empregado na execução do ajustado, bem como por eventuais  direitos de terceiros em relação ao mesmo, sendo, ainda, de sua  responsabilidade todos os encargos legais e contratuais relativos ao  veículo empregado, o qual deve ser mantido nas condições  apresentadas por ocasião da inspeção para fins de cadastramento ou  recadastramento.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 2. <strong>Dados  do veículo cadastrado</strong>: </p>
        <p align="justify">
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;- Marca/Modelo/Ano de Fabricação: {$cp->marca_veiculo} / {$cp->modelo_veiculo} / {$cp->ano_fab_veiculo} <br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;- Chassis: {$cp->chassis_veiculo}<br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;- Placa: {$cp->placa_veiculo} <br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;- Cor: {$cp->cor_veiculo}<br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;- Capacidade da Pipa: {$cp->cap_lts_veiculo}. <br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;- Proprietário: {$cp->proprietario_veiculo} <br />
        </p>
        <p> <br />
        </p>
        <p align="justify"> <strong>CLÁUSULA  QUARTA - DO IMPEDIMENTO DE OCORRÊNCIA DE SUBCONTRATAÇÃO</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; Não  é permitido subcontratação total ou parcial do objeto deste  Contrato ou qualquer tipo de cessão ou transferência de  responsabilidade, sendo vedado, ainda, a utilização de terceiros na  execução do serviço. </p>
        <p align="justify"> <strong>CLÁUSULA  QUINTA – DO REGIME DE EXECUÇÃO </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 1.  O serviço será realizado por execução indireta, sob o regime de  pagamento por prestação do serviço a cada demanda, após  comprovadas às entregas efetuadas.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 2.  A execução dos serviços ora credenciados será objeto de  acompanhamento, controle, fiscalização e avaliação por  representante da CREDENCIANTE, para este fim especialmente designado,  com as atribuições específicas determinadas na Lei n° 8.666, de  1993, conforme detalhado no Projeto Básico.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 3.  O representante da CREDENCIANTE deverá ter experiência técnica  necessária para o acompanhamento e controle da execução do  serviço.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 4.  O acompanhamento, o controle, a fiscalização e avaliação de que  trata este item não excluem a responsabilidade da CREDENCIADO(A) e  nem confere à CREDENCIANTE responsabilidade solidária, inclusive  perante terceiros, por quaisquer irregularidades ou danos na execução  dos serviços contratados.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 5.  A CREDENCIANTE se reserva o direito de rejeitar, no todo ou em parte,  os serviços ora contratados, prestados em desacordo com o presente  Edital e seus Anexos e com o contrato.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 6.  As determinações e as solicitações formuladas pelo representante  da CREDENCIANTE encarregado da fiscalização, deverão ser  prontamente atendidas pela CREDENCIADO(A), ou, nesta impossibilidade,  justificadas por escrito, de acordo com as notificações recebidas.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 7.  Os serviços serão requisitados mediante Ordem de Serviço, de  acordo com as necessidades da administração, podendo haver a  suspensão ou cancelamento da execução do credenciamento, de plano,  por notificação ao credenciado, quando ocorrer qualquer motivo que  implique a paralisação momentânea da Operação Pipa, não gerando  a suspensão ou o cancelamento direito a qualquer indenização,  ressalvado ao credenciado o pagamento pelos créditos que tiver em  relação aos serviços regularmente prestados até a data da  suspensão ou cancelamento. </p>
        <p align="justify"> <strong>CLÁUSULA  SEXTA - DO PREÇO E DAS CONDIÇÕES DE PAGAMENTO </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  preço praticado será conforme a tabela abaixo (exemplo):</p>
        <table width="100%" cellpadding="4" border="1" cellspacing="0">
            <col width="86" />
            <col width="110" />
            <col width="58" />
            <col width="39" />
            <col width="102" />
            <col width="70" />
            <tr>
                <!--<td width="127" height="40" bgcolor="#bfbfbf"><center>Mananciais</center></td>-->
                <td width="86" bgcolor="#bfbfbf"><center>Município</center></td>
                <td width="110" bgcolor="#bfbfbf"><center>Localidades atendidas</center></td>
                <td width="58" bgcolor="#bfbfbf"><center>Quantidade de Carradas</center></td>
                <td width="39" bgcolor="#bfbfbf"><center>Nr Rotas</center></td>
                <td width="102" bgcolor="#bfbfbf"><center>Valor Estimado por Rota (trimestral)</center></td>
                <td width="70" bgcolor="#bfbfbf"><center> Estimativa de Recursos(Anual)</center></td>
            </tr>
            <tr>
                <!-- <td width="127"><center>-</center></td> -->
                <td><center>{$cp->nome_cidade_atuante}</center></td>
                <td><center>{$cp->obs_cidade_atuante}</center></td>
                <td><center>{$cp->qnt_carradas_cidade}</center></td>
                <td><center>{$cp->numero_rotas_cidade}</center></td>
                <td><center>{$cp->valor_estimado_cidade}</center></td>
                <td><center>{$cp->valor_anual_cidade}</center></td>
                
            </tr>
        </table>
        <br />
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>SUBCLÁUSULA  PRIMEIRA </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  valor mensal devido pelos serviços executados será obtido por meio  de medição realizada pela CREDENCIANTE, multiplicando-se o número  de viagens executadas, no período considerado, pelo preço obtido na  fórmula da  Unidade de Medida de Transporte (<strong>UMT</strong>)  abaixo estabelecido na subcláusula terceira, em conformidade com  a(s) rota(s) determinada(s) na Ordem de Serviço, considerando a  quantidade de água transportada (em metros cúbicos) e a(s)  distância(s) percorrida(s) (em quilômetros) entre o local de  captação e o ponto final de descarga. </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>SUBCLÁUSULA  SEGUNDA</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 1.  O pagamento pela prestação do serviço será efetuado em moeda  corrente (Reais), mediante Ordem Bancária creditada em conta  corrente do CREDENCIADO, após a medição dos serviços executados,  feita pela Administração, na forma discriminada na cláusula  segunda e seu parágrafo primeiro. Será realizada a retenção dos  impostos federais, estaduais e municipais porventura incidentes sobre  o serviço, na forma da legislação vigente.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 2.  Dados do CREDENCIADO: </p>
        <p align="justify">
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; - Nome: {$cp->nome_pipeiro} <br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; - CPF: {$cp->cpf_pipeiro} <br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; - Banco: {$cp->banco} <br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; - Agência: {$cp->agencia} <br />
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; - Conta: {$cp->conta}<br />
        </p>
        <p></p>

        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>SUBCLÁUSULA  TERCEIRA</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong> </strong>1. <u>Unidade  de Medida de Transporte (UMT)</u></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; a.  Para se ter um critério único de avaliação de preço e medição  dos serviços prestados, a Unidade de Medida de Transporte (<strong>UMT</strong>)  a ser utilizada na Operação regulada pelo Comando de Operações  Terrestres-COTER deverá ser a seguinte:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  Volume Transportado (<strong>V</strong>)  x Distância do Manancial ao Ponto de Distribuição (<strong>D</strong>)  x Quantidade de Viagens Realizadas (<strong>Q</strong>)  x Índice Multiplicado (<strong>I</strong>),  ou seja, <strong>UMT=V  x D x Q x I, </strong>cujo  produto final fica convencionado denominar-se <strong>MOMENTO  DE TRANSPORTE.</strong></p>
        <p>&ensp;&ensp;&ensp;&ensp;&ensp; b.  Para se estipular o Índice Multiplicador <strong>(I)</strong> deve-se aplicar a tabela a seguir:</p>
        <table width="633" cellpadding="1" border="1" cellspacing="0">
            <col width="302" />
            <col width="325" />
            <tr>
                <td width="302" height="16">
                    <center>TIPO DE RODOVIA</center>
                </td>
                <td width="325">
                    <center>ÍNDICE MULTIPLICADOR (*)</center>
                </td>
            </tr>
            <tr>
                <td width="302" height="17">
                    <center>Estrada 100% sem asfalto (chão)</center>
                </td>
                <td width="325">
                    <center>0,49</center>
                </td>
            </tr>
            <tr>
                <td width="302" height="17"><center>
                        Estrada mista (mais chão do que asfalto)</center>
                </td>
                <td width="325">
                    <center>0,47</center>
                </td>
            </tr>
            <tr>
                <td width="302" height="17"><center>
                        Estrada mista (mais asfalto do que chão)</center>
                </td>
                <td width="325">
                    <center>0,45</center>
                </td>
            </tr>
            <tr>
                <td width="302" height="17">
                    <center>Estrada com 100% de asfalto</center>
                </td>
                <td width="325">
                    <center>0,43</center>
                </td>
            </tr>
            <tr>
                <td width="302" height="16">
                    <center>Estrada que exige o uso de trator</center>
                </td>
                <td width="325">
                    <center>0,93</center>
                </td>
            </tr>
        </table>
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<strong>(*)  Valor máximo</strong>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.  A distância a ser considerada será apenas a percorrida entre o  manancial e o ponto de distribuição, com  carro-pipa ou trator  carregado.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 2.  CRITÉRIOS PARA CÁLCULO DO VALOR DOS SERVIÇOS EXECUTADOS:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a.  O transporte executado por cada carro-pipa deverá ser apontado  diariamente em uma planilha.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b.  O serviço será pago mensalmente e será medido pelo Momento de  Transporte.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.  Assim, por exemplo, um carro-pipa de 8.000 litros (8 m³) que  abasteça uma localidade distante 89 km de um manancial, trafegando  40 Km estrada 100% asfalto e 49 Km estrada sem asfalto  e que realize  52 viagens no ano, terá realizado um Momento de Transporte de:</p>
        <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong> M  = 8 m³ x  89 Km x 52 viagens x I</strong></p>
        <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong> M  = 37.024 x I</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; d.  Considerando que o tipo de rodovia existente seja enquadrada no  índice de estrada mista, mais chão que asfalto, o que corresponde  ao Índice Multiplicador de 0,47, o valor devido pelos serviços  prestados seria:</p>
        <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>V</strong> = 37.024 x R$ 0,47</p>
        <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>V</strong> = R$ 17.401,47 </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>SUBCLÁUSULA  QUARTA</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  pagamento será efetuado mediante as seguintes condições:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 1.  O Credenciante deverá apresentar o Recibo de Prestação de Serviço  (RPS) referente ao serviço prestado após cada período de  contratação, após prestação de contas, realizadas na sede da  CREDENCIANTE, prioritariamente.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>2. </strong>O  prazo para pagamento será de <strong>até </strong><strong>30  (trinta) dias</strong>,  contados a partir da data da apresentação do Recibo de Prestação  de Serviço (RPS) pelo Credenciado.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>3.</strong> O pagamento somente será efetuado após o &ldquo;atesto&rdquo;, pelo  servidor competente, do Recibo de Prestação de Serviço (RPS)  apresentado pelo Credenciado.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>4.</strong> O &ldquo;atesto&rdquo; fica condicionado à verificação da conformidade do  Recibo de Prestação de Serviço (RPS) apresentado pelo Credenciante  e do regular cumprimento das obrigações assumidas, conforme item 1,  acima.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>5.</strong> Havendo erro na apresentação do Recibo de Prestação de Serviço  (RPS) ou dos documentos pertinentes à contratação, ou, ainda,  circunstância que impeça a liquidação da despesa, o pagamento  ficará pendente até que o Credenciado providencie as medidas  saneadoras. Nesta hipótese, o prazo para pagamento iniciar-se-á  após a comprovação da regularização da situação, não  acarretando qualquer ônus para a Credenciante.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>6.</strong> Antes do pagamento, a Credenciante realizará consulta <strong>on  line ao SICAF</strong> e, se necessário, aos sítios oficiais, para verificar a manutenção  das condições de habilitação do Credenciado, devendo o resultado  ser impresso, autenticado e juntado ao processo de pagamento, se for  o caso.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>7.</strong> Quando do pagamento, será efetuada a retenção tributária prevista  na legislação aplicável, nos termos da Instrução Normativa n°  1.234, de 11 de janeiro de 2012, da Secretaria da Receita Federal do  Brasil.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>8.</strong> O Credenciado, regularmente optante pelo Simples Nacional, instituído  pelo artigo 12 da Lei Complementar nº 123, de 2006, não sofrerá a  retenção quanto aos impostos e contribuições abrangidos pelo  referido regime, em relação às suas receitas próprias, desde que,  a cada pagamento, apresente a declaração de que trata o artigo 6°  da Instrução Normativa RFB n° 1.234, de 11 de janeiro de 2012, se  for o caso.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>9.</strong> O pagamento será efetuado por meio de Ordem Bancária de Crédito,  mediante depósito em conta-corrente, na agência e estabelecimento  bancário indicado pelo Credenciado, ou por outro meio previsto na  legislação vigente.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>10.</strong> Será considerada data do pagamento o dia em que constar como emitida  a ordem bancária para pagamento.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>11.</strong> A Credenciante não se responsabilizará por qualquer despesa que  venha a ser efetuada pelo Credenciado, que porventura não tenha sido  acordada oficialmente com a CREDENCIANTE.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <strong>12.</strong> Nos casos de eventuais atrasos de pagamento, desde que o Credenciado  não tenha concorrido de alguma forma para tanto, o valor devido  deverá ser acrescido de encargos moratórios proporcionais aos dias  de atraso, apurados desde a data limite prevista para o pagamento até  a data do efetivo pagamento, à taxa de 6% (seis por cento) ao ano,  aplicando-se a seguinte fórmula:</p>
        <table width="175" style="margin-left: 30px;" cellpadding="7" border="1" cellspacing="0">
            <col width="159" />
            <tr>
                <td width="159" valign="top"><p align="justify"><strong>EM = I x N x VP</strong></p></td>
            </tr>
        </table>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; EM  = Encargos Moratórios a serem acrescidos ao valor originariamente  devido</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; I  = Índice de atualização financeira, calculado segundo a fórmula:</p>
        <dd>
            <table width="158" cellpadding="1" style="margin-left: 80px;" border="1" cellspacing="0">
                <col width="32" />
                <col width="120" />
                <tr>
                    <td width="32"><center><strong>I =</strong></center>></td>
                    <td width="120"><center><strong>(6 / 100)</strong></center></td>
                </tr>
                <tr>
                    <td width="32"><p><br />
                        </p></td>
                    <td width="120"><center><strong>365</strong></center></td>
                </tr>
            </table>
        </dd>

        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; N  = Número de dias entre a data limite prevista para o pagamento e a  data do efetivo pagamento</p>
        <p align="justify"> <strong>VP  = Valor da Parcela em atraso </strong></p>

        <p align="justify"> <strong>CLÁUSULA  SÉTIMA - DAS OBRIGAÇÕES </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; Respeitada  a legislação pertinente, compete:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>1.  À CREDENCIANTE: </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a. Providenciar a alocação dos recursos para pagamento dos serviços  prestados; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b. Emitir previamente a nota de empenho para atender os serviços  utilizados, bem como liquidar os débitos em seus respectivos  vencimentos;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c. Supervisionar o serviço contratado, cabendo-lhe, para tanto,  designar equipes para acompanhar e fiscalizar a execução deste  Contrato, em observância ao contido no artigo 67, da Lei Nr  8.666/93;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; d. Emitir Ordem de Serviço autorizando o início dos trabalhos; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; e. Efetuar as medições dos serviços executados pelo CREDENCIADO(A);</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; f. Aplicar ao CREDENCIADO(A) as sanções regulamentares e contratuais;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; g. As fases do processamento das despesas do serviço deverão ser  acompanhadas por parte do órgão executor do 25º Batalhão de  Caçadores, por intermédio de auditorias prévias, concorrentes e a <em>posteriori</em>,  além da verificação da lisura e inspeções administrativas,  conforme estabelece a ORDEM DE SERVIÇO Nr 001 – E4 / CMNE; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; h. Prestar as informações e os esclarecimentos atinentes ao objeto,  que venham a serem solicitados pelos Credenciados;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; i. Efetuar  os  pagamentos  nas  condições  pactuadas;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; j. Fiscalizar  o  cumprimento  das  obrigações  do  Credenciado  vencedor.</p>
        <p align="justify"> <br />
        </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>2.  AO CREDENCIADO(A): </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a.  Adotar as medidas necessárias, na área de suas atribuições, para  a execução dos serviços objeto do presente contrato, mantendo sob  sua inteira responsabilidade e executando pessoalmente os serviços,  sendo-lhe vedado subcontratar, total ou parcialmente, realizar  qualquer tipo de cessão do ajuste, bem como utilizar-se de terceiros  na sua execução;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b.  Assumir todos os encargos de ordem legal e contratual, principalmente  nas esferas trabalhista, securitária, comercial, fiscal, tributária  e previdenciária correspondente, arcando com todas as despesas  diretas ou indiretas relativas à execução do objeto contratual; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.  Prestar informações, fornecer dados e apoiar as ações necessárias  ao pleno desempenho da fiscalização a cargo da CREDENCIANTE; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; d.  Manter o veículo (carro pipa/trator pipa) em condições de realizar  o serviço, inclusive quanto às condições de limpeza adequada da  cisterna, e nas condições exigidas pelo Código Nacional de  Trânsito, sendo-lhe vedado substituir o veículo cadastrado, bem  como o seu tanque, salvo em caráter excepcional, mediante  autorização do CREDENCIANTE, após a devida vistoria; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; e.  Usar no veículo o logotipo do programa, conforme determinado pela  coordenação da Operação Pipa;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; f.  Não fazer, ou permitir que se faça qualquer tipo de propaganda  política, quando da execução dos serviços; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; g.  Cumprir estritamente o cronograma de distribuição de água  determinado pelo CREDENCIANTE, não mudando as datas ou locais de  entrega previstas, nem permitindo benefícios não previstos para  quem quer que seja; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; h.  Responsabilizar-se pela purificação da água, adicionando,  adequadamente, a quantidade de hipoclorito de sódio ou pastilhas de  cloro fornecidos pelo CREDENCIANTE; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; i.  Responsabilizar-se inteiramente pelos danos causados diretamente à  Administração ou a terceiros, decorrentes de sua culpa ou dolo na  execução do Termo, não excluindo ou reduzindo essa  responsabilidade a fiscalização ou o acompanhamento pelo  CREDENCIANTE;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; j.  Abastecer a pipa apenas nos mananciais determinados ou autorizados  pelo CREDENCIANTE (particular ou público), responsabilizando-se por  eventuais pagamentos de abastecimento da carga de água apanhada em  manancial particular (poços artesianos, açudes, barragens, etc.),  quando assim for determinado;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; l.  Não utilizar o veículo em outras atividades e serviços nos  períodos em que estiver previsto para execução dos serviços  objeto deste termo; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; m.  Informar imediatamente à Gerência da Operação Pipa caso esteja  impossibilitado de realizar a distribuição de água, bem como sobre  qualquer anormalidade de caráter urgente, prestando os  esclarecimentos necessários; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; n.  Apanhar a assinatura dos apontadores cadastrados para o recebimento  da água e demais pessoas previstas para assinar a ficha, ou recolher  os cupons (tickets) de controle de distribuição somente após a  efetiva entrega da água, enquanto este for o método utilizado para  controle de distribuição de água e prestação de conta;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; o.  Empregar corretamente os equipamentos do Sistema GPipa Brasil,  conforme orientação da empresa, responsabilizando-se por danos  causados a esses equipamentos por imperícia, imprudência ou  negligência, após ateste de verificação técnica da empresa  fornecedora dos equipamentos;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; p.  Executar os serviços previstos no presente Contrato conforme as  normas estabelecidas no processo, ordens complementares da  Coordenação da Operação Pipa e determinações das equipes de  fiscalização;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; q.  É vedado ao CREDENCIADO(A) utilizar-se, a qualquer título, da  contratação de terceiros para a execução do serviço, objeto  deste Contrato; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; r.  Responsabilizar-se, nos casos em que lhe caiba, pela correta  escrituração e entrega dos documentos exigidos pela Administração  para fins de controle, fiscalização e apuração dos serviços  executados; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; s.  Manter-se, durante toda a execução do Contrato, em compatibilidade  com as obrigações assumidas, e nas condições de habilitação e  qualificação exigidas quando da assinatura do Contrato; </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; t. Cumprir as leis, regulamentos e posturas compatíveis, bem como  quaisquer determinações emanadas das autoridades competentes,  pertinentes à matéria objeto do presente certame, cabendo-lhe única  e exclusiva responsabilidade pelas consequências de quaisquer  transgressões, nas esferas cível e criminal; e</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; u.  Responsabilizar-se pela reparação ou correção do serviço objeto  do contrato quando se verificar vícios, defeitos ou incorreções na  execução do serviço. </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; v.  Manter a regularidade do serviço de acordo com os padrões  quantitativo e qualitativo suficientes para atender a demanda, bem  como eventuais acréscimos solicitados pela Administração,  respeitada as disposições estabelecidas no Contrato de  Credenciamento;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; w.  Arcar com o custo de manutenção do caminhão, do combustível, da  bomba d&rsquo;água e outros gastos resultantes da prestação do serviço  descrito neste edital, sendo vedado o repasse de tal custo a  CREDENCIANTE e ao beneficiado;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; x.  Acatar as orientações da administração, inclusive quanto ao  cumprimento das Normas Internas e de Segurança e Saúde Ocupacional;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; z.  Relatar à administração toda e qualquer irregularidade nos  serviços prestados;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; y.  Manter, durante a execução do contrato, todas as condições  exigidas para habilitação e qualificação no presente edital.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  Nesse caso, é vedada a retenção de pagamento se o contratado não  incorrer em qualquer inexecução do serviço;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  A Administração poderá conceder um prazo para que o CREDENCIADO(A)  regularize suas condições de habilitação, sob pena de rescisão,  quando não identificar má-fé ou a incapacidade do mesmo de  corrigir a situação. </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; k.  Permitir a instalação em seu veículo de Módulo Embarcado de  Monitoramento (MEM), para acompanhamento da logística por meio de  sistema de rastreamento com posicionamento histórico do veículo,  bem como registro de entregas realizadas à população beneficiada,  que ocorrerá da seguinte forma:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  A priori, os módulos serão instalados nos Postos de Atendimento  Avançado (PAA), que serão distribuídos no semiárido nordestino de  forma que o veículo se desloque, no máximo, 100  km  para a execução do serviço, à custa do CREDENCIADO(A);</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  Os dados do veículo e motorista serão lançados no sistema WEB pela  Coordenação da Operação Pipa, e o PAA deverá estar em condições  de instalar, em até 02 (dois) dias, o sistema de monitoramento;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  O motorista receberá um cartão de monitoramento que servirá para  comprovação das entregas e emissão de relatórios;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  É vedado ao CREDENCIADO(A) qualquer violação no equipamento  instalado (manutenção, desligamento, desinstalação, dentre  outros);</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; -  Por motivo do término dos serviços na Operação Pipa, o  CREDENCIADO(A) deverá, as suas custas, em até 05 (cinco) dias, após  contato com a Coordenação da Operação Pipa, dirigir-se a um PAA,  para a realização da correta desinstalação do equipamento de  monitoramento, mediante agendamento.</p>
        <p align="justify"> <strong>CLÁUSULA  OITAVA - DOS RECURSOS FINANCEIROS </strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; A  despesa com a execução deste Contrato correrá por conta dos  recursos oriundos do Ministério da Integração Nacional (Unidade  Orçamentária – UO - 53101, de acordo com a Portaria  Interministerial Nr 01/MI/MD, de 25 de julho de 2012, os quais são  descentralizados para esta OM (Unidade Gestora – UG), pelo Comando  de Operações Terrestre – COTER.</p>
        <p align="justify"> <strong>CLÁUSULA  NONA - DA VIGÊNCIA </strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  prazo de vigência do presente Contrato será de 12 (doze) meses,  contando da data de assinatura deste instrumento. </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>SUBCLAUSULA  PRIMEIRA</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; A  havida indicação de prazo de vigência deste Contrato não expressa  obrigação de a Credenciadora requisitar a prestação dos serviços  do Credenciado, por todo o período, considerando -se a dependência  de fatores como: o da definida sistemática de convocação através  sorteios; a real necessidade que se apresente com relação  prosseguimento das ações relacionadas à execução do Programa  Emergencial &ldquo;Operação Pipa&rdquo;; e o da disponibilidade de recursos  orçamentários.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; <strong>SUBCLAUSULA  SEGUNDA</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  valor global estimado para fazer face às despesas relativas ao  objeto deste contrato é de R$ 21.282,45 (vinte e um mil e duzentos e  oitenta e cinco reais e quarenta e cinco centavos)</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  indicado valor deverá ser tratado apenas como dado estatístico,  fruto da evolução de despesa no período citado, bem como forma de  determinar a base de cálculo para aplicação de penalidades  previstas. O mencionado valor não poderá servir de base rígida  para a apresentação da Nota Fiscal/Fatura mensal, já que o total  de gastos do mês dependerá dos atendimentos e serviços prestados  no respectivo período.</p>
        <p align="justify"> <strong>CLÁUSULA  DÉCIMA – DO REAJUSTE </strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; Os  valores definidos para pagamento da prestação dos serviços serão  fixos e irreajustáveis, considerando-se que a vigência do Contrato  a ser celebrado  ficará limitada a um ano,  presente o que a  respeito se acha previsto a Lei nº 10.192/2001<strong> </strong></p>
        <p align="justify"> <strong>CLÁUSULA  DÉCIMA PRIMEIRA - </strong><strong>DAS  INFRAÇÕES E SANÇÕES ADMINISTRATIVAS </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 1.  Em caso de atraso injustificado na execução ou inexecução total  ou parcial do ajustado, a administração poderá aplicar as  seguintes sanções, em conformidade com o que prescreve o art. 87,  da Lei Nr 8.666/93, facultada a defesa prévia do interessado no  prazo de 05 (cinco) dias úteis, contados a partir da data em que for  notificado, exceto para a declaração de inidoneidade para licitar  ou contratar com a administração pública, que será de 10 (dez)  dias da abertura de vistas, conforme previsto no § 3º, do art. 87  da Lei 8.666/93:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a.  Advertência;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b.  Multa (que poderá ser recolhida em qualquer agência integrante da  Rede Arrecadadora de Receitas Federais, por meio de Guia de  Recolhimento da União - GRU, a ser preenchido de acordo com  instruções fornecidas pela CREDENCIANTE:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.<strong> Será</strong> <strong>aplicada</strong> <strong>ao</strong> <strong>credenciado  multa</strong> <strong>moratória</strong> de 0,5 % (meio por cento) por dia de atraso injustificado na execução  do serviços de coleta, transporte e distribuição de água potável,  incidente sobre o valor ajustado. Contar-se-á o termo inicial de  incidência da multa, a partir da data estipulada na Ordem de  Serviço, ou após o prazo concedido em notificação, quando for o  caso;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; d. <strong>No  caso de qualquer outra situação de inexecução parcial</strong> das obrigações assumidas, será aplicada ao credenciado multa de  10% (dez por cento), incidente sobre o valor ajustado ou da parcela  inadimplida;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; e. <strong>Em  caso de rescisão causada por inexecução total por ação ou  omissão injustificada do credenciado</strong>,  será aplicada multa de 20% (vinte por cento) sobre o valor total  ajustado;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; f. <strong>O  valor da multa deverá ser recolhido no prazo de 15 dias a contar da  notificação.</strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; g.  Suspensão temporária de participação em licitação e impedimento  de contratar com o 25° BATALHÃO DE CAÇADORES, por prazo não  superior a 2 (dois) anos.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; h.  Declaração de inidoneidade para licitar ou contratar com a  Administração Pública, enquanto perdurarem os motivos da punição,  ou até que seja promovida a reabilitação perante a própria  autoridade que aplicou a penalidade, que será concedida sempre que o  CREDENCIADO ressarcir a administração pelos prejuízos resultantes  e após decorrido o prazo de sanção aplicada, com base no Inciso  IV, do art. 87, da Lei Nr 8.666/93 e suas alterações.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; i.  Exclusão do Credenciado.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 2.  A multa prevista no subitem b, do item 1,  desta cláusula, poderá  ser aplicada cumulativamente com a sanção prevista no subitem a, do  item 1.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 3.  As penalidades serão obrigatoriamente registradas no Sistema de  Cadastramento de Fornecedores - SICAF e, no caso de suspensão do  direito de licitar, o credenciado deverá ser descredenciada por  igual período.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 4.  A aplicação das sanções previstas neste item será precedida do  devido processo administrativo, cuja decisão caberá ao ordenador de  despesas do 25° Batalhão de Caçadores. Da decisão do ordenador de  despesas caberá, no prazo de 05 (cinco) dias úteis da notificação  da decisão, em última instância, recurso ao <strong>CREDENCIADO</strong>.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 5.  À critério da Administração, a execução do serviço poderá ser  imediatamente suspensa quando da apuração de qualquer  irregularidade, sendo dado ao credenciado notificado da suspensão a  oportunidade do contraditório e da ampla defesa.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 6.  As sanções de suspensão temporária de participação em licitação  e impedimento de contratar e de declaração de inidoneidade para  licitar ou contratar com a Administração Pública poderão ser  aplicadas, também, às empresas e aos profissionais que, em razão  do contrato regido pela Lei n° 8.666/1993:</p>
        <p align="justify"> </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a.  Tenham sofrido condenação definitiva por praticarem, por meios  dolosos, fraude fiscal no recolhimento de quaisquer tributos;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b.  Tenham praticado atos ilícitos visando a frustrar os objetivos do  credenciamento;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.  Demonstrem não possuir idoneidade para contratar com a Administração  em virtude de atos ilícitos praticados.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 7. As penalidades serão aplicadas após regular processo  administrativo, em que seja assegurado ao licitante o contraditório  e a ampla defesa, com os meios e recursos que lhes são inerentes.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 8. A sanção de declaração de inidoneidade para licitar ou contratar  com a Administração Pública é de competência exclusiva do  Ministro de Estado da Defesa, facultada a defesa do interessado no  respectivo processo, no prazo de 10 (dez) dias da abertura de vista,  podendo a reabilitação ser requerida após 2 (dois) anos de sua  aplicação.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 9. As demais sanções são de competência exclusiva do Comandante do  25º Batalhão de Caçadores.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 10. As sanções de suspensão temporária de participação em licitação  e impedimento de contratar e de declaração de inidoneidade para  licitar ou contratar com a Administração Pública poderão também  ser aplicadas às empresas ou aos profissionais que, em razão dos  contratos regidos por esta Lei:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a.  tenham sofrido condenação definitiva por praticarem, por meios  dolosos, fraude fiscal no recolhimento de quaisquer tributos;</p>        <p align="justify"> </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b.  tenham praticado atos ilícitos visando a frustrar os objetivos do  credenciamento;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.<strong> demonstrem não possuir idoneidade para contratar com a Administração  Pública em virtude de atos ilícitos praticados.</strong></p>
        <p align="justify"> <strong>CLÁUSULA  DÉCIMA SEGUNDA - </strong><strong>DA  RESCISÃO </strong><strong> </strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 1.  São motivos para a rescisão do Contrato, nos termos do art. 78 da  Lei n° 8.666/1993:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a.  O não cumprimento de cláusulas contratuais, especificações  projetos ou prazo;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b.  O cumprimento irregular de cláusulas contratuais, especificações  projetos ou prazo;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.  A lentidão do seu cumprimento, levando a Administração a comprovar  a impossibilidade da conclusão do serviço, nos prazos estipulados;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; d.  Atraso injustificado no início dos serviços;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; e.  A paralisação do serviço, sem justa causa e prévia comunicação  à Administração;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; f.  A subcontratação total ou parcial do seu objeto, a associação da  CONTRATADA com outrem, a cessão ou transferência, total ou parcial,  bem como a fusão, cisão ou incorporação, não admitidas no  Contrato;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; g.  O desatendimento às determinações regulares da autoridade  designada para acompanhar e fiscalizar sua execução, assim como das  de seus superiores;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; h.  Cometimento reiterado de faltas na sua execução, anotadas na forma  do § 1º do art. 67, da Lei n˚ 8.666/1993;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; i.  A decretação de falência, ou a instauração de insolvência  civil;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; j.  A dissolução da sociedade, ou falecimento da CONTRATADA;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; l.  A alteração social ou a modificação da finalidade ou da estrutura  da CONTRATADA, que prejudique a execução do Contrato;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; m.  Razões de interesse público, de alta relevância e amplo  conhecimento, justificadas e determinadas pela máxima autoridade da  esfera administrativa a que está subordinada a CONTRATANTE e  exaradas no processo administrativo a que se refere o Contrato;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; n.  A suspensão, por parte da Administração, de serviços acarretando  modificação do valor inicial do Contrato além do limite permitido  no §  1º do art 65 da Lei n° 8.666, de 1993;</p>        <p align="justify"> </p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; o.  A suspensão de sua execução, por ordem escrita da Administração,  por prazo superior a 120 (cento e vinte) dias, salvo em caso de  calamidade pública, grave perturbação da ordem interna ou guerra,  ou ainda por repetidas suspensões que totalizem o mesmo prazo,  independentemente do pagamento obrigatório de indenizações pelas  sucessivas e contratualmente imprevistas desmobilizações,  mobilizações e outras previstas, assegurada à CONTRATADA, nesses  casos, o direito de optar pela suspensão do cumprimento das  obrigações assumidas até que seja normalizada a situação;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; p.  O atraso superior a 90 (noventa) dias dos pagamentos devidos pela  Administração decorrentes de serviços, fornecimento, ou parcelas  destes, já recebidos ou executados, salvo em caso de calamidade  pública, grave perturbação da ordem interna ou guerra, assegurada  à CONTRATADA o direito de optar pela suspensão do cumprimento de  suas obrigações até que seja normalizada a situação.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; q.  A não liberação, por parte da Administração, do objeto para  execução do serviço, nos prazos contratuais;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; r.  A ocorrência de caso fortuito ou de força maior, regularmente  comprovada, impeditiva da execução do Contrato;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; s.  O descumprimento do disposto no inciso V do art 27 da Lei n° 8.666,  de 1993, sem prejuízo das sanções penais cabíveis.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 2.  Os casos de rescisão contratual serão formalmente motivados nos  autos, assegurado o contraditório e a ampla defesa.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 3.   A rescisão do Contrato poderá ser:</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a.  Determinada por ato unilateral e escrito da Administração nos casos  enumerados nos subitens &ldquo;a&rdquo; a &ldquo;g&rdquo; e subitem &ldquo;y&rdquo;, tudo do  item 2, da CLAUSULA SÉTIMA;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b.  Amigável, por acordo entre as partes, reduzida a termo no processo,  desde que haja conveniência para a Administração;</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c.  Judicial, nos termos da legislação.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 4.  A rescisão administrativa ou amigável deverá ser precedida de  autorização escrita e fundamentada de autoridade competente.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 5.  Quando a rescisão ocorrer nos subitens &ldquo;m&rdquo; a &ldquo;y&rdquo;, tudo do  item 2, da CLAUSULA SÉTIMA sem que haja culpa do Contratado, este  será ressarcido dos prejuízos regularmente comprovados que houver  sofrido, tendo ainda direito a pagamentos devidos pela execução do  Contrato até a data de rescisão.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 6.  A rescisão por descumprimento da cláusula contratual acarretará a  execução, para ressarcimento da Contratante, dos valores das multas  e indenizações a ela devidos, bem como a retenção dos créditos  decorrentes do Contrato, até o limite dos prejuízos causados  àquela, além das sanções previstas neste instrumento.</p>
        <p align="justify"> <strong>CLÁUSULA  DÉCIMA TERCEIRA - DAS ALTERAÇÕES CONTRATUAIS</strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; Este  Contrato poderá ser alterado com as devidas justificativas, nos  casos permitidos na Lei 8.666/1993, por meio de TERMO ADITIVO. </p>
        <p align="justify"> <strong>CLÁUSULA  DÉCIMA QUARTA - PUBLICAÇÃO</strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; Caberá  à <strong>CREDENCIANTE</strong> providenciar, por sua conta, no prazo legal, a publicação resumida  deste <strong>CONTRATO</strong><strong> DE CREDENCIAMENTO</strong> e de seu aditamento, na imprensa oficial.</p>
        <p align="justify"> <strong>CLÁUSULA  DÉCIMA QUINTA - DAS PRESCRIÇÕES DIVERSAS</strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 1.  Os casos omissos ou situações não explicitadas nas cláusulas  deste Instrumento serão decididos pela CREDENCIANTE, segundo as  disposições contidas na Lei Nr 8.666/93 e suas alterações  posteriores, princípios que regem a administração Pública e  demais regulamentos e normas administrativas federais aplicáveis.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; 2.  O Credenciado se obriga a manter durante o período de execução  deste CONTRATO as condições exigidas para o credenciamento.</p>
        <p align="justify"> <strong>CLÁUSULA  DÉCIMA SEXTA  DO FORO </strong><strong> </strong></p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; O  foro para dirimir questões na execução deste CONTRATO será o da  Seção Judiciária do Piauí, em Teresina – Justiça Federal, com  exclusão de qualquer outro.</p>
        <p align="justify">&ensp;&ensp;&ensp;&ensp;&ensp; E,  por estarem justas e acordadas, as partes firmam o presente  instrumento em 03 (três) vias de igual teor e forma, o qual, depois  de lido, vai assinado pelas partes celebrantes e duas testemunhas,  para que produza seus efeitos jurídicos e legais, comprometendo-se  as partes celebrantes a cumprir e fazer cumprir o presente termo em  todas as suas cláusulas e condições.</p>
        <p align="center"> <br />
            <br />
        </p>
        <p align="center"> {$om->local_om},  {$data}.</p>
        

        <div class="container-fluid">
            <p align="center"> <strong>PELA  CREDENCIANTE</strong></p>
            <div class="row">
                <div class="col8">
                    <center>
                        _________________________________________________<br />
                        <strong>{$om->comandante_om|upper}  - {$om->post_grad_cmt_om}</strong><br />
                        Ordenador  de Despesas do 25° BC
                    </center>
                </div>
                <div class="col4">
                    <center>
                        ____________ <br />
                        Rubrica
                    </center>
                </div>
            </div>
            <br />
            <p align="center"> <strong>PELO  CREDENCIADO</strong></p>
            <div class="row">
                <div class="col8">
                    <center>
                        _________________________________________________<br />
                        <strong>{$cp->nome_pipeiro}  - {$cp->identidade_pipeiro}</strong><br />
                        {$empresa}
                    </center>
                </div>
                <div class="col4">
                    <center>
                        ____________ <br />
                        Rubrica
                    </center>
                </div>
            </div>
            <br />
            <p align="center"> <strong>TESTEMUNHAS</strong></p>
            <div class="row">
                <div class="col8">
                    <center>
                        _________________________________________________<br />
                        <strong>{$testemunha1|upper} - {$rgTestemunha1}</strong>
                    </center>
                </div>
                <div class="col4">
                    <center>
                        ____________ <br />
                        Rubrica
                    </center>
                </div>
            </div>
            <br />
            <br />
            <div class="row">
                <div class="col8">
                    <center>
                        _________________________________________________<br />
                        <strong>{$testemunha2|upper} - {$rgTestemunha2}</strong>
                    </center>
                </div>
                <div class="col4">
                    <center>
                        ____________<br />
                        Rubrica
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
