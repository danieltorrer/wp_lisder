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

<div class="row content">
	<div class="large-12 columns"><h2>Ultimas noticas</h2></div>
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
		<h5>Contactanos a travez de las redes sociales </h5>
		<div><h5 class="subheader">Twitter</h5> <h5 class="subheader">Facebook</h5></div>
	</div>

</div>

<!--<div class="row content">
	
	<?php

	$args = array(
		'numberposts' => 3,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'proyecto'
		);

	$recent_posts = wp_get_recent_posts( $args );

			//$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		?>
		<div class="large-4 columns">
			<a href="<?php echo get_permalink($recent['ID']); ?>"> <?php echo get_the_post_thumbnail( $recent["ID"],"proyectos_square") ; ?> </a>
			<hr>
			<a href="<?php echo get_permalink($recent['ID']); ?>"><h4><?php echo $recent["post_title"]; ?></h4></a>
			
		</div>
		<?php
	}
	?>
</div>-->

<div id="scene-cont2">
	<div id="mapa" class="large-12 columns">
		
	</div>
</div>

<?php 
get_footer(); 
?>