<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:13 PM
 */

$MENU = 'about';
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
        <div align="center">
            <h1>พัฒนาโดย</h1>
            <hr>
            <img src="./img/contact.jpg" height="200px" width="200px"><br><br>
            <p>
                <span class="font-weight-bold text-brow">ผู้ช่วยศาสตราจารย์  สาวิตรี  สิงหาด</span> <br><br>
                <span class="font-weight-bold text-brow">คณะพยาบาลศาสตร์ มหาวิทยาลัยอุบลราชธานี</span> <br><br>
                <span class="font-weight-bold text-brow">โรงเรียนสร้างสุขผู้สูงอายุ  คณะพยาบาลศาสตร์ มหาวิทยาลัยอุบลราชธานี</span><br>
            </p>
            <br><br>
            <img src="./img/contact2.jpg" height="200px" width="200px"><br><br>
            <p>
                <span class="font-weight-bold text-brow">ผู้ช่วยศาสตราจารย์ ดร. อธิพงศ์ สุริยา</span> <br><br>
                <span class="font-weight-bold text-brow">ภาควิชาวิศวกรรมไฟฟ้าและอิเล็กทรอนิกส์ คณะวิศวกรรมศาสตร์ มหาวิทยาลัยอุบลราชธานี</span> <br><br>
                <span class="font-weight-bold text-brow">ผู้อำนวยการสำนักคอมพิวเตอร์และเครือข่าย มหาวิทยาลัยอุบลราชธานี <br>
                                                         ผู้อำนวยการสำนักวิทยบริการ มหาวิทยาลัยอุบลราชธานี</span><br>
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
