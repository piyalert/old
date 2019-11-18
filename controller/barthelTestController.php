<?php
//include ('/model/DataJson.php');
include __DIR__.'/../model/DataJson.php';
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
    header( "location: /oldperson/barthel.php" );
    exit(0);
}

$SET_EQ = isset($_SESSION['T_EQ'])?$_SESSION['T_EQ']:1;

$TESTS = array();
$TESTS[]=array(
    'eq'=>'1',
    'test_top'=>'ข้อที่ 1 การรับประทานอาหาร (Feeding)',
    'test_title'=>'รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า',
    'choice'=>array(
        array( 'score'=>0 , 'src'=>'images/bar1-1.jpg','text'=>'ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้') ,
        array( 'score'=>1 , 'src'=>'images/bar1-2.jpg','text'=>' กินอาหารเองได้แต่ต้องมีคนช่วย เช่น ช่วยตักเตรียมไว้ให้หรือตัดเป็นเล็กๆไว้ล่วงหน้า'),
        array( 'score'=>2 , 'src'=>'images/bar1-3.jpg','text'=>'ตักอาหารและช่วยตัวเองได้เป็นปกติ'),
    )
);
$TESTS[]=array(
    'eq'=>'2',
    'test_top'=>'ข้อที่ 2 ล้างหน้า หวีผม แปรงฟัน โกนหนวด  (Grooming)',
    'test_title'=>'ในระยะเวลา  24-48 ชั่วโมงที่ผ่านมา',
    'choice'=>array(
        array( 'score'=>0, 'src'=>'images/bar2-1.jpg','text'=>'ต้องการความช่วยเหลือ') ,
        array( 'src'=>'images/bar2-2.jpg','text'=>'ทำเองได้ (รวมทั้งที่ทำได้เองถ้าเตรียมอุปกรณ์ไว้ให้)'),
    )
);
$TESTS[]=array(
    'eq'=>'3',
    'test_top'=>'ข้อที่ 3 ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้ (Transfer)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0,'src'=>'images/bar3-1.jpg','text'=>'ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ)หรือต้องใช้คนสองคนช่วยกันยกขึ้น') ,
        array( 'score'=>1,'src'=>'images/bar3-2.jpg','text'=>'ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้  เช่น  ต้องใช้คนที่แข็งแรงหรือมีทักษะ 1 คน หรือใช้คนทั่วไป  2  คนพยุงหรือดันขึ้นมาจึงจะนั่งอยู่ได้'),
        array( 'score'=>2,'src'=>'images/bar3-3.jpg','text'=>'ต้องการความช่วยเหลือบ้าง เช่น บอกให้ทำตาม หรือช่วยพยุงเล็กน้อย หรือต้องมีคนดูแลเพื่อความปลอดภัย'),
        array( 'score'=>3,'src'=>'images/bar3-4.jpg','text'=>'ทำได้เอง'),
    )
);
$TESTS[]=array(
    'eq'=>'4',
    'test_top'=>'ข้อที่ 4 ใช้ห้องน้ำ (Toilet use)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0,'src'=>'images/bar4-1.jpg','text'=>'ช่วยตัวเองไม่ได้') ,
        array( 'score'=>1,'src'=>'images/bar4-2.jpg','text'=>'ทำเองได้บ้าง  (อย่างน้อยทำความสะอาดตัวเองได้หลังจากเสร็จธุระ) แต่ต้องการความช่วยเหลือในบางสิ่ง'),
        array( 'score'=>2,'src'=>'images/bar4-3.jpg','text'=>'ช่วยตัวเองได้ดี (ขึ้นนั่งและลงจากโถส้วมเองได้ ทำความสะอาดได้เรียบร้อยหลังจากเสร็จธุระ  ถอดใส่เสื้อผ้าได้เรียบร้อย)')
    )
);
$TESTS[]=array(
    'eq'=>'5',
    'test_top'=>'ข้อที่ 5 การเคลื่อนที่ภายในห้องหรือบ้าน (Mobility)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0,'src'=>'images/bar5-1.jpg','text'=>'เคลื่อนที่ไปไหนไม่ได้') ,
        array( 'score'=>1,'src'=>'images/bar5-2.jpg','text'=>'ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง (ไม่ต้องมีคนเข็นให้) และจะต้องเข้าออกมุมห้อง หรือประตูได้'),
        array( 'score'=>2,'src'=>'images/bar5-3.jpg','text'=>'เดินหรือเคลื่อนที่โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม หรือต้องให้ความสนใจดูแลเพื่อความปลอดภัย'),
        array( 'score'=>3,'src'=>'images/bar5-4.jpg','text'=>'เดินหรือเคลื่อนที่ได้เอง'),
    )
);
$TESTS[]=array(
    'eq'=>'6',
    'test_top'=>'ข้อที่ 6 การสวมใส่เสื้อผ้า (Dressing)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0,'src'=>'images/bar6-1.jpg','text'=>'ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้หรือได้น้อย') ,
        array( 'score'=>1,'src'=>'images/bar6-2.jpg','text'=>'ช่วยตัวเองได้ประมาณร้อยละ 50 ที่เหลือต้องมีคนช่วย'),
        array( 'score'=>2,'src'=>'images/bar6-3.jpg','text'=>'ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิบ หรือใช้เสื้อผ้าที่ดัดแปลงให้เหมาะสมก็ได้)')
    )
);
$TESTS[]=array(
    'eq'=>'7',
    'test_top'=>'ข้อที่ 7 การขึ้นลงบันได 1 ชั้น (Stairs)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>0,'src'=>'images/bar7-1.jpg','text'=>'ไม่สามารถทำได้') ,
        array( 'score'=>1,'src'=>'images/bar7-2.jpg','text'=>'ต้องการคนช่วย'),
        array( 'score'=>2,'src'=>'images/bar7-3.jpg','text'=>'ขึ้นลงได้เอง (ถ้าต้องใช้เครื่องช่วยเดิน เช่น walker จะต้องเอาขึ้นลงได้ด้วย)')
    )
);
$TESTS[]=array(
    'eq'=>'8',
    'test_top'=>'ข้อที่ 8 การอาบน้ำ (Bathing)',
    'test_title'=>'',
    'choice'=>array(
        array( 'score'=>1,'src'=>'images/bar8-1.jpg','text'=>'ต้องมีคนช่วยหรือทำให้') ,
        array( 'score'=>0,'src'=>'images/bar8-2.jpg','text'=>'อาบน้ำเองได้')
    )
);
$TESTS[]=array(
    'eq'=>'9',
    'test_top'=>'ข้อที่ 9 การกลั้นการถ่ายอุจจาระ (Bowels)',
    'test_title'=>'ในระยะ 1 สัปดาห์ที่ผ่านมา',
    'choice'=>array(
        array( 'score'=>0,'src'=>'images/bar9-1.jpg','text'=>'กลั้นไม่ได้ หรือต้องการการสวนอุจจาระอยู่เสมอ') ,
        array( 'score'=>1,'src'=>'images/bar9-2.jpg','text'=>'กลั้นไม่ได้บางครั้ง (ไม่เกิน1 ครั้งต่อสัปดาห์)'),
        array( 'score'=>2,'src'=>'images/bar9-3.jpg','text'=>'กลั้นได้เป็นปกติ')
    )
);
$TESTS[]=array(
    'eq'=>'10',
    'test_top'=>'ข้อที่ 10 การกลั้นปัสสาวะ (Bladder)',
    'test_title'=>'ในระยะ 1 สัปดาห์ที่ผ่านมา',
    'choice'=>array(
        array( 'score'=>0,'src'=>'images/bar10-1.jpg','text'=>'กลั้นไม่ได้ หรือใส่สายสวนปัสสาวะแต่ไม่สามารถดูแลเองได้') ,
        array( 'score'=>1,'src'=>'images/bar10-2.jpg','text'=>'กลั้นไม่ได้บางครั้ง (ไม่เกินวันละ 1 ครั้ง)'),
        array( 'score'=>2,'src'=>'images/bar10-3.jpg','text'=>'กลั้นได้เป็นปกติ')
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
        $FileJson->writeFileBarthelADL($name,$gender,$type,$score);
        header( "location: /oldperson/barthel-result.php" );
        exit(0);
    }else{
        $_SESSION['T_SELECT'] = $ss;
        $_SESSION['T_EQ'] = intval($sq) + 1;
        $SET_EQ = intval($sq) + 1;
    }


}

$TEST = $TESTS[$SET_EQ-1];
$CHOICES = $TESTS[$SET_EQ-1]['choice'];





