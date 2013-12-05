<?php
get_header();
?>
<div id="mapa">
</div>

<div style="background: none; position: fixed; top: calc(100% - 50px); height: auto; left: calc(50% - 14px); z-index: 1000;">
	<a href="#feed" id="down"><img src="<?php bloginfo('template_directory');?>/img/down_b.png" alt=""></a>
</div>

<div id="feed" style="position:relative;">
	<!--<div style="background: none; position: absolute; top: 10px; height: auto; left: calc(50% - 14px);">
		<a href="#header">
			<img src="<?php bloginfo('template_directory');?>/img/up_b.png" alt="">
		</a>
	</div>-->
	<div class="row">
		<div class="large-8 columns slideshow-wrapper">
			<div class="preloader"></div>
			<ul data-orbit>
				<?php

				$args = array(
					'numberposts' => 3,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'entrada'
					);

				$recent_posts = wp_get_recent_posts( $args );

			//$recent_posts = wp_get_recent_posts();
				foreach( $recent_posts as $recent ){
					?>
					<li>
						<a href="<?php echo get_permalink($recent['ID']); ?>"> <?php echo get_the_post_thumbnail( $recent["ID"], "entrada", ""); ?> </a>

						<div class="orbit-caption"><?php echo $recent["post_title"]; ?></div>
					</li>
					<?php
				}
				?>

			</ul>
		</div>

		<div class="large-4 columns">
			<h5>Utimas publicaciones</h5>

		</div>
	</div>
	<!--<div style="background: none; position: absolute; top: calc(100% - 50px); height: auto; left: calc(50% - 14px);">
		<a href="#feed"><img src="<?php bloginfo('template_directory');?>/img/down_b.png" alt=""></a>
	</div>-->
</div>

<?php 
get_footer(); 
?>