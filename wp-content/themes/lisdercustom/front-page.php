<?php
get_header();
?>
<div id="mapa"></div>
<div id="feed" style="position:relative;">
	<div class="row">
		<div class="large-8 columns slideshow-wrapper">
			<h4>Utimas noticias</h4>
			<div class="preloader"></div>
			<ul data-orbit>
				<?php

				$args = array(
					'numberposts' => 5,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'entrada'
					);

				$recent_posts = wp_get_recent_posts( $args );
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
			<h4>Utimas publicaciones</h4>
			<?php

			$args = array(
				'numberposts' => 5,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => 'publicacion'
				);

			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				?>
				<div class="orbit-caption">
					<a href="<?php echo get_permalink($recent['ID']); ?>">
						<p><?php echo $recent["post_title"]; ?></p>
					</a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>

<?php 
get_footer(); 
?>