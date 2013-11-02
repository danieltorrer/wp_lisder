$(document).ready(function(){
	$('#scene').parallax();
	$('#scene2').parallax();
	$(document).foundation('orbit',{
		slide_number: false,
		bullets: false,
		timer: true
	});

	var $container = $('.isotope-container');

	$container.isotope({
		itemSelector : '.descripcion-articulo',
		layoutMode : 'fitRows'
	});

	$(".publicacion-tax .wp-tag-cloud li a").attr("href","#")

	$(".show-all li a").click(function(event){
		event.preventDefault();
		$container.isotope({ filter: $(this).attr("data-filter") });
		return false;
	})

	$(".publicacion-tax .wp-tag-cloud li a").click(function(event){
		event.preventDefault();
		$container.isotope({ filter: "." + $(this).text().replace(" ","_") });
		return false;
	})
})