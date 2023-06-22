<?php get_header(); ?>

<style>
    .latest-drop::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }

    .post-item:nth-of-type(2n)::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }
</style>

<?php $weeklyMawdoo3 = new WP_Query(array(
    'post_type' => 'single-mawdoo3',
    'posts_per_page' => 1,
    'meta_query' => array(
        array(
            'key' => 'weekly_mawdoo3',
            'value' => '1',
            'compare' => '=='
        )
    )
));

while ($weeklyMawdoo3->have_posts()) {
    $weeklyMawdoo3->the_post()
?>

    <div id="section-one" class="container" style="background-image: url(<?php echo get_theme_file_uri('./images/night-sky-2560x1440-night-city-earth-sky-stars-clouds-light-height-421.jpg') ?>);">
        <div class="inner-section" style="background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-07.png') ?>);">
            <div class="section-info">
                <div class="section-title">
                    الموضوع الاسبوعي
                </div>
                <div class="section-body">
                    <p>
                        <?php the_title(); ?>
                    </p>
                    <div class="btn">
                        <a href="<?php echo the_permalink(); ?>">إقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }
wp_reset_query(); ?>

<div class="latest-events">
    <div class="section-title">
        <p>آخر المشاريع</p>
        <img class="" src="<?php echo get_theme_file_uri('./images/Untitled-1-01.png') ?>" alt="">
    </div>
    <div class="section-body">
        <div class="event">
            <div class="event-info">
                <div class="event-title">
                    آخر المشاريع 1
                </div>
                <div class="event-content">
                    هعاقصلخهسقا لب مس يخلتاحخ هسي له سثخله ش ثاخع س ﯨتس
                    ثخلبكمهس يحل عشثنهخحينب ت علبت سيمهلس ثقخرى تؤ
                    ﯨخسبارمخه سق ﯨرخنه عصثق اغبص ثﯩت بنع عهرلا صث قخ هعب يت
                    رعاث صبه ع س ص قتل سق ﯨلارنتسيالر صثق الخ هعاقصلخهسقا لب
                    مس يخلتاحخ هسي له سثخله ش ثاخع س ﯨتس ثخلبكمهس يحلﯨتس ثخلبكمهس يحل
                    عشثنهخحينب ت علبت سيمهلس ثقخرى
                </div>
            </div>
            <div class="event-image">
                <img class="evnt-img" src="<?php echo get_theme_file_uri('./images/Aurora carousel.jpg') ?>" alt="">
                <img class="event-flower" src="<?php echo get_theme_file_uri('./images/Untitled-1-02.png') ?>" alt="">
            </div>
        </div>
        <div class="event">
            <div class="event-info">
                <div class="event-title">
                    آخر المشاريع 2
                </div>
                <div class="event-content">
                    هعاقصلخهسقا لب مس يخلتاحخ هسي له سثخله ش ثاخع س ﯨتس
                    ثخلبكمهس يحل عشثنهخحينب ت علبت سيمهلس ثقخرى تؤ
                    ﯨخسبارمخه سق ﯨرخنه عصثق اغبص ثﯩت بنع عهرلا صث قخ هعب يت
                    رعاث صبه ع س ص قتل سق ﯨلارنتسيالر صثق الخ هعاقصلخهسقا لب
                    مس يخلتاحخ هسي له سثخله ش ثاخع س ﯨتس ثخلبكمهس يحلﯨتس ثخلبكمهس يحل
                    عشثنهخحينب ت علبت سيمهلس ثقخرى
                </div>
            </div>
            <div class="event-image">
                <img class="evnt-img" src="<?php echo get_theme_file_uri('./images/Aurora carousel.jpg') ?>" alt="">
                <img class="event-flower" src="<?php echo get_theme_file_uri('./images/Untitled-1-02.png') ?>" alt="">
            </div>
        </div>
        <div class="event">
            <div class="event-info">
                <div class="event-title">
                    آخر المشاريع 3
                </div>
                <div class="event-content">
                    هعاقصلخهسقا لب مس يخلتاحخ هسي له سثخله ش ثاخع س ﯨتس
                    ثخلبكمهس يحل عشثنهخحينب ت علبت سيمهلس ثقخرى تؤ
                    ﯨخسبارمخه سق ﯨرخنه عصثق اغبص ثﯩت بنع عهرلا صث قخ هعب يت
                    رعاث صبه ع س ص قتل سق ﯨلارنتسيالر صثق الخ هعاقصلخهسقا لب
                    مس يخلتاحخ هسي له سثخله ش ثاخع س ﯨتس ثخلبكمهس يحلﯨتس ثخلبكمهس يحل
                    عشثنهخحينب ت علبت سيمهلس ثقخرى
                </div>
            </div>
            <div class="event-image">
                <img class="evnt-img" src="<?php echo get_theme_file_uri('./images/Aurora carousel.jpg') ?>" alt="">
                <img class="event-flower" src="<?php echo get_theme_file_uri('./images/Untitled-1-02.png') ?>" alt="">
            </div>
        </div>
    </div>
</div>

