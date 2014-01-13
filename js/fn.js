jQuery(function($) {

	console.log();

	var title = $('#toonya');
	var svg  = $('svg');
	var chars = title.children();
	TweenMax.set(chars, {fill: '#fff'});
	var width = svg.outerWidth();
	var height = svg.outerHeight();
	var h = 735/svg.parent().width()*svg.parent().height();
	console.log('svg:'+svg.width()+' '+svg.height()+'   h:'+h);

	$('.transform').each(function(i,e) {
		TweenMax.set($(e), $(e).data());
	});

	var tl = new TimelineMax(),
		rough = RoughEase.ease.config({strength:2, clamp:true}),
		i;

	tl.set(chars, {autoAlpha:1})



	for (i = 0; i < chars.length; i++) {
		tl.fromTo(chars[i], 3, {transformOrigin:"center -"+h+'px', z:0.1, rotation:((Math.random() < 0.5) ? 90 : -90)}, {rotation:0, ease:Elastic.easeOut}, 0.3 + i * 0.06);
		tl.to(chars[i], 0.6, {y:96,  ease:Bounce.easeOut}, 3.4 + Math.random() * 0.6);
		tl.to(chars[i], 0.6, {autoAlpha:0, ease:rough}, 4.5 + Math.random());
		tl.to(chars[i], 0.6, {autoAlpha:1, ease:rough}, 7 + Math.random());
	}

	//var tl_title = new TimelineMax();
	//tl_title.to(title, 1, {x: '+=500', y: '-=500px', rotation: 3600, fillOpacity: 0, scale: 0, ease: },9);

	//TweenMax.to(chars[0], 1, {transformOrigin:'center center', rotation: 360}, 1);

})