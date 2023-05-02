
<section class="<?php echo get_row_layout(); ?> py-5 bg-light">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-md-8">
                <h2><?php the_sub_field('heading') ?></h2>
            </div>
            <div class="col-12 col-md-4 text-dark">

            </div>
        </div>

        <!-- if ACF finds blogs -->
        <?php $posts = get_sub_field('blog_posts'); ?>
        <?php if ($posts) : ?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($posts as $post) : ?>
                <?php setup_postdata ( $post ); ?>
                <div class="col-12 col-md-4">
                    
                        <?php get_template_part('loop-templates/content', get_post_type() ); ?>
                    
                </div>
            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>

        </div>
        <?php endif; ?>
    </div>

</section>