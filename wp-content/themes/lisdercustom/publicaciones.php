<?php
/*
Template name: publicaciones
*/
?>
<?php
get_header();
?>
<div id="publicacion-container"><div class="row">
	<div class="large-12 columns">
		<h1>Investigación</h1>
	</div>
</div>
<?php 
$args = array(
	'post_type' => 'publicacion',
	);

$the_query = new WP_Query( $args);
?>
<div class="row">
	<div class="large-3 columns publicacion-tax">

		<h5>Años</h5>
		<ul class="show-all">
			<li><a href="#" data-filter="*">Todos</a></li>
		</ul>
		<?php wp_tag_cloud ( array( 'taxonomy' => 'fecha', format => 'list')); ?>

		<br><br>

		<h5>Revistas</h5>
		<ul class="show-all">
			<li ><a href="#" data-filter="*">Todas</a></li>
		</ul>
		<?php wp_tag_cloud( array( 'taxonomy' => 'revista', format => 'list' ) ); ?>
	</div>

	<div class="large-9 columns isotope-container">
		
		<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
		?>

		<div class="large-12 columns descripcion-articulo <?php echo simple_fecha(); ?> <?php echo str_replace(" ", "_", simple_revista()); ?>" >
			
			<h3> <?php the_title()?> </h3>
			<?php the_content() ?>
			<!--<p class="subheader"><?php echo get("autores") ?></p>-->
			<small>Año: <cite><?php echo simple_fecha();?></cite></small>
			<br>
			<small>Revista: <cite><?php echo simple_revista(); ?></cite></small>
			<hr>
		</div>
		
		<?php endwhile; else: 
		?>
		<?php endif; 
		?>
	</div>
</div></div>




<?php 
get_footer(); 
?>


