<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head(); ?>

</head>

<body>

    <header>
        <div class="container ">
            <nav class="navbar navbar-expand-md  navbar-light bg-light w-100 m-0 p-lg-0 p-md-0 p-4" role="navigation">
                <!-- Brand -->
                <a class="navbar-brand fs-4" href="#">PORTFOLIO</a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse justify-content-end " id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'navbar-nav  m-0 p-0',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                </div>
            </nav>
        </div>
    </header>