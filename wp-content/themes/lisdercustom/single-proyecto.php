<?php
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div id="proyecto-container" style="background: url('<?php echo $url?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
		<div class="layer-proyecto">
			<div class="row">

				<div class="large-12 columns titulo">
					<h2><?php the_title(  ) ?></h2>
				</div>

				<div class="large-12 columns descripcion">
					<?php the_excerpt(); ?>
				</div>

				<div class="large-12 columns tecnologias">
					<div class="right">
						<h5>Tecnologias</h5>
						<?php 
						$value  = get_field ('tecnologia') ;
						
						foreach ( $value  as  $my_val ) { 
							//var_dump($my_val);?>
								<img src="<?php echo $my_val['thumb'] ?>" alt="Tecnologia" width="100">
							<?php
						}
						?>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="large-12 columns contenido-proyecto">
			<?php the_content(  ) ?>
		</div>
	</div>


	<?php endwhile; else: 
	?>
	<?php endif; 
	?>

	<?php 
	get_footer(); 
	?>