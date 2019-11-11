<?php

//include('controller/contactController.php');
include dirname(__file__).'/controller/contactController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('_main_header.php');?>

    <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap4.css">

</head>

<body>

<div class="super_container">

    <!-- Header -->
    <?php include('_main_menu_top.php');?>

    <div class="container" style="padding-top: 120px;">
        <div align="center">
            <h2>พัฒนาโดย</h2>
            <hr>
            <img src="images/contact.jpg" height="200px" width="200px"><br><br>
            <p>ผู้ช่วยศาสตราจารย์  สาวิตรี  สิงหาด</p>
            <p>คณะพยาบาลศาสตร์ มหาวิทยาลัยอุบลราชธานี</p>
            <p>โรงเรียนสร้างสุขผู้สูงอายุ  คณะพยาบาลศาสตร์ มหาวิทยาลัยอุบลราชธานี</p>
        </div>

        <hr>
    </div>

    <!-- Footer -->
    <?php include('_main_footer.php');?>

</div>


<?php include('_main_script.php');?>

<!-- Javascript Data Tables -->
<script type="text/javascript" src="plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="plugins/datatables/dataTables.bootstrap4.js"></script>


<script>
    //js data table
    $(document).ready(function() {
        $('.this-table').DataTable();
    } );
</script>


</body>
</html>
