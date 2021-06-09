<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="site-header" id="header">
		<div class="site-logo">
			<span>alx.wntr</span>
		</div>
		<nav class="site-nav">
			<ul>
				<li><a href="/">Blog</a></li>
				<li><a href="/">About</a></li>
			</ul>
		</nav>
	</header>