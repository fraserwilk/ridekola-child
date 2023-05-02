<section class="<?php echo get_row_layout(); ?> py-5 bg-light col-md-12">
    <div class="container text-dark">
        <div class="row mb-3">
            <div class="col-12 col-md-8">
                <h2><?php the_sub_field('faq_heading') ?></h2>
            </div>
           
        </div>

        <!-- if ACF finds FAQs -->
        <?php 
        // *Repeater
        // bootstrap_accordion_repeater
        // *Sub-Fields
        // accordion_header
        // accordion_content

        // check if the repeater field has rows of data
        
        if( have_rows('questions') ): 
            //  limit the results to 5  rows from the 'questions' ACF repeater field
            // get all rows into an array
            $rows = get_field('questions');
            
            $i = 1; // Set the increment variable

            echo '<div id="accordion">';
            
            // loop through the rows of data for the tab header
            while ( have_rows('questions') ) : the_row();
            if (($i > 5) and (is_front_page())) break; // exit the loop after 5 rows
                
                $header = get_sub_field('question');
                $content = get_sub_field('answer');
            ?>
                
                <!--  display the FAQs -->
                <div class="accordion accordion-flush" id="accordionFlushKola">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-<?php echo $i;?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i;?>" aria-expanded="false" aria-controls="collapse-<?php echo $i;?>">
                                <?php echo $header; ?>
                            </button>
                        </h2>
                        <div id="collapse-<?php echo $i;?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $i;?>" data-bs-parent="#accordionFlushKola">
                        <div class="accordion-body"><?php echo $content; ?></div>
                        </div>
                    </div>
                </div>

            <?php $i++; // Increment the increment variable
                
            endwhile; //End the loop 

            echo '</div>';

        else :

            // no rows found
            echo 'Come back tomorrow';

        endif;
         ?>
        
    </div>
    <?php
    if (is_front_page( )) {

    echo '<div class="d-grid gap-2 col-6 mx-auto pt-4">';
    echo    '<div class="btn btn-dark">';
    echo     '<a href="' . get_site_url() . '/faqs">Visit our knowledgebase for more</a>
        </div>
    </div>';
    }
    ?>
</section>


