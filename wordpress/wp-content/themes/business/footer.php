<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business
 */

?>

<footer id="colophon" class="site-footer">
    <p>
        Copyright &copy; <?php echo date('Y'); ?> Business. Todos os direitos reservados.
    </p>
    <p>
        Feito por KuryArt.
    </p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

<style>
    footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem 0;
        background-color: var(--rich-black);
    }

    footer p {
        margin: 0;
        font-size: 0.875rem;
        color: var(--platinum);
    }

    .page {
        margin: 0;
    }
</style>