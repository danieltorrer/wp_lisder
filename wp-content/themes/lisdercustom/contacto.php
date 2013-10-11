<?php
	/*
	Template name: contacto
*/
	?>
	<?php
	get_header();
	?>
	<div class="row">
		<div class="large-12 columns">
			<h1>Contacto</h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(  ) ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>		
</div>
</div>

<?php 
get_footer(); 
?>

