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

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
		<![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
    	<div class="page">
    		<div class="wrap">
    			<div class="inner-wrap" id="skrollr-body">
    				<div class="bg-img" data-start="top:0px; opacity:1" data-100="opacity:0; top:-50px">
    					<img src="<?php echo get_stylesheet_directory_uri()?>/image/workspace.jpg" width="" height="" alt="" />
    				</div>
    				<div data-0="opacity:1" data-100="opacity:0" class="page-aware"><span class="glyphicon glyphicon-chevron-down"></span></div>
			        <header>
			        	<div class="wrap">
			        		<div class="container">
			        			<div class="service-list">
			        			        		<h3>我们的服务:</h3>
			        			        		<div>Logo 标志</div>
			        			        		<div>Brochure 小册子</div>
			        			        		<div>Webpage Design 网页设计</div>
			        			        		<div>Website Develop 网站开发</div>
			        			</div>
			        			<h1>TOONYA</h1>
			        		</div>
			        	</div>
			        </header>
					<h1 data-0="transform:rotateX(90deg)" data-50="transform:rotateX(0deg)" class="text-center section-title">Webpage Design 网页设计</h1>
					<section>
						<div class="half item" data-80="opacity:0; transform:translate(-100%)" data-130="opacity:1; transform:translate(0%)">
							<div class="half-half">
								<img class="left-top" src="<?php echo get_stylesheet_directory_uri()?>/image/web01.jpg" width="" height="" alt="" />
							</div>
							<div class="half-half" data-bottom-top="opacity:0; transform:translate(100%)" data-bottom="opacity:1; transform:translate(0%)">
								<img class="left-bottom" src="<?php echo get_stylesheet_directory_uri()?>/image/web02.jpg" width="" height="" alt="" />
							</div>
						</div>
						<div class="half item" data-80="opacity:0; transform:translate(100%)" data-130="opacity:1; transform:translate(0%)">
							<img class="right" src="<?php echo get_stylesheet_directory_uri()?>/image/web03.jpg" width="" height="" alt="" />
						</div>
					</section>
					<h1 data-bottom-top="background:#f15a29;transform:translate(100%)" data-bottom="transform:translate(0)" class="text-center section-title">Logo 标志</h1>
					<section data-bottom-top="transform:translate(-100%)" data-center-top="transform:translate(0)">
						<img class="right img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/image/logo01.jpg" width="" height="" alt="" />
					</section>


					<h1 data-bottom-top="background:#fff;transform:translate(-100%)" data-bottom="transform:translate(0)" class="text-center section-title"><a href="mailto:gareth@toonya.me">Email: gareth@toonya.me</a></h1>
					<footerr>
						<div class="text-center">
							<p><?php echo get_option('copyright'); ?></p>
						</div>
						<div class="hide">
							<?php echo get_option('51la'); ?>
						</div>
					</footer>
    			</div>
    		</div>
    	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- //code.jquery.com/jquery.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/Bootstrap/dist/js/bootstrap.min.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/js/component.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fn.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/skrollr/dist/skrollr.min.js"></script>

	<script type="text/javascript">
	skrollr.init({forceHeight: true});
	</script>
    <?php wp_footer();?>
  </body>
</html>