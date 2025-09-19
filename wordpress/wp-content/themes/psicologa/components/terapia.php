<section id="2" class="terapia">
    <div class="container">
        <div class="row flex-column flex-md-row">
            <div class="col">
                <div class="terapia-img-container">
                    <img class="img-fluid terapia-img" src="<?php the_field('terapia_image'); ?>" alt="">
                </div>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <div class="row">
                    <h1 class="color01">
                        <?php the_field('terapia_title'); ?>
                    </h1>
                </div>
                <div class=" row">
                    <h5>
                        <?php the_field('terapia_description'); ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .terapia-img {
        max-width: 100%;
        height: auto;
        max-height: 700px;
    }

    .terapia {
        background-color: var(--background-color);
    }

    .terapia-img-container {
        padding: 10%
    }

    .terapia-img {
        border-radius: 8px;
    }
</style>