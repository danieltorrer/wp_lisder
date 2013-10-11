<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="" class="row" role="banner">
		<hgroup class="large-3 columns">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php bloginfo('template_directory');?>/img/logo.gif" alt="">
				</a>
			</h1>
			</hgroup>

			<nav id="" class="large-9 columns" role="navigation">
				<?php 
				$defaults = array(
					'menu'			  => 'menu-1',
					'container'       => 'false',
					'menu_class'      => 'inline-list menu',
					'echo'            => true,
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					);
				wp_nav_menu( $defaults ); 
				?>
			</nav>
		</header>

		<div id="main" class="wrapper">