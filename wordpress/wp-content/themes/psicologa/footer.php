<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psicologa
 */

?>

<footer id="colophon" class="site-footer">
	<p>
		Copyright &copy; <?php echo date('Y'); ?> - KuryArt.
	</p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<style>
	.site-footer {
		background-color: var(--background-color);
		padding: 20px 0;
		text-align: center;
	}

	.site-footer p {
		margin: 0;
		color: var(--text-color);
	}
</style>

</html>