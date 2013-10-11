<?php
	get_header();
?>
	
	<div class="row">
		<div class="large-12 columns">
			<?php if (have_posts()) : ?> 
				<?php while (have_posts()) : the_post(); // the loop ?> 
					<div class="post" id="post-<?php the_ID(); ?>"> 
						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
						<?php the_time('F jS, Y') ?> by <?php the_author() ?> 
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
  
