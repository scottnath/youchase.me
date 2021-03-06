<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!--[if IE]><![endif]-->
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<link href='http://fonts.googleapis.com/css?family=Nixie+One|Dosis:400,700|Josefin+Sans:300,400|Exo:100,400,300italic,400italic,700italic|Comfortaa:300,400,700' rel='stylesheet' type='text/css'>

<?php if ( file_exists(TEMPLATEPATH .'/favicon.ico') ) : ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
<?php endif; ?><?php if ( file_exists(TEMPLATEPATH .'/apple-touch-icon.png') ) : ?>
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">

<?php endif; ?><link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<?php wp_head(); ?>
</head><?php $body_classes = join( ' ', get_body_class() ); ?>
<!--[if lt IE 7 ]><body class="ie6 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie7 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie8 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie9 <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body class="<?php echo $body_classes; ?>"><!--<![endif]-->

<header id="header" role="banner">
	<?php if (is_home() || is_front_page()) : ?>
		<!-- welcome home -->
	<?php else : ?>
		<div id="logo"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
		
	<?php endif; ?>
</header>
<div id="main" role="main">
<?php if (!is_home() && !is_front_page()) : ?>
	<?php
		get_template_part( 'nav', 'main-nav' );
	?>
<?php endif; ?>