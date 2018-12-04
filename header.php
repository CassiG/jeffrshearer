<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jeff-shearer-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jeff-shearer-portfolio' ); ?></a>

	<header id="masthead" class="site-header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="site-navigation">
		<span class="navbar-brand">
		<span class="d-block d-lg-none">Clarence Taylor</span>
		<span class="d-none d-lg-block">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
		</span>
	</span>
	<span class="site-title site-name mb-0">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
	</span>
	<?php else : ?>
	<p class="site-title site-name mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	s<?php endif; ?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php
			$args = array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container' => 'ul',
				'menu_class' => 'navbar-nav',
			);
			wp_nav_menu($args);
			?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
