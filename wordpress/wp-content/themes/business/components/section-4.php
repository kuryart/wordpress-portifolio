<section id="4" class="section-4">
    <div class="section-4-content">
        <h2>Lorem Ipsum</h2>
        <p>
            Mauris dapibus leo non tellus auctor, sit amet feugiat eros tempor. <br>
            Sed euismod dui et justo maximus condimentum. Cras lacinia, sem feugiat porta maximus, metus nisi porta dolor, nec vehicula nulla odio at est.

        </p>
    </div>
</section>

<style>
    .section-4 {
        min-height: 800px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/background02.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .section-4-content {
        background: var(--platinum-transparent);
        padding: 2rem 3rem;
        border-radius: 12px;
        text-align: center;
    }

    .section-4 h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--oxford-blue);
    }

    .section-4 p {
        font-size: 1.2rem;
        line-height: 1.6;
        color: var(--rich-black);
    }
</style>