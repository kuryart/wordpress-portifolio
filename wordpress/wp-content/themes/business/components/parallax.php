<section class="parallax-section">
    <div class="content">
        <h1>Lorem Ipsum</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
            Maecenas tincidunt ex orci, nec iaculis sem pellentesque et.<br>
            Nam mattis ac nulla quis accumsan. Integer eu enim vel libero sodales mattis iaculis at mi.
        </p>
    </div>
</section>

<style>
    .parallax-section {
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/buildings.jpg');
        min-height: 400px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .parallax-section .content {
        background: var(--rich-black-transparent);
        padding: 20px;
        border-radius: 10px;
    }


    .parallax-section .content p {
        font-size: 1.2rem;
        line-height: 1.5;
        max-width: 600px;
        margin: 0 auto;
    }

    .parallax-section .content h1 {
        color: var(--platinum);
    }

    .parallax-section .content p {
        color: var(--platinum);
    }
</style>