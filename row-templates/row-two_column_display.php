<section class="<?php echo get_row_layout(); ?> py-5 two-column-display">

    <div class="container">

    <div class="row">
        <?php
            $whichside = get_sub_field ('column_selector');
        ?>

        <?php if ("image-left" == $whichside) :  ?>
            
            <!-- Image on LEFT -->
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="image-column">
        
                    <?php 
                        $image = get_sub_field('image_column');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    </div>  
                </div>

                <div class="col-12 col-md-6">
                    <div class="content-column">
                        <?php the_sub_field('content_column'); ?>
                    </div>
                </div>
            </div>

        <?php else: ?>

            <!-- Image on RIGHT -->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="content-column">
                        <?php the_sub_field('content_column'); ?>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="image-column">
                    
                        <?php 
                            $image = get_sub_field('image_column');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
        

                    </div>
                </div>
            </div>
            
        <?php endif ?>
        <?php wp_reset_postdata(); ?>

    </div>

</section>