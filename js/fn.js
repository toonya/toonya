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


	console.log(Math.random() * (1.5 - 0.5) + 0.5);
/*


	for (i = 0; i < chars.length; i++) {
		tl.fromTo(chars[i], 3, {transformOrigin:"center -"+h+'px', z:0.1, rotation:((Math.random() < 0.5) ? 90 : -90)}, {rotation:0, ease:Elastic.easeOut}, 0.3 + i * 0.06);
		tl.to(chars[i], 0.6, {y:96,  ease:Bounce.easeOut}, 3.4 + Math.random() * 0.6);
		tl.to(chars[i], 0.6, {autoAlpha:0, ease:rough}, 4.5 + Math.random());
		tl.to(chars[i], 0.6, {autoAlpha:1, ease:rough}, 7 + Math.random());
	}
*/
	TweenMax.set(title, {y: '-=200'});

	for (i = 0; i < chars.length; i++) {
		var z = Math.random() * (1.2 - 0.8) + 0.8;
		TweenMax.set(chars[i], {transformOrigin:'center center', scale: z*z*z, fill: z * 0xffffff});
		TweenMax.to(chars[i], 5, {y: '+='+z*400});
		chars.eq(i).attr('z',z);
	}

	TweenMax.to($('body'), 5, {backgroundPositionY: '+=50px'});



	//var tl_title = new TimelineMax();
	//tl_title.to(title, 1, {x: '+=500', y: '-=500px', rotation: 3600, fillOpacity: 0, scale: 0, ease: },9);

	//TweenMax.to(chars[0], 1, {transformOrigin:'center center', rotation: 360}, 1);

	var origin = {
		x: 0,
		y: 0
	}
	$(window).mousemove(function(e){
		if(origin.x!=0 && origin.y!=0){
			var move = {
				x: (e.pageX - origin.x)*0.1,
				y: (e.pageY - origin.y)*0.1
			}

			//console.log(move.x>=0? '+='+move.x:'-='+(0-move.x));

			chars.each(function(i,e){
				var z = $(e).attr('z');
				var _move = {
					x: move.x*z*z*z*z*z,
					y: move.y*z*z*z*z*z
				}
				//console.log(_move.x+' '+_move.y);

				TweenMax.set($(e), {x: _move.x>=0? '+='+_move.x:'-='+(0-_move.x), y: _move.y>=0? '+='+_move.y:'-='+(0-_move.y)});
			})

			TweenMax.set($('body'), {backgroundPositionX: move.x>=0? '+='+move.x*0.05+'px':'-='+(0-move.x*0.05)+'px', backgroundPositionY: move.y>=0? '+='+move.y*0.05+'px':'-='+(0-move.y*0.05)+'px'});

		}

		origin.x = e.pageX;
		origin.y = e.pageY;

	})

})