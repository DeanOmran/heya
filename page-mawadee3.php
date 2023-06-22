<?php get_header(); ?>

<style>
    .latest-drop::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }

    .post-item:nth-of-type(2n)::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }
</style>


<!-- <?php $weeklyMawdoo3 = new WP_Query(array(
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
                    <?php the_title(); ?>
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
wp_reset_query(); ?> -->

<div class="all-posts">
    <div class="section-title">
        <p>مواضيع متخصصة</p>
        <img class="" src="<?php echo get_theme_file_uri('./images/Untitled-1-01.png') ?>" alt="">
    </div>

    <?php
    $postNumber = new WP_Query(array(
        'post_type' => 'mawadee3',
        'posts_per_page' => -1,
    ));
    ?>

    <div class="all-posts-link">
        <?php
        while ($postNumber->have_posts()) {
            $postNumber->the_post();
        ?>
            <a href="<?php echo the_permalink(); ?>">
                <div class="post-link-number"><?php the_title(); ?></div>
            </a>
        <?php }
        wp_reset_query(); ?>
    </div>

    <div class="posts-section">

        <?php
        $yellowSquare = get_theme_file_uri('./images/Untitled-1-08.png');
        $whiteSquare = get_theme_file_uri('./images/Untitled-1-04.png');
        $yellowBigFlower = get_theme_file_uri('./images/Untitled-1-01.png');
        $whiteBigFlower = get_theme_file_uri('./images/Untitled-1-03.png');

        $i = 0;
        $args = array(
            'post_type' => 'mawadee3'
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) { ?>
            <?php $query->the_post(); ?>

            <div class="post-item" style="background-image: url(<?php if ($i % 2 == 0) {
                                                                    echo $yellowSquare;
                                                                } else {
                                                                    echo $whiteSquare;
                                                                } ?>) ; background-size: 29%;">
                <div class="post-drop-image">
                    <img src="<?php echo get_field('mawdoo3_image') ?>" alt="" class="topic-image">
                </div>
                <div class="post-drop-body">
                    <div class="drop-title" style="font-size: 2rem;">
                        <h1><?php the_title(); ?></h1>
                        <img src="<?php if ($i % 2 == 0) {
                                        echo $yellowBigFlower;
                                    } else {
                                        echo $whiteBigFlower;
                                    } ?>" alt="">
                        <div class="<?php if ($i % 2 == 0) {
                                        echo 'btn-yellow';
                                    } else {
                                        echo 'btn-white';
                                    } ?>" style="margin-top: 50px;">
                            <a href="<?php echo the_permalink(); ?>">اظهار</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php $i++;
        }
        wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>