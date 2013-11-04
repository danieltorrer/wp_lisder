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
	</div>
	

	<div class="large-12 columns integrantes">

		<?php 
		$args = array(
			'post_type' => 'integrante',
			);

		$the_query = new WP_Query( $args);
		?>
		<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
		?>
		
		<div class="integrante">
			<div class="row">
				<div class="large-4 columns">
					<?php the_post_thumbnail( "thumbnail", $attr = '' ) ?>
				</div>
				<div class="large-8 columns">
					<h4><?php the_title(  ) ?></h4>
					<?php the_content(  ); ?>	
				</div>
			</div>
		</div>

		<?php endwhile; else: 
		?>
		<?php endif; 
		?>

	</div>
	
</div>

<?php 
get_footer(); 
?>

