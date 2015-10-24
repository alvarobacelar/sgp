<html>
<head>
	<script type="text/javascript" src="scripts/band.js"></script>
	<script type="text/javascript" src="scripts/tabber.js"></script>
	<script type="text/javascript" src="scripts/datetimepicker.js"></script>
	<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
	<script type="text/javascript" src="scripts/jquery.accordion.js"></script>
	<script src="scripts/overlib.js"></script>
	<script src="scripts/msg_hints.js"></script>
	<script>
	var oFCKAbert = new FCKeditor( 'texto_abert' ) ;
	var oFCKFech  = new FCKeditor( 'texto_fech' ) ;
	var oFCKIndiv  = new FCKeditor( 'texto_indiv' ) ;
	document.write('<style type="text/css">.tabber{display:none;}<\/style>');


	var tabberOptions = {
		'manualStartup':true,
	    'onLoad': function(argsObj) {
	    if (argsObj.tabber.id == 'tab2') {
    	  alert('Finished loading tab2!');
    }
  },

  'onClick': function(argsObj) {

    var t = argsObj.tabber; /* Tabber object */
    var id = t.id; /* ID of the main tabber DIV */
    var i = argsObj.index; /* Which tab was clicked (0 is the first tab) */
    var e = argsObj.event; /* Event object */

    if (id == 'tab2') {
      return confirm('Swtich to '+t.tabs[i].headingText+'?\nEvent type: '+e.type);
    }
  },
  'addLinkId': true

};
	// É chamado via ajax.js para preenchimento do editor FCKEditor
	function InsertHTML(conteudo){
		var oEditorAbert = FCKeditorAPI.GetInstance('texto_abert') ;
		var oEditorFech = FCKeditorAPI.GetInstance('texto_fech') ;
		var oEditorFech = FCKeditorAPI.GetInstance('texto_indiv') ;

		vaiAltr 	= conteudo.substring(0,1);
		abertura 	= conteudo.substring(1,conteudo.indexOf('$wxxw$'));
		fechamento 	= conteudo.substring(conteudo.indexOf('$wxxw$') + 6,conteudo.length);
		oEditorAbert.SetHTML(abertura);
		oEditorFech.SetHTML(fechamento);
		document.cadMateriaBI.vai_altr.checked = (vaiAltr == 'S'? true: false);
	}

	function onChangeParteBi(){
		url="ajax_materia_bi.php?opcao=secaoBI&numeroParteAtual="+document.cadMateriaBI.seleParteBi.value;
		//window.alert(url);
		document.cadMateriaBI.inputAssuntoGeral.value = "";
		document.getElementById("divAssuntoGeral").innerHTML = '';
		document.cadMateriaBI.inputAssuntoGeral.value = "";
		document.getElementById("divAssuntoGeral").innerHTML = '';
		document.getElementById("divAssuntoEspecifico").innerHTML = '';
		//document.getElementById("divTextoAbertura").innerHTML = '';
		document.cadMateriaBI.texto_abert.value =  '';
		document.cadMateriaBI.texto_fech.value =  '';
		document.cadMateriaBI.inputAssuntoEspecifico.value = '';
		ajax(url,"divSecaoParteBI");
	}

	function onchangeSecao(){
		document.cadMateriaBI.inputAssuntoGeral.value = "";
		document.getElementById("divAssuntoGeral").innerHTML = '';
		document.getElementById("divAssuntoEspecifico").innerHTML = '';
		//document.getElementById("divTextoAbertura").innerHTML = '';
		document.cadMateriaBI.texto_abert.value =  '';
		document.cadMateriaBI.texto_fech.value =  '';
		document.cadMateriaBI.inputAssuntoEspecifico.value = '';
	}

	function listaGeral(evento){
		if(isEnterKey(evento)){
			//alert(evento);
			listaAssuntoGeralLike(document.subscribe.textBusca.value);
			//return false;
		}
		if(isEscKey(evento)){
			escondeFly();
		}
	}
	function listaEspecifico(evento){
		if(isEnterKey(evento)){
			//alert(evento);
			listaAssuntoEspecificoLike(document.subscribe.textBusca.value);
			//return false;
		}
		if(isEscKey(evento)){
			escondeFly();
		}
	}
	function buscaAssuntoGeral(textoBuscado){
		document.cadMateriaBI.codTipoBol.value = <?=$codTipoBol?>;
		document.getElementById("subscrForm").style.left = 5 + "px";
		document.getElementById("flyframe").style.visibility = "visible";
		document.getElementById("subscrForm").style.visibility = 'visible';
		listaAssuntoGeralLike(textoBuscado);
		document.getElementById('buscador').innerHTML =
			'<table width="100%" border="0" class="lista"><tr><td><font size="3" color="yellow"><b>Busca Assunto Geral</b></font></td></tr></table>' +
			'<br>Buscar:<input type="text" id="busca" name="textBusca" size="60"  onKeyDown="listaGeral(event)">'+
			'<input type="complemento" id="teste" name="testebusca" size="0" maxlenght="0" style="width:0px;">'+
			'<input type="button" value="Buscar" onclick="listaAssuntoGeralLike(document.subscribe.textBusca.value)">'+
			'<input type="button" value="Novo Assunto Geral" onclick="novoAssuntoGeral(\'\')" <?=($bIncluiAssunto == 0?'DISABLED':'')?>>'+
			'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Fechar" onclick="escondeFly()">';
		document.getElementById('busca').focus();
	}
	function novoAssuntoGeral(textoBuscado){
		url = '<iframe WIDTH="730" HEIGHT="300" src="ajax_materia_bi.php?opcao=novoAssuntoGeral&numeroParteAtual='+document.cadMateriaBI.seleParteBi.value+
			'&numeroSecaoAtual='+document.cadMateriaBI.seleSecaoParteBi.value+'&codTipoBol='+document.cadMateriaBI.codTipoBol.value+'">';
		document.getElementById('textoForm').innerHTML = url;
	}
	function novoAssuntoEspecifico(textoBuscado){
		url = '<iframe WIDTH="730" HEIGHT="300" src="ajax_materia_bi.php?opcao=novoAssuntoEspecifico&numeroParteAtual='+document.cadMateriaBI.seleParteBi.value+
				'&numeroAssuntoGeral=' + document.cadMateriaBI.inputCodAssGeral.value+
				'&numeroSecaoAtual=' + document.cadMateriaBI.seleSecaoParteBi.value+'">';
		//alert(url);
		document.getElementById('textoForm').innerHTML = url;

	}

	function listaAssuntoGeralLike(textoBuscado){
		url = '<iframe WIDTH="730" HEIGHT="300" src="ajax_materia_bi.php?opcao=assuntoGeral&numeroParteAtual='+document.cadMateriaBI.seleParteBi.value+
			'&numeroSecaoAtual='+document.cadMateriaBI.seleSecaoParteBi.value+'&codTipoBol='+document.cadMateriaBI.codTipoBol.value+
			'&like='+textoBuscado+'">';
		//alert(url);
		
		document.getElementById('textoForm').innerHTML = url;
	}
	function buscaAssuntoEspecifico(textoBuscado){
		if(document.cadMateriaBI.inputAssuntoGeral.value=="") {
			window.alert('Você precisa selecionar o Assunto Geral.\n O Sistema chamará a janela de seleção do Assunto Geral.');
			buscaAssuntoGeral('');
			return;
		}
		document.getElementById("subscrForm").style.left = 5 + "px";
		document.getElementById("flyframe").style.visibility = "visible";
		document.getElementById("subscrForm").style.visibility = 'visible';
		listaAssuntoEspecificoLike(textoBuscado);
		document.getElementById('buscador').innerHTML = '<table width="100%" border="0" class="lista"><tr><td><font size="3" color="yellow"><b>'+
			'Busca Assunto Específico</b></font></td></tr></table>' +
			'<br>Buscar: <input type="text" id="textBusca" name="textBusca" size="60"  onKeyDown="listaEspecifico(event)">'+
			'<input type="complemento" id="teste" name="testebusca" size="0" maxlenght="0" style="width:0px;">'+
			'<input type="button" value="Buscar" onclick="listaAssuntoEspecificoLike(document.subscribe.textBusca.value)">'+
			'<input type="button" value="Novo Assunto Específico" onclick="novoAssuntoEspecifico(\'\')" <?=($bIncluiAssunto == 0?'DISABLED':'')?>>'+
			'&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Fechar" onclick="escondeFly()">';
		document.getElementById('textBusca').focus();
	}

	function listaAssuntoEspecificoLike(textoBuscado){
		url = '<iframe WIDTH="730" HEIGHT="300" src="ajax_materia_bi.php?opcao=assuntoEspecifico&acao=montaCombo&assuntoGeral='
				+document.cadMateriaBI.inputCodAssGeral.value+
				'&like='+textoBuscado+'">';
		document.getElementById('textoForm').innerHTML = url;
	}


	function setaAssuntoGeral(cod,descricao){
		document.cadMateriaBI.inputAssuntoGeral.value = html_entity_decode(descricao);
		document.cadMateriaBI.inputCodAssGeral.value = cod;
		document.getElementById("divAssuntoGeral").innerHTML = '';
		document.getElementById("divAssuntoEspecifico").innerHTML = '';
		//document.getElementById("divTextoAbertura").innerHTML = '';
		document.cadMateriaBI.texto_abert.value =  '';
		document.cadMateriaBI.texto_fech.value =  '';
		document.cadMateriaBI.inputAssuntoEspecifico.value = '';
	}

	function setaAssuntoEspecifico_anterior(cod,descricao){
		//window.alert(objeto);
		codAssuntoEspec = cod;
		document.cadMateriaBI.inputAssuntoEspecifico.value = descricao;
		document.cadMateriaBI.inputCodAssEspec.value = cod;
		document.getElementById("divAssuntoEspecifico").innerHTML = '';
		// Buscar o texto padrão de abertura, fechamento e se vai para as alterações
		url="ajax_materia_bi.php?opcao=assuntoEspecifico&acao=buscaTextoAbertura&codAssuntoEspec="+codAssuntoEspec+
			"&assuntoGeral="+document.cadMateriaBI.inputCodAssGeral.value;
		//window.alert(url);
		ajax(url,"divTextoAbertura");
	}

	function setaAssuntoEspecifico(cod,descricao){
		//window.alert(objeto);
		codAssuntoEspec = cod;
		document.cadMateriaBI.inputAssuntoEspecifico.value = html_entity_decode(descricao);
		document.cadMateriaBI.inputCodAssEspec.value = cod;
		document.getElementById("divAssuntoEspecifico").innerHTML = '';
		// Buscar o texto padrão de abertura, fechamento e se vai para as alterações
		url="ajax_materia_bi.php?opcao=assuntoEspecifico&acao=buscaTextoAbertura&codAssuntoEspec="+codAssuntoEspec+
			"&assuntoGeral="+document.cadMateriaBI.inputCodAssGeral.value;
		//window.alert(url);
		//ajax(url,"divTextoAbertura");
		ajax(url,null,"cad_materia_bi");
	}

	// Lista os militares conforme os filtros selecionados
	function listaMilitar(codMateria){
		url="ajax_materia_bi.php?opcao=assuntoEspecifico&acao=listaMilitar&pgrad="+document.cadMateriaBI.selePGrad.value+
			"&nome="+document.cadMateriaBI.inputNomeMilitar.value+"&codMateria="+codMateria;
		ajax(url,"divListaMilitar");
		window.location.href="#fim_pag";
	}

	//function adicionaPessoaMateria(codMateria,codPessoa){
	function adicionaPessoaMateria(codMateria){
		document.cadMateriaBI.action = "cadmateriabi.php?codMateriaBIAtual="+codMateria+"&codTipoBol=<?=$codTipoBol?>&tab=2";
		document.cadMateriaBI.executar.value = "adicionaMilitares";
		document.cadMateriaBI.submit();
	}

	function adicionaPessoaIndividual(codMateria,codPessoa){
		document.cadMateriaBI.action = "cadmateriabi.php?codMateriaBIAtual="+codMateria+"&codTipoBol=<?=$codTipoBol?>&tab=2";
		document.cadMateriaBI.executar.value = "adicionaMilitarIndividual";
		document.cadMateriaBI.codPessoaIndividual.value = codPessoa;
		document.cadMateriaBI.submit();
		/*
		document.getElementById('divPessoa').innerHTML = "<font color='blue'>&nbsp;&nbsp;Espere, processando...</font>";
		url="ajax_materia_bi.php?opcao=pessoaMateria&acao=adicionaPessoaMateria&codMateria="+codMateria+
				"&codPessoa="+codPessoa;
		ajaxCadMilitar(url,"divListaMilitar","");
		*/
	}
	function excluiPessoaMateria(codMateria,codPessoa){
		document.cadMateriaBI.action = "cadmateriabi.php?codMateriaBIAtual="+codMateria+
										"&codTipoBol=<?=$codTipoBol?>&tab=2";
		document.cadMateriaBI.executar.value = "excluiMilitarIndividual";
		document.cadMateriaBI.codPessoaIndividual.value = codPessoa;
		document.cadMateriaBI.submit();
	}
	function atualizaTela(resposta,tipoLocal){
		//alert(resposta);
		if(tipoLocal == 'listaPessoaMateria'){
			listaPessoaMateria(<?=$codMateriaBIAtual?>);
		}
		if(tipoLocal == 'listaMilitar'){
			listaPessoaMateria(<?=$codMateriaBIAtual?>);
			//listaMilitar(<?=$codMateriaBIAtual?>);
		}
	}

	function listaPessoaMateria(codMateria){
		url="ajax_materia_bi.php?opcao=assuntoEspecifico&acao=listaPessoaMateria&codMateria="+codMateria;
//		alert(url);
		ajax(url,"divPessoaMateria");
		//window.location.href="#fim_pag";
	}

	// Salva a matéria
	function salvaMateriaBI(acao,codMateria){
		//window.alert(acao);
		document.cadMateriaBI.executar.value = acao;
		nrDoc = document.cadMateriaBI.nr_documento.value;
		idtMilAss = document.cadMateriaBI.seleMilitarAssina.value;
//		if (nrDoc == ''){
//			window.alert('Informe o número Documento');
//			window.location.href="#topo";
//			document.cadMateriaBI.nr_documento.focus();
//
//			return;
//		}
		if (document.cadMateriaBI.inputAssuntoGeral.value == ''){
			window.alert('Informe o Assunto Geral.');
			window.location.href="#topo";
			buscaAssuntoGeral('');
			return;
		}
		if (document.cadMateriaBI.inputAssuntoEspecifico.value == ''){
			window.alert('Informe o Assunto Específico.');
			window.location.href="#topo";
			buscaAssuntoEspecifico('');
			return;
		}
		if (acao=="Incluir"){
			document.cadMateriaBI.action = "cadmateriabi.php?idtMilAss="+idtMilAss+"&codTipoBol=<?=$codTipoBol?>";
		}
		if (acao=="Alterar"){
			document.cadMateriaBI.action = "cadmateriabi.php?idtMilAss="+idtMilAss+"&codMateriaBIAtual="+codMateria+"&codTipoBol=<?=$codTipoBol?>";
		}
		if (acao == "Excluir")  {
			if (!window.confirm("Deseja realmente esta matéria para boletim ?")){
				return ;
			}
			document.cadMateriaBI.action = "cadmateriabi.php?codMateriaBIAtual="+codMateria+"&codTipoBol=<?=$codTipoBol?>";
		}
		document.cadMateriaBI.submit();
	}

	function novo(){
		document.getElementById("divBuscador").style.visibility = "visible";
		document.getElementById("novo").style.visibility = "hidden";
	}
	function cancelar(){
		document.getElementById("divBuscador").style.visibility = "hidden";
		document.getElementById("novo").style.visibility = "visible";
		document.getElementById("divListaMilitar").innerHTML = '';
		document.getElementById("divTextoIndividual").innerHTML = '';
	}
	function carregaTextoIndividual(codMateria,codPessoa){
		document.getElementById("novo").style.visibility = "hidden";
		document.getElementById("divBuscador").style.visibility = "hidden";
		document.getElementById("divTextoIndividual").style.visibility = "visible";
		url="ajax_materia_bi.php?opcao=formAlteraTextoIndividual&codMateria="+codMateria+
				"&codPessoa="+codPessoa;
		ajax(url,"divTextoIndividual");
	}

	function salvarTextoIndividual(codMateria,codPessoa){
		//window.alert('Texto individual');
		document.cadMateriaBI.action = "cadmateriabi.php?codMateriaBIAtual="+codMateria+"&codPessoa="+codPessoa+"&codTipoBol=<?=$codTipoBol?>&tab=2";
		document.cadMateriaBI.executar.value = "salvaTextoIndividual";
		document.cadMateriaBI.submit();
	}

	function carregaFrame(doc,idFrame) {
		document.getElementById(idFrame).src = doc
	}
	function escondeFly(){
		document.getElementById("flyframe").style.visibility = "hidden";
		document.getElementById('subscrForm').style.visibility = 'hidden';
	}

	function novaMateria(tipoBol){
		if (window.confirm("A edição de uma nova matéria vai descartar todas as alterações não salvas.\nDeseja editar uma nova matéria ?")){
			window.location.href='cadmateriabi.php?codTipoBol='+tipoBol;
		}
	}

	</script>
	<style type="text/css">
	.tabberlive .tabbertab {
 		padding:5px;
 		border:2px solid #aaa;
 		border-top:0;
 		background-color: #fff;
	}
	</style>
