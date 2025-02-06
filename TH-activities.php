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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../../assets/pic/customLogo.png">
    <?php include("google.php"); ?>

    <title>Activities - CRM-C</title>
</head>

<body>
    <!-- header -->
    <?php include(ROOT_PATH . "/app/fix/TH-header.php"); ?>
    <!-- header -->

    <div class="about-section">
        <h1>กิจกรรม</h1>
        <div class="about-bar1">
            <span>กิจกรรมของมูลนิธิ</span>
        </div>
    </div>



    <!-- Activity blog -->
    <div class="blog">
        <div class="main-blog">
            <h1 class="activity-title">Activities</h1>

            <div class="blog-post">
                <img src="./assets/pic/5.JPG" alt="" class="blog-post-img">
                <div class="blog-preview">
                    <h2>BNCC Training</h2>
                    <p>Professional Development</p>
                    <div class="post-date">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>January 15, 2015</span>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="blog-post">
                <img src="./assets/pic/4.JPG" alt="" class="blog-post-img">
                <div class="blog-preview">
                    <h2>อบรมการทำ e-Portfolio</h2>
                    <p>BU</p>
                    <div class="post-date">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>March 28, 2014</span>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="blog-post">
                <img src="./assets/pic/3.JPG" alt="" class="blog-post-img">
                <div class="blog-preview">
                    <h2>Google Apps for Edu - Deep Dive</h2>
                    <p>DLIT</p>
                    <div class="post-date">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>February 15, 2016</span>
                    </div>
                </div>
            </div>
            <!-- break -->
            <div class="blog-post">
                <img src="./assets/pic/2.JPG" alt="" class="blog-post-img">
                <div class="blog-preview">
                    <h2>Google Classroom - DLIT</h2>
                    <p>CRMC Google Classroom - DLIT</p>
                    <div class="post-date">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>January 30, 2014</span>
                    </div>
                </div>
            </div>
            <!-- brake -->
            <div class="blog-post">
                <img src="./assets/pic/1.jpg" alt="" class="blog-post-img">
                <div class="blog-preview">
                    <h2>Google Apps for Education - SAU</h2>
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


    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/fix/TH-footer.php"); ?>
    <!-- Footer -->

</body>

</html>
