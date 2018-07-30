<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bearbones
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section id="navbar">
		<div class="container full-x">
			<!-- <a class="skip-link screen-reader-text" href="#content">
					<?php esc_html_e( 'Skip to content', 'bearbones' ); ?>
			</a> -->
			<header class="bb-navbar">
				<div class="brand">
					<div class="item">
						<a href="/" class="logo"></a>
						<?php
							// $custom_logo_id = get_theme_mod( 'custom_logo' );
							// $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							// if ( has_custom_logo() ) {
							// 		echo '<img src="'. esc_url( $logo[0] ) .'">';
							// } else {
							// 		echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
							// }
							if ( is_front_page() && is_home() ) :
						?>
					</div>
					<!-- <button class="toggle" aria-controls="primary-menu" aria-expanded="false">
						<span></span>
						<span></span>
						<span></span>
					</button> -->
				</div>
				<!-- <div id="navbar-menu" class="items">
					<div class="right">
						<div class="item bb-dropdown hover">
							<a class="link dropdown-toggle">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="/500-pound-loans">£500 loans</a>
								<a class="dropdown-item" href="/1000-pound-loans">£1000 loans</a>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?>
		</div>
		</div>
		</div>
		</div> -->

		<?php endif; ?>
		</header>
		</div>
	</section>

	<div id="content" class="site-content">