<footer>
    <div class="container">
        <nav class="navbar navbar-expand navbar-light bg-light w-100 m-0 p-0" role="navigation">
            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-center" id="bs-example-navbar-collapse-1">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'navbar-nav m-0',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
            </div>
        </nav>
        <div class="icons w-100 d-flex justify-content-center gap-4 py-5 mb-3">
            <img class="social_icon" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="">
            <img class="social_icon" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="">
            <img class="social_icon" src="<?php echo get_template_directory_uri(); ?>/images/insta.png" alt="">
            <img class="social_icon" src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="">
        </div>
        <p class="text-center fw-semibold text-muted footer-p">WordPress Custom Theme</p>
    </div>
</footer>

<?php wp_footer(); ?>


</body>

</html>