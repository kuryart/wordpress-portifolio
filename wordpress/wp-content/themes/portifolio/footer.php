<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portifolio
 */

?>

<footer id="colophon" class="site-footer">
    <p>
        Copyright &copy; <?php echo date('Y'); ?> - KuryArt.
    </p>
</footer><!-- #colophon -->
</div><!-- #page -->

<style>
    .site-footer {
        color: var(--alice-blue);
        text-align: center;
        padding: 20px 0;
        position: relative;
        bottom: 0;
        width: 100%;
    }
</style>

<?php wp_footer(); ?>

</body>

</html>