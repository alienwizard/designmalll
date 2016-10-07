<!DOCTYPE html>
<html>
<head>
	<title>Design - Commerce</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/styles.css">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js" ></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/parallax.js/parallax.min.js"></script>
	<?php wp_head();?>
</head>
<div class="aside-wrap">
	<?php wp_nav_menu($args = arraY('menu' => 'aside_nav')); ?>
</div>
<header class="top-header">

<div class="flex-wrap">
<div id="logo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/09/mh-white-small.png"></div>
<?php wp_nav_menu( $args = array('menu' => 'main_nav') ); ?>
<div class="bars"><span></span></div>
</div>
</header>
<div class="page-wrapper">



<body>
	<script type="text/javascript">

</script>
