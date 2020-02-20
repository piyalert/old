<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:04 PM
 */

$MENU = 'index';
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

        <div class="row">
            <div class="col-12 col-md-12">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic1.jpg" alt="image" style="max-height: 600px;">
            </div>
            <div class="col-12 col-md-6 mt-1">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic2.jpg" alt="image" style="max-height: 320px;">
            </div>
            <div class="col-12 col-md-6 mt-1">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic3.jpg" alt="image" style="max-height: 320px;">
            </div>
            <div class="col-12 col-md-6 mt-1">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic4.jpg" alt="image" style="max-height: 320px;">
            </div>
            <div class="col-12 col-md-6 mt-1">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic5.jpg" alt="image" style="max-height: 320px;">
            </div>
            <div class="col-12 col-md-4 mt-1">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic6.jpg" alt="image" style="max-height: 300px;">
            </div>
            <div class="col-12 col-md-4 mt-1">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic7.jpg" alt="image" style="max-height: 300px;">
            </div>
            <div class="col-12 col-md-4 mt-1">
                <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/pic8.jpg" alt="image" style="max-height: 300px;">
            </div>
        </div>

        <div class="mt-5 p-4 bg-white mx-auto rounded-20" style="width: 90%">

            <p>
                <span class="font-weight-bold text-brow">กลุ่มที่ 1 ผู้สูงอายุกลุ่มติดสังคม(well elder)</span>
                <span class="d-block"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    เป็นผู้สูงอายุที่ช่วยเหลือตนเองได้ดี  สุขภาพดี ไม่มีโรคเรื้อรัง หรือมีภาวะเสี่ยงต่อ
                    การเกิดโรค หรือมีโรคเรื้อรัง 1-2 โรค แต่ควบคุมโรคได้  สามารถใช้ชีวิตในสังคมได้โดยอิสระ
                    มักเข้าร่วมกิจกรรมในสังคม และมีศักยภาพในการช่วยเหลือผู้อื่น และสังคมได้
                </span>
            </p>

            <p>
                <span class="font-weight-bold text-brow " style="margin-top: 20px;">กลุ่มที่ 2 ผู้สูงอายุกลุ่มติดบ้าน (Home bound elder)</span>
                <span class="d-block"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    เป็นผู้สูงอายุที่ช่วยเหลือตนเองได้บ้างหรือต้องการความช่วยเหลือจากผู้อื่นเพียงบางส่วน
                    มีโรคเรื้อรังหลายโรค หรือมีภาวะแทรกซ้อนและมีกลุ่มอาการสำคัญของ
                    ผู้สูงอายุที่มีความจำกัดในการดำเนินชีวิตในสังคม

                </span>
            </p>

            <p>
                <span class="font-weight-bold text-brow">กลุ่มที่ 3 ผู้สูงอายุกลุ่มติดเตียง (bed bound elder) </span>
                <span class="d-block"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    เป็นผู้สูงอายุที่ไม่สามารถช่วยเหลือตนเองในการทำกิจวัตรประจำวันได้ ต้องการความช่วยเหลือ
                    พึ่งพาจากผู้อื่นในการเคลื่อนย้ายและการทำกิจวัตรประจำวันพื้นฐาน มีโรคเรื้อรังหลายโรคมีการเจ็บป่วย
                    เรื้อรังมายาวนาน มีภาวะแทรกซ้อนจากโรค มีความพิการหรือทุพพลภาพ
                </span>
            </p>


        </div>

    </div>



    <!-- footer -->
    <?php include('_footer.php');?>

</div>

<!-- script -->
<?php include('_script.php');?>


</body>
</html>
