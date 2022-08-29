<?php get_header(); ?>

<section class="section__banner">
    <img src="<?php echo get_template_directory_uri() . '/images/banner-image-home.jpg'; ?>" class="object-fit object-fit-cover" alt="">
    <div class="inner">
        <div class="content">
            <h1 class="title"><span><?php esc_html_e('Workforce Survey' , 'theme_omega') ;?></span></h1>
            <div class="text">
                <p><?php esc_html_e('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi' , 'theme_omega') ;?></p>
            </div>
            <p><a href="#" class="btn"><?php esc_html_e('Start Now' , 'theme_omega') ;?></a></p>
        </div>
    </div>
</section>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
    }

    get_template_part('archive');
} else {
    echo '<div class="not-found-posts">Not posts found</div>';
}
?>

<?php get_footer();
