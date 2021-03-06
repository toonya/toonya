<!DOCTYPE html>
<html>
    <head>
        <title><?php
			if(is_home())
				echo bloginfo('blogname');
			else
				echo get_the_title().' | '.get_bloginfo('blogname');
			?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri() ?>/Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo get_template_directory_uri(); ?>/css/component.css" rel="stylesheet" media="screen">
        <link href="<?php echo get_stylesheet_directory_uri() ?>/style.css" rel="stylesheet" media="screen">
        <script src="<?php echo get_template_directory_uri() ?>/js/prefixfree.min.js"></script>
		<script type="text/javascript" name="baidu-tc-cerfication" src="http://apps.bdimg.com/cloudaapi/lightapp.js#61659a276226daad1aa158ab243610b6"></script><script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: 'a4757fc3c0c39ae2ba95d65b'});</script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
		<![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
<!--     	<div id="vertical-alert">请横屏以便浏览</div> -->
    	<div class="bg" data-start="top:0px; opacity:1" data-100="opacity:0; top:-50px">
			<div class="page-aware"><span class="glyphicon glyphicon-chevron-down"></span></div>
    	</div>
    	<div class="page">
    		<div class="wrap">
    			<div class="inner-wrap" id="skrollr-body" style="perspective: 2500px; -webkit-perspective: 2500px;">
			        <header style="z-index: 999;">
			        	<div class="wrap">
			        		<div class="container">
			        			<div class="service-list hidden-xs">
			        			        		<h3><span class="cn">我们的服务:</span></h3>
			        			        		<div>Logo <span class="cn">标志</span></div>
			        			        		<div>Brochure <span class="cn">小册子</span></div>
			        			        		<div>Webpage Design <span class="cn">网页设计</span></div>
			        			        		<div>Website Develop <span class="cn">网站开发</span></div>
			        			</div>
			        			<h1>TOONYA</h1>
			        		</div>
			        	</div>
			        </header>
					<h1 data-0="transform:rotateX(-100deg)" data-50="transform:rotateX(0deg)" class="text-center section-title"><div>Webpage Design <span class="cn">网页设计</span></div></h1>
					<section>
						<div class="half item" data-80="opacity:0; transform:translate(-100%)" data-130="opacity:1; transform:translate(0%)">
							<div class="half-half">
								<img class="left-top" src="http://codepen.qiniudn.com/toonya//web01.jpg" width="" height="" alt="" />
							</div>
							<div class="half-half" data-bottom-top="opacity:0; transform:translate(100%)" data-bottom="opacity:1; transform:translate(0%)">
								<img class="left-bottom" src="http://codepen.qiniudn.com/toonya//web02.jpg" width="" height="" alt="" />
							</div>
						</div>
						<div class="half item" data-80="opacity:0; transform:translate(100%)" data-130="opacity:1; transform:translate(0%)">
							<img class="right" src="http://codepen.qiniudn.com/toonya//web03.jpg" width="" height="" alt="" />
						</div>
					</section>
					<h1 data-bottom-top="background:none" class="text-center section-title"><div data-bottom-top="background:#f15a29;transform:translate(100%)" data-bottom="transform:translate(0)" >Logo <span class="cn">标志</span></div></h1>
					<section data-bottom-top="transform:translate(-100%)" data-center-top="transform:translate(0)">
						<img class="right img-responsive" src="http://codepen.qiniudn.com/toonya//logo01.jpg" width="" height="" alt="" />
					</section>
					<h1 data-bottom-top="background:none" class="text-center section-title"><div data-bottom-top="background:#fff; transform:translate(-100%)" data-bottom="transform:translate(0)">
						<a href="mailto:gareth@toonya.me">Email: gareth@toonya.me</a>
					</div></h1>
					<h1 data-bottom-top="background:none" class="text-center section-title"><div data-bottom-top="background:#1D6298; transform:translate(-100%)" data-bottom="transform:translate(0)">
						<a style="color:#fff" href="tel:18290110250">QQ & Phone: 182-9011-0250</a>
					</div></h1>
    			</div>
    		</div>
    	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- //code.jquery.com/jquery.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/Bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/component.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/skrollr/dist/skrollr.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fn.js"></script>

    <?php wp_footer();?>
  </body>
</html>
