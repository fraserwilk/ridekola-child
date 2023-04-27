<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<article <?php post_class('card'); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'card-img-top' ) ); ?>

	<header class="entry-header card-body">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" class="text-dark" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

	</header><!-- .entry-header -->

	<div class="entry-content card-body text-dark">

		<?php
		the_excerpt();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->
