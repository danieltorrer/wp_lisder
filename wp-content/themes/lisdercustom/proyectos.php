<?php
/*
Template name: proyectos
*/
?>
<?php
get_header();
?>
<div class="row">
	<div class="large-12 columns">
		<h1>Proyectos</h1>
	</div>
</div>

<div class="row proyectos">
	
	<?php 
	$args = array(
		'post_type' => 'proyecto',
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
	<!--
	

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
-->

</div>

<?php 
get_footer(); 
?>


