<div class="panel panel-default">

    <div class="panel-heading">

        <h2 class="panel-title">Cadastrar OM</h2>
    </div>
    <div class="panel-body">

        {$erroOM} {if !empty($om)} <a href="includes/controllers/excluirOM.php?idExcluirOM={$om->id_om}" class="btn btn-danger">Excluir OM cadastrada</a> {/if}
        <form enctype="multipart/form-data" action="includes/controllers/cadastrarOMControl.php" method="post" id="formCadastrarOM" name="formCadastrarOM" class="form-horizontal" role="form">

            {if !empty($om)}
                <input type="hidden" id="idOM" name="idOM" value="{$om->id_om}" >

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Imagem do Carimbo da RPS</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="fileCarimboRPS" value="" name="fileCarimboRPS" title="Faça o upload da imagem digitalizada do carimbo que saiŕa junto com a RPS"><br />
                        {if !empty($om)}<img src="{$om->carimbo_rps_om}" width="400" alt="carimbo rps">{/if}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Trocar despacho</button>
                    </div>
                </div>
            {else}

                {if !empty($om)}
                    <input type="hidden" id="idOM" name="idOM" value="{$om->id_om}" >
                {/if}
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputNomeOM">Nome da OM</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="inputNomeOM" name="inputNomeOM" required="" value="{if !empty($om)}{$om->nome_om}{/if}" placeholder="Ex: 25º Batalhão de Caçadores">
                    </div>
                </div>
                <div class="row form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputCnpj">CNPJ</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputCnpj" name="inputCnpj" required="" value="{if !empty($om)}{$om->cnpj_om}{/if}" placeholder="CNPJ da OM">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Local</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputLocal" value="" name="inputLocal" required="" value="{if !empty($om)}{$om->local_om}{/if}" placeholder="Ex: Teresina-PI">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputEnderecoOM">Endereço OM</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="inputEnderecoOM" value="" name="inputEnderecoOM" required="" value="{$om->endereco_om}" placeholder="EX: Praça Marechal Floriano Peixoto, S/N">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputPostoGradCmt">Posto/Grad Comandante</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputPostoGradCmt" value="" name="inputPostoGradCmt" required="" value="{if !empty($om)}{$om->post_grad_cmt_om}{/if}" placeholder="EX: Ten Cel">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputComandanteCmt">Nome Comandante</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="inputComandanteCmt" value="" name="inputComandanteCmt" required="" value="{if !empty($om)}{$om->endereco_cmt_om}{/if}" placeholder="EX: Marcos Gomes Paulino">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputEnderecoCmt">Endereço Comandante</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="inputEnderecoCmt" value="" name="inputEnderecoCmt" required="" value="{if !empty($om)}{$om->endereco_cmt_om}{/if}" placeholder="EX: Rua Lisando Nogueira, 4444">
                    </div>

                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="inputCidadeCmt" value="" name="inputCidadeCmt" required="" value="{if !empty($om)}{$om->cidade_cmt_om}{/if}" placeholder="Cidade">
                    </div>

                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputBairroCmt" value="" name="inputBairroCmt" required="" value="{if !empty($om)}{$om->bairro_cmt_om}{/if}" placeholder="Bairro">
                    </div>
                </div>
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputNrPNRCmt">Nr PNR Comandante</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputNrPNRCmt" value="" name="inputNrPNRCmt" required="" value="{if !empty($om)}{$om->numero_pnr_cmt_om}{/if}" placeholder="EX: Numero PNR">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputIdentidadeCmt">Identidade Comandante</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputIdentidadeCmt" value="" name="inputIdentidadeCmt" required="" value="{if !empty($om)}{$om->identidade_cmt_om}{/if}" placeholder="EX: Identidade">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputCpfCmt">CPF Comandante</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text" id="inputCpfCmt" value="" name="inputCpfCmt" required="" value="{if !empty($om)}{$om->identidade_cmt_om}{/if}" placeholder="EX: CPF Comandante">
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Logo da OM</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="fileLogoOM" value="" name="fileLogoOM" {if empty($om)} required=""{/if}><br />
                        {if !empty($om)}<img src="{$om->logo_om}" alt="logo_om" width="60" align="left">{/if}
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="inputSenha">Imagem do Carimbo da RPS</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="fileCarimboRPS" value="" name="fileCarimboRPS" title="Faça o upload da imagem digitalizada do carimbo que saiŕa junto com a RPS"><br />
                        {if !empty($om)}<img src="{$om->carimbo_rps_om}" width="400" alt="carimbo rps">{/if}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            {/if}
        </form>
        </fieldset>
        <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 
    </div>
</div>