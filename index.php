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
            <?php }
            wp_reset_query(); ?>
        </div>
    </div>
</div>

<div class="all-posts">
    <div class="section-title">
        <p>آخر المشاريع</p>
        <img class="" src="<?php echo get_theme_file_uri('./images/Untitled-1-01.png') ?>" alt="">
    </div>

    <?php
    $postNumber = new WP_Query(array(
        'posts_per_page' => -1,
        'meta_key' => 'magazine_number',
        'orderby' => 'meta_value',
        'order' => 'ASC'
    ));
    ?>

    <div class="all-posts-link">
        <?php
        while ($postNumber->have_posts()) {
            $postNumber->the_post();
        ?>
            <a href="<?php echo the_permalink(); ?>">
                <div class="post-link-number"><?php echo get_field('magazine_number') ?> العدد</div>
            </a>
            <a href="<?php echo the_permalink(); ?>">
                <div class="post-link-number"><?php echo get_field('magazine_number') ?> العدد</div>
            </a>
            <a href="<?php echo the_permalink(); ?>">
                <div class="post-link-number"><?php echo get_field('magazine_number') ?> العدد</div>
            </a>
            <a href="<?php echo the_permalink(); ?>">
                <div class="post-link-number"><?php echo get_field('magazine_number') ?> العدد</div>
            </a>
        <?php } ?>

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
            'post_type' => 'post',
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
                    <img src="<?php echo get_field('magazine_image') ?>" alt="" class="main-image">
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
                            <p><span>عدده </span>العدد <?php echo get_field('magazine_number') ?></p>
                        </div>
                        <div class="single-info">
                            <img src="<?php if ($i % 2 == 0) {
                                            echo $yellowFlower;
                                        } else {
                                            echo $whiteFlower;
                                        } ?>" alt="">
                            <p><span>تاريخ إصداره هجري/ميلادي </span><?php echo get_field('release_date') ?></p>
                        </div>
                        <div class="<?php if ($i % 2 == 0) {
                                        echo 'btn-yellow';
                                    } else {
                                        echo 'btn-white';
                                    } ?>" style="margin-top: 50px;">
                            <a href="<?php echo get_field('magazine_pdf') ?>">تحميل</a>
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