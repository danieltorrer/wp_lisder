<?php
/*
Template name: proyectos
*/
?>
<?php
get_header();
?>
<div class="proyect-container">
	<div class="row">
		<div class="large-12 columns">
			<h1>Proyectos</h1>
		</div>
	</div>

	<div class="row proyectos">
		
		<?php 

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

		$args = array(
			'posts_per_page' => 4,
			'paged' => $paged,
			'post_type' => 'proyecto'
			);

		$the_query = new WP_Query( $args);
		?>
		<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
		?>
		<div class="large-6 columns">
			<div class="proyecto">
				<div class="proyecto-bg">
					<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(),'proyectos' ); ?>
					<img src="<?php echo $url[0]?>" alt="">
				</div>
				<div class="proyecto-content">
					<h4> <a href="<?php the_permalink() ?>"><?php the_title()?></a> </h4>
					<?php the_excerpt() ?>
					<!--<a class="button small right" href="<?php the_permalink() ?>">Ver proyecto</a>-->
				</div>
			</div>
		</div>

		<?php endwhile; else: 
		?>
		<?php endif; 
		?>

		<div class="row">
			<div class="large-12 columns">
				<div class="paginas">
					<?php
					$big = 999999999;

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $the_query->max_num_pages,
						'prev_text'    => __('«'),
						'next_text'    => __('»'),
						));
						?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php 
	get_footer(); 
	?>


