<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="es" class="no-js"> <![endif]-->
<html lang="es">
<head>
    

	<!-- Basic -->
	<title>Car One</title>
	<!-- Define Charset -->
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Page Description and Author -->
	<meta name="author" content="Car One Group"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	
	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/asset/css/bootstrap.min.css" type="text/css" media="screen">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" type="text/css" media="screen">
	<!-- Car One CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
	<!-- Responsive CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css" media="screen">
	<!-- Color CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/colors/blue.css" title="blue" media="screen" />

	
	
	<!-- Car One JS  -->
     <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
    <!-- Parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/parallax.js"></script>
	<!-- /Parallax -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.migrate.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizrr.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/count-to.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.textillate.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lettering.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mediaelement-and-player.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<?php wp_head(); ?>
<?php include_once("analyticstracking.php") ?>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '517328215083557');
fbq('track', "PageView");
fbq('track', 'Lead');


</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=517328215083557&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>
<body>
<div id="chat-online" style="position:fixed; left:0; top:50%;  z-index:1000;">
	<!-- Embedded EMG Live Chat: Insert the script below at the point on your page where you want the Click To Chat link to appear -->  
<script type='text/javascript' src='http://site02.emg-livechat.com/include.js?domain=www.carone.com.mx'></script>  
<script type='text/javascript' >  
if(typeof sWOTrackPage=='function')sWOTrackPage();  
</script>  
<!-- End of embedded EMG Live Chat -->  
</div>

<style>#chat-online img
	{
		width: 25%; 
		
		
	}
</style>

<div id="tour" style="position:fixed;left: 4px;top: 63%;  z-index:1000;width: 96px;">

<a href="http://www.carone.com.mx/tour-carone">
	
<img src="http://www.carone.com.mx/wp-content/uploads/2016/02/png-car-one-tour-134-x-63-px.png" alt="">
</a>

</div>

<!-- Container -->
	<div id="container">
		<!-- Start Header -->
		<header class="clearfix">
			<!-- Start Top Bar -->
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<!-- Start Contact Info -->
							<?php include( TEMPLATEPATH . "/partials/top-info.php") ?>
							<!-- End Contact Info -->
						</div>
						<div class="col-md-4">
							
						</div>
						<div class="col-md-4">
							<!-- Start Social Links -->
							<?php include (TEMPLATEPATH . "/partials/social-networks.php") ?>
							<!-- End Social Links -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Top Bar -->
			<?php include(TEMPLATEPATH ."/partials/nav.php") ?>
		</header>
		<!-- End Header -->
		