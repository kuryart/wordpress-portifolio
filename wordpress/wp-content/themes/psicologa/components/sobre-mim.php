<section id="1" class="sobre-mim">
    <div class="container">
        <div class="row flex-column flex-md-row">
            <div class="col d-flex flex-column justify-content-center">
                <div class="row">
                    <h1 class="color01">
                        <?php the_field('sobre_mim_title'); ?>
                    </h1>
                </div>
                <div class=" row">
                    <h5>
                        <?php the_field('sobre_mim_description'); ?>
                    </h5>
                </div>
            </div>
            <div class="col">
                <div class="sobre-mim-img-container">
                    <img class="img-fluid sobre-mim-img" src="<?php the_field('sobre_mim_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .psicologa-img {
        max-width: 100%;
        height: auto;
        max-height: 700px;
    }

    .sobre-mim {
        background-color: var(--color05);
    }

    .sobre-mim-img-container {
        padding: 10%
    }

    .sobre-mim-img {
        border-radius: 8px;
    }
</style>