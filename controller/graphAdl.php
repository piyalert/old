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

$g21 = 0;
$g22 = 0;
$g23 = 0;

$g31 = 0;
$g32 = 0;
$g33 = 0;

$res = $FileJson->readFileBarthelADL();
/*  g{t1}{t2}
    t1 = type   :: 1=60-69 , 2=70-79 , 3= 80 up
    t2 = score group    :: 1=(0-4) , 2=(5-11), 3=(12 up)
*/
foreach ($res as $item){
    if( intval($item['type'] )== 1){
        if(intval($item['score']) <= 4 ){
            $g11++;
        }elseif(intval($item['score']) <= 11){
            $g12++;
        }else{
            $g13++;
        }
    }
    elseif (intval($item['type'] )== 2){
        if(intval($item['score']) <= 4 ){
            $g21++;
        }elseif(intval($item['score']) <= 11){
            $g22++;
        }else{
            $g23++;
        }
    }
    else{
        if(intval($item['score']) <= 4 ){
            $g31++;
        }elseif(intval($item['score']) <= 11){
            $g32++;
        }else{
            $g33++;
        }
    }
}
//echo json_encode( $FileJson->readFileBarthelADL());exit;