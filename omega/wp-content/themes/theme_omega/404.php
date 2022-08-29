<?php get_header(); ?>

    <section class="section__banner inner__banner">
        <img src="<?php echo get_template_directory_uri() . '/images/banner-image-home.jpg'; ?>" class="object-fit object-fit-cover" alt="">
        <div class="inner">
            <div class="inner__content">
                <h1 class="title"><?php esc_html_e('Page not found 404 error' , 'theme_omega') ;?></h1>
            </div>
        </div>
    </section>

    <section class="section__posts inner__posts">
        <div class="inner">
            <h2 class="title"><?php esc_html_e('Watch more' , 'theme_omega') ;?></h2>
            <?php get_search_form()?>
        </div>
    </section>

<?php get_footer(); ?>