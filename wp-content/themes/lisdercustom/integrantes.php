<?php
/*
Template name: integrantes
*/
?>

<?php
get_header();
?>

<div id="publicacion-container" class="row">
	<div class="large-12 columns">
		<h3>Integrantes</h3>
		<h6 class="subheader text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, consequatur aspernatur ipsa quibusdam ex inventore doloribus ullam odit. Veniam, earum ullam cumque amet libero ducimus obcaecati expedita magnam consequatur modi.</h6>
	</div>

	<div class="large-12 columns">
		<div class="row">
			<?php
			$args = array(
				'post_type' => 'integrante',
				);

			$the_query = new WP_Query( $args);
			?>
			<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>

			<div class="integrante large-3 columns">
				<div class="imagen">
					<?php the_post_thumbnail("proyectos_square") ?>
					<!--<img src="http://placehold.it/220x210" alt="">-->
				</div>
				<div class="pie">
					<div class="row collapse">
						<div class="large-9 columns">
							<p><?php the_title(); ?></p>
						</div>

						<div class="large-3 columns">
							<a href="<?php echo get("cv") ?>">
								<img src="<?php bloginfo('template_directory');?>/img/contract_w.png" class="right" alt="Curriculum">
							</a>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; else: 
			?>
			<?php endif; 
			?>
		</div>
	</div>
</div>

<?php
get_footer(); 
?>

