<?php
	get_header();
?>

<main>
	<h2>2021</h2>
<?php
	$posts2021 = new WP_Query(array (
		'post_type' => 'post',
		'ignore_sticky_posts' => 1,
		'year' => '2021'
	));

	while($posts2021->have_posts()) {
		$posts2021->the_post();
?>

	<section class="post-item">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="post-meta">
			<p><?php the_time('m/d'); ?> - <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
		</div>
	</section>

<?php
	}
?>
</main>

<?php
	get_footer();
?>