$(document).ready(function(){
	$('#scene').parallax();
	$('#scene2').parallax();
	$(document).foundation('orbit',{
		slide_number: false,
		bullets: false,
		timer: true
	});
})