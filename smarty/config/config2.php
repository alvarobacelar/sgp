<?php

$db = mysql_connect("localhost", "root", "258276");
$dados = mysql_select_db("sgp", $db);

// mostrando os usuários cadastrados
$query = "SELECT * FROM active";
$sql = mysql_query($query);
$linha = mysql_fetch_array($sql);
$codActive = $linha['codigo'];


if ($codActive != "0946625e04ce0f399f7b4a6d53063b5") {
    echo "<script>
                window.location.href = './failActive.php';
                </script>";
    exit;

} 

