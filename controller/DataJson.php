<?php


class DataJson
{

    function readFileChulaADL(){
        $strDataJson = file_get_contents( dirname(__file__).'/chulaADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        return $jsonData;
    }

    function readFileBarthelADL(){
        $strDataJson = file_get_contents( dirname(__file__).'/barthelADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        return $jsonData;
    }
    //name, type, score ,  create_at
    function writeFileBarthelADL($name ,$gender, $type , $score){
        $strDataJson = file_get_contents( dirname(__file__).'/barthelADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        $write = array();
        foreach ($jsonData as $key => $item){
            $write []= $item;
        }
        $write[] = array(
            'name'=>$name,
            'gender'=>$gender,
            'type'=>$type,
            'score'=>$score,
            'create_at'=>date('Y-m-d')
        );

        $writeJson = json_encode($write);
        file_put_contents( dirname(__file__).'/barthelADLJson.json',$writeJson);
        return true;

    }

    function writeFileChulaADL($name ,$gender, $type , $score){
        $strDataJson = file_get_contents( dirname(__file__).'/chulaADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        $write = array();
        foreach ($jsonData as $key => $item){
            $write []= $item;
        }
        $write[] = array(
            'name'=>$name,
            'gender'=>$gender,
            'type'=>$type,
            'score'=>$score,
            'create_at'=>date('Y-m-d')
        );

        $writeJson = json_encode($write);
        file_put_contents( dirname(__file__).'/chulaADLJson.json',$writeJson);
        return true;

    }

}