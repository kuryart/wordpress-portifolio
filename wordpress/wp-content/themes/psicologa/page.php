<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package psicologa
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php get_template_part('components/main-section'); ?>
	<?php get_template_part('components/sobre-mim'); ?>
	<?php get_template_part('components/terapia'); ?>
	<?php get_template_part('components/ambiente'); ?>
	<?php get_template_part('components/contato'); ?>

</main><!-- #main -->

<style>
	html {
		font-size: clamp(1rem, 1.2vw, 1.2rem);
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		padding: 2rem 2rem 0 2rem !important;
	}

	.page {
		margin: 0;
	}
</style>

<?php
get_footer();
