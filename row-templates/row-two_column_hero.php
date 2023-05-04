<section class="<?php echo get_row_layout(); ?>">

    <div class="container">
        <div class="content-title pt-3">
            <?php the_sub_field('content_title'); ?>
        </div>
        
        <div class="row pb-5">
            
            <!-- Left column -->
            <div class="col-12 col-md-6 mt-5">
                <div class="content-column-left align-items-start">
                    <?php the_sub_field('content_column_left'); ?>
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