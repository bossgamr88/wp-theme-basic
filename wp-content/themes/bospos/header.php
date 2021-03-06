<!DOCTYPE html>
<html ?php language_attributes(); ?>
<head>
	
	<head>
	<!--== META TAGS -->
	 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	 <meta charset="<?php bloginfo('charset') ?>">
	 <meta name="description" content="Keywords">
	 <meta name="author" content="Name">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<!--== LINK TAGS ===-->
	<link rel="shortcut icon" href="<?php echo THEME_DIR;?>/path/favicon.ico"/>
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>"/>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!--=== TITLE -->
	<title><?php bloginfo('name') ?></title>
	</head>
	
	<!-- WP_HEAD -->
	<?php wp_head(); ?>

</head>
<body ?php body_class(); ?>

	<div class="container">
		<header class="site-header">
		<h1>
			<a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a>
		</h1>

		<p><?php bloginfo('description'); ?> 

</html><!-- site-header -->

