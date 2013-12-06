function scrollPanel(e){
	e.preventDefault()
	if (!scrolling) {
		scrolling = true;
		getSizeScroll()			
		var evt = window.event || e //equalize event object
		var delta	=	evt.detail? evt.detail*(-120) : evt.wheelDelta
		var signo	=	delta>0? "-" : "+"
		$.scrollTo( signo+'='+scrollSize, 900 );
		setTimeout ("scrolling = false;", 900);
	}
}

function getSizeScroll(){
	if ((window.innerHeight + window.scrollY) >= $(document).height()) {
		scrollSize = 249;
	}
	else{
		scrollSize = height;
	}
}