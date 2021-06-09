<?php
	get_header();
?>

<main>
<?php
	while(have_posts()) {
		the_post();
?>

	<main>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	</main>

<?php
	}
?>
</main>

<?php
	get_footer();
?>