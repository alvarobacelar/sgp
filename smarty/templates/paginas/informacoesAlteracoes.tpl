
<fieldset>
    <legend>Ver mensagens</legend>
    {$erroPipeiro}
    <table class="table table-bordered">

        {if isset($infor)}
            <tr>
                <th><center>Data</center></th>
                <th><center>Nome Pipeiro</center></th>
                <th><center>Nome do informante</center></th>
                <th><center>Alteração</center></th>
                <th><center>Ação</center></th>
            </tr>
            {foreach $infor as $i}
                <tr class="info">
                    <td>{$i->data_informacao}</td>
                    <td>{if $i->id_pipeiro != 0}<a href="editarPipeiro.php?id={$i->id_pipeiro}&alt={$i->alteracao}" title="Ir para editar pipeiro">{$i->nome_pipeiro_alt}</a>{else}{$i->nome_pipeiro_alt} {/if}</td>
                    <td>{$i->nome_informante}</td>
                    <td>{$i->alteracao}</td>
                    <td>
                        {if $i->id_pipeiro != 0}<a href="editarPipeiro.php?id={$i->id_pipeiro}&idAlt={$i->id_alteracao}&alt={$i->alteracao}" class="btn btn-info btn-xs" title="Ir para editar pipeiro"><span class="glyphicon glyphicon-edit"></span> Corrigir</a>{/if}
                        <a href="includes/controllers/excluiInforme.php?idInforme={$i->id_alteracao}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-circle"></span> Excluir</a>
                    </td>
                </tr>
            {/foreach}
        {else}
            <tr>  
                <td>Nenhuma nova mensagem</td>
            </tr>
        {/if}
    </table>
</fieldset>
    <center><a class="btn btn-default" href="javascript:history.back()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a></center> 