<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bearbones
 */

get_header();
?>

<section class="section">
	<div class="container">
		<div class="bb-grid">
			<div class="column column-14 column-offset-1">

				<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
			

		endwhile; // End of the loop.
		?>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="bb-grid">
			<div class="column column-14 column-offset-1">
					<?php
				while ( have_posts() ) :
					the_post();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
					<!-- #primary -->
			</div>
		</div>
	</div>
</section>
<?php
get_sidebar();
get_footer();
