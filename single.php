<?php
	get_header();
?>

<main>
<?php
	while(have_posts()) {
		the_post();
?>

	<article class="post">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('F j, Y') ?></time>
	</article>

<?php
	}
?>
</main>

<?php
	get_footer();
?>