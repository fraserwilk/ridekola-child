<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('card mb-3 h-100'); ?> id="post-<?php the_ID(); ?>" style="max-width: 540px;">

	<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'card-img-top' ) ); ?>

	<div class="card-body">

		<?php
		the_title(
			sprintf( '<h2 class="card-title"><a href="%s" class="text-dark" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>
	</div>
	

	<div class="card-body">

		<?php
		the_excerpt();
		// understrap_link_pages();
		?>

	</div><!-- .card content -->



</article><!-- #post-<?php the_ID(); ?> -->
