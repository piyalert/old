<?php
include('../model/DataJson.php');

$FileJson = new DataJson();
$BARTHEL = [];
$CHULA = [];

$result = $FileJson->readFileBarthelADL();
if(count($result)>0){
    $BARTHEL = $result;
}

$result = $FileJson->readFileChulaADL();
if(count($result)>0){
    $CHULA = $result;
}

//echo json_encode($BARTHEL);exit;


