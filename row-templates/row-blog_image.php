<section class="<?php echo get_row_layout(); ?> py-5">
    <div class="container">

        <!-- if ACF finds blogs -->
        <?php 
            $image = get_sub_field('blog_image'); 
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            } ?>

        <?php if ($posts) : ?>
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <?php setup_postdata ( $post ); ?>
                <div class="col-12 col-md-4">
                <article <?php post_class('blog-image'); ?> id="post-<?php the_ID(); ?>">

                    <?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'blog-image-img' ) ); ?>

                    <div class="entry-header">
                        <?php
                        the_title(
                            sprintf( '<div class="blog-image-overlay"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                            '</a></div>'
                        );
                        ?>

                        <?php if ( 'post' === get_post_type() ) : ?>



                        <?php endif; ?>

                        </div><!-- .entry-header -->

                    </article><!-- #post-<?php the_ID(); ?> -->
            </div>
            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>

        </div>
        <?php endif; ?>
    </div>

</section>