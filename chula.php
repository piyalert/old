<?php
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

    <?php include('_main_header.php');?>

</head>

<body>

<div class="super_container">

    <!-- Header -->
    <?php include('_main_menu_top.php');?>

    <div class="container" style="padding-top: 120px;">

        <div align="center">
            <h1>แบบทดสอบ chula ADL</h1>
            <hr>
        </div>

        <div align="center">
            <p style="font-size: 32px; color: orange">การประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันต่อเนื่อง</p>
            <p style="font-size: 22px; color: orange">แบบประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันต่อเนื่องที่นิยมใช้ในการประเมินของผู้สูงอายุไทย</p>
            <p style="font-size: 22px; color: orange">คือ  การประเมินความสามารถเชิงปฏิบัติ ดัชนีจุฬาเอดีแอล (Chula ADL Index)  </p>
            <p style="font-size: 22px; color: orange">เป็นความสามารถในการทำกิจกรรมที่ซับซ่อนขึ้นและเป็นกิจกรรมที่จำเป็น สำหรับการดำเนินชีวิตอย่างเป็นอิสระในชุมชน</p>
            <p style="font-size: 22px; color: orange">และการทำไม่ได้จะสะท้อนภาวะพึ่งพาของผู้สูงอายุ  บ่งบอกถึงความต้องการด้านการดูแล</p>
            <p style="font-size: 22px; color: orange">และการจัดบริการช่วยเหลือดูแล เป็นตัวชี้วัดสำคัญที่บอกให้ทราบถึงภาวการณ์พึ่งพิงหรือสุขภาพร่างกายของผู้สูงอายุ</p>

            <img class="zoom rounded" src="images/chulaadl.png" height="350px" width="350px">

            <div class="row mt-4">
                <div class="offset-3 col-md-6">
                    <form action="chula-test.php" method="post">
                        <div class="form-group row">
                            <label for="inputAgeId" class="col-sm-4 col-form-label col-form-label-lg">ช่วงอายุ:</label>
                            <div class="col-sm-8">
                            <select name="age" class="form-control form-control-lg" id="inputAgeId" required>
                                    <option value="60-69">60-69 ปี (ผู้สูงอายุตอนต้น)</option>
                                    <option value="70-79">อายุ 70-79 ปี (ผู้สูงอายุตอนปลาย)</option>
                                    <option value="80">อายุ 80 ปีขึ้นไป (ผู้สูงอายุตอนปลาย)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputGenderId" class="col-sm-4 col-form-label col-form-label-lg">เพศ:</label>
                            <div class="col-sm-8">
                                <select name="gender" class="form-control form-control-lg" id="inputGenderId" required>
                                    <option value="female">หญิง</option>
                                    <option value="male">ชาย</option>
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
