<section class="<?php echo get_row_layout(); ?> py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php 
                    $images = get_sub_field('gallery_image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $images ): ?>
                        <ul>
                            <?php foreach( $images as $image_id ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>