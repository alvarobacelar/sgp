<div class="panel panel-primary">

    <div class="panel-heading">

        <h2 class="panel-title">Pesquisar pipeiro para gerar Declaração</h2>
    </div>
    <div class="panel-body">

        <form action="gerarDeclaracao.php" method="post" id="formDeclaracao" name="formaDeclaracao" class="form-horizontal" role="form">

            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="selectMes">Escolha o pipeiro</label>
                <div class="col-sm-5">
                    <select class="form-control" id="inputCpfDeclacao" name="inputCpfDeclacao" required="">
                        {if !empty($valorBusca)}
                            <option value="">Escolha o pipeiro para gerar a declaração</option>
                            {foreach $valorBusca as $b}
                                <option value="{$b->cpf_pipeiro}|{$b->mes_rps}">{$b->nome_pipeiro} [{$b->mes_rps}]</option>
                            {/foreach}
                        {else}
                            <option value="">NENHUMA RPS GERADA HOJE</option>
                        {/if}
                    </select>
                </div>
            </div>

            <!--
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputCpfBusca">CPF pipeiro</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" id="inputCpf" name="inputCpf" required="" placeholder="Digite o CPF do pipeiro">
                </div>
            </div>
            -->

            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputValor">Quantidade Tickets</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="ticket" name="ticket" required="" placeholder="Ex: 32 (trinta e dois) tickets">
                </div>
            </div>

            <!--
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="selectMes">Mês Pres. Conta</label>
                <div class="col-sm-3">
                    <select class="form-control" id="selectMes" name="selectMes" required="">
                        <option value="">Mês</option>
                        <option value="janeiro">JANEIRO</option>
                        <option value="fevereiro">FEVEREIRO</option>
                        <option value="março">MARÇO</option>
                        <option value="ABRIL">ABRIL</option>
                        <option value="maio">MAIO</option>
                        <option value="junho">JUNHO</option>
                        <option value="julho">JULHO</option>
                        <option value="agosto">AGOSTO</option>
                        <option value="setembro">SETEMBRO</option>
                        <option value="outubro">OUTUBRO</option>
                        <option value="novembro">NOVEMBRO</option>
                        <option value="dezembro">DEZEMBRO</option>

                    </select>
                </div>
            </div>
            -->

            <div class="form-group">
                <label class="col-sm-2 control-label" for="selectMes">Alterações</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alteracoes" rows="4" name="alteracoes" placeholder="Ex: 1. O modelo de alteração será dessa forma; 2. Aqui segue a segunda alteração; ..."></textarea>
                </div>
            </div>

            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputValor">Nome do militar</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="nomeMilitar" name="nomeMilitar" required="" value="{$nomeUser}" placeholder="Ex: Álvaro Bacelar de Sousa">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputPostoGraducao">Posto Graduação</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" id="inputPostoGraducao" name="inputPostoGraducao" required="" value="{$posto}" placeholder="3º SGT STT">
                </div>
            </div>

            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="inputValor">CPF do militar</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" id="cpfMilitar" name="cpfMilitar" required="" value="{$cpf}" placeholder="CPF do Militar">
                </div>
            </div>

            <button type="submit" onclick="this.form.target = '_blank';
                    return true;" class="btn btn-primary btn-lg">Buscar</button>
            <button type="reset" class="btn btn-default btn-lg">Cancelar</button>
        </form>
        </fieldset>
    </div>
</div>
<br />
<center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 