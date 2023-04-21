<!-- Intro settings -->
<?php $headerDesktop = get_template_directory_uri() . '/assets/images/header-desktop-image.png'; ?>
<?php $headerMobile = get_template_directory_uri() . '/assets/images/header-mobile-image.png'; ?>
<?php if (!empty($image = get_theme_mod('l37sg0_theme_header_image_desktop'))) {
    $headerDesktop = $image;
} ?>
<?php if (!empty($image = get_theme_mod('l37sg0_theme_header_image_mobile'))) {
    $headerMobile = $image;
} ?>
<style>
    /* Header Mobile Image */
    #intro-example {
        height: 400px;
        background-position: center;
        background-image: url("<?php echo esc_url($headerMobile); ?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }

    /* Header Desktop Image */
    @media (min-width: 992px) {
        #intro-example {
            height: 1000px;
            background-image: url("<?php echo esc_url($headerDesktop); ?>");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;

        }
    }
</style>

<!-- Background image -->
<div id="intro-example" class="text-center bg-image">
    <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                <h5 class="mb-4">
                    Best & free guide of responsive web design
                </h5>
                <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                   role="button" rel="nofollow" target="_blank">Start tutorial</a>
                <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
                   target="_blank" role="button">Download MDB UI KIT</a>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->