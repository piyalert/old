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
            <h5 class="mt-1">การประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันต่อเนื่องของผู้สูงอายุ</h5>
            <h5>แบบประเมิน ดัชนีบาร์ ไอ เอดีแอล คะแนนเต็ม 20 คะแนน</h5>
        </div>

        <div class="mt-5 p-1 bg-white mx-auto rounded <?php echo $score<=4?'':'d-none';?> " style="width: 90%">
            <div class="text-center">
                <p class="text-brow font-weight-bold"> ภาวะพึ่งพาโดยสมบูรณ์ </p>
                <p class="text-brow font-weight-bold"> very low initial score, total dependence </p>
                <p class="text-brow font-weight-bold"> มีผลรวมคะแนน IADL อยู่ในช่วง 0-4 คะแนน </p>
            </div>
            <div class="pl-3 pr-3 pb-5 d-none">
                <p class="font-weight-bold"> คำแนะนำในการดูแลผู้สูงอายุ</p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    message detail
                </span>
            </div>
        </div>

        <div class="mt-5 p-1 bg-white mx-auto rounded <?php echo $score>=5 && $score<=8?'':'d-none';?>" style="width: 90%">
            <div class="text-center">
                <p class="text-brow font-weight-bold"> ภาวะพึ่งพารุนแรง </p>
                <p class="text-brow font-weight-bold"> low initial score, severe dependence </p>
                <p class="text-brow font-weight-bold"> มีผลรวมคะแนน IADL อยู่ในช่วง 5-8 คะแนน </p>
            </div>
            <div class="pl-3 pr-3 pb-5 d-none">
                <p class="font-weight-bold"> คำแนะนำในการดูแลผู้สูงอายุ</p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    message detail
                </span>
            </div>
        </div>

        <div class="mt-5 p-1 bg-white mx-auto rounded <?php echo $score>=9 && $score<=11?'':'d-none';?>" style="width: 90%">
            <div class="text-center">
                <p class="text-brow font-weight-bold"> ภาวะพึ่งปานกลาง </p>
                <p class="text-brow font-weight-bold"> intermediate initial score, moderately severs dependence </p>
                <p class="text-brow font-weight-bold"> มีผลรวมคะแนน IADL อยู่ในช่วง 9-11 คะแนน </p>
            </div>
            <div class="pl-3 pr-3 pb-5 d-none">
                <p class="font-weight-bold"> คำแนะนำในการดูแลผู้สูงอายุ</p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    message detail
                </span>
            </div>
        </div>

        <div class="mt-5 p-1 bg-white mx-auto rounded <?php echo $score>=12?'':'d-none';?>" style="width: 90%">
            <div class="text-center">
                <p class="text-brow font-weight-bold"> ไม่เป็นการพึ่งพา </p>
                <p class="text-brow font-weight-bold"> intermediate high, mildly moderately severs dependence , consideration of discharging home </p>
                <p class="text-brow font-weight-bold"> มีผลรวมคะแนน IADL อยู่ในช่วง 12 คะแนนขึ้นไป </p>
            </div>
            <div class="pl-3 pr-3 pb-5 d-none">
                <p class="font-weight-bold"> คำแนะนำในการดูแลผู้สูงอายุ</p>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    message detail
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

