<section id="2" class="section-2">
    <div class="section-2-content">
        <h2>Lorem Ipsum</h2>
        <p>
            Mauris dapibus leo non tellus auctor, sit amet feugiat eros tempor. <br>
            Sed euismod dui et justo maximus condimentum. Cras lacinia, sem feugiat porta maximus, metus nisi porta dolor, nec vehicula nulla odio at est.

        </p>
    </div>
</section>

<style>
    .section-2 {
        min-height: 800px;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/background01.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .section-2-content {
        background: var(--platinum-transparent);
        padding: 2rem 3rem;
        border-radius: 12px;
        text-align: center;
    }

    .section-2 h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--oxford-blue);
    }

    .section-2 p {
        font-size: 1.2rem;
        line-height: 1.6;
        color: var(--rich-black);
    }
</style>