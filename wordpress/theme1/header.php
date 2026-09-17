<header>
    <div class="container bg-dark">
        <div class="image-wrap">
            <div class="img-content">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/banner.jpg'; ?>" alt="BANNER">
            </div>
            <div class="overlay"></div>
        </div>
        <div class="banner-content">
            <h1><?php echo ucfirst(get_bloginfo('name')); ?></h1>
        </div>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat|Oswald');

            body {
                margin: 0;
                padding: 0;
                font-family: 'Montserrat', sans-serif;
            }

            h1 {
                font-family: 'Oswald', sans-serif;
            }

            p {
                font-family: 'Montserrat', sans-serif;
            }

            .image-wrap {
                position: relative;
                width: 100%;
                height: 50vh;
                overflow-x: hidden;
            }

            .banner-content {
                position: absolute;
                z-index: 99999;
                top: 25%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                text-align: center;
                font-size: 1.5em;
                color: #fff;
                line-height: 1.5;
            }

            .img-content img {
                width: 100%;
                height: 50vh;
                display: block;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                background: #2d2b2b;
                opacity: .5;
                z-index: 999;
                height: 100%;
            }
        </style>
    </div>
    <div class="container bg-success">
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation',
                    'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa-solid fa-microchip"></i> <?php echo ucfirst(get_bloginfo('name')); ?></a>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => 'WP_Bootstrap_Navwalker'
                ));
                ?>
                <?php
                get_search_form();
                ?>
            </div>
        </nav>
    </div>
</header>
