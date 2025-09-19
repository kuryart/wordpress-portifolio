<section>
    <div class="gallery">
        <?php
        $gallery_images = get_post_meta(get_the_ID(), 'gallery_images', true);
        foreach ($gallery_images as $image) {
        ?>
            <div class="gallery-img-container">
                <img src="<?php echo esc_url($image); ?>" alt="" class="gallery-img" />
            </div> <?php
                }
                    ?>
    </div>
    <!-- Modal -->
    <div id="gallery-modal" class="gallery-modal">
        <span class="gallery-modal-close">&times;</span>
        <img class="gallery-modal-content" id="gallery-modal-img" src="" alt="">
    </div>
</section>

<style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        padding: 0 2rem;
    }

    .gallery-img-container {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
    }

    .gallery-img-container:hover::after {
        content: "";
        position: absolute;
        inset: 0;
        background: var(--lion);
        mix-blend-mode: multiply;
        pointer-events: none;
        border-radius: 8px;
        z-index: 2;
    }

    .gallery img {
        width: 100%;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        background: #eee;
        display: block;
        cursor: pointer;
        transition: transform 0.2s;
    }

    .gallery img:hover {
        transform: scale(1.03);
    }

    .gallery-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100vw;
        height: 100vh;
        overflow: auto;
        background: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .gallery-modal.active {
        display: flex;
    }

    .gallery-modal-content {
        max-width: 90vw;
        max-height: 90vh;
        margin: auto;
        border-radius: 12px;
        box-shadow: 0 4px 32px rgba(0, 0, 0, 0.9);
        background: #fff;
    }

    .gallery-modal-close {
        position: absolute;
        top: 30px;
        right: 40px;
        color: #fff;
        font-size: 3rem;
        font-weight: bold;
        cursor: pointer;
        z-index: 10000;
        transition: color 0.2s;
    }

    .gallery-modal-close:hover {
        color: var(--russet);
    }

    @media screen and (max-width: 768px) {
        .gallery {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (max-width: 480px) {
        .gallery {
            grid-template-columns: 1fr;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('gallery-modal');
        const modalImg = document.getElementById('gallery-modal-img');
        const closeBtn = document.querySelector('.gallery-modal-close');
        document.querySelectorAll('.gallery-img').forEach(img => {
            img.addEventListener('click', function() {
                modal.classList.add('active');
                modalImg.src = this.src;
                modalImg.alt = this.alt;
            });
        });
        closeBtn.addEventListener('click', function() {
            modal.classList.remove('active');
            modalImg.src = '';
        });
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('active');
                modalImg.src = '';
            }
        });
    });
</script>