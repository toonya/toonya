jQuery(function($) {

	var tl_pageaware = new TimelineMax({repeat: -1, yoyo:true});
	tl_pageaware.to($('.page-aware'), .5, {bottom: '4%'});

/*
	var scroll = {
		origin:0,
		to:$('body').height()
	};
	$('.page-aware span').on('click', function(){
		scroll.to = $('body').height();
		TweenMax.to(scroll, 0.2, {origin: scroll.to, onUpdate:wsc, onComplete: updateScroll, ease: Strong.easeInOut});

	});

	function wsc(){
		console.log(scroll.origin);
		$(window).scrollTop(scroll.origin);
	}

	function updateScroll(){
		scroll.origin = 0;
		var imgs = $('section').eq(0).find('img').addClass('animate1s');

		imgs.eq(0).css({'transform':'translate(0)', 'opacity':1});
		imgs.eq(1).css({'transform':'translate(0)', 'opacity':1});
		imgs.eq(2).css({'transform':'translate(0)', 'opacity':1});
	}
*/
})