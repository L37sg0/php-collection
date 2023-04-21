<!-- About Section -->
<?php $avatarImage = get_template_directory_uri() . '/assets/images/about-avatar.png'; ?>

<?php //if (!empty($image = get_theme_mod('l37sg0_theme_about_section_avatar'))) {
//    $avatarImage = $image;
//} ?>
<?php $query = new WP_Query([
   'post_type' => 'l37sg0-about',
   'posts_per_page' => 1
]);?>
<?php $query->the_post(); ?>
<?php $thumbnail_url = get_the_post_thumbnail_url(null, 'project-thumbnail'); ?>
<?php if ($thumbnail_url): ?>
    <?php $avatarImage = esc_html($thumbnail_url); ?>
<?php endif; ?>
<div id="about" class="py-4 bg-light text-dark">
    <div class="container py-4 text-center bg-light text-dark">
        <h1>About</h1>
    </div>

    <hr class="featurette-divider">
    <div class="container py-4 bg-light text-dark">

        <div class="row featurette">
            <div class="col-md-5 order-md-1">
                <img id="about-avatar"
                     src="<?php echo esc_url($avatarImage); ?>"
                     alt="about-avatar"/>
                <style>
                    #about-avatar {
                        width: 100%;
                    }

                    /* Width for devices larger than 992px */
                    @media (min-width: 992px) {
                        #about-avatar {
                            width: 500px;
                        }
                    }

                    /* Width for tablets */
                    @media (min-width: 768px) and (max-width: 991px) {
                        #about-avatar {
                            width: 75%;
                        }
                    }
                </style>
            </div>
            <div class="col-md-7 order-md-2">
<!--                <p class="lead"><?php //echo get_theme_mod('l37sg0_theme_about_section_text'); ?></p>-->
                <p class="lead"><?php the_content(); ?></p>
            </div>
        </div>
    </div>

</div>
