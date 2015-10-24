<?php

require_once '../models/ManipulateData.php';

if (isset($_GET["id"])){
    $id = addslashes($_GET["id"]);
    
    $desativaMsg = new ManipulateData();
    $desativaMsg->setTable("mensagem");
    $desativaMsg->setCamposBanco("status='0'");
    $desativaMsg->setFieldId("id_mensagem");
    $desativaMsg->setValueId("$id");
    $desativaMsg->update();
    
    header("location: ../../");
}
