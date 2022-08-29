<?php get_header(); ?>

<section class="section__banner">
    <img src="<?php echo get_template_directory_uri() . '/images/banner-image-home.jpg'; ?>" class="object-fit object-fit-cover" alt="">
    <div class="inner">
        <div class="content">
            <h1 class="title"><span>Workforce Survey</span></h1>
            <div class="text">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
            <p><a href="#" class="btn">Start Now</a></p>
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
    echo 'No posts found';
}
?>

<?php get_footer();
