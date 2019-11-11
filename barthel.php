<?php
session_start();
unset($_SESSION['U_NAME']);
unset($_SESSION['U_AGE']);
unset($_SESSION['T_EQ']);
unset($_SESSION['T_SELECT']);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('_main_header.php');?>

</head>

<body>

<div class="super_container">

    <!-- Header -->
    <?php include('_main_menu_top.php');?>

    <div class="container" style="padding-top: 120px;">

        <div align="center">
            <h1>แบบทดสอบ Barthel ADL</h1>
            <hr>
        </div>

        <div align="center">
            <p style="font-size: 32px; color: orange">การประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันพื้นฐานของผู้สูงอายุ</p>
            <p style="font-size: 22px; color: orange">   แบบประเมินที่ใช้ในการประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันพื้นฐานของ</p>
            <p style="font-size: 22px; color: orange">ผู้สูงอายุ ที่นิยมใช้ในการประเมินของผู้สูงอายุไทย  คือ ดัชนีบาร์ เทล เอดีแอล (Barthel ADL index)</p>
            <p style="font-size: 22px; color: orange">โดยประเมินว่าทำกิจกรรมเหล่านี้ได้ด้วยตนเองทั้งหมด หรือทำได้โดยมีผู้ช่วย หรือทำไม่ได้เลย </p>
            <p style="font-size: 22px; color: orange">ซึ่งการต้องการผู้ช่วยและการทำไม่ได้จะสะท้อนภาวะพึ่งพาของผู้สูงอายุ  บ่งบอกถึงความต้องการด้านการดูแล</p>
            <p style="font-size: 22px; color: orange">และการจัดบริการช่วยเหลือดูแล เป็นตัวชี้วัดสำคัญที่บอกให้ทราบถึงภาวการณ์พึ่งพิงหรือสุขภาพร่างกายของผู้สูงอายุ</p>

            <img class="zoom rounded" src="images/barthel.png" height="350px" width="350px">

            <div class="row">
                <div class="offset-3 col-md-6">
                    <form action="barthel-test.php" method="post">
                        <div class="form-group row">
                            <label for="inputAgeId" class="col-sm-4 col-form-label col-form-label-lg">ช่วงอายุ:</label>
                            <div class="col-sm-8">
                                <select name="age" class="form-control form-control-lg" id="inputAgeId" required>
                                    <option value="60-69">60-69 ปี (ผู้สูงอายุตอนต้น)</option>
                                    <option value="70-79">อายุ 70-79 ปี (ผู้สูงอายุตอนปลาย)</option>
                                    <option value="80">อายุ 80 ปีขึ้นไป (ผู้สูงอายุตอนปลาย)</option>
                                </select>

                                <select name="sex" class="form-control form-control-lg" id="inputASexId" required>
                                    <option value="m">ชาย</option>
                                    <option value="f">หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNameId" class="col-sm-4 col-form-label col-form-label-lg">กรุณาระบุชื่อ:</label>
                            <div class="col-sm-8">
                                <input name="name" type="text" class="form-control form-control-lg" id="inputNameId" placeholder="ชื่อ" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">เริ่มทำแบบทดสอบ</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer -->
    <?php include('_main_footer.php');?>

</div>

<?php include('_main_script.php');?>


</body>
</html>
