<?php
//include ('./model/DataJson.php');
include dirname(__file__).'/../model/DataJson.php';
$FileJson = new DataJson();

$input_name = isset($_REQUEST['name'])?$_REQUEST['name']:'';
if($input_name!==''){
    $input_age = isset($_REQUEST['age'])?$_REQUEST['age']:'50';
    $input_gender = isset($_REQUEST['gender'])?$_REQUEST['gender']:'female';
    $_SESSION['U_NAME'] = $input_name;
    $_SESSION['U_AGE']= $input_age;
    $_SESSION['U_GENDER'] = $input_gender;
    $_SESSION['T_EQ'] = 1;
    $_SESSION['T_SELECT'] = array();
}


if(!isset($_SESSION['T_EQ'])){
    header( "location: /oldperson/chula.php" );
    exit(0);
}

$SET_EQ = isset($_SESSION['T_EQ'])?$_SESSION['T_EQ']:1;

$TESTS = array();
$TESTS[]=array(
    'eq'=>'1',
    'test_top'=>'ข้อที่ 1 เดินหรือเคลื่อนที่นอกบ้าน (Walking outdoor)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0 , 'src'=>'images/chu1-1.jpg','text'=>'เดินไม่ได้') ,
        array( 'score'=>1 , 'src'=>'images/chu1-2.jpg','text'=>'ใช้รถเข็นและช่วยตัวเอง หรือต้องการคนประคอง 2 ข้าง'),
        array( 'score'=>2 , 'src'=>'images/chu1-3.jpg','text'=>'ต้องการคนช่วยพยุงหรือไปด้วยตลอด'),
        array( 'score'=>3 , 'src'=>'images/chu1-4.jpg','text'=>'เดินได้เอง (รวมทั้งที่ใช้เครื่องมือช่วยเดิน walker'),
    )
);
$TESTS[]=array(
    'eq'=>'2',
    'test_top'=>'ข้อที่ 2 ทำหรือเตรียมอาหาร/หุงข้าว (Cooking)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0 , 'src'=>'images/chu2-1.jpg','text'=>'ทำไม่ได้') ,
        array( 'score'=>1 , 'src'=>'images/chu2-2.jpg','text'=>'ต้องการคนช่วยในการทำ หรือจัดเตรียมบางอย่างไว้ล้วงหน้า จึงจะทำได้'),
        array( 'score'=>2 , 'src'=>'images/chu2-3.jpg','text'=>'ทำได้เอง'),
    )
);
$TESTS[]=array(
    'eq'=>'3',
    'test_top'=>'ข้อที่ 3 ทำความสะอาดถูบ้าน/ซักรีดเสื้อผ้า (Heavy house work)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0 , 'src'=>'images/chu3-1.jpg','text'=>'ทำไม่ได้/ต้องมีคนช่วย') ,
        array( 'score'=>1 , 'src'=>'images/chu3-2.jpg','text'=>'ทำได้เอง'),
    )
);
$TESTS[]=array(
    'eq'=>'4',
    'test_top'=>'ข้อที่ 4 ทอนเงิน/แลกเงิน (Money exchange)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0 , 'src'=>'images/chu4-1.jpg','text'=>'ทำไม่ได้/ต้องมีคนช่วย') ,
        array( 'score'=>1 , 'src'=>'images/chu4-2.jpg','text'=>'ทำได้เอง'),
    )
);
$TESTS[]=array(
    'eq'=>'5',
    'test_top'=>'ข้อที่ 5 บริการใช้รถแมล์ รถสองแถว ( Public transport )',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0 , 'src'=>'images/chu5-1.jpg','text'=>'ไม่สามารถทำได้') ,
        array( 'score'=>1 , 'src'=>'images/chu5-2.jpg','text'=>'ทำได้แต่ต้องมีคนช่วยดูแลไปด้วย') ,
        array( 'score'=>2 , 'src'=>'images/chu5-3.jpg','text'=>'ไปมาได้เอง') ,
    )
);



//----------------------------------------------------
$sq = isset($_REQUEST['sq'])?$_REQUEST['sq']:'-';
$select = isset($_REQUEST['select'])?$_REQUEST['select']:'-';
if($sq!='-' && $select!='-'){
    $ss = $_SESSION['T_SELECT'] ;
    $ss[$sq-1] = $select;

    if( intval($SET_EQ) >= count($TESTS)){
        $score = 0;
        foreach ($ss as $key=>$item){
            $i_score = $TESTS[$key]['choice'][$item-1]['score'];
            $score = $score + $i_score;
        }
        $_SESSION['T_SCORE'] = $score;

        $name  =  $_SESSION['U_NAME'];
        $type = $_SESSION['U_AGE'];
        $gender = $_SESSION['U_GENDER'];
        $FileJson->writeFileChulaADL($name,$gender,$type,$score);
        header( "location: /oldperson/chula-result.php" );
        exit(0);
    }else{
        $_SESSION['T_SELECT'] = $ss;
        $_SESSION['T_EQ'] = intval($sq) + 1;
        $SET_EQ = intval($sq) + 1;
    }


}

$TEST = $TESTS[$SET_EQ-1];
$CHOICES = $TESTS[$SET_EQ-1]['choice'];





