<!DOCTYPE html>
<html>
    <head>
        <title>
        <?php if(is_home())
        		echo bloginfo('blogname');
			  else
			  	echo get_the_title().' | '.get_bloginfo('blogname'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri() ?>/Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo get_template_directory_uri(); ?>/css/component.css" rel="stylesheet" media="screen">
        <link href="<?php echo get_stylesheet_directory_uri() ?>/style.css" rel="stylesheet" media="screen">
		<script src="<?php echo get_template_directory_uri() ?>/js/prefixfree.min"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
<![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
    	<div class="starAnimation">

			<!-- Generator: Adobe Illustrator 17.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="960px" height="560px" viewBox="0 0 960 560" enable-background="new 0 0 960 560" xml:space="preserve">
			<g id="toonya">
				<path id="t" d="M200.479,229.506h-32.002c1.5,0,4.7,1.1,9.701,3.4c5.101,2.2,9.9,6.101,14.501,11.801
					c4.6,5.601,6.9,13.201,6.9,22.701c0,12.901-3.9,22.501-11.801,29.002c-7.9,6.5-17.601,9.7-29.302,9.7c-10.801,0-18.901-3-24.202-9
					c-5.3-5.9-7.9-12.201-7.9-18.701c0-7.101,2.1-13.101,6.3-18.001c4.2-4.9,10.301-7.401,18.401-7.401c5.4,0,10,1.6,13.701,4.9
					c3.8,3.2,5.701,7.301,5.701,12.201c0,3.3-1.2,6.201-3.701,8.601c-2.4,2.4-4.9,4-7.5,4.7c2.8-4.3,4.3-7.3,4.3-12.5
					c0-9.901-5.9-15.101-14.201-15.101c-4.1,0-8.201,1.8-12.301,5.4c-4.1,3.5-6.1,8.4-6.1,14.701c0,7.5,2.6,13.9,7.9,19.101
					s12.101,7.801,20.401,7.801c8.701,0,15.201-3.301,19.401-9.9c4.3-6.601,6.4-14.201,6.4-22.702c0-13.5-3.1-23.701-9.4-30.402
					c-6.201-6.7-14.101-10.101-23.602-10.101c-7.9,0-13.701,1.6-17.601,4.7c-3.9,3.101-7.5,8-11,14.501c0-9.201,3.8-16.401,11.3-21.501
					c7.5-5.1,16.401-7.7,26.502-7.7h11h8.601h7h5.5h4.3h3.4h2.5h2.101h1.6h1.3c2.1,0,3.5,0,4-0.1c2.2,0,5.3-0.2,9.3-0.5
					c4-0.4,7.701-0.8,11-1.3C223.78,226.506,214.479,229.506,200.479,229.506z"/>
				<path id="o1" d="M300.279,256.908c0,28.702-16.801,44.203-45.903,44.203c-14.701,0-25.802-3.4-33.502-10.301
					c-7.701-6.801-11.501-16.201-11.501-28.102c0-5.7,1.2-11.9,3.5-18.601c2.4-6.7,7-12.801,13.801-18.101s16.301-8,28.602-8
					C284.778,218.005,300.279,231.706,300.279,256.908z M231.975,285.009c5.9,8.501,15.201,12.701,27.902,12.701
					c10.101,0,17.201-2.6,21.101-7.7c4-5.101,6-12.301,6-21.501c0-8.2-0.9-15.701-2.8-22.601s-5.5-12.701-10.901-17.501
					c-5.3-4.8-12.801-7.201-22.301-7.201c-8.3,0-15.101,2.3-20.201,6.8c-5.1,4.5-7.601,12.101-7.601,23.001
					C223.174,265.308,226.075,276.609,231.975,285.009z"/>
				<path id="o2" d="M397.278,256.908c0,28.702-16.801,44.203-45.903,44.203c-14.701,0-25.802-3.4-33.502-10.301
					c-7.701-6.801-11.501-16.201-11.501-28.102c0-5.7,1.2-11.9,3.5-18.601c2.4-6.7,7-12.801,13.801-18.101s16.301-8,28.602-8
					C381.777,218.005,397.278,231.706,397.278,256.908z M328.974,285.009c5.9,8.501,15.201,12.701,27.902,12.701
					c10.101,0,17.201-2.6,21.101-7.7c4-5.101,6-12.301,6-21.501c0-8.2-0.9-15.701-2.8-22.601s-5.5-12.701-10.901-17.501
					c-5.3-4.8-12.801-7.201-22.301-7.201c-8.3,0-15.101,2.3-20.201,6.8c-5.1,4.5-7.601,12.101-7.601,23.001
					C320.173,265.308,323.073,276.609,328.974,285.009z"/>
				<path id="n" d="M449.974,222.806c2.5,2.7,6.101,6.9,10.601,12.801l20.201,38.302v-43.402c0-5.9-4.9-8.801-10.801-10.901h27.702
					c-10.801,2.1-13.901,5.7-13.901,10.901v48.703c5.301,10.7,9.9,17.701,13.901,21.001c4,3.4,9.2,5.101,15.501,5.101
					c3.7,0,9.5-2.5,13.801-5.801c-2,2.501-4.301,4.501-6.9,6.001c-2.5,1.5-6.301,2.3-11.401,2.3c-10.8,0-19.701-4.4-26.701-13.201
					c-6.9-8.7-14.5-21.101-22.801-37.202c-8.3-16.101-14.801-26.001-19.501-29.902v51.003c0,5.3,4.7,8.5,11.001,10.9h-27.502
					c5.4-1.1,9.001-2.5,10.801-4.2s2.7-3.9,2.7-6.7v-53.303c-3.3-2.9-5.5-3.9-10.701-3.9c-7.1,0-12.301,1.9-15.501,5.6
					s-4.8,8.401-4.8,14.101c0,7,1.6,12.401,4.9,16.301c3.3,3.8,8,7,14.101,9.601c-8.301,0-14.501-2.2-18.501-6.6
					c-4-4.4-6-9.801-6-16.201c0-18.001,12.101-25.301,34.102-25.301C442.274,218.806,447.474,220.105,449.974,222.806z"/>
				<path id="y" d="M580.375,223.105c3.9,4.3,5.801,9.701,5.801,16.001c-3.3-6.9-6.5-11.3-9.601-13.4s-7.4-3.2-12.9-3.2
					c-7.901,0-14.302,2.3-19.102,6.8c-4.7,4.5-8.101,9.701-10.2,15.501c-2.101,5.7-3.101,10.3-3.101,13.701v19.201
					c0,4.5,4.101,9.7,12.001,11.7h-32.202c6.5-2.399,10.101-5.3,10.101-10.9v-21.702c0-2.3-1.5-6-4.5-11.101
					c-2.9-5.1-7.4-10.201-13.301-15.201c-5.9-5-13.102-8.601-21.802-10.901h35.103c-3.7,1.3-6.801,2.6-6.801,5c0,0.1,1.5,1.8,4.601,5.2
					c3.1,3.4,5.9,6.9,8.601,10.601c2.7,3.6,4.2,6.701,4.7,9.301c1.899-8,6-15.501,12.301-22.602c6.3-7.101,14.501-10.601,24.501-10.601
					C571.274,216.505,576.476,218.706,580.375,223.105z"/>
				<path id="a" d="M637.676,307.811c-7.801,0-14.401-2.5-19.901-7.5l-15.501-16.302c-7.9-7.1-17.901-12.2-30.002-15.5
					c-2.1,2.3-4.8,5.3-8.3,9c-3.4,3.7-7.501,7.4-12.201,11.201c-4.7,3.899-8.4,5.8-11.301,5.8c-2.8,0-3.8-0.9-3.8-3.4
					c0-1,3.2-3.2,9.5-6.7c6.4-3.5,13.901-9.2,22.401-17.001c-3.3-0.7-6.4-1.1-9.301-1.1c-3.1,0-5.399,0.3-7.1,0.8s-3.801,1.3-6.301,2.5
					c4.3-3.6,9.9-5.1,16.001-5.1c2.9,0,5.7,0.3,8.501,0.8c6.7-7.7,12.601-15.701,17.601-24.201s8.601-16.201,10.701-23.102
					c2.399,10.101,5.2,21.301,8.4,33.502c3.3,12.101,8.101,23.501,14.4,34.202c6.4,10.701,14.601,18.102,24.602,22.102H637.676z
					 M574.072,266.108c11.3,2.5,21.4,6,28.201,10.9c-1.6-3-3.4-8.1-5.4-15.201s-3.6-14.501-4.8-22.102
					C587.572,248.807,581.672,257.208,574.072,266.108z"/>
				<path id="dot" d="M643.67,282.609l-8.3,8.3c-3.601-3.5-5.501-4.8-9.201-7.1c0.601-1.101,1.9-2.7,3.9-5c2.101-2.3,3.601-3.6,4.5-3.7
					C636.97,275.109,641.17,278.709,643.67,282.609z"/>
				<path id="m" d="M703.172,223.206c2.899,3.3,5,7.4,6.4,12.101c2.8,9.5,5.2,17.601,7.3,22.801c1.4-4.3,2.801-8.601,4.301-12.901
					c3-7.5,6.8-13.901,11.5-19.201s10.401-7.9,17.302-7.9c6.4,0,10.2,2.5,12.101,6.2c-2.9-2.9-6.801-4.3-11.101-4.3
					c-4.501,0-8.101,1.9-10.701,5.8c-2.5,3.9-3.8,8.101-3.8,12.701c0,5.7,1.8,13.301,5.3,23.001
					c3.501,9.701,8.601,18.801,15.201,27.401c6.7,8.601,14.401,14.501,23.302,17.802h-10.201c-12.9,0-22.501-4.801-28.901-14.301
					c-6.4-9.501-10.701-20.702-12.801-33.502l-1.5-16.801c-2,3.5-4.4,9.601-7.101,18.301c-2.7,8.7-4.601,15.401-5.801,20.301
					c-1.6-2.5-3.399-6.1-5.3-10.7l-6.601-16.801l-5.2-13.901c0,5.8-1.4,14.201-4.2,25.202c-2.8,10.9-6.801,20.701-12.101,29.402
					c-5.301,8.7-11.501,13-18.701,13c-4.501,0-8.301-1.899-11.601-5.7c-3.2-3.8-4.801-8.3-4.801-13.501
					c3.7,4.301,10.201,7.501,17.301,7.501c7.701,0,13.801-3.7,18.502-11.001c4.7-7.3,7.9-15.5,9.8-24.501c1.9-9,2.9-16.101,2.9-21.201
					c0-6.5-0.7-11.001-2.2-13.601s-4.7-3.9-9.7-3.9c-9.001,0-16.102,2.1-21.401,6.301c-5.301,4.2-7.9,9.9-7.9,17.101
					c0,5.3,1.1,10,3.4,14l7.5,9.301c0,0.9-0.8,1.6-2.4,2.3c-1.5,0.7-2.8,1-3.9,1c-2.3-1.7-4.5-4-6.8-7c-2.301-3-3.4-7.9-3.4-14.701
					c0-20.501,15.901-31.202,44.203-31.202C696.371,218.105,700.271,219.806,703.172,223.206z"/>
				<path id="e" d="M797.571,218.105v1.5h39.303c0,2.6,1.199,5.8,3.6,9.701c2.5,3.8,4.101,6.9,4.801,9.201l-14.201-11.601
					c-5.101-2.8-10.7-4.2-16.801-4.2h-16.801v31.302c3.6-4.101,7.2-7.401,10.7-9.901c3.5-2.6,7.9-3.9,13.101-3.9
					c5.7,0,9.001,3.2,9.001,8c0,2.2-0.8,4.601-2.4,7.101c0.3-1.7,0.4-3.2,0.4-4.3c0-5.5-2.2-6.6-6.101-6.6s-9.001,3-15.301,8.9
					c-6.301,5.9-9.4,13.201-9.4,22.001c0,5.5,1,8.8,2.899,9.9c1.9,1.101,6.101,1.7,12.602,1.7c14.5,0,25.801-6.2,32.102-17.901
					c-0.3,3.101-1.4,6.601-3.2,10.301l-5,10.1H772.77l4.2-2c4.4-2.5,6.601-5.4,6.601-8.8v-35.102c0-3.1,0.5-5.8,1.4-8
					c0.899-2.3,3.2-6.5,6.9-12.801c-11.901,0-20.302,1.6-25.102,4.8c-4.7,3.1-7.101,8.5-7.101,16.001s1.4,13.201,4.101,17.101
					c2.8,3.8,7.3,7.3,13.4,10.401c-8.5,0-14.501-2.4-17.901-7.101c-3.399-4.7-5.1-10.701-5.1-17.801c0-8.5,3.2-15.101,9.5-19.601
					c6.301-4.6,17.001-6.9,32.103-6.9L797.571,218.105z"/>
			</g>
			</svg>

    	</div>
        <header>
        </header>