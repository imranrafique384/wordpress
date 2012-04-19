<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>


<body>

<div id="header"><!-- #header -->

<div class="logo"><!-- .logo -->
<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

	<div id="navbar"><!-- #navbar -->
	<ul id="navlist">
	<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
	<?php wp_list_pages('title_li=&number=6&depth=1'); ?>
	</ul>
	</div><!-- /#navbar -->

</div><!-- /.logo -->

<div class="banner"><!-- .banner -->
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="Subscribe to RSS Feed" /></a>
</div><!-- /.banner -->


</div><!-- /#header --> 

<div id="container"><!-- #container -->
