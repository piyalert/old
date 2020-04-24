<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:08 PM
 */

$MENU = isset($MENU)?$MENU:'';
?>
<nav class="navbar navbar-expand-sm navbar-top">
    <a class="navbar-brand text-white" href="#"> &nbsp; </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="text-white"><i class="fa fa-list"></i></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample03" style="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php echo $MENU=='index'?'active':'';?>" href="/elderly/index.php"> หน้าหลัก <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $MENU=='test'?'active':'';?>" href="/elderly/test.php"> การประเมินความสามารถ </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $MENU=='image'?'active':'';?>" href="/elderly/image.php"> ภาพถ่ายกิจกรรม </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo $MENU=='score'?'active':'';?>" href="#" id="navbarDropdownScore" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> การแปรผลคะแนน </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownScore">
                    <a class="dropdown-item" href="/elderly/score.php">การปฏิบัติกิจวัตรประจำวันพื้นฐาน:ALD</a>
                    <a class="dropdown-item" href="/elderly/score-iadl.php">การปฏิบัติกิจวัตรประจำวันต่อเนื่อง:IALD</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $MENU=='about'?'active':'';?>" href="/elderly/about.php"> ผู้พัฒนา </a>
            </li>
        </ul>
    </div>
</nav>
