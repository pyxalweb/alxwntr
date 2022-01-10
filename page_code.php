<?php /* Template Name: Code */ ?>

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

		<div class="content-accordion">
			<div class="accordion-item">
				<h2 class="accordion-title"><a href="#">JS: Accordions</a></h2>
				<div class="accordion-content">
					<h3>Description:</h3>
					<p>Each section contains a link and a some content. The content is hidden by default. When a link is clicked then the respective content is displayed.</p>

					<h3>JavaScript:</h3>
					<pre><code class="language-js">
// **************************************************
//  Accordions
// **************************************************
const accordionExpand = () => {
    document.querySelectorAll('.accordion-item').forEach((element) => {
        const accordionTitle = element.querySelector('.accordion-title a');
        const accordionContent = element.querySelector('.accordion-content');

        accordionTitle.addEventListener('click', () => {
            accordionTitle.classList.toggle('expanded');
            accordionContent.classList.toggle('show');
        });
    });
}
accordionExpand();
					</code></pre>

					<h3>HTML:</h3>
					<pre><code class="language-html">
&lt;div class="content-accordion"&gt;
	&lt;div class=&quot;accordion-item&quot;&gt;
		&lt;h2 class=&quot;accordion-title&quot;&gt;&lt;a href=&quot;#&quot;&gt;Frequently Asked Question 1&lt;/a&gt;&lt;/h2&gt;
		&lt;div class=&quot;accordion-content&quot;&gt;&lt;p&gt;Sed felis eget velit aliquet sagittis id. Aenean sed adipiscing diam donec adipiscing tristique. Arcu risus, quis varius quam quisque id diam vel. Eget lorem dolor, sed viverra ipsum nunc aliquet. Dui, id ornare arcu odio ut sem. Lectus sit amet est placerat in egestas erat. Felis, bibendum ut tristique et, egestas quis. Nisl tincidunt eget nullam non nisi est, sit amet. Enim nulla aliquet porttitor lacus, luctus accumsan. Volutpat lacus laoreet non curabitur gravida arcu. Massa ultricies mi, quis hendrerit dolor magna eget. Amet, porttitor eget dolor morbi. Neque sodales ut etiam sit amet nisl purus, in. In ante metus, dictum at tempor. Praesent tristique magna sit amet purus gravida quis.&lt;/p&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
					</code></pre>

					<h3>SCSS:</h3>
					<pre><code class="language-css">
/* Accordions
============================================================ */
.content-accordion {
    display: grid;
    grid-template-columns: 1fr;
    gap: 0.25em;
    margin: 0 auto;
}

.accordion-item {

}

.accordion-title {
    margin: 0;
    font-size: 1.5rem;
    line-height: 2rem;

    a {
        background: #c3113b;
        display: block;
        padding: 0.75em 3em 0.75em 1em;
        position: relative;
        text-decoration: none;
        color: #fff;

        &:hover,
        &:focus {
            text-decoration: none;
        }

        &:after {
            content: "\f0fe";
            display: inline-block;
            position: absolute;
            right: 1.5%;
            transform: translateY(-50%);
            top: 50%;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 2rem;
            color: #fff;
        }

        &.expanded:after {
            content: '\f146';
        }
    }
}

.accordion-content {
    display: none;
    padding: 0.75em 3em 0.75em 1em;

    &.show {
        display: block;
    }
}
					</code></pre>

					<time datetime="2022-01-09">Janury 9th, 2022</time>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-title"><a href="#">Frequently Asked Question 1</a></h2>
				<div class="accordion-content"><p>Sed felis eget velit aliquet sagittis id. Aenean sed adipiscing diam donec adipiscing tristique. Arcu risus, quis varius quam quisque id diam vel. Eget lorem dolor, sed viverra ipsum nunc aliquet. Dui, id ornare arcu odio ut sem. Lectus sit amet est placerat in egestas erat. Felis, bibendum ut tristique et, egestas quis. Nisl tincidunt eget nullam non nisi est, sit amet. Enim nulla aliquet porttitor lacus, luctus accumsan. Volutpat lacus laoreet non curabitur gravida arcu. Massa ultricies mi, quis hendrerit dolor magna eget. Amet, porttitor eget dolor morbi. Neque sodales ut etiam sit amet nisl purus, in. In ante metus, dictum at tempor. Praesent tristique magna sit amet purus gravida quis.</p></div>
			</div>
		</div>
	</article>

<?php
	}
?>
</main>

<?php
	get_footer();
?>