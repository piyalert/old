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
            <h2>ผู้จัดทำ</h2>
            <hr>
            <img src="images/contact.jpg" height="200px" width="200px"><br><br>
            <p>ผู้ช่วยศาสตราจารย์  สาวิตรี  สิงหาด</p>
            <p>คณะพยาบาลศาสตร์ มหาวิทยาลัยอุบลราชธานี</p>
            <p>โรงเรียนสร้างสุขผู้สูงอายุ  คณะพยาบาลศาสตร์ มหาวิทยาลัยอุบลราชธานี</p>
        </div>

        <hr>
        <h4>แบบทดสอบ Barthel ADL</h4>
        <div class="table-responsive">
            <table class="this-table table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>วันที่</th>
                    <th>ชื่อ</th>
                    <th>เพศ</th>
                    <th>ช่วงอายุ</th>
                    <th>คะแนน</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($BARTHEL as $key=>$item): ?>
                <tr>
                    <td><?php echo ($key+1); ?></td>
                    <td><?php echo $item['create_at']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['gender']=='male'?'ชาย':'หญิง'; ?></td>
                    <td><?php echo $item['type']; ?></td>
                    <td><?php echo $item['score']; ?></td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>


        <hr>
        <h4>แบบทดสอบ Chula ADL</h4>
        <div class="table-responsive">
            <table class="this-table table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>วันที่</th>
                    <th>ชื่อ</th>
                    <th>เพศ</th>
                    <th>ช่วงอายุ</th>
                    <th>คะแนน</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($CHULA as $key=>$item): ?>
                    <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo $item['create_at']; ?></td>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['gender']=='male'?'ชาย':'หญิง'; ?></td>
                        <td><?php echo $item['type']; ?></td>
                        <td><?php echo $item['score']; ?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>

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
