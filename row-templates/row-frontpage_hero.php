<section class="<?php echo get_row_layout(); ?>">

    <!-- Hero container -->
    <div class="container-fluid position-relative">

        <div class="row">

            <!-- ******************* The Hero Area ******************* -->
            <!-- Background image -->
            <img src="<?php the_sub_field('hero_background'); ?>" id="frontpage-hero-img" class="d-block mx-md-auto p-0" alt="Ride Kola" loading="lazy" ;>

            <div class="container col-xxl-8 px-4 py-5 position-absolute text-light">
                <div class="row flex-lg-row align-items-center g-3 py-1 mt-lg-5 mx-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                    </div>
                    <div class="col-sm-8 ps-sm-5 ms-sm-4">
                        <h1 class="display-5 lh-md-1 mb-md-1"><?php the_sub_field('hero_heading'); ?></h1>
                        <div class="p-0">
                            <?php the_sub_field('hero_content'); ?>
                        </div>

                        <div class="d-grid gap-2 d-sm-flex justify-content-md-start">
                            
                            <a class="btn btn-secondary px-4 me-md-2" href="#" role="button">Sign up now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #wrapper-static-hero -->
    </div>
            
</div>

</section>