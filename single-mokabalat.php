<?php get_header(); ?>

<div id="meeting-section-one" class="container" style="background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-07-2.png') ?>);">
        <div class="single-meeting-section">
            <div class="single-meeting-title">
                <h1><?php the_title(); ?></h1>
                <img src="<?php echo get_theme_file_uri('./images/Untitled-1-03.png') ?>" alt="">
            </div>
            <div class="single-meeting-img">
                <img src="<?php echo get_field('mokabala_image'); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="single-meeting-body">
        <?php the_content(); ?>
    </div>

<?php get_footer(); ?>