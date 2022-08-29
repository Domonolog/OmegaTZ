<?php get_header(); ?>

    <section class="section__banner" style="padding-bottom: 0; padding-top: 111px">
        <img src="<?php echo get_template_directory_uri() . '/images/banner-image-home.jpg'; ?>" class="object-fit object-fit-cover" alt="">
    </section>

    <section class="section__single-post">
        <div class="inner">
            <div class="single-post">
                <div class="image">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail( 'post-thumbnail' );
                    } else {
                        $image = get_field('image' , get_the_ID());
                        echo wp_get_attachment_image($image, 'post-thumbnail');
                    } ?>
                </div>
                <?php the_title('<h3>', '</h3>'); ?>
                <div class="more"><?php the_content(); ?></div>
                <div class="show-more"></div>
            </div>
        </div>
    </section>

<?php get_footer();