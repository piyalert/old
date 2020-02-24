<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/24/2020
 * Time: 11:02 AM
 */

include dirname(__file__).'/DataJson.php';
$FileJson = new DataJson();

$g11 = 0;
$g12 = 0;
$g13 = 0;
$g14 = 0;

$g21 = 0;
$g22 = 0;
$g23 = 0;
$g24 = 0;

$g31 = 0;
$g32 = 0;
$g33 = 0;
$g24 = 0;

$res = $FileJson->readFileChulaADL();
/*  g{t1}{t2}
    t1 = type   :: 1=60-69 , 2=70-79 , 3= 80 up
    t2 = score group    :: 1=(0-4) , 2=(5-11), 3=(12 up)
*/
foreach ($res as $item){
    if( intval($item['type'] )== 1){
        if(intval($item['score']) <= 4 ){
            $g11++;
        }elseif(intval($item['score']) <= 8){
            $g12++;
        }elseif(intval($item['score']) <= 11){
            $g13++;
        }else{
            $g14++;
        }
    }
    elseif (intval($item['type'] )== 2){
        if(intval($item['score']) <= 4 ){
            $g21++;
        }elseif(intval($item['score']) <= 8){
            $g22++;
        }elseif(intval($item['score']) <= 11){
            $g23++;
        }else{
            $g24++;
        }
    }
    else{
        if(intval($item['score']) <= 4 ){
            $g31++;
        }elseif(intval($item['score']) <= 8) {
            $g32++;
        }elseif(intval($item['score']) <= 11){
            $g33++;
        }else{
            $g34++;
        }
    }
}
//echo json_encode( $FileJson->readFileBarthelADL());exit;