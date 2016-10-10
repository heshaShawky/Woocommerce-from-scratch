<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Woo_E-commerce
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php bloginfo("template_directory"); ?>/assets/js/jquery.min.js"></script>
	<!-- Custom Theme files -->

	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<!-- start menu -->
	<script src="<?php bloginfo("template_directory"); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/assets/js/simpleCart.min.js"> </script>
	<!-- slide -->
	<script src="<?php bloginfo("template_directory"); ?>/assets/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: false,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!-- animation-effect -->
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/animate.min.css" rel="stylesheet">
	<script src="<?php bloginfo("template_directory"); ?>/assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- //animation-effect -->

	<!---pop-up-box---->
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<script src="<?php bloginfo("template_directory"); ?>/assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->

	<!-- FlexSlider -->
	<script src="<?php bloginfo("template_directory"); ?>/assets/js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/flexslider.css" type="text/css" media="screen" />

	<script src="<?php bloginfo("template_directory"); ?>/assets/js/imagezoom.js"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woo-e-commerce' ); ?></a>
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					<h1><a href="<?php site_url("/"); ?>">Youth <span>Fashion</span></a></h1>
				</div>
				<div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
					<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
									<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
									<?php
									woocommerce_header_add_to_cart_fragment($fragments)
									?>

								<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/cart.png" alt=""/></h3>
						</a>
						
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
				</div>
				<div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
					<p>Call me</p>
				</div>
				<div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="n-avigation">

					<nav class="navbar nav_bottom" role="navigation">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<?php
							wp_nav_menu(array(
								"theme_location" => "primary",
								"container"		 => "div",
								"container_class"=> "collapse navbar-collapse",
								"container_id"	 => "bs-megadropdown-tabs",
								"menu_class"	 => "nav navbar-nav nav_1"
							));
						?>
						

					</nav>
				</div>


				<div class="clearfix"> </div>
				
				<div id="small-dialog" class="mfp-hide">
					<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

							</form>
						</div>
						<p>	Shopping</p>
					</div>
				</div>
				
				<!---->
			</div>
		</div>
	</div>

