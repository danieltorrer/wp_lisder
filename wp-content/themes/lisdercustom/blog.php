<?php
/*
Template name: blog
*/
?>
<?php
get_header();
?>
<div class="row">
	<div class="large-12 columns">
		<h1>Entradas</h1>
	</div>
</div>

<div class="row proyectos">
	
	<?php 
	$args = array(
		'post_type' => 'entrada'
		);

	$the_query = new WP_Query( $args);
	?>
	<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
	?>
	<div class="large-6 columns">
		<div class="entrada">
			<div class="entrada-bg">
				<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(),'proyectos' ); ?>
				<img src="<?php echo $url[0]?>" alt="">
			</div>
			<div class="entrada-content">
				<h4> <a href="<?php the_permalink() ?>"><?php the_title()?></a> </h4>
				<?php the_excerpt() ?>
			</div>
		</div>
	</div>


	<?php endwhile; else: 
	?>
	<?php endif; 
	?>

</div>

<?php 
get_footer(); 
?>


