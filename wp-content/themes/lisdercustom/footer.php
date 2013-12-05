	<!--</div><!-- #main .wrapper -->
	<footer role="contentinfo" id="footer">
		<div class="row">
			<div class="large-12 columns">
				<div>
					<img src="<?php bloginfo('template_directory');?>/img/buap_s.png" alt="">
					<img src="<?php bloginfo('template_directory');?>/img/logofcc_s.png" alt="">
					<img src="<?php bloginfo('template_directory');?>/img/LISDER.png" alt="">

					<div class="copyright">
						<p>© 2013, Laboratorio de Sistemas Digitales y Energía Renovable BUAP. Todos los derechos reservados. </p>
					</div>

					<div class="social">
						<a href="https://twitter.com/LISDERFCC"><img src="<?php bloginfo('template_directory');?>/img/some.png" alt=""></a>
						<a href="https://www.facebook.com/LISDER"><img src="<?php bloginfo('template_directory');?>/img/fb1.png" alt=""></a>
					</div>
				</div>				

			</div>
		</div>

	</footer><!-- #colophon -->

	<script src="<?php bloginfo('template_directory');?>/js/vendor/jquery.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/foundation.min.js"></script>
	<!--<script src="<?php bloginfo('template_directory');?>/js/main.js ?>"></script>-->
	<?php 
	if(is_front_page()){
		?>
		<!--<script src="<?php bloginfo('template_directory');?>/js/parallax.min.js"></script>-->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<!--<script src="<?php bloginfo('template_directory');?>/js/parallax.js"></script>-->
		<script src="<?php bloginfo('template_directory');?>/js/gmaps.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/scrollTo.min.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/orbit.js"></script>
		<script>
		var height  = $("body").css("height")
		var scrolling = false;

		function scrollPanel(e){
			e.preventDefault()
			if (!scrolling) {
				scrolling = true;
				var evt = window.event || e //equalize event object
				var delta	=	evt.detail? evt.detail*(-120) : evt.wheelDelta
				var signo	=	delta>0? "-" : "+"
				console.log(signo)
				$.scrollTo( signo+'='+height, 900 );
				
				 setTimeout ("scrolling = false;", 900); 
			}
			else{
				console.log('busy')
			}
		}

		$(document).ready(function(){
			
			var mousewheelevt=(/Firefox/i.test(navigator.userAgent))? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
 			if (document.attachEvent) //if IE (and Opera depending on user setting)
 				document.attachEvent("on"+mousewheelevt, function(e){
 					scrollPanel(e)

 				})
 			else if (document.addEventListener) //WC3 browsers
 				document.addEventListener(mousewheelevt, function(e){
 					scrollPanel(e)
 				}, false)



 			height  = $("body").css("height")
 			$('#down').click(function(){
 				$.scrollTo( '+='+height, 900 );
 			});

 			map = new GMaps({
 				div: '#mapa',
 				lat: 29.668291,
 				lng: -42.174454,
 				zoom: 3,
 				scrollwheel: false,
				//draggable: false
			});


 			<?php 
 			$args = array(
 				'post_type' => 'proyecto',
 				);

 			$the_query = new WP_Query( $args);
 			?>
 			<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
 			?>

 			map.addMarker({
 				lat: <?php echo get_field('latitud')[1] ?>,
 				lng: <?php echo get_field('longitud')[1] ?>,
 				title: '<?php the_title()?>',
 				infoWindow: {
 					content: '<h6><?php echo get_field("pais")[1] ?></h6> <p><a href=" <?php the_permalink() ?> "><?php the_title()?></a></p>'
 				}
 			});


 			<?php endwhile; else: 
 			?>
 			<?php endif; 
 			?>
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