<?php
include("path.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c37ac7a1ae.js" crossorigin="anonymous"></script>

    <script src="./assets/script/script.js"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../../assets/pic/customLogo.png">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <title>Home</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/fix/header.php"); ?>

    <div class="content-wrap">
        <div class="content">
            <h1>Welcome To<br>CRM Charity Foundation</h1>
            <p>With the belief that one should use one’s skill in helping other people, CRM-Charity Foundation aim to help other people by using our expertise in technology.
                <br>We focus in improving people’s education, and also helping other non-profit organization in area of technologies.
                <br>Based in Bangkok, the foundation is initiated by Cloud IT consulting expert in Thailand and the sponsors from technology companies and international organization.
            </p>
            <button class="objective-btn" onclick="window.location.href='/crmc/about-us.php'">
                What the Foundation Aims For
                <i class="fa-solid fa-arrow-pointer"></i>
            </button>
        </div>
    </div>

    <!-- Slide -->
    <div class="page-wrapper2">
        <div class="slide">
            <i class="fa-solid fa-circle-left prev"></i>
            <i class="fa-solid fa-circle-right next"></i>
            <div class="post-wrap">
                <div class="post">
                    <img class="post-img" src="./assets/pic/5.JPG" alt="Activity 1">
                    <div class="info">
                        <h4>BNCC Training</h4>
                        <p>Professional Development</p>
                        <div class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>January 15, 2015</span>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="post">
                    <img class="post-img" src="./assets/pic/4.JPG" alt="Activity 1">
                    <div class="info">
                        <h4>อบรมการทำ e-Portfolio</h4>
                        <p>BU</p>
                        <div class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>March 28, 2014</span>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="post">
                    <img class="post-img" src="./assets/pic/3.JPG" alt="Activity 1">
                    <div class="info">
                        <h4>Google Apps for Edu - Deep Dive</h4>
                        <p>DLIT</p>
                        <div class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>February 15, 2016</span>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="post">
                    <img class="post-img" src="./assets/pic/2.JPG" alt="Activity 1">
                    <div class="info">
                        <h4>Google Classroom - DLIT</h4>
                        <p>CRMC</p>
                        <div class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>January 31, 2015</span>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="post">
                    <img class="post-img" src="./assets/pic/1.jpg" alt="Activity 1">
                    <div class="info">
                        <h4>Google Apps for Education - SAU</h4>
                        <p>มหาวิทยาลัยเอเชียอาคเนย์</p>
                        <div class="post-date">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>January 15, 2014</span>
                        </div>
                    </div>
                </div>
                <!-- break -->
            </div>
        </div>
    </div>
    <!-- Slide -->

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/fix/footer.php"); ?>
    <!-- Footer -->

</body>

</html>