<div class="latest-drops">
    <div class="section-title-white">
        <p>الأعداد كاملة</p>
        <img class="" src="<?php echo get_theme_file_uri("./images/Untitled-1-03.png") ?>" alt="">
    </div>
    <div class="latest-drops-body">
        <div class="latest-drop" style="background-image: url(<?php echo get_theme_file_uri("./images/Untitled-1-04.png") ?>);">
            <?php
            $latestPost = new WP_Query(array(
                'posts_per_page' => 1
            ));
            while ($latestPost->have_posts()) {
                $latestPost->the_post();
            ?>
                <div class="drop-image">
                    <img src="<?php echo get_field('magazine_image') ?>" alt="" class="main-image">
                </div>
                <div class="drop-body">
                    <div class="drop-title">
                        <h1>أجدد أعداد <br> مجلة هي واخواتها</h1>
                        <img src="<?php echo get_theme_file_uri('./images/Untitled-1-03.png') ?>" alt="">
                    </div>
                    <div class="drop-info">
                        <div class="single-info">
                            <img src="<?php echo get_theme_file_uri('./images/Path 10.png') ?>" alt="">
                            <p><span>عنوانه </span> <?php the_title(); ?> </p>
                        </div>
                        <div class="single-info">
                            <img src="<?php echo get_theme_file_uri('./images/Path 10.png') ?>" alt="">
                            <p><span>عدده </span>العدد <?php echo get_field('magazine_number') ?></p>
                        </div>
                        <div class="single-info">
                            <img src="<?php echo get_theme_file_uri('./images/Path 10.png') ?>" alt="">
                            <p><span>تاريخ إصداره هجري/ميلادي </span><?php echo get_field('release_date') ?></p>
                        </div>
                        <div class="btn-white" style="margin-top: 50px;">
                            <a href="<?php echo get_field('magazine_pdf') ?>">تحميل</a>
                        </div>
                    </div>
                    <div class="social-share">
                        <label class="toggle" for="toggle">
                            <input type="checkbox" id="toggle" />
                            <div class="share-btn">
                                <i class="fas fa-share-alt"></i>
                                <i class="fas fa-times"></i>
                                <div class="social">
                                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&quote=<?php the_title(); ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a>
                                    <!-- <a href="#"><i class="fab fa-instagram-square"></i></i></a> -->
                                    <a href="whatsapp://send?text=<?php the_permalink(); ?>"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            <?php }
            wp_reset_query(); ?>
        </div>
        <div class="drop-second-section">
            <div class="other-drops">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'offset' => 1
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) { ?>
                    <?php $query->the_post(); ?>
                    <a href="<?php echo the_permalink(); ?>" class="other-drop-items">
                        <img src="<?php echo get_field('magazine_image') ?>" alt="">
                    </a>
                <?php }
                wp_reset_query(); ?>
            </div>
            <div class="btn-white">
                <a href="<?php echo site_url('/magazines') ?>">جميع الأعداد</a>
            </div>
        </div>
    </div>
</div>

<div class="latest-drops">
    <div class="section-title-white">
        <p>مقابلات</p>
        <img class="" src="<?php echo get_theme_file_uri('./images/Untitled-1-03.png') ?>" alt="">
    </div>
    <div class="latest-drops-body">
        <div class="latest-drop" style="background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-04.png') ?>) ;">
            <div class="drop-image">
                <img src="<?php echo get_theme_file_uri('./images/10930950_749664375128828_5486559389969704076_n.jpg') ?>" alt="" class="main-image" style="width: 65%;">
            </div>
            <div class="drop-body">
                <div class="drop-title">
                    <h1>أجدد المقابلات</h1>
                    <img src="<?php echo get_theme_file_uri('./images/Untitled-1-03.png') ?>" alt="">
                </div>
                <div class="drop-info">
                    <div class="single-info">
                        <img src="<?php echo get_theme_file_uri('./images/Path 10.png') ?>" alt="">
                        <p><span>مع </span>الشيخ زياد الصاحب</p>
                    </div>
                    <div class="single-info">
                        <img src="<?php echo get_theme_file_uri('./images/Path 10.png') ?>" alt="">
                        <p><span>تاريخ إصداره هجري/ميلادي </span>محمرم 1414 /أيلول 2019</p>
                    </div>
                    <div class="btn-white" style="margin-top: 50px;">
                        <a href="">إظهار</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="latest-events">
    <div class="section-title">
        <p>النشاطات</p>
        <img class="" src="<?php echo get_theme_file_uri('./images/Untitled-1-01.png') ?>" alt="">
    </div>
    <div class="section-body">
        <?php
        $latestNashatat = new WP_Query(array(
            'post_type' => 'nashatat',
            'posts_per_page' => 2
        ));
        while ($latestNashatat->have_posts()) {
            $latestNashatat->the_post();
        ?>
            <div class="event">
                <div class="event-info">
                    <div class="event-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="event-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="event-image">
                    <img class="evnt-img" src="<?php echo get_field('nashat_image'); ?>" alt="">
                    <img class="event-flower" src="<?php echo get_theme_file_uri('./images/Untitled-1-02.png'); ?>" alt="">
                </div>
            </div>
        <?php }
        wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>