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
 * @package Toy_Maker
 */

get_header();
?>

<main id="primary" class="site-main">

	<section id="one">
		<header class="red">Manufatura</header>
		<div id="container-1" class="container">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae ipsa molestiae repudiandae consequuntur placeat sit, aperiam quae adipisci nisi rerum.</p>
		</div>
	</section>
	<section id="two">
		<header class="yellow">Eficiência</header>
		<div id="container-2" class="container">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat optio rem laboriosam quae labore mollitia et nesciunt quasi, ullam earum.</p>
		</div>
	</section>
	<section id="three">
		<header class="green">Criatividade</header>
		<div id="container-3" class="container">
			<h2>Lorem Ipsum</h2>
			<p>Illo labore molestias assumenda, dicta necessitatibus aspernatur enim asperiores earum minus, maxime deleniti pariatur, placeat alias ducimus excepturi iusto at!</p>
		</div>
	</section>
	<section id="four">
		<header class="blue">Segurança</header>
		<div id="container-4" class="container">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vitae, quos recusandae laboriosam maiores autem hic nesciunt magni facere commodi?</p>
		</div>
	</section>

</main><!-- #main -->

<?php
$secao_1_background = get_field('secao_1_background');
$secao_2_background = get_field('secao_2_background');
$secao_3_background = get_field('secao_3_background');
$secao_4_background = get_field('secao_4_background');
?>
<style>
	section {
		height: 100vh;
		display: flex;
		flex-direction: column;
	}

	header {
		font-family: "Barriecito", system-ui;
		text-align: center;
		font-size: 5rem;
		text-transform: uppercase;
		color: var(--beige);
		position: sticky;
		top: 0;
		height: 120px;
		z-index: 3;
	}

	.container {
		flex: 1;
		height: calc(100vh - 120px);
		background-size: cover;
		background-position: center;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		position: relative;
	}

	.container::after {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		pointer-events: none;
		z-index: 1;
	}

	#container-1 {
		background-image: url('<?php echo esc_url($secao_1_background); ?>');
	}

	#container-1::after {
		background:
			radial-gradient(circle at center, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%),
			rgba(200, 0, 0, 0.4);
		filter: blur(12px);
		opacity: 0.7;
	}

	#container-2 {
		background-image: url('<?php echo esc_url($secao_2_background); ?>');
	}

	#container-2::after {
		background:
			radial-gradient(circle at center, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%),
			rgba(200, 200, 0, 0.4);
		filter: blur(12px);
		opacity: 0.7;
	}

	#container-3 {
		background-image: url('<?php echo esc_url($secao_3_background); ?>');
	}

	#container-3::after {
		background:
			radial-gradient(circle at center, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%),
			rgba(0, 200, 0, 0.4);
		filter: blur(12px);
		opacity: 0.7;
	}

	#container-4 {
		background-image: url('<?php echo esc_url($secao_4_background); ?>');
	}

	#container-4::after {
		background:
			radial-gradient(circle at center, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%),
			rgba(0, 0, 200, 0.4);
		filter: blur(12px);
		opacity: 0.7;
	}

	.red {
		background-color: var(--red-cmyk);
	}

	.yellow {
		background-color: var(--sunglow);
	}

	.green {
		background-color: var(--erin);
	}

	.blue {
		background-color: var(--cornflower-blue);
	}

	h2 {
		font-family: "Barriecito", system-ui;
		text-align: center;
		font-size: 3rem;
		text-transform: uppercase;
		color: var(--beige);
		position: relative;
		z-index: 2;
	}

	p {
		font-family: 'Roboto', sans-serif;
		text-align: center;
		font-size: 1.5rem;
		color: var(--beige);
		max-width: 600px;
		position: relative;
		z-index: 2;
	}
</style>


<?php
get_footer();
