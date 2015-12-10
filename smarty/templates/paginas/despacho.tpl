

<div class="table-responsive">   
    <table border="1"  align="center" style="margin-top: 300px; padding: 10px; font-size: 15px">
        <tr>
            <td width="250" height="150"> 
        <center>
            <p>
                <strong>EXÉRCITO  BRASILEIRO</strong><br />
                <strong>{$om->nome_om}</strong>
            </p>
        </center><br />
        <p style="text-align: left; text-align: 20px">
            NE  __________________________<br/>
            NS  __________________________<br/>
            OB  __________________________<br/>
            PDR_________________________<br/>
        </p>

        </td>
        <td> &nbsp; </td>
        <td width="338" align="center">
            <p align="center">
                <strong>AUTORIZO  EMISSÃO DA ORDEM BANCÁRIA</strong>
            </p><br/>

            <p style="text-align: left;">
                GESTÃO  00001
            </p><br />

            <p align="center">
                TERESINA,PI,  _____/ _____________/<u>{$smarty.now|date_format:"%Y"}</u>
        </p>
        <br /><br />
        <p align="center">
            _____________________________________<br />
            {$om->comandante_om|upper} –  {$om->post_grad_cmt_om}<br />
            OD  {$om->sigla_om}
        </p>
        </td>
        </tr>
    </table>
    <p>&nbsp;</p>

    <table width="434" height="400" border="1" align="center" style="padding: 10px; font-size: 14px;">
        <tr>
            <td width="424" align="center">
                <p align="center">
                    <strong>{$om->sigla_om} – {$om->sigla_pipa_desp}</strong>
                </p><br/>
                <p style="text-align: left;"> 
                    <strong>DECLARO  que foram prestados os serviços constante da presente RPS.</strong>
                </p><br/>
                <p align="center">
                    Quartel  em Teresina,PI, _____/ _____________/<u>{$smarty.now|date_format:"%Y"}</u>
        </p>
        <br /><br />
        <p align="center">
            ____________________________________________________<br />
            {$om->chefe_pipa}<br />
            Coordenador  da OP Pipa / {$om->sigla_om}
        </p><br><br>
        </td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <table width="430" height="400" border="1" align="center" style="padding: 10px; font-size: 14px;">
        <tr>
            <td width="414" align="center">
                <p align="center">
                    <strong>{$om->sigla_om} – {$om->sigla_pipa_desp}</strong>
                </p><br/>
                <p style="text-align: left;"> 
                    <strong>DECLARO  que foram prestados os serviços constante da presente RPS.</strong>
                </p><br/>
                <p align="center">
                    Quartel  em Teresina,PI, _____/ _____________/<u>{$smarty.now|date_format:"%Y"}</u>
        </p>
        <br /><br />
        <p align="center">
            ________________________________________________<br />
            {$om->fisc_contrato}<br />
            Fiscal  do Contrato
        </p>
        <br /><br />
        </td>
        </tr>
    </table>

</div>
