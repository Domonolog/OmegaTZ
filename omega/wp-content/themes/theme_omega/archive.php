<section class="section__posts">
    <div class="inner">
        <div class="wrapper">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <a href="<?php the_permalink();?>" class="item">
                        <div class="image">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail( 'post-thumbnail' );
                            } else {
                                $image = get_field('image' , get_the_ID());
                                echo wp_get_attachment_image($image, 'post-thumbnail');
                            } ?>
                        </div>
                        <?php the_title('<h3>','</h3>'); ?>
                        <div class="more"><?php the_content(); ?></div>
                        <div class="show-more"></div>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
