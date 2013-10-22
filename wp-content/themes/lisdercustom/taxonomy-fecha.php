<?php
/*
*/
?>
<?php
get_header();
?>
<div class="row">
	<div class="large-12 columns">
		<h1>Investigación</h1>
	</div>
</div>
<?php 
$args = array(
	'post_type' => 'publicacion',
	'NAMEOFTAXONOMY' => 'fecha'
	);

$the_query = new WP_Query( $args);
?>
<div class="row">
	<div class="large-3 columns">

		<h5>Años</h5>
		<?php wp_tag_cloud( array( 'taxonomy' => 'fecha', format => 'list' ) ); ?>

		<br><br>

		<h5>Revistas</h5>
		<?php wp_tag_cloud( array( 'taxonomy' => 'revista', format => 'list' ) ); ?>
	</div>

	<div class="large-9 columns">
		
		<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
		?>
		<div class="row">
			<!--<div class="large-4 columns"> <?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' ) ?> </div>-->
			<div class="large-12 columns descripcion-articulo">
				<h3> <?php the_title()?> </h3>
				<?php the_content() ?>
				<!--<p class="subheader"><?php echo get("autores") ?></p>-->
				<small>Año: <cite> 
					<?php

					$terms = get_terms("fecha");
					$count = count($terms);
					if ( $count > 0 ){

						foreach ( $terms as $term ) {
							echo $term->name;
						}

					}
					?>
				</cite></small>
				<br>
				<small>Revista: <cite> 
					<?php
					
					$terms = get_terms("revista");
					$count = count($terms);
					if ( $count > 0 ){
						
						foreach ( $terms as $term ) {
							echo $term->name;
						}
						
					}
					?>
				</cite></small>
			</div>
		</div>
		<hr>

		<?php endwhile; else: 
		?>
		<?php endif; 
		?>
	</div>
</div>




<?php 
get_footer(); 
?>


