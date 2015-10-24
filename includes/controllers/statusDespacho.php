<?php

require_once '../models/ManipulateData.php';

if (isset($_POST["idStatusDespacho"])){
    $id = addslashes($_POST["idStatusDespacho"]);
    $status = addslashes($_POST["statusDespacho"]);
    
    $desativaMsg = new ManipulateData();
    $desativaMsg->setTable("om");
    $desativaMsg->setCamposBanco("status='$status'");
    $desativaMsg->setFieldId("id_om");
    $desativaMsg->setValueId("$id");
    $desativaMsg->update();
    
    header("location: ../../");
}

