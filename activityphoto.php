<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('_main_header.php');?>

    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 60%;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: blue;
            font-size: 20px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: red;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: green;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1s;
            animation-name: fade;
            animation-duration: 10s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next, .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>

<div class="super_container">

    <!-- Header -->
    <?php include('_main_menu_top.php');?>

    <div class="container" style="padding-top: 120px;">

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 20</div>
                <img src="images/activity/1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 20</div>
                <img src="images/activity/2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 20</div>
                <img src="images/activity/3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 20</div>
                <img src="images/activity/4.jpg" style="width:100%">
                <div class="text">Caption four</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 20</div>
                <img src="images/activity/5.jpg" style="width:100%">
                <div class="text">Caption five</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 20</div>
                <img src="images/activity/6.jpg" style="width:100%">
                <div class="text">Caption six</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 20</div>
                <img src="images/activity/7.jpg" style="width:100%">
                <div class="text">Caption seven</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 20</div>
                <img src="images/activity/8.jpg" style="width:100%">
                <div class="text">Caption eight</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">9 / 20</div>
                <img src="images/activity/9.jpg" style="width:100%">
                <div class="text">Caption nine</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">10 / 20</div>
                <img src="images/activity/10.jpg" style="width:100%">
                <div class="text">Caption ten</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">11 / 20</div>
                <img src="images/activity/11.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">12 / 20</div>
                <img src="images/activity/12.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">13 / 20</div>
                <img src="images/activity/13.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">14 / 20</div>
                <img src="images/activity/14.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">15 / 20</div>
                <img src="images/activity/15.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">16 / 20</div>
                <img src="images/activity/16.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">17 / 20</div>
                <img src="images/activity/17.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">18 / 20</div>
                <img src="images/activity/18.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">19 / 20</div>
                <img src="images/activity/19.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">20 / 20</div>
                <img src="images/activity/20.jpg" style="width:100%">
                <div class="text">Caption</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
            <span class="dot" onclick="currentSlide(12)"></span>
            <span class="dot" onclick="currentSlide(13)"></span>
            <span class="dot" onclick="currentSlide(14)"></span>
            <span class="dot" onclick="currentSlide(15)"></span>
            <span class="dot" onclick="currentSlide(16)"></span>
            <span class="dot" onclick="currentSlide(17)"></span>
            <span class="dot" onclick="currentSlide(18)"></span>
            <span class="dot" onclick="currentSlide(19)"></span>
            <span class="dot" onclick="currentSlide(20)"></span>
        </div>

    </div>

    <!-- Footer -->
    <?php include('_main_footer.php');?>

</div>


<?php include('_main_script.php');?>

<script>

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    function selectChoose(select) {
        $("#customRadio" + select).click();
    }

</script>

</body>
</html>
