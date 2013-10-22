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

	});

	$(".publicacion-tax .wp-tag-cloud li a").attr("href","#")

	$(".publicacion-tax .wp-tag-cloud li a").click(function(event){
		event.preventDefault();
		$(this).attr("data-filter", $(this).text().replace(" ","_"))
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;

	})
})