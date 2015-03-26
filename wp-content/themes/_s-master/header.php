<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/docs.css" type="text/css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php ?>_e( 'Skip to content', '_s' ); <?php ?></a> -->

	<header id="header" class="site-header" role="banner">
		<!-- Added by Me -->
		<div class="container">
			<div class="row">
				<div class="inner_header">
					<div class="col-sm-4">
						<div class="logo">
							<h1>Lets say there is LOGO</h1>
						</div>
					</div>
					<div class="col-sm-4 pull-right">
						<div class="social">
							<h1>Lets say there is some Contact Part</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="menu_part">
			<nav id="main-navigation">
					
			</nav>
		</div>
		<!-- Default added by Underscore_s -->
		
		<!-- <div class="site-branding">
			<h1 class="site-title"><a href="<?php ?> echo esc_url( home_url( '/' ) ); <?php ?>" rel="home"><?php ?>bloginfo( 'name' ); <?php ?></a></h1>
			<h2 class="site-description"><?php ?>bloginfo( 'description' ); <?php ?></h2>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php ?>_e( 'Primary Menu', '_s' ); <?php ?></button>
			<?php ?>wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); <?php ?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->