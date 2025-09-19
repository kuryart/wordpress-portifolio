<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maria_Tatuaria
 */

?>

<footer id="colophon" class="site-footer">
	<a href="https://wa.me/5599999999999" target="_blank" rel="noopener" class="main-title link">
		Agende já a sua tatuagem
	</a>
	<p>
		Copyright &copy; <?php echo date('Y'); ?> Maria Tatuaria. Todos os direitos reservados.
	</p>
	<p>
		Feito por KuryArt.
	</p>
</footer><!-- #colophon -->

<style>
	footer {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		padding: 2rem 0;
	}

	footer p {
		margin: 0;
		font-size: 0.875rem;
		color: var(--sage);
	}

	.link {
		margin-top: 50px;
		color: var(--sage);
		font-family: "Parisienne", cursive;
		font-weight: 400;
		font-style: normal;
		font-size: 3rem;
		margin-bottom: 3rem;
		text-decoration-color: var(--sage);
	}

	.link:visited {
		color: var(--sage);
		text-decoration-color: var(--sage);
	}

	.link:hover,
	.link:focus {
		color: var(--khaki);
		text-decoration-color: var(--khaki);
	}

	.link:active {
		color: var(--reseda-green);
		text-decoration-color: var(--reseda-green);
	}

	@media screen and (max-width: 768px) {
		.link {
			font-size: 1.5rem;
		}

	}

	@media screen and (max-width: 480px) {
		footer p {
			font-size: 0.6rem;
		}
	}
</style>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>