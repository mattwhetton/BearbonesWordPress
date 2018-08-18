<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bearbones
 */

?>


	<article class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . "
	 "; } ?> bb-box" id="post-<?php the_ID(); ?>">
		
		<?php bearbones_post_thumbnail(); ?>
		<div class="header align-self-start">
			<div class="title">
				<?php
			the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		?>
			</div>
			<div class="subtitle">
				<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bearbones' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bearbones' ),
			'after'  => '</div>',
		) );
		?>
			</div>
		</div>
		<!-- .content -->

		<footer class="footer d-flex align-self-end font-weight-bold">
			<?php 
				if ( 'post' === get_post_type() ) :
					?>
			<small>
				<?php
							bearbones_posted_on();
							bearbones_posted_by();
							?>
			</small>
			<?php endif; ?>
		</footer>
		<!-- .footer -->
	</article>
	<!-- #post-<?php the_ID(); ?>-->
