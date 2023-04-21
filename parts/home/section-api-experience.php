<!-- API Experience Section -->
<?php $apiImage = get_template_directory_uri() . '/assets/images/api-section-image.png'; ?>
<?php if (!empty($image = get_theme_mod('l37sg0_theme_api_section_image'))) {
    $apiImage = $image;
} ?>
<div id="api-experience" class="py-4 text-dark bg-image">
    <style>
        #api-experience {
            background-image: url("<?php echo esc_url($apiImage); ?>");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }
    </style>
    <div class="container py-4 text-center py-4">
        <h1>API Experience</h1>
    </div>

    <hr class="featurette-divider">
    <div class="container py-4 text-center text-dark">

        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3">
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: black;">
                    <h3 class="l37sg0-badge">amazon</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: red;">
                    <h3 class="l37sg0-badge" style="-webkit-text-stroke: 1px grey">e<span
                            style="color: blue">b</span><span style="color: yellow">a</span><span
                            style="color: lime">y</span></h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: orangered;">
                    <h3 class="l37sg0-badge">Cdiscount</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: lightgreen;">
                    <h3 class="l37sg0-badge"><span class="text-dark">mor</span><span style="color: deepskyblue">e</span>commerce
                    </h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: dodgerblue;">
                    <h3 class="l37sg0-badge">OnBuy</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark text-light">
                    <h3 class="l37sg0-badge" style="-webkit-text-stroke: 2px dodgerblue;">fruugo</h3>
                </div>
            </div>
            <div class="col">
                <div class="text-center py-2 px-2 bg-light border border-5 border-dark" style="color: darkviolet;">
                    <h3 class="l37sg0-badge">wayfair</h3>
                </div>
            </div>
        </div>
    </div>
</div>
