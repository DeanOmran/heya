<?php get_header(); ?>

<style>
    .latest-drop::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }

    .post-item:nth-of-type(2n)::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }
</style>


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
        </div>
    </div>
</div>


<?php get_footer(); ?>