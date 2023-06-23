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
            <?php
            $latestMokabala = new WP_Query(array(
                'post_type' => 'mokabalat',
                'posts_per_page' => 1,

                'meta_query' => array(
                    array(
                        'key' => 'mokabala_sheikh',
                        'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . '"'
                    )
                )
            ));
            while ($latestMokabala->have_posts()) {
                $latestMokabala->the_post();
            ?>
                <div class="drop-image">
                    <img src="<?php echo get_field('mokabala_image') ?>" alt="" class="main-image" style="width: 65%;">
                </div>
                <div class="drop-body">
                    <div class="drop-title">
                        <h1><?php the_title(); ?></h1>
                        <img src="<?php echo get_theme_file_uri('./images/Untitled-1-03.png') ?>" alt="">
                    </div>
                    <div class="drop-info">
                        <div class="single-info">
                            <img src="<?php echo get_theme_file_uri('./images/Path 10.png') ?>" alt="">
                            <p><span>مع </span><?php
                                                $mokabalaSheikh = get_field('mokabala_sheikh')[0];
                                                if ($mokabalaSheikh) {
                                                    $title = get_the_title($mokabalaSheikh->ID);
                                                    echo esc_html($title);
                                                } else {
                                                    echo 'غير معروف';
                                                }
                                                ?></p>
                        </div>
                        <div class="single-info">
                            <img src="<?php echo get_theme_file_uri('./images/Path 10.png') ?>" alt="">
                            <p><span>تاريخ المقابلة هجري/ميلادي </span><?php echo get_field('mokabala_date'); ?></p>
                        </div>
                        <div class="btn-white" style="margin-top: 50px;">
                            <a href="<?php the_permalink(); ?>">إظهار</a>
                        </div>
                    </div>
                </div>
            <?php }
            wp_reset_query(); ?>
        </div>
    </div>
</div>

<div class="all-posts">
    <div class="section-title">
        <p>المقابلات مع <?php the_title(); ?></p>
        <img class="" src="<?php echo get_theme_file_uri('./images/Untitled-1-01.png'); ?>" alt="">
    </div>


    <div class="meetings-section">
        <?php
        $allMeetings = new WP_Query(array(
            'post_type' => 'mokabalat',
            'offset' => 1,

            'meta_query' => array(
                array(
                    'key' => 'mokabala_sheikh',
                    'compare' => 'LIKE',
                    'value' => '"' . get_the_ID() . '"'
                )
            )
        ));
        while ($allMeetings->have_posts()) {
            $allMeetings->the_post(); ?>
            <div class="single-meeting">
                <div class="meeting-img">
                    <img src="<?php echo get_field('mokabala_image') ?>" alt="">
                </div>
                <div class="meeting-info">
                    <div class="meeting-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="meeting-date">
                        <?php echo get_field('mokabala_date'); ?>
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