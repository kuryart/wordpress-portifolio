<div class="main-section-gradient">
    <?php get_template_part('components/header');
    ?>
    <section class="main-section">
        <div class="container">
            <div class="row flex-column flex-md-row">
                <div class="col order-2 order-md-1">
                    <img class="img-fluid psicologa-img" src="<?php the_field('main_section_image'); ?>" alt="">
                </div>
                <div class="col d-flex flex-column justify-content-center order-1 order-md-2">
                    <div class="row">
                        <h1 class="h1 main-section-title">
                            <?php the_field('main_section_title'); ?>
                        </h1>
                    </div>
                    <div class="row">
                        <h5 class="h5 main-section-description">
                            <?php the_field('main_section_description'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .psicologa-img {
        max-width: 100%;
        height: auto;
        max-height: 600px;
    }

    .main-section-gradient {
        background: #FFF6EE;
        background: linear-gradient(270deg, #FFF6EE, #FFFFFF);
    }

    .main-section {
        background-color: transparent;
    }

    .main-section-title {
        color: var(--color01);
    }

    .main-section-description {
        color: var(--color04);
    }
</style>