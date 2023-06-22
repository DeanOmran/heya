<?php get_header(); ?>

<div id="section-one" class="container" style="background-image: url(<?php echo get_field('single_mawdoo3_image') ?>);">
        <div class="inner-section" style="background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-07.png') ?>);">
            <div class="section-info">
                <div class="section-title">
                    <?php the_title(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="single-meeting-body">
        <?php the_content(); ?>
    </div>

<?php get_footer(); ?>