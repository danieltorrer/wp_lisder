<?php
get_header();
?>
<div id="scene-cont">
	<ul id="scene" class="parallax-scene">
		
		<li class="layer img-scene" data-depth="0.9"><img src="<?php bloginfo('template_directory');?>/img/l1.png" alt=""></li>
		<li class="layer img-scene" data-depth="0.8"><img src="<?php bloginfo('template_directory');?>/img/l4.png" alt=""></li>
		<li class="layer img-scene" data-depth="0.4"><img src="<?php bloginfo('template_directory');?>/img/l5.png" alt=""></li>
		<li class="layer img-scene" data-depth="0.5"><img src="<?php bloginfo('template_directory');?>/img/l6.png" alt=""></li>
		<li class="layer img-scene" data-depth="0.6"><img src="<?php bloginfo('template_directory');?>/img/l7.png" alt=""></li>
		<li class="layer img-scene" data-depth="0.6"><img src="<?php bloginfo('template_directory');?>/img/l8.png" alt=""></li>
		<li class="layer img-scene" data-depth="0.3"><img src="<?php bloginfo('template_directory');?>/img/l9.png" alt=""></li>
		
		<li class="layer titles">
			<div class="row">
				<div class="large-12 columns">
					<h2>Somos un laboratorio de investigación en energias renovables</h2>
					<!--<h3 class="subheader">Lorem ipsum dolor.</h3>-->
					<div class="btn-bottom">
						<a href="nosotros" class=""><h5 class="blue">Más sobre nosotros >></h5></a>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>

<div class="noticias">
	<div class="row content">
		<div class="large-12 columns">
			<h2>Ultimas noticias</h2>
		</div>
		<div class="large-8 columns">
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
</div>

<div id="scene-cont2" style="position: relative;">
	<div id="mapa"></div>
	<div class="row" style="position: absolute; top: 15px;">
		<div class="large-8 large-centered columns">
			<div class="texto">
					<h3>Proyectos alrededor del mundo</h3>
				</div>
			</div>
	</div>
	
</div>
<?php 
get_footer(); 
?>