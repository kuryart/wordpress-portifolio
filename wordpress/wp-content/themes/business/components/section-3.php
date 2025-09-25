<section id="3" class="section-3">
    <div class="content">
        <div class="left">
            <h2 class="main-subtitle">John Doe</h2>
            <p>
                Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Donec non mauris quis est ullamcorper viverra. Nulla dapibus diam nec sagittis aliquam. Nulla blandit tortor pulvinar mollis fermentum.
            </p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/selfie.jpg" alt="Selfie">
        </div>
    </div>
</section>

<style>
    .section-3 {
        background-color: var(--silver-lake-blue);
        padding: 2rem 0;
    }

    .section-3 .content {
        display: flex;
        justify-content: center;
    }

    .section-3 .left,
    .section-3 .right {
        flex: 0 1 350px;
        padding: 20px;
    }

    .section-3 img {
        display: block;
        margin: 0 auto;
        max-width: 250px;
        width: 100%;
        height: auto;
        border-radius: 50%;
        border: 2px solid var(--platinum);
    }

    .section-3 .main-subtitle {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: var(--oxford-blue);
    }

    .section-3 p {
        line-height: 1.6;
        color: var(--rich-black);
    }

    @media screen and (max-width: 468px) {
        .section-3 .content {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .section-3 .left,
        .section-3 .right {
            padding: 10px;
            flex: 1;
        }
    }
</style>