<?php
require_once __DIR__.'/../model/UserModel.php';
$MUser = new UserModel();

$input_name = $MUser->getInput('name','');
if($input_name!==''){
    $input_age = $MUser->getInput('age','50');
    $_SESSION['U_NAME'] = $input_name;
    $_SESSION['U_AGE']= $input_age;
    $_SESSION['T_EQ'] = 1;
    $_SESSION['T_SELECT'] = [];
}


if(!isset($_SESSION['T_EQ'])){
    header( "location: /old/barthel.php" );
    exit(0);
}

$SET_EQ = isset($_SESSION['T_EQ'])?$_SESSION['T_EQ']:1;

$TESTS = [];
$TESTS[]=[
    'eq'=>'1',
    'test_top'=>'ข้อที่ 1 การรับประทานอาหาร (Feeding)',
    'test_title'=>'รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า',
    'choice'=>[
        [ 'score'=>0 , 'src'=>'images/bar1-1.jpg','text'=>'ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้'] ,
        [ 'score'=>1 , 'src'=>'images/bar1-2.jpg','text'=>' กินอาหารเองได้แต่ต้องมีคนช่วย เช่น ช่วยตักเตรียมไว้ให้หรือตัดเป็นเล็กๆไว้ล่วงหน้า'],
        [ 'score'=>2 , 'src'=>'images/bar1-3.jpg','text'=>'ตักอาหารและช่วยตัวเองได้เป็นปกติ'],
    ]
];
$TESTS[]=[
    'eq'=>'2',
    'test_top'=>'ข้อที่ 2 ล้างหน้า หวีผม แปรงฟัน โกนหนวด  (Grooming)',
    'test_title'=>'ในระยะเวลา  24-48 ชั่วโมงที่ผ่านมา',
    'choice'=>[
        [ 'score'=>0, 'src'=>'images/bar2-1.jpg','text'=>'ต้องการความช่วยเหลือ'] ,
        [ 'src'=>'images/bar2-2.jpg','text'=>'ทำเองได้ (รวมทั้งที่ทำได้เองถ้าเตรียมอุปกรณ์ไว้ให้)'],
    ]
];
$TESTS[]=[
    'eq'=>'3',
    'test_top'=>'ข้อที่ 3 ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้ (Transfer)',
    'test_title'=>'',
    'choice'=>[
        [ 'score'=>0,'src'=>'images/bar3-1.jpg','text'=>'ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ)หรือต้องใช้คนสองคนช่วยกันยกขึ้น'] ,
        [ 'score'=>1,'src'=>'images/bar3-2.jpg','text'=>'ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้  เช่น  ต้องใช้คนที่แข็งแรงหรือมีทักษะ 1 คน หรือใช้คนทั่วไป  2  คนพยุงหรือดันขึ้นมาจึงจะนั่งอยู่ได้'],
        [ 'score'=>2,'src'=>'images/bar3-3.jpg','text'=>'ต้องการความช่วยเหลือบ้าง เช่น บอกให้ทำตาม หรือช่วยพยุงเล็กน้อย หรือต้องมีคนดูแลเพื่อความปลอดภัย'],
        [ 'score'=>3,'src'=>'images/bar3-4.jpg','text'=>'ทำได้เอง'],
    ]
];
$TESTS[]=[
    'eq'=>'4',
    'test_top'=>'ข้อที่ 4 ใช้ห้องน้ำ (Toilet use)',
    'test_title'=>'',
    'choice'=>[
        [ 'score'=>0,'src'=>'images/bar4-1.jpg','text'=>'ช่วยตัวเองไม่ได้'] ,
        [ 'score'=>1,'src'=>'images/bar4-2.jpg','text'=>'ทำเองได้บ้าง  (อย่างน้อยทำความสะอาดตัวเองได้หลังจากเสร็จธุระ) แต่ต้องการความช่วยเหลือในบางสิ่ง'],
        [ 'score'=>2,'src'=>'images/bar4-3.jpg','text'=>'ช่วยตัวเองได้ดี (ขึ้นนั่งและลงจากโถส้วมเองได้ ทำความสะอาดได้เรียบร้อยหลังจากเสร็จธุระ  ถอดใส่เสื้อผ้าได้เรียบร้อย)']
    ]
];
$TESTS[]=[
    'eq'=>'5',
    'test_top'=>'ข้อที่ 5 การเคลื่อนที่ภายในห้องหรือบ้าน (Mobility)',
    'test_title'=>'',
    'choice'=>[
        [ 'score'=>0,'src'=>'images/bar5-1.jpg','text'=>'เคลื่อนที่ไปไหนไม่ได้'] ,
        [ 'score'=>1,'src'=>'images/bar5-2.jpg','text'=>'ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง (ไม่ต้องมีคนเข็นให้) และจะต้องเข้าออกมุมห้อง หรือประตูได้'],
        [ 'score'=>2,'src'=>'images/bar5-3.jpg','text'=>'เดินหรือเคลื่อนที่โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม หรือต้องให้ความสนใจดูแลเพื่อความปลอดภัย'],
        [ 'score'=>3,'src'=>'images/bar5-4.jpg','text'=>'เดินหรือเคลื่อนที่ได้เอง'],
    ]
];
$TESTS[]=[
    'eq'=>'6',
    'test_top'=>'ข้อที่ 6 การสวมใส่เสื้อผ้า (Dressing)',
    'test_title'=>'',
    'choice'=>[
        [ 'score'=>0,'src'=>'images/bar6-1.jpg','text'=>'ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้หรือได้น้อย'] ,
        [ 'score'=>1,'src'=>'images/bar6-2.jpg','text'=>'ช่วยตัวเองได้ประมาณร้อยละ 50 ที่เหลือต้องมีคนช่วย'],
        [ 'score'=>2,'src'=>'images/bar6-3.jpg','text'=>'ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิบ หรือใช้เสื้อผ้าที่ดัดแปลงให้เหมาะสมก็ได้)']
    ]
];
$TESTS[]=[
    'eq'=>'7',
    'test_top'=>'ข้อที่ 7 การขึ้นลงบันได 1 ชั้น (Stairs)',
    'test_title'=>'',
    'choice'=>[
        [ 'score'=>0,'src'=>'images/bar7-1.jpg','text'=>'ไม่สามารถทำได้'] ,
        [ 'score'=>1,'src'=>'images/bar7-2.jpg','text'=>'ต้องการคนช่วย'],
        [ 'score'=>2,'src'=>'images/bar7-3.jpg','text'=>'ขึ้นลงได้เอง (ถ้าต้องใช้เครื่องช่วยเดิน เช่น walker จะต้องเอาขึ้นลงได้ด้วย)']
    ]
];
$TESTS[]=[
    'eq'=>'8',
    'test_top'=>'ข้อที่ 8 การอาบน้ำ (Bathing)',
    'test_title'=>'',
    'choice'=>[
        [ 'score'=>1,'src'=>'images/bar8-1.jpg','text'=>'ต้องมีคนช่วยหรือทำให้'] ,
        [ 'score'=>0,'src'=>'images/bar8-2.jpg','text'=>'อาบน้ำเองได้']
    ]
];
$TESTS[]=[
    'eq'=>'9',
    'test_top'=>'ข้อที่ 9 การกลั้นการถ่ายอุจจาระ (Bowels)',
    'test_title'=>'ในระยะ 1 สัปดาห์ที่ผ่านมา',
    'choice'=>[
        [ 'score'=>0,'src'=>'images/bar9-1.jpg','text'=>'กลั้นไม่ได้ หรือต้องการการสวนอุจจาระอยู่เสมอ'] ,
        [ 'score'=>1,'src'=>'images/bar9-2.jpg','text'=>'กลั้นไม่ได้บางครั้ง (ไม่เกิน1 ครั้งต่อสัปดาห์)'],
        [ 'score'=>2,'src'=>'images/bar9-3.jpg','text'=>'กลั้นได้เป็นปกติ']
    ]
];
$TESTS[]=[
    'eq'=>'10',
    'test_top'=>'ข้อที่ 10 การกลั้นปัสสาวะ (Bladder)',
    'test_title'=>'ในระยะ 1 สัปดาห์ที่ผ่านมา',
    'choice'=>[
        [ 'score'=>0,'src'=>'images/bar10-1.jpg','text'=>'กลั้นไม่ได้ หรือใส่สายสวนปัสสาวะแต่ไม่สามารถดูแลเองได้'] ,
        [ 'score'=>1,'src'=>'images/bar10-2.jpg','text'=>'กลั้นไม่ได้บางครั้ง (ไม่เกินวันละ 1 ครั้ง)'],
        [ 'score'=>2,'src'=>'images/bar10-3.jpg','text'=>'กลั้นได้เป็นปกติ']
    ]
];




//----------------------------------------------------
$sq = $MUser->getInput('sq','-');
$select = $MUser->getInput('select','-');
if($sq!='-' && $select!='-'){
    $ss = $_SESSION['T_SELECT'] ;
    $ss[$sq-1] = $select;

    $_SESSION['T_SELECT'] = $ss;
    $_SESSION['T_EQ'] = intval($sq) + 1;
    $SET_EQ = intval($sq) + 1;
    echo json_encode($ss);exit;
}

$TEST = $TESTS[$SET_EQ-1];
$CHOICES = $TESTS[$SET_EQ-1]['choice'];





