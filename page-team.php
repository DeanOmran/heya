<?php get_header(); ?>

<div id="section-one" class="container" style="background-image: url(<?php echo get_theme_file_uri('./images/960x0.jpg'); ?>); ">
        <div class="inner-section" style="background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-07.png'); ?>) ;">

        </div>
    </div>

    <div class="team-section">
        <?php
            $teamMembers = new WP_Query(array(
                'post_type' => 'team',
                'posts_per_page' => -1
            ));
            while ($teamMembers->have_posts()) {
                $teamMembers->the_post();
        ?>
        <div class="team-member">
            <div class="member-info">
                <div class="member-name">
                    <?php the_title(); ?>
                </div>
                <div class="member-title">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="member-image">
                <img src="<?php echo get_field('member_image'); ?>" alt="">
            </div>
        </div>
        <?php } wp_reset_query(); ?>
    </div>

<?php get_footer(); ?>