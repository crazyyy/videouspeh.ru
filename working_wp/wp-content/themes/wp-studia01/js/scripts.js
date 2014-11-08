// DOM Ready
$(function() {
	
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
// 	nav last child wide
//	https://gist.github.com/crazyyy/11367488
$(function() {
	$( ".headnav li:last-child a" ).addClass( "last-child-a" );
	var navUl = $('.headnav').width();
	var lastChildA = $('.last-child-a').width();

    $('.last-child-a').width(840 - navUl + lastChildA );
});