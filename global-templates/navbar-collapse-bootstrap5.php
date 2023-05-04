<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<nav id="main-nav" class="navbar pt-4" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="<?php echo esc_attr( $container ); ?>  col-md-8 offset-md-1">

		<!-- Ride Kola branding in the menu -->
		<?php get_template_part( 'global-templates/navbar-branding' ); ?>


<!--			<span class="navbar-toggler-icon"></span> -->
			<!-- using an svg as hamburger -->
			<!-- <svg viewBox="0 0 100 80" width="40" height="40" fill="#000000">
				<rect width="100" height="12" rx="4"></rect>
				<rect y="30" width="100" height="12" rx="4"></rect>
				<rect y="60" width="100" height="12" rx="4"></rect>
			</svg> -->
		

		<nav class="navbar navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler border border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
		<svg viewBox="0 0 100 80" width="40" height="40" fill="#000000">
				<rect width="100" height="12" rx="4"></rect>
				<rect y="30" width="100" height="12" rx="4"></rect>
				<rect y="60" width="100" height="12" rx="4"></rect>
			</svg>
        </button>
        <div class="offcanvas offcanvas-end pt-5 px-3" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'container'         => false,
                        'menu_class'        => 'navbar-nav',
                        'fallback_cb'       => '__return_false',
                        'depth'             => 2,
                        'walker'            => new Understrap_WP_Bootstrap_Navwalker(),
                    ) );
                ?>
            </div>
        </div>
    </div>
</nav>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->
