// DOM Ready
$(function() {
	
	// Galery 
	for(galery in galeries) {
		slides = parseInt(galeries[galery].slides,10);
		$('.carrusel_'+galeries[galery].class).owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
			items:slides,
			autoHeight:true
		});	
	}
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});