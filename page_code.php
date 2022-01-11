<?php /* Template Name: Code */ ?>

<?php
	get_header();
?>

<main>
<?php
	while(have_posts()) {
		the_post();
?>

	<div class="page page-code">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<div class="content-accordion">

<?php
	$postsCode = new WP_Query(array (
		'post_type' => 'post',
		'ignore_sticky_posts' => 1,
		'cat' => '4'
	));

	while($postsCode->have_posts()) {
		$postsCode->the_post();
?>

    <section class="accordion-item">
        <h2 class="accordion-title"><a href="#"><?php the_title(); ?></a></h2>
		<div class="accordion-content">
			<?php the_content(); ?>
            <a href="<?php the_permalink(); ?>">Permalink</a> - <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('F j, Y') ?></time>
		</div>
	</section>

<?php
	}
?>
		</div>
	</div>

<?php
	}
?>
</main>

<?php
	get_footer();
?>