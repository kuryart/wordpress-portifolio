<section class="main-section d-flex flex-column align-items-center justify-content-center">
    <img class="logo animate__animated animate__fadeInDown animate__slow"
        src="<?php echo esc_url(get_theme_file_uri('/assets/images/logo.png')); ?>" alt="logo">
    <h1 class="main-title animate__animated animate__fadeInUp animate__slow">Maria Tatuaria</h1>
</section>

<style>
    .main-section {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .main-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/images/background2.png')); ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.3;
        filter: blur(10px);
        z-index: 1;
    }

    .main-section>* {
        position: relative;
        z-index: 1;
    }

    .main-title {
        margin-top: 50px;
        color: var(--sage);
        font-family: "Parisienne", cursive;
        font-weight: 400;
        font-style: normal;
    }

    @media screen and (max-width: 768px) {
        .logo {
            width: 85vw;
        }
    }
</style>