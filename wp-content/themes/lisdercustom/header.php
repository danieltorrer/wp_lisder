<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> style="height: 100%;">
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<!--<title><?php bloginfo('name');?> <?php wp_title(); ?> </title>-->
	<title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="<?php bloginfo('template_directory');?>/js/vendor/custom.modernizr.js"></script>
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body style="height: 100%;">
	<header id="header">
		<div class="row collapse" role="banner">
			<hgroup class="large-2 small-4 small-centered large-uncentered columns">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php bloginfo('template_directory');?>/img/LISDER.png" alt="">
					</a>
				</h1>
			</hgroup>
			
			<nav id="" class="large-8 small-12 columns" role="navigation">
				<?php 
				$defaults = array(
					'menu'			  => 'menu-1',
					'container'       => 'false',
					'menu_class'      => 'inline-list menu right',
					'menu_id'		  => 'menue',
					'items_wrap' 	  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'echo'            => true,
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					);
				wp_nav_menu( $defaults ); 
				?>
			</nav>

			<div class="social large-2 columns">
				<a href="https://twitter.com/LISDERFCC"><img src="<?php bloginfo('template_directory');?>/img/some_b.png" alt=""></a>
				<a href="https://www.facebook.com/LISDER"><img src="<?php bloginfo('template_directory');?>/img/fb1.png" alt=""></a>
			</div>
		</div>
	</header>

	<!--<div id="main" class="wrapper">-->