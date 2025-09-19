<section id="3" class="ambiente">
    <div class="container">
        <div class="row flex-column flex-md-row">
            <div class="col d-flex flex-column justify-content-center">
                <div class="row">
                    <h1 class="color01">
                        <?php the_field('ambiente_title'); ?>
                    </h1>
                </div>
                <div class=" row">
                    <h5>
                        <?php the_field('ambiente_description'); ?>
                    </h5>
                </div>
            </div>
            <div class="col">
                <div class="ambiente-img-container">
                    <img class="img-fluid ambiente-img" src="<?php the_field('ambiente_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .ambiente-img {
        max-width: 100%;
        height: auto;
        max-height: 700px;
    }

    .ambiente {
        background-color: var(--color05);
    }

    .ambiente-img-container {
        padding: 10%
    }

    .ambiente-img {
        border-radius: 8px;
    }
</style>