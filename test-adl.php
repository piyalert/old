<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:39 PM
 */

$MENU = 'test';

session_start();
unset($_SESSION['U_NAME']);
unset($_SESSION['U_AGE']);
unset($_SESSION['U_GENDER']);
unset($_SESSION['T_EQ']);
unset($_SESSION['T_SELECT']);

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

        <div class="text-center font-weight-bold w-75 mx-auto p-2 mt-5 text-brow rounded-20" style="background-image: url('./img/box-bg1.JPG'); background-size: 100% 100%;">
            <h5 class="mt-1">การประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันพื้นฐานของผู้สูงอายุ</h5>
            <h5> ( basic activities of daily living: ADL ) </h5>
        </div>
        <div class="mt-2 p-1 bg-white mx-auto rounded-20" style="width: 90%">
            <div class="pl-3 pr-3 pb-5">
                <p class="font-weight-bold"> แบบประเมิน ดัชนีบาร์ เทล เอดีแอล (Barthel ADL index) </p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        โดยประเมินว่าทำกิจกรรมเหล่านี้ได้ด้วยตนเองทั้งหมด หรือทำได้โดยมีผู้ช่วย
                        หรือทำไม่ได้เลย ซึ่งการต้องการผู้ช่วยและการทำไม่ได้จะสะท้อนภาวะพึ่งพา
                        ของผู้สูงอายุ บ่งบอกถึงความต้องการด้านการดูแลและการจัดการบริการช่วยเหลือดูแล
                        เป็นตัวชี้วัดสำคัญที่บอกให้ทราบถึงภาวการณ์พึ่งพิงหรือสุขภาพร่างกายของผู้สูงอายุ
                </span>
            </div>
        </div>

        <div class="mt-3">
            <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/adl.jpg" alt="image" style="max-height: 200px;">
        </div>

        <div class="mt-2 w-50 d-block mx-auto">
            <form method="post" action="/oldperson/test-adl-test.php">
                <div class="form-group row">
                    <label for="longtimeId" class="col-sm-2 col-form-label">ช่วงอายุ</label>
                    <div class="col-sm-10">
                        <select class="form-control-plaintext text-danger font-weight-bold border" name="age" id="longtimeId">
                            <option value="1">60-69 ปี (ผู้สูงอายุตอนต้น)</option>
                            <option value="2">70-79 ปี (ผู้สูงอายุตอนปลาย)</option>
                            <option value="3">80 ปีขึ้นไป (ผู้สูงอายุตอนปลาย)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sexId" class="col-sm-2 col-form-label">เพศ</label>
                    <div class="col-sm-10">
                        <select class="form-control-plaintext text-danger font-weight-bold border" name="gender" id="sexId">
                            <option value="f">หญิง</option>
                            <option value="m">ชาย</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nameId" class="col-sm-3 col-form-label">กรุณาระบุชื่อ</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext border" id="nameId" name="name" placeholder="ชื่อ" autocomplete="off" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-sm" type="submit"> เริ่มทำแบบทดสอบ </button>
                </div>
            </form>
        </div>


    </div>



    <!-- footer -->
    <?php include('_footer.php');?>

</div>

<!-- script -->
<?php include('_script.php');?>


</body>
</html>
