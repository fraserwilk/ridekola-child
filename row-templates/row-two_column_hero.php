<section class="<?php echo get_row_layout(); ?>">

    <div class="container">
        <div class="content-title pt-3">
            <?php the_sub_field('content_title'); ?>
        </div>
        
        <div class="row">
            
            <!-- Left column -->
            <div class="col-12 col-md-6 mt-5">
                <div class="content-column-leftalign-items-start">
                    <?php the_sub_field('content_column_left'); ?>
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
            <!-- Right column -->
            <div class="col-12 col-md-6 mt-5">
                <div class="content-column-right">
                    <?php the_sub_field('content_column_right') ; ?>
                </div>
                
            </div>
        </div>
    </div>

</section>