</head>

<body>
<a name="#topo">
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<center>
	<form  method="post" name="cadMateriaBI">
	<!-- Campos escondidos destinado a guardar os códigos -->
	<input name="executar" type="hidden" value="">
	<input name="codTipoBol" type="hidden" value="">
	<input name="codPessoaIndividual" type="hidden" value="">
	<input name="usuario" type="hidden" value="">

	<table border="0" width="830" ><tr><td>

	<!-- Inicio das Tabs-->
	<div class="tabber" id="mytab1">

	 <div class="tabbertab" id="tabmateria">
	 <div id="acordeon1">
	  <h2>Matéria Bi</h2>
		<div id="divTextoAbertura" align="center">
		 <table border="0"  width="810" class="lista"><tr class="cabec"><td>Texto de Abertura:</td>
		 <td align="right" valign="top">
		 Vai para Altera&ccedil;&otilde;es ?
		 <input name="vai_altr" type="checkbox" checked></td></tr>
		<tr>
		<td colspan="2" align="center">
		</tr>
		<div id="xToolbar"></div>
		<tr>
		<td colspan="2" align="center">

		<script>
			var oFCKAbert = new FCKeditor( 'texto_abert' ) ;
			oFCKAbert.ToolbarSet = "CadMatBI";
			oFCKAbert.Height = 300 ;
			oFCKAbert.Value = "teste";
			oFCKAbert.Create() ;
		</script>

		</td></tr></table>
		</div>
		<div id="acordeon2">
		<table border="0"  width="810" class="lista">
		<tr class="cabec"><td colspan="2">Texto de Fechamento:</td></tr>
		<tr>
		<td colspan="2" align="center">
		<script>
    		oFCKFech.ToolbarSet = "CadMatBI" ;
    		oFCKFech.Height = 150 ;
    		oFCKFech.Value = "testando";
			oFCKFech.Create() ;
		</script>

		</td></tr></table>
		</div>
		</div>

		<br>
		<div align="right">
		<input type="button" name="btnSalvar" value="Incluir" onClick="salvaMateriaBI(this.value,'<?=$codMateriaBIAtual?>')"></div>
		<a name="fim_pag">
	 </div> <!-- Fechou o 1o tabber -->
	 <!-- Abre o 2o tabber -->
	</div><!-- Fechou o tabber mytab1 -->
	</td></tr></table>
		<? if ($buscaMateria){echo '<script>carregaForm();</script>';}?>
		<script>
		tabberAutomatic(tabberOptions);
		//document.getElementById('mytab1').tabber.tabShow(1);
		jQuery('#acordeon1').accordion();
		jQuery('#acordeon2').accordion({
    	autoheight: false
		});
		</script>
	<div id="divNenhum"></div>
	<a name="bottom">
	</form>
</center>
</body>
</html>

