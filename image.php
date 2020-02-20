<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:14 PM
 */

$MENU = 'image';
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


        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
                <li data-target="#demo" data-slide-to="7"></li>
                <li data-target="#demo" data-slide-to="8"></li>
                <li data-target="#demo" data-slide-to="9"></li>
                <li data-target="#demo" data-slide-to="10"></li>
                <li data-target="#demo" data-slide-to="11"></li>
                <li data-target="#demo" data-slide-to="12"></li>
                <li data-target="#demo" data-slide-to="13"></li>
                <li data-target="#demo" data-slide-to="14"></li>
                <li data-target="#demo" data-slide-to="15"></li>
                <li data-target="#demo" data-slide-to="16"></li>
                <li data-target="#demo" data-slide-to="17"></li>
                <li data-target="#demo" data-slide-to="18"></li>
                <li data-target="#demo" data-slide-to="19"></li>
            </ul>

            <!-- The slideshow -->
            <div class="text-center">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/activity/1.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/2.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/3.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/4.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/5.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/6.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/7.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/8.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/9.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/10.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/11.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/12.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/13.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/14.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/15.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/16.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/17.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/18.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/19.jpg" alt="image" style="max-height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/activity/20.jpg" alt="image" style="max-height: 500px;">
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </div>
    

    <!-- footer -->
    <?php include('_footer.php');?>

</div>

<!-- script -->
<?php include('_script.php');?>


</body>
</html>


