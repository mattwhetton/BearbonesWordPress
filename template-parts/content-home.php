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
