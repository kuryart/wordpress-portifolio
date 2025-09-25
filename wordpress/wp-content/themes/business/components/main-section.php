<section id="1" class="main-section">
    <div class="content">
        <div class="left">
            <h1 class="main-title anim1">Lorem Ipsum</h1>
            <h2 class="main-subtitle anim2" data-aos="fade-right">Dolor sit amet</h2>
            <p class="">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mauris quis est ullamcorper viverra. Nulla dapibus diam nec sagittis aliquam. Nulla blandit tortor pulvinar mollis fermentum.
            </p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image01.jpg" alt="Office Image">
        </div>
    </div>
    <div class="content image-first">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image02.jpg" alt="Office Image">
        </div>
        <div class="right">
            <h2 class="main-subtitle anim3" data-aos="fade-left">Porttitor augue</h2>
            <p>
                Ut at egestas metus, id porttitor augue. Donec condimentum velit sit amet metus posuere luctus. Fusce lectus ante, malesuada in arcu a, efficitur semper turpis. Fusce dapibus laoreet nunc, eu iaculis enim auctor ut.
            </p>
        </div>
    </div>
    <div class="content">
        <div class="left">
            <h2 class="main-subtitle anim5" data-aos="fade-right">Vestibulum scelerisque</h2>
            <p>
                Phasellus tempus lacus vitae odio posuere blandit. Vestibulum scelerisque, arcu id elementum vulputate, ex nisl feugiat dolor, nec mollis nibh arcu non odio. Cras at egestas erat. Vestibulum iaculis lobortis tincidunt.
            </p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image03.jpg" alt="Office Image">
        </div>
    </div>
    <div class="content image-first">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image04.jpg" alt="Office Image">
        </div>
        <div class="right">
            <h2 class="main-subtitle anim7" data-aos="fade-left">Donec luctus lorem</h2>
            <p>
                Donec hendrerit id est vel dignissim. Donec luctus lorem finibus quam dignissim tincidunt. Phasellus lacinia interdum eros, sit amet mattis lectus convallis a. Sed porttitor arcu elit, id tempus dolor hendrerit id.
            </p>
        </div>
    </div>
    <div class="content">
        <div class="left">
            <h2 class="main-subtitle anim9" data-aos="fade-right">Sed euismod dui et justo</h2>
            <p>
                Mauris dapibus leo non tellus auctor, sit amet feugiat eros tempor. Sed euismod dui et justo maximus condimentum. Cras lacinia, sem feugiat porta maximus, metus nisi porta dolor, nec vehicula nulla odio at est.
            </p>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image05.jpg" alt="Office Image">
        </div>
    </div>
</section>

<style>
    .main-section {
        background-color: var(--platinum);
        padding: 50px 20px;
        text-align: center;
    }

    .main-section .content {
        padding: 0 6rem;
        display: flex;
        align-items: center;
    }

    .main-title {
        font-size: 3rem;
        margin: 0 0 1rem 0;
        color: var(--oxford-blue);
    }

    .main-subtitle {
        font-size: 2rem;
        margin: 2rem 0 1rem 0;
        color: var(--yinmn-blue);
        text-align: left;
    }

    .main-section p {
        font-size: 1.2rem;
        line-height: 1.6;
        color: var(--rich-black);
        text-align: left;
    }

    .main-section .right,
    .main-section .left {
        flex: 1;
        margin: 1rem;
    }

    .main-section .right img,
    .main-section .left img {
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .main-section .right {
        text-align: end;
    }

    .main-section .left {
        text-align: start;
    }

    @media screen and (max-width: 768px) {
        .main-section .content {
            flex-direction: column;
            padding: 0 1rem;
        }

        .main-section .right,
        .main-section .left {
            margin: 0.5rem 0;
        }

        .main-section .right {
            text-align: center;
        }

        .main-section .left {
            text-align: center;
        }

        .main-section .image-first .left {
            order: 1;
        }

        .main-section .image-first .right {
            order: 0;
        }
    }
</style>

<script>
    // wait until DOM is ready
    document.addEventListener("DOMContentLoaded", function(event) {

        console.log("DOM loaded");

        //wait until images, links, fonts, stylesheets, and js is loaded
        window.addEventListener("load", function(e) {

            //custom GSAP code goes here
            gsap.registerPlugin(ScrollTrigger);

            gsap.from('.anim1', {
                scrollTrigger: '.anim1',
                x: 500,
                duration: 2,
                ease: 'bounce.out'
            });

            gsap.from('.anim2', {
                scrollTrigger: '.anim2',
                x: 500,
                duration: 2,
                ease: 'bounce.out'
            });

            gsap.from('.anim3', {
                scrollTrigger: '.anim3',
                x: 500,
                duration: 2,
                ease: 'bounce.out'
            });

            gsap.from('.anim5', {
                scrollTrigger: '.anim5',
                x: 500,
                duration: 2,
                ease: 'bounce.out'
            });

            gsap.from('.anim7', {
                scrollTrigger: '.anim7',
                x: 500,
                duration: 2,
                ease: 'bounce.out'
            });


            gsap.from('.anim9', {
                scrollTrigger: '.anim9',
                x: 500,
                duration: 2,
                ease: 'bounce.out'
            });

            console.log("window loaded");
        }, false);

    });
</script>