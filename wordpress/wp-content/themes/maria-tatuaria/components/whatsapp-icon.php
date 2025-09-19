<a href="https://wa.me/5599999999999" target="_blank" class="whatsapp-btn" rel="noopener">
    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/whatsapp_logo.png')); ?>" alt="WhatsApp" class="whatsapp-logo">
</a>

<style>
    .whatsapp-btn {
        position: fixed;
        right: 16px;
        bottom: 16px;
        z-index: 9999;
        background: #25D366;
        border-radius: 50%;
        padding: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        transition: box-shadow 0.2s;
    }

    .whatsapp-btn:hover {
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.25);
    }

    .whatsapp-logo {
        width: 64px;
        height: 64px;
        display: block;
    }

    @media screen and (max-width: 768px) {
        .whatsapp-btn {
            right: 16px;
            bottom: 16px;
            padding: 10px;
        }

        .whatsapp-logo {
            width: 48px;
            height: 48px;
        }
    }
</style>