<?php
//include('./model/DataJson.php');
include __DIR__.'/../model/DataJson.php';

$FileJson = new DataJson();
$BARTHEL = array();
$CHULA = array();

$result = $FileJson->readFileBarthelADL();
if(count($result)>0){
    $BARTHEL = $result;
}

$result = $FileJson->readFileChulaADL();
if(count($result)>0){
    $CHULA = $result;
}

//echo json_encode($BARTHEL);exit;


