<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

    <div class="navbar">
        <div class="navbar-left">
            <div class="links-right">
                <div class="link-item">
                    <a href="./meetings.html">مقابلات</a>
                    <img class="link-pic" src="./images/Untitled-1-01.png" alt="">
                </div>
                <div class="link-item">
                    <a href="#">مواضيع متخصصة</a>
                    <img class="link-pic" src="./images/Untitled-1-01.png" alt="">
                </div>
                <div class="link-item">
                    <a href="<?php echo site_url('/magazines') ?>">أعداد كاملة</a>
                    <img class="link-pic" src="./images/Untitled-1-01.png" alt="">
                </div>
                <div class="link-item">
                    <a href="<?php echo site_url('/') ?>">الرّئيسية</a>
                    <img class="link-pic" src="./images/Untitled-1-01.png" alt="">
                </div>
            </div>
            <div class="links-left">
                <div class="link-item">
                    <a href="#">نشاطاتنا</a>
                    <img class="link-pic" src="./images/Untitled-1-01.png" alt="">
                </div>
                <div class="link-item">
                    <a href="#">فريق العمل</a>
                    <img class="link-pic" src="./images/Untitled-1-01.png" alt="">
                </div>
            </div>
        </div>
        <div class="navbar-right">
            <div class="logo">
                <img src="<?php echo get_theme_file_uri('./images/heyaLogo.png') ?>" alt="">
            </div>
            <div class="">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                  </a>
            </div>
        </div>
    </div>