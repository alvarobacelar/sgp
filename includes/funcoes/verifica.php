<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["idSession"])) {
    if (!isset($_SESSION["erro"])) {
        $_SESSION["erro"] = "erro_sessao";
    }
    $smarty->assign('logado', 'NAO');
    $estaLogado = "NAO";
    $smarty->assign('nivel', 'NI');
    $local = 0;
} else {
    // autentica o usuario
    $nivel = $_SESSION['nivel'];
    $funcao = $_SESSION['funcao'];
    $smarty->assign("nomeUser", $_SESSION["nome"]);
    $smarty->assign("posto", $_SESSION["posto"]);
    $smarty->assign("nivel", $nivel);
    $smarty->assign("funcao", $funcao);
    $estaLogado = "SIM";
}

$db = mysql_connect("localhost", "root", "258276");
$dados = mysql_select_db("sgp", $db);

// mostrando os usuários cadastrados
$query = "SELECT * FROM active";
$sql = mysql_query($query);
$linha = mysql_fetch_array($sql);
$codActive = $linha['codigo'];


if (!isset($codActive) || $codActive != "0946625e04ce0f399f7b4a6d53063b59") {

    $smarty->assign("conteudo", "paginas/failActive.tpl");
    $smarty->display("HTMLActive.tpl");
    $active = '$1$iABDsn/Y$GqS7G79oLJlywwW0.FHts/';
    
} else {

// se não existe nenhum usuario logado, manda para a tela de login
    if ($estaLogado == "NAO") {
        // verifica se houve erro no login
        if ($_SESSION["erro"] == "erro") {
            $smarty->assign("erro", "<div class='alert alert-danger' role='alert'>Usuario ou senha não correspondem</div>");
        } else {
            $smarty->assign("erro", "&nbsp;");
        }
        unset($_SESSION["erro"]); // destroi a session do erro
        // chama a tela de login caso não houver session estartada
        $smarty->assign("titulo", " - Login");
        $smarty->assign("conteudoLogin", "login/login.tpl");
        $smarty->display("HTMLogin.tpl");
    }
}   
