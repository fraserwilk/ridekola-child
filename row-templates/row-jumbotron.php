<section class="<?php echo get_row_layout(); ?>">

    <main>
        <div class="container py-4">
            
            <div class="p-5 mb-4 bg-light rounded-3 text-center">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-dark"><?php the_sub_field('top_jumbo_header'); ?></h1>
                <p class="col-md-8 fs-4 text-dark"><?php the_sub_field('top_jumbo_body'); ?></p>
                <button class="btn btn-dark btn-lg" type="button">Get on the waitlist</button>
            </div>
            </div>

            <div class="row align-items-md-stretch">
            <div class="col-md-6 text-dark">
                <div class="h-100 p-5 text-white bg-secondary rounded-3">
                <h2><?php the_sub_field('jumbo_body'); ?></h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3 text-dark">
                <h2><?php the_sub_field('jumbo_body'); ?></h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                <button class="btn btn-outline-secondary" type="button">Example button</button>
                </div>
            </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
            <?php the_sub_field('jumbo_footer'); ?>
            </footer>
        </div>
    </main>


</section>