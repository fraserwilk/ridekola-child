<?php
/**
 * Template Name: Full Width Page ACF
 *
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper bg-dark" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>-fluid" id="content">

		<div class="row">

			<div class="col-md-12 content-area text-light pt-0" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						// Calling ACF rows

					}

                        // Check value exists.
                        if( have_rows('content_rows') ):

                            // Loop through rows.
                            while ( have_rows('content_rows') ) : the_row();

                                get_template_part( 'row-templates/row', get_row_layout() );

                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;
					?>

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
