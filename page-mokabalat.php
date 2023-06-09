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
                'posts_per_page' => 1
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
        <p>المقابلات</p>
        <img class="" src="./images/Untitled-1-01.png" alt="">
    </div>
    <?php
    $sheikhList = new WP_Query(array(
        'post_type' => 'sheikh',
        'posts_per_page' => -1,
    ));
    ?>
    <div class="all-posts-link">
        <?php
        while ($sheikhList->have_posts()) {
            $sheikhList->the_post();
        ?>
            <a href="<?php the_permalink(); ?>">
                <div style="width: 100px;" class="post-link-number">مع <?php the_title(); ?></div>
            </a>
        <?php }
        wp_reset_query(); ?>
    </div>
    <div class="posts-section">
        <?php
        $yellowFlower = get_theme_file_uri('./images/Path 9.png');
        $whiteFlower = get_theme_file_uri('./images/Path 10.png');
        $yellowSquare = get_theme_file_uri('./images/Untitled-1-08.png');
        $whiteSquare = get_theme_file_uri('./images/Untitled-1-04.png');
        $yellowBigFlower = get_theme_file_uri('./images/Untitled-1-01.png');
        $whiteBigFlower = get_theme_file_uri('./images/Untitled-1-03.png');

        $i = 0;
        $args = array(
            'post_type' => 'mokabalat',
            'offset' => 1,
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) { ?>
            <?php $query->the_post(); ?>

            <div class="post-item" style="background-image: url(<?php if ($i % 2 == 0) {
                                                                    echo $yellowSquare;
                                                                } else {
                                                                    echo $whiteSquare;
                                                                } ?>) ;">
                <div class="post-drop-image">
                    <!-- <img src="<?php echo get_theme_file_uri('./images/70313769_2517550031673578_5717106554835042304_n.jpg') ?>" alt="" class="main-image"> -->
                    <img src="<?php echo get_field('mokabala_image') ?>" alt="" class="main-image" style="width: 60%;">
                </div>
                <div class="post-drop-body">
                    <div class="drop-title">
                        <h1><?php the_title() ?></h1>
                        <img src="<?php if ($i % 2 == 0) {
                                        echo $yellowBigFlower;
                                    } else {
                                        echo $whiteBigFlower;
                                    } ?>" alt="">
                    </div>
                    <div class="drop-info">
                        <div class="single-info">
                            <img src="<?php if ($i % 2 == 0) {
                                            echo $yellowFlower;
                                        } else {
                                            echo $whiteFlower;
                                        } ?>" alt="">
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
                            <img src="<?php if ($i % 2 == 0) {
                                            echo $yellowFlower;
                                        } else {
                                            echo $whiteFlower;
                                        } ?>" alt="">
                            <p><span>تاريخ إصداره هجري/ميلادي </span><?php echo get_field('mokabala_date') ?></p>
                        </div>
                        <div class="<?php if ($i % 2 == 0) {
                                        echo 'btn-yellow';
                                    } else {
                                        echo 'btn-white';
                                    } ?>" style="margin-top: 50px;">
                            <a href="<?php the_permalink(); ?>">إظهار</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
            $i++;
        }
        wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>