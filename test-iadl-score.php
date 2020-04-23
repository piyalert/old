<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/20/2020
 * Time: 12:43 AM
 */

session_start();
unset($_SESSION['T_EQ']);


$score = isset($_SESSION['T_SCORE'])?$_SESSION['T_SCORE']:0;
$score = intval($score);

$MENU = 'test';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('_header.php');?>
</head>
<body class="container">

<div class="page-body">
    <!-- image header -->
    <?php include('_header_top.php');?>

    <!-- menu -->
    <?php include('_menu_top.php');?>

    <!-- detail body -->
    <div style="min-height: 350px;">
        <div class="text-center font-weight-bold w-75 mx-auto p-2 text-brow rounded" style="background-image: url('./img/box-bg1.JPG'); background-size: 100% 100%;">
            <h5 class="mt-1">แบบประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันต่อเนื่อง</h5>
            <h5>การประเมินความสามารถเชิงปฏิบัติ ดัชนีจุฬาเอดีแอล (Chula ADL Index) </h5>
        </div>

        <div class="mt-5 p-1 bg-white mx-auto rounded <?php echo $score<=4?'':'d-none';?> " style="width: 90%">
            <div class="text-center">
                <p class="text-brow font-weight-bold"> คะแนนที่ได้ <?php echo ($score);?> คะแนน </p>
                <p class="text-brow font-weight-bold"> มีผลรวมคะแนน IADL อยู่ในช่วง 0-4 คะแนน </p>
                <p class="text-brow font-weight-bold"> ผู้สูงอายุ (กลุ่มติดเตียง) </p>
            </div>
            <div class="pl-3 pr-3 pb-5">
                <p class="font-weight-bold"> คำแนะนำในการดูแลผู้สูงอายุ</p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ญาติผู้ดูแลควรปรึกษาแพทย์เพื่อขอคำแนะนำในการดูแลผู้สูงอายุที่เหมาะสม เพื่อความปลอดภัย
                    ระมัดระวังเรื่องแผลกดทับโดยการหมั่นพลิกตัว เปลี่ยนท่านอนของผู้ป่วยทุกๆ 2 ชั่วโมง,
                    การขับถ่าย ควรหมั่นดูแลเรื่องความสะอาดและความเปียกชื้น, อาหารควรเป็นอาหารที่ย่อยง่าย ลดภาวะท้องอืดและท้องผูก
                    รวมไปถึงการทำกายภาพบำบัดของผู้สูงอายุที่ต้องนอนติดเตียงให้ถูกต้องเหมาะสม เพื่อป้องกันไม่ให้ข้อต่อต่างๆติดแข็ง
                    และยังเป็นการช่วยป้องกันภาวะแทรกซ้อน มุ่งสุขประโยชน์ที่พึงเกิดแก่ผู้สูงอายุเป็นหลัก 
                    สามารถใช้ชีวิตอยู่ในครอบครัวและชุมชนได้ตามอัตภาพและไม่เสียชีวิตก่อนวัยอันควร
                </span>
            </div>
        </div>

        <div class="mt-5 p-1 bg-white mx-auto rounded <?php echo $score>=5 && $score<=8?'':'d-none';?>" style="width: 90%">
            <div class="text-center">
                <p class="text-brow font-weight-bold"> คะแนนที่ได้ <?php echo ($score);?> คะแนน </p>
                <p class="text-brow font-weight-bold"> มีผลรวมคะแนน IADL อยู่ในช่วง 5-8 คะแนน </p>
                <p class="text-brow font-weight-bold"> ผู้สูงอายุ (กลุ่มติดบ้าน) </p>
                <!-- <p class="text-brow font-weight-bold"> low initial score, severe dependence </p> -->
            </div>
            <div class="pl-3 pr-3 pb-5">
                <p class="font-weight-bold"> คำแนะนำในการดูแลผู้สูงอายุ</p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ญาติผู้ดูแลควรให้ความสำคัญในการช่วยเหลือผู้สูงอายุที่เคลื่อนไหวได้ แต่อาจจะมีความลำบากหรือติดขัดในการเคลื่อนไหว 
                    หรือทำสิ่งต่างๆ ผู้ดูแลควรอำนวยความสะดวกให้ผู้สูงอายุมากที่สุดในการเคลื่อนไหวเพื่อทำกิจวัติต่างๆ เช่น 
                    อาจจัดหาอุปกรณ์ช่วยในการเดิน การดูแลสิ่งแวดล้อมความปลอดภัยภายในบ้าน การติดราวจับในห้องน้ำ หรือพื้นที่มีความลาดชัน 
                    รวมถึงวางสิ่งของให้เป็นระเบียบเพื่อป้องกันการหกล้มและอุบัติเหตุอื่นๆ การจัดเตรียมยาที่ถูกต้องเหมาะสม อย่างการติดฉลากยาให้ละเอียด 
                    การรับประทานอาหารเฉพาะโรค และการเอาใจใส่ดูแลเรื่องของสุขภาพจิต ด้วยความรัก ความเห็นอกเห็นใจ เพื่อป้องกันภาวะซึมเศร้า 
                    รวมไปถึงการหมั่นสังเกตความผิดปกติร่างกายของผู้สูงอายุเช่น อาการซึมเศร้า  เจ็บหน้าอก ไอเรื้อรัง  น้ำหนักลด 
                    หรืออาการผิดปกติที่แสดงออกทางร่างกายอื่นๆที่ต้องพาผู้สูงอายุไปพบแพทย์
                </span>
            </div>
        </div>

        <div class="mt-5 p-1 bg-white mx-auto rounded <?php echo $score>=9?'':'d-none';?>" style="width: 90%">
            <div class="text-center">
                <p class="text-brow font-weight-bold"> คะแนนที่ได้ <?php echo ($score);?> คะแนน </p>
                <p class="text-brow font-weight-bold"> มีผลรวมคะแนน IADL 9คะแนน </p>
                <p class="text-brow font-weight-bold"> ผู้สูงอายุ (กลุ่มติดสังคม) </p>
                <!-- <p class="text-brow font-weight-bold"> intermediate initial score, moderately severs dependence </p> -->
            </div>
            <div class="pl-3 pr-3 pb-5">
                <p class="font-weight-bold"> คำแนะนำในการดูแลผู้สูงอายุ</p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    การส่งเสริมสุขภาพและป้องกันโรคให้ผุ้สูงอายุมีสุขภาพแข็งแรง และชะลอการเกิดโรคเรื้อรัง ด้วยการปฏิบัตตนที่ถูกต้องและเหมาะสมตาม 5 อ. ของการดูแลสุขภาพผู้สูงอายุเพื่อการมีสุขภาพที่ดีและอายุยืนได้แก่
                    <span class="d-block">
                        1. อ.อาหาร รับประทานอาหารครบ 5 หมู่ทุกวัน ลดหวาน มัน เค็ม เน้นผัก ผลไม้ และดื่มน้ำอย่างน้อยวันละ 8 แก้ว
                    </span>
                    <span class="d-block">
                        2. ออกกำลังกายสม่ำเสมออย่างน้อย 3-4 ครั้งต่อสัปดาห์
                    </span>
                    <span class="d-block">
                        3. อ.อารมณ์ ส่งเสริมสุขภาพจิตและอารมณ์ มีจิตแจ่มใส มองโลกในแง่บวก
                    </span>
                    <span class="d-block">
                        4. อ.อดิเรก มีกิจกรรมงานอดิแรกที่ชอบเช่น ปลูกต้นไม้ อ่านหนังสือธรรมะ
                    </span>
                    <span class="d-block">
                        5. อ.อนามัย ดูแลสุขภาพช่องปากและฟัน ตรวจสุขภาพเป็นประจำทุกปี เป็นต้น
                    </span>
                    นอกจากนี้ ครอบครัวบุตรหลานควรช่วยกันดูแล เอาใจใส่ผู้สูงอายุอันเป็นการแสดงออกถึงความรักที่มีต่อผู้สูงอายุที่เป็นบุคคลสำคัญของครอบตรัวเพื่อให้ผู้สูงอายุมีสุขภาพกายและสุขภาพใจที่ดี มีความสุข มีคุณภาพชีวิตที่ดีตามวัย
                    อยู่กับบุตรหลานให้นานที่สุด
                </span>
            </div>
        </div>

    </div>


    <!-- footer -->
    <?php include('_footer.php');?>

</div>

<!-- script -->
<?php include('_script.php');?>


</body>
</html>

