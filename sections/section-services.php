<!-- Services Section -->
<?php $args = ['post_type' => 'l37sg0_services', 'posts_per_page' => 6];?>
<?php $query = new WP_Query($args)?>

<div id="services" class="py-4 bg-dark text-light">
    <div class="container py-4 text-center text-light bg-dark">
        <h1>Services</h1>
    </div>

    <hr class="featurette-divider">

    <div class="container py-4 text-light bg-dark">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <div class="col">
                        <h3 class="text-center"><?php the_title();?></h3>
                        <article><?php the_content();?></article>
                    </div>
            <?php    }
            } ?>
        </div>
    </div>
</div>
