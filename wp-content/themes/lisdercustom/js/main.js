$(document).ready(function(){
	$('#scene').parallax();
	$('#scene2').parallax();
	$(document).foundation('orbit',{
		slide_number: false,
		bullets: false,
		timer: true
	});

	$(".publicacion-tax .wp-tag-cloud li a").attr("href","#");

	$(".publicacion-tax .wp-tag-cloud li a").click(function(event){
		event.preventDefault();
		
	})
})