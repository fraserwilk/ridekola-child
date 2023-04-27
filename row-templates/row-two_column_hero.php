<section class="<?php echo get_row_layout(); ?>">

    <div class="container">

        <div class="row">
            <div class="content-title">
                <?php the_sub_field('content_title'); ?>
            </div> 
            <div class="col-12 col-md-6">
               
                <div class="content-column">
                    <?php the_sub_field('content_column'); ?>
                </div>
                <div class="cta">
                    <?php 
                        $link = get_sub_field('cta_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <a class="btn <?php echo esc_attr( get_sub_field('cta_button_design')); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <div class="image-column">
                    <?php echo wp_get_attachment_image(get_sub_field('image_column'), 'full'); ?>
                </div>
                
            </div>
        </div>
    </div>

</section>