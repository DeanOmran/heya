<?php get_header(); ?>

<style>
    .latest-drop::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }

    .post-item:nth-of-type(2n)::before {
        background-image: url("<?php echo get_theme_file_uri('./images/white\ logo.png') ?>");
    }
</style>

<?php
$latestNashat = new WP_Query(array(
    'post_type' => 'nashatat',
    'posts_per_page' => 1
));
while ($latestNashat->have_posts()) {
    $latestNashat->the_post();
?>

    <div id="section-one" class="container" style="background-image: url(<?php echo get_field('nashat_image'); ?>);">
        <div class="inner-section" style="flex-direction: row; background-image: url(<?php echo get_theme_file_uri('./images/Untitled-1-07-2.png'); ?>)">
            <div class="section-info" style="margin-left: 75px;">
                <div class="section-title" style="font-size: 4rem;">
                    <?php the_title(); ?>
                </div>
                <div class="section-body">
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php }
wp_reset_query(); ?>

<div class="latest-events">
    <div class="section-title">
        <p>النشاطات</p>
        <img class="" src="<?php echo get_theme_file_uri('./images/Untitled-1-01.png'); ?>" alt="">
    </div>
    <div class="section-body">
        <?php 
        $args = array(
            'post_type' => 'nashatat',
            'offset' => 1,
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) { ?>
            <?php $query->the_post(); ?>
        <div class="event">
            <div class="event-info">
                <div class="event-title">
                    <?php the_title(); ?>
                </div>
                <div class="event-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="event-image">
                <img class="evnt-img" src="<?php echo get_field('nashat_image'); ?>" alt="">
                <img class="event-flower" src="<?php echo get_theme_file_uri('./images/Untitled-1-02.png'); ?>" alt="">
            </div>
        </div>
        <?php } wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>