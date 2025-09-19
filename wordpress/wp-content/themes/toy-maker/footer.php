<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Toy_Maker
 */

?>

<footer id="colophon" class="site-footer">
	<img class="logo" src="<?php echo get_field('footer_logo'); ?>" alt="">
	<a href="#one">Manufatura</a>
	<a href="#two">Eficiência</a>
	<a href="#three">Criatividade</a>
	<a href="#four">Segurança</a>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<style>
	footer {
		position: fixed;
		bottom: 0;
		padding: 1rem;
		background: var(--eerie-black);
		display: flex;
		z-index: 4;
		width: 100vw;
		text-align: center;
		align-items: center;
		justify-content: center;
	}

	footer a {
		color: var(--beige);
		text-decoration: none;
		font-size: 1.2rem;
		font-family: 'Roboto', sans-serif;
		padding-inline: 1rem;
	}

	footer a:visited {
		color: var(--beige);
	}

	footer a:focus,
	footer a:hover {
		color: var(--cornflower-blue);
	}

	footer .logo {
		max-width: 150px;
		padding: 1.5rem;
		margin-left: 2rem;
	}
</style>

</html>