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

	<div class="large-12 columns integrantes">
		<div class="row">
			<?php
				$cont = 0;
				$count_posts = wp_count_posts('integrante');
				$total = $count_posts->publish;
				$args = array(
					'post_type' => 'integrante',
					'order'	=> "ASC"
					);

				$the_query = new WP_Query( $args);
			
				if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

				if ($cont == 0) {
			?>
				
				<div class="large-3 columns large-centered small-5 small-centered integrante">
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
				<?php
			}

			elseif ($cont < 4) {
				
				if ($cont == 1) { ?>
				<div class="row">
					<div class="large-9 large-centered small-12 columns">
						<div class="row">
							<?php 
						}?>

						<div class="integrante large-4 small-4 columns">
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

						<?php

						if ($cont == 3) {
							?>
						</div>
					</div>
				</div>
				<?php
			}

			
		}

		elseif ($cont >= 4) {
			# code...
			if ($cont == 4) {?>
			<div class="orbit-container">
				<ul data-orbit id="slider-integrantes">
					<?php
				}

				if ($cont%4 == 0) { ?>
				<li>
					<?php 
				} ?>


				<div class="integrante large-3 small-3 columns">
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

				<?php if ($cont%4 == 3) { ?>
					</li>
				<?php }
					if ($cont == $total -1) { ?>
						</ul>
					</div>
				<?php
				}
		}

		$cont++;
		endwhile; else: 
	endif; ?>
</div>
</div>

</div>

<?php
get_footer(); 
?>

