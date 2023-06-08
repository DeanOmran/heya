<?php get_header(); ?>


<div class="latest-drops">
    <div class="latest-drops-body">
        <div class="latest-drop" style="background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-04.png') ?>) ;">
            <div class="drop-image">
                <img src="<?php echo get_field('magazine_image') ?>" alt="" class="main-image">
            </div>
            <div class="drop-body">
                <div class="drop-title">
                    <h1><?php the_title() ?></h1>
                    <img src="<?php echo get_theme_file_uri('./images/Untitled-1-03.png') ?>" alt="">
                </div>
                <div class="drop-info">
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
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>