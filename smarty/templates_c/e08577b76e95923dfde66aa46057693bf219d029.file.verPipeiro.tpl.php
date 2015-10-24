<?php /* Smarty version Smarty-3.1.13, created on 2015-10-16 17:35:00
         compiled from "/home/www/html/sisGerPipa/smarty/templates/paginas/verPipeiro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75677589655e49934c2a560-12797044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e08577b76e95923dfde66aa46057693bf219d029' => 
    array (
      0 => '/home/www/html/sisGerPipa/smarty/templates/paginas/verPipeiro.tpl',
      1 => 1445027697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75677589655e49934c2a560-12797044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55e49934d403e2_37609781',
  'variables' => 
  array (
    'pipeiro' => 0,
    'nivel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e49934d403e2_37609781')) {function content_55e49934d403e2_37609781($_smarty_tpl) {?><div class="panel panel-default">

    <div class="panel-heading">

        <h4 ><strong>Pipeiro</strong> <u><i> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_pipeiro;?>
 </i></u></h4>
        <div class="btn-group btn-group-xs" role="group" aria-label="...">        
            <?php if ($_smarty_tpl->tpl_vars['nivel']->value!="user"){?> 
                <a href="editarPipeiro.php?id=<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_pipeiro;?>
" class="btn btn-warning btn-xs"> <span class="glyphicon glyphicon-edit"></span> Editar Pipeiro</a> 
                <a href="fichaCadastro.php?id=<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_pipeiro;?>
" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-open"></span> Gerar Ficha Cadastro</a>
            <?php }else{ ?> 
                <a href="informeAlteracoes.php?id=<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_pipeiro;?>
" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-info-sign"></span> Informar Alteração</a> 
            <?php }?> 
        </div>
        <?php if ($_smarty_tpl->tpl_vars['pipeiro']->value->usuario_edicao_pipeiro!=''){?> <span class="label label-default"> <i>Utima edição: <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->usuario_edicao_pipeiro;?>
, em: <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->data_edicao_pipeiro;?>
</i> </span><?php }?>
    </div>
    <div class="panel-body">

        <div class="table-responsive">
            <table class="table table-striped">

                <?php if (isset($_smarty_tpl->tpl_vars['pipeiro']->value)){?>
                    <tr>
                        <td colspan="2"><strong>Cidade de Atuação do programa</strong></td>
                    </tr>
                    <tr class="warning">
                        <td class="text-muted"><strong>Cidade Estado</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_cidade_atuante;?>
-<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->uf_cidade;?>
 </td>
                    </tr>


                    <tr>
                        <td colspan="2"><strong>Dados Pessoais</strong></td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted" width="250"><strong>Nome</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nome_pipeiro;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>CPF</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->cpf_pipeiro;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Identidade</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->identidade_pipeiro;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Nit/Pis</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->nit_pipeiro;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Carteira de Motorista(Cnh)</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->cnh_pipeiro;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Validade CNH</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->validade_cnh_pipeiro;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Nr RPS</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->id_pipeiro;?>
 </td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Contato</strong></td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Endereço</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->logradouro;?>
 </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Numero</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->numero_endereco;?>
 </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Complemento</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->complemento_contato;?>
 </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>CEP</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->cep;?>
 </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Cidade UF</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->cidade;?>
-<?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->uf;?>
 </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Bairro</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->bairro;?>
 </td>
                    </tr>
                    <tr class="success">
                        <td class="text-muted"><strong>Telefone</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->telefone;?>
 </td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Dados Bancários</strong></td>
                    </tr>
                    <tr class="info">
                        <td class="text-muted"><strong>Banco</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->banco;?>
 </td>
                    </tr>
                    <tr class="info">
                        <td class="text-muted"><strong>Agência</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->agencia;?>
 </td>
                    </tr>
                    <tr class="info">
                        <td class="text-muted"><strong>Conta</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->conta;?>
 </td>
                    </tr>

                    <tr>
                        <td colspan="2"><strong>Carro que trabalha</strong></td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Cor Veiculo</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->cor_veiculo;?>
 </td>
                    </tr>            
                    <tr class="active">
                        <td class="text-muted"><strong>Placa Veiculo</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->placa_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Renavan</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->renavan_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Chassis</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->chassis_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Tipo</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->tipo_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Categoria</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->categoria_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Marca</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->marca_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Modelo</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->modelo_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Ano de Modelo</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->ano_modelo_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Ano de Fabricação</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->ano_fab_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Ano Licenciamento</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->ano_licenciamento_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Capacidade da Pipa</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->cap_lts_veiculo;?>
 </td>
                    </tr>
                    <tr class="active">
                        <td class="text-muted"><strong>Proprietario do Veiculo</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->proprietario_veiculo;?>
 </td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Data Cadastro</strong></td>
                    </tr>
                    <tr>
                        <td class="danger text-muted"><strong>Data Hora do Cadastro</strong></td>
                        <td class="danger"><?php echo $_smarty_tpl->tpl_vars['pipeiro']->value->data_cadastro;?>
</td>
                    </tr>

                <?php }else{ ?>
                    <tr class="danger text-center">
                        <td><p>Este Pipeiro não foi devidamente cadastrado</p></td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
    <div class="panel-footer"><center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> </div>
</div>
<?php }} ?>