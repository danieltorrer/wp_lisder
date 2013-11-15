	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="row">
			<div class="large-12 columns">
				<div>
					<img src="http://placehold.it/60x60" alt="">
					<img src="http://placehold.it/60x60" alt="">
					<img src="http://placehold.it/60x60" alt="">

					<div class="copyright">
						<p>© 2013, Laboratorio de Sistemas Digitales y Energía Renovable BUAP. Todos los derechos reservados. </p>
					</div>

					<div style="padding:10px; text-align:center;">
						<img src="http://placehold.it/50x20" alt="">
						<img src="http://placehold.it/50x20" alt="">
					</div>
				</div>				

			</div>
		</div>

	</footer><!-- #colophon -->

	<script src="<?php bloginfo('template_directory');?>/js/vendor/jquery.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/foundation.min.js"></script>
	<?php 
	if(is_front_page()){
		?>
		<script src="<?php bloginfo('template_directory');?>/js/parallax.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?php bloginfo('template_directory');?>/js/parallax.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/gmaps.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/orbit.js"></script>

		<script>
		$(document).ready(function(){
			map = new GMaps({
				div: '#mapa',
				lat: 20.11784,
				lng: -35.683594,
				zoom: 3,
				scrollwheel: false,
			});
		});
		</script>
		<?php
	}
	?>

	<?php
	if (is_page("investigacion" )) {
		?>
		<script src="<?php bloginfo('template_directory');?>/js/isotope.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/isotopo.js"></script>
		<?php
	}
	?>
	
	<?php wp_footer(); ?>

</body>
</html>