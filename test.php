<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:12 PM
 */

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



        <div class="mt-5 p-1 bg-white mx-auto rounded-20" style="width: 90%">
            <div class="text-center mt-4">
                <a class="text-brow" href="/elderly/test-adl.php">
                    <span class="d-block"> การประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันพื้นฐานของผู้สูงอายุ </span>
                    <small>( basic activities of daily living: ADL )</small>
                </a>
            </div>
            <div class="text-center mt-4 mb-4">
                <a class="text-brow" href="/elderly/test-iadl.php">
                    <span class="d-block"> การประเมินความสามารถในการปฏิบัติกิจวัตรประจำวันต่อเนื่องของผู้สูงอายุ  </span>
                    <small>( instrumental activities of daily living: IADL )</small>
                </a>
            </div>
        </div>

        <div class="mt-5">
            <img class="img-fluid img-thumbnail mx-auto d-block rounded" src="./img/img_test.jpg" alt="image" style="max-height: 400px;">
        </div>



    </div>


    <!-- footer -->
    <?php include('_footer.php');?>

</div>

<!-- script -->
<?php include('_script.php');?>


</body>
</html>

