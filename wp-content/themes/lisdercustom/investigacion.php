<?php
/*
Template name: investigacion
*/
?>
<?php
get_header();
?>
<div class="row">
	<div class="large-12 columns">
		<h1>Proyectos</h1>

			<!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(  ) ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>		-->
	</div>
</div>

<div class="row proyectos">
	<div class="large-6 columns">
		<div class="proyecto">
			<div class="proyecto-bg">
				<img src="<?php bloginfo('template_directory');?>/img/2s.jpg" alt="">
			</div>
			<div class="proyecto-content">
				<h4>Gave ploter</h4>
				<p>Lorem ipsum dolor sit amet, con corporis velit facere consequuntur vel assumenda ad accusamus tempora ducimus iust.</p>
				<a class="button small right" href="#">Ver proyecto</a>
			</div>
		</div>
	</div>

	<div class="large-6 columns">
		<div class="proyecto">
			<div class="proyecto-bg">
				<img src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="" height="229">
			</div>
			<div class="proyecto-content">
				<h4>Gave ploter</h4>
				<p>Lorem ipsum dolor sit amet, con corporis velit facere consequuntur vel assumenda ad accusamus tempora ducimus iust.</p>
				<a class="button small right" href="#">Ver proyecto</a>
			</div>
		</div>
	</div>

	<div class="large-6 columns">
		<div class="proyecto">
			<div class="proyecto-bg">
				<img src="<?php bloginfo('template_directory');?>/img/3s.jpg" alt="">
			</div>
			<div class="proyecto-content">
				<h4>Gave ploter</h4>
				<p>Lorem ipsum dolor sit amet, con corporis velit facere consequuntur vel assumenda ad accusamus tempora ducimus iust.</p>
				<a class="button small right" href="#">Ver proyecto</a>
			</div>
		</div>
	</div>

	<div class="large-6 columns">
		<div class="proyecto">
			<div class="proyecto-bg">
				<img src="<?php bloginfo('template_directory');?>/img/4.jpg" alt="">
			</div>
			<div class="proyecto-content">
				<h4>Gave ploter</h4>
				<p>Lorem ipsum dolor sit amet, con corporis velit facere consequuntur vel assumenda ad accusamus tempora ducimus iust.</p>
				<a class="button small right" href="#">Ver proyecto</a>
			</div>
		</div>
	</div>
	
	<div class="large-6 columns">
		<div class="proyecto">
			<div class="proyecto-bg">
				<img src="<?php bloginfo('template_directory');?>/img/2s.jpg" alt="">
			</div>
			<div class="proyecto-content">
				<h4>Gave ploter</h4>
				<p>Lorem ipsum dolor sit amet, con corporis velit facere consequuntur vel assumenda ad accusamus tempora ducimus iust.</p>
				<a class="button small right" href="#">Ver proyecto</a>
			</div>
		</div>
	</div>

	<div class="large-6 columns">
		<div class="proyecto">
			<div class="proyecto-bg">
				<img src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="" height="229">
			</div>
			<div class="proyecto-content">
				<h4>Gave ploter</h4>
				<p>Lorem ipsum dolor sit amet, con corporis velit facere consequuntur vel assumenda ad accusamus tempora ducimus iust.</p>
				<a class="button small right" href="#">Ver proyecto</a>
			</div>
		</div>
	</div>

</div>

<?php 
get_footer(); 
?>


