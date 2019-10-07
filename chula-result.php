<?php
session_start();
unset($_SESSION['T_EQ']);


$score = isset($_SESSION['T_SCORE'])?$_SESSION['T_SCORE']:0;
$score = intval($score);
$str_score = '';
$str_th = '';
$str_en = '';
if($score <= 4){
    $str_score = '0 - 4 คะแนน';
    $str_th = 'กลุ่มติดเตียง';
    $str_en = 'ผู้สูงอายุที่มีความสามารถในการปฏิบัติกิจวัตรประจำวันน้อย';
}elseif ($score <= 8){
    $str_score = '5 - 8 คะแนน';
    $str_th = 'กลุ่มติดบ้าน';
    $str_en = 'ผู้สูงอายุที่มีความสามารถในการปฏิบัติกิจวัตรประจำวันปานกลาง';
}else{
    $str_score = '9 คะแนน';
    $str_th = 'กลุ่มติดสังคม';
    $str_en = 'ผู้สูงอายุที่มีความสามารถในการปฏิบัติกิจวัตรประจำวันมาก';
}


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

        <!-- header -->
        <h2>ดัชนีจุฬา เอดีแอล (Chula ADL index)</h2>
        <hr>

        <div class="alert alert-warning p-5" role="alert">


            <div class="text-center">
                <h2 class="alert-heading text-danger font-weight-bold"> <?php echo $str_score; ?></h2>
                <hr>
                <h2 class="alert-heading"> <?php echo $str_th; ?> </h2>
                <h3 class="alert-heading"> <?php echo $str_en; ?> </h3>
            </div>

            <p class="font-weight-bold" style="font-size: 25px"  hidden>
                รายละเอียดเกี่ยวกับ
            </p>

        </div>

        <div class="row pt-5">
            <div class="offset-3 col-md-6">
                <a class="btn btn-success btn-lg btn-block" href="/old/chula.php">
                    <h3 class="font-weight-bold text-white">กลับไปยังหน้าหลัก</h3>
                </a>
            </div>
        </div>


    </div>

    <!-- Footer -->
    <?php include('_main_footer.php');?>

</div>


<?php include('_main_script.php');?>
<?php include('_modal_message.php');?>

<script>

</script>

</body>
</html>
