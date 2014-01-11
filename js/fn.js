jQuery(function($) {
	var title = $('#toonya');
	var chars = title.children();
	TweenMax.set(chars, {fill: '#fff'});

	var tl = new TimelineMax(),
		rough = RoughEase.ease.config({strength:2, clamp:true}),
		i;

	tl.set(chars, {autoAlpha:1})



	for (i = 0; i < chars.length; i++) {
		tl.fromTo(chars[i], 2.4, {transformOrigin:"center -160px", z:0.1, rotation:((Math.random() < 0.5) ? 90 : -90)}, {rotation:0, ease:Elastic.easeOut}, 0.3 + i * 0.06);
		tl.to(chars[i], 0.6, {y:96,  ease:Bounce.easeOut}, 3.4 + Math.random() * 0.6);
		tl.to(chars[i], 0.6, {autoAlpha:0, ease:rough}, 4.5 + Math.random())
		tl.to(chars[i], 0.6, {autoAlpha:1, ease:rough}, 8 + Math.random());
	}
})