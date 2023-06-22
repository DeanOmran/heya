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
        <div class="latest-drop" style="background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-04.png') ?>);">
            <div class="drop-image">
                <img src="<?php echo get_field('mawdoo3_image') ?>" alt="" class="topic-image" style="width: 65%;">
            </div>
            <div class="drop-body">
                <div class="drop-title">
                    <h1><?php the_title(); ?></h1>
                    <img src="<?php echo get_theme_file_uri('./images/Untitled-1-03.png'); ?>" alt="">
                    <!-- <div class="btn-white" style="margin-top: 50px;">
                            <a href="">إظهار</a>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="all-posts">
    <div class="section-title">
        <p>جميع ال<?php the_title(); ?></p>
        <img class="" src="./images/Untitled-1-01.png" alt="">
    </div>
    <div class="meetings-section">

        <?php
        $singleMawdoo3 = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'single-mawdoo3',

            'meta_query' => array(
                array(
                    'key' => 'main_mawdoo3',
                    'compare' => 'LIKE',
                    'value' => '"' . get_the_ID() . '"'
                )
            )
        ));
        while ($singleMawdoo3->have_posts()) {
            $singleMawdoo3->the_post(); ?>

            <div class="single-meeting">
                <div class="meeting-img">
                    <img src="<?php echo get_field('single_mawdoo3_image') ?>" alt="">
                </div>
                <div class="meeting-info">
                    <div class="meeting-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="btn-yellow">
                        <a href="<?php the_permalink(); ?>">إظهار</a>
                    </div>
                </div>
            </div>

        <?php }
        wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>