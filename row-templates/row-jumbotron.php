<section class="<?php echo get_row_layout(); ?>">

    <main>
        <div class="container py-4">
            
            <div class="p-3 mb-4 bg-light rounded-3 text-center">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-dark"><?php the_sub_field('top_jumbo_header'); ?></h1>
                <p class="col-md-8 fs-4 text-dark"><?php the_sub_field('top_jumbo_body'); ?></p>
                <button class="btn btn-dark btn-lg" type="button">Get on the waitlist</button>
            </div>
            </div>

            <div class="row align-items-md-stretch">


            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
            <?php the_sub_field('jumbo_footer'); ?>
            </footer>
        </div>
    </main>


</section>