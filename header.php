<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GMLJF7GTXY"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-GMLJF7GTXY');
	</script>
</head>
<body <?php body_class(); ?>>
	<header class="site-header" id="header">
		<div class="site-logo">
			<?php
				if (is_front_page()) {
			?>
			<h1 class="logo">alx.wntr</h1>
			<?php
				}
				else {
			?>
			<a href="/" class="logo">alx.wntr</a>
			<?php
				}
			?>
		</div>
		<nav class="site-nav">
			<ul>
				<li><a href="/">Blog</a></li>
				<li><a href="/hello-world-im-alex-winter">About</a></li>
				<li><a href="/code">Code</a></li>
			</ul>
		</nav>
	</header>