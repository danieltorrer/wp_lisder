
<?php
get_header();
?>

<div id="main" class="row">

	<div class="large-12 columns">
		<?php if (have_posts()) : ?> 
				<?php while (have_posts()) : the_post(); // the loop ?> 
					<div class="post" id="post-<?php the_ID(); ?>"> 
						<h2>
							<?php the_title(); ?>
						</h2>
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
				<?php endwhile; ?>
			<?php next_posts_link('&laquo; Older Entries') ?> 
		
			<?php previous_posts_link('Newer Entries &raquo;') ?> 
			<?php else : ?> <h2 class="center">Not Found</h2> <p class="center">Sorry, but you are looking for something that isn't here.</p> 
		<?php endif; ?>
		
	</div>
</div>

<?php 
get_footer(); 
?>