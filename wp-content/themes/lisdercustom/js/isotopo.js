$(document).ready(function(){

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
		console.log($(this).text().replace(" ","_"))
		$container.isotope({ filter: "." + $(this).text().split(" ").join("_") });
		return false;
	})
})