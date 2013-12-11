<?php
/*
Template name: nosotros
*/
?>

<?php
get_header();
?>
<div class="row">
	<div class="large-12 columns">
		<h1>Nosotros</h1>
		<h6 class="subheader text-justify ">Nuestro equipo esta formado por multidiscipli Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quia, vel, vitae, dignissimos consequuntur animi ducimus ipsa facere exercitationem dicta cumque voluptate rem aspernatur dolore doloribus quibusdam harum voluptas. Ut.</h6>
		
		<hr>

	</div>

	<div class="large-12 columns">
		<h3>Misión</h3>
		<h6 class="subheader text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, ratione, doloribus, dignissimos non vero et inventore dicta quos ducimus consectetur culpa dolore quisquam ipsum facere fugiat delectus possimus blanditiis autem.</h6>

	</div>

	<div class="large-12 columns">
		<h3>Visión</h3>
		<h6 class="subheader text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, consequatur aspernatur ipsa quibusdam ex inventore doloribus ullam odit. Veniam, earum ullam cumque amet libero ducimus obcaecati expedita magnam consequatur modi.</h6>
		<hr>
	</div>
	

	<div class="large-12 columns">
		<h3>Integrantes</h3>
		<h6 class="subheader text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, consequatur aspernatur ipsa quibusdam ex inventore doloribus ullam odit. Veniam, earum ullam cumque amet libero ducimus obcaecati expedita magnam consequatur modi.</h6>
	</div>

	<div class="large-12 columns integrantes">
		<div class="row">
			<?php
			$args = array(
				'post_type' => 'integrante',
				);

			$the_query = new WP_Query( $args);
			?>
			<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>
			
			<div class="large-3 columns">
				<div class="integrante">
					<?php the_post_thumbnail() ?>
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

