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
 * @package portifolio
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/kuryart-logo.png" alt="">
		<h1>KuryArt</h1>
		<h2>Confira meu trabalho nos sites abaixo</h2>
		<div class="thumbnails">
			<div class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/business.png" alt="Business">
				<a href="/business">Business</a>
			</div>
			<div class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/maria-tatuaria.png" alt="Maria Tatuaria">
				<a href="/maria-tatuaria">Maria Tatuaria</a>
			</div>
			<div class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/toy-maker.png" alt="Toy Maker">
				<a href="/toy-maker">Toy Maker</a>
			</div>
			<div class="thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/psicologa.png" alt="Psicologa">
				<a href="/psicologa">Psicologa</a>
			</div>
		</div>
	</div>
</main><!-- #main -->

<style>
	body {
		background-color: var(--raisin-black);
	}

	.container {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		height: 100vh;
	}

	.container h1,
	.container h2 {
		color: var(--alice-blue);
	}

	.logo {
		width: 200px;
		height: auto;
		margin-bottom: 20px;
	}

	.thumbnails {
		display: flex;
		flex-direction: row;
		align-items: center;
		gap: 20px;
		margin-top: 20px;
	}

	.thumbnail {
		display: flex;
		flex-direction: column;
		align-items: center;
		gap: 10px;
	}

	.thumbnail a {
		color: var(--alice-blue);
		text-align: center;
		text-decoration: none;
	}

	.thumbnail a:visited {
		color: var(--alice-blue);
		text-decoration: none;
	}

	.thumbnail a:hover,
	.thumbnail a:focus {
		color: var(--light-green);
		cursor: pointer;
		text-decoration: none;
	}

	.thumbnail a:active {
		color: var(--pear);
	}

	.thumbnail img {
		width: 400px;
		height: auto;
		display: block;
		margin: 0 auto;
		border-radius: 8px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	}

	.thumbnail img:hover {
		transform: scale(1.05);
		transition: transform 0.3s ease;
		cursor: pointer;
	}
</style>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll('.thumbnail img').forEach(function(img) {
			img.addEventListener('click', function() {
				const link = img.parentElement.querySelector('a');
				if (link) {
					window.location.href = link.href;
				}
			});
		});
	});
</script>

<?php
get_footer();
