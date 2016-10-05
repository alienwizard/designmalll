<!DOCTYPE html>
<html>
<head>
	<title>Design - Commerce</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/styles.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/node_modules/parallax.js/src/parallax.js"></script>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script src="js/bootstrap-min.js"></script>
<script src="js/bootstrap-formhelpers-min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator-min.js"></script>
	<?php wp_head();?>
</head>
<header class="top-header">

<?php wp_nav_menu( $args = array('menu' => 'main_nav') ); ?>

	<ul>
		<li id="logo"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/09/mh-white-small.png"></li>
		<li>Hem</li>
		<li>Produkter</li>
		<li>Kassa</li>
	</ul>
</header>
<body>
	<script type="text/javascript">

</script>
