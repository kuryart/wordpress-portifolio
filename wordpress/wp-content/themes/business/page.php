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
 * @package Business
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	get_template_part('components/header');
	get_template_part('components/parallax');
	get_template_part('components/main-section');
	get_template_part('components/section-2');
	get_template_part('components/section-3');
	get_template_part('components/section-4');
	?>

</main><!-- #main -->

<script>
	AOS.init();
</script>

<?php
get_footer();
