<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<!-- css + javascript -->
	<?php wp_head(); ?>
	<script>
	!function(){
		// configure legacy, retina, touch requirements @ conditionizr.com
		conditionizr()
	}()
	</script>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
<header class="clearfix">

    <h1 class="stitle">Видеостудия <span>успех</span></h1>
    <!-- logo -->
	<div class="logo">
		<?php if ( is_front_page() && is_home() ){ } else { ?>
		<a href="<?php echo home_url(); ?>">
		<?php  } ?>
		<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">	
		<?php if ( is_front_page() && is_home() ){ 
		} else { ?>
		</a>
		<?php } ?>
	</div>
	<!-- /logo -->
    <nav class="headernav" role="navigation">
        <?php wpeHeadNav(); ?>
    </nav><!-- headernav -->
    <h6 class="contact">Тел. в <span>Москве</span> <a href="tel:+79031884342">+7 903 188 43 42</a>, <br>филиал в <span>Ростове-на-Дону</span><br> <a href="tel:+79034027905">+7 903 402 79 05</a></h6>
</header>
<div class="content-main clearfix">