<?php
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

    <div class="row" style="padding-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 border">
                    <div class="m-1 border">
                        <div class="">
                            <img class="w-100 rounded" src="images/main_pic.jpg">
                            <div class="p-2 text-center" style="background-color: #CACFD2;">
                                <h4>อีกเพียง 4 ปี ประเทศไทยจะเข้าสู่ "สังคมสูงวัยอย่างสมบูรณ์"</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col-md-6 border">
                            <img class="w-100 rounded" src="images/data1.jpg">
                        </div>
                        <div class="col-md-6 border">
                            <img class="w-100 h-100 rounded" src="images/data2.jpg">
                        </div>
                    </div>

                </div>
                <div class="col-md-4 border" bg-danger>
                    <div class="m-0">
                        <img class="w-100" src="images/data3.jpg" style="height: 350px;">
                    </div>
                    <div class="mt-3">
                        <img class="w-100" src="images/data4.jpg">
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-4">
                <div class="card">
                    <a href="social.php">
                        <img class="zoom card-img" src="images/1_social.png" alt="Card image" style="height: 300px;">
                        <div class="card-footer text-center">
                            <h3>กลุ่มติดสังคม</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="home.php">
                        <img class="zoom card-img" src="images/2_home.jpg" alt="Card image" style="height: 300px;">

                        <div class="card-footer text-center">
                            <h3>กลุ่มติดบ้าน</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="bed.php">
                        <img class="zoom card-img" src="images/3_bed.jpg" alt="Card image" style="height: 300px;">

                        <div class="card-footer text-center">
                            <h3>กลุ่มติดเตียง</h3>
                        </div>
                    </a>
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
