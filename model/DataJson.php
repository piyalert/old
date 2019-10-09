<?php


class DataJson
{

    function readFileChulaADL(){
        $strDataJson = file_get_contents( __DIR__.'/chulaADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        return $jsonData;
    }

    function readFileBarthelADL(){
        $strDataJson = file_get_contents( __DIR__.'/barthelADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        return $jsonData;
    }
    //name, type, score ,  create_at
    function writeFileBarthelADL($name , $type , $score){
        $strDataJson = file_get_contents( __DIR__.'/barthelADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        $write = [];
        foreach ($jsonData as $key => $item){
            $write []= $item;
        }
        $write[] = [
            'name'=>$name,
            'type'=>$type,
            'score'=>$score,
            'create_at'=>date('Y-m-d')
        ];

        $writeJson = json_encode($write);
        file_put_contents(__DIR__.'/barthelADLJson.json',$writeJson);
        return true;

    }

    function writeFileChulaADL($name , $type , $score){
        $strDataJson = file_get_contents(__DIR__.'/chulaADLJson.json');
        $jsonData = json_decode($strDataJson,true);
        $write = [];
        foreach ($jsonData as $key => $item){
            $write []= $item;
        }
        $write[] = [
            'name'=>$name,
            'type'=>$type,
            'score'=>$score,
            'create_at'=>date('Y-m-d')
        ];

        $writeJson = json_encode($write);
        file_put_contents(__DIR__.'/chulaADLJson.json',$writeJson);
        return true;

    }

}