<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:41 PM
 */
session_start();
unset($_SESSION['U_NAME']);
unset($_SESSION['U_AGE']);
unset($_SESSION['U_GENDER']);
unset($_SESSION['T_EQ']);
unset($_SESSION['T_SELECT']);

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

        <div class="text-center font-weight-bold w-75 mx-auto p-2 mt-5 text-brow rounded-20" style="background-image: url('./img/box-bg1.JPG'); background-size: 100% 100%;">
            <h5 class="mt-1">การประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันต่อเนื่องของผู้สูงอายุ </h5>
            <h5> ( instrumental activities of daily living: IADL ) </h5>
        </div>
        <div class="mt-2 p-1 bg-white mx-auto rounded-20" style="width: 90%">
            <div class="pl-3 pr-3 pb-5">
                <!-- <p class="font-weight-bold"> แบบประเมิน ดัชนีบาร์ ไอ เอดีแอล (instrumental activities of daily living) </p> -->
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    แบบประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันต่อเนื่อง ที่นิยมใช้ในการประเมินของผู้สูงอายุไทย 
                    คือ  การประเมินความสามารถเชิงปฏิบัติ ดัชนีจุฬาเอดีแอล (Chula ADL Index)  
                    เป็นความสามารถในการทำกิจกรรมที่ซับซ่อนขึ้นและเป็นกิจกรรมที่จำเป็น  
                    สำหรับการดำเนินชีวิตอย่างเป็นอิสระในชุมชน  และการทำไม่ได้จะสะท้อนภาวะพึ่งพาของผู้สูงอายุ  
                    บ่งบอกถึงความต้องการด้านการดูแลและการจัดบริการช่วยเหลือดูแล 
                    เป็นตัวชี้วัดสำคัญที่บอกให้ทราบถึงภาวการณ์พึ่งพิงหรือสุขภาพร่างกายของผู้สูงอายุ
                </span>
            </div>
        </div>

        <div class="mt-3">
            <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/adl.jpg" alt="image" style="max-height: 200px;">
        </div>

        <div class="mt-2 w-50 d-block mx-auto">
            <form method="post" action="/oldperson/test-iadl-test.php">
                <div class="form-group row">
                    <label for="longtimeId" class="col-sm-2 col-form-label">ช่วงอายุ</label>
                    <div class="col-sm-10">
                        <select name="age" class="form-control-plaintext text-danger font-weight-bold border" id="longtimeId">
                            <option value="1">60-69 ปี (ผู้สูงอายุตอนต้น)</option>
                            <option value="2">70-79 ปี (ผู้สูงอายุตอนกลาง)</option>
                            <option value="3">80 ปีขึ้นไป (ผู้สูงอายุตอนปลาย)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sexId" class="col-sm-2 col-form-label">เพศ</label>
                    <div class="col-sm-10">
                        <select name="gender" class="form-control-plaintext text-danger font-weight-bold border" class="form-control-plaintext border" id="sexId">
                            <option value="f">หญิง</option>
                            <option value="m">ชาย</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- <label for="nameId" class="col-sm-3 col-form-label">กรุณาระบุชื่อ</label> -->
                    <div class="col-sm-9">
                        <!-- <input name="name" type="text" class="form-control-plaintext border" id="nameId" placeholder="ชื่อ" autocomplete="off" required> -->
                        <input name="name" type="text" class=" d-none" value = "-" form-control-plaintext border" id="nameId" placeholder="ชื่อ" autocomplete="off" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-sm"> เริ่มทำแบบทดสอบ </button>
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
