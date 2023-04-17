<!-- Projects Section -->
<?php $args = ['post_type' => 'l37sg0_projects', 'posts_per_page' => 6]; ?>
<?php $query = new WP_Query($args) ?>
<div id="projects" class="py-4 text-light bg-dark">
    <div class="container py-4 text-center text-light bg-dark">
        <h1>Projects</h1>
    </div>

    <hr class="featurette-divider">
    <div class="container py-4 text-center text-light bg-dark">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): ?>
                    <?php $query->the_post(); ?>
                    <?php add_filter('excerpt_length', function($length) {return 20;}, 999); ?>
                    <?php add_image_size('project-thumbnail', 500, 250, true);?>
                    <?php $thumbnail_url = get_the_post_thumbnail_url(null, 'project-thumbnail');?>
                    <div class="col">
                        <div class="card text-dark">
                            <?php if($thumbnail_url):?>
                                <a href="<?php echo get_permalink(); ?>"><img
                                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                        width="500" height="250" alt="ProjectThumbnail"
                                        src="<?php echo esc_html($thumbnail_url); ?>"
                                    >
                                </a>
                            <?php else:?>
                                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                     width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                                     aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice"
                                     focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#eee"/>
                                    <text x="50%" y="50%" fill="#aaa" dy=".3em">Project Image 500x250
                                    </text>
                                </svg>
                            <?php endif;?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt();?></p>
                                <a href="#" class="btn btn-primary">Preview</a>
                                <a href="#" class="btn btn-primary">Github</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <?php for ($i = 1; $i < 7; $i++): ?>
                    <div class="col">
                        <div class="card text-dark">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                 width="500" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                                 aria-label="Placeholder: 500x250" preserveAspectRatio="xMidYMid slice"
                                 focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#eee"/>
                                <text x="50%" y="50%" fill="#aaa" dy=".3em"><?php echo $i; ?>: 500x250</text>
                            </svg>

                            <div class="card-body">
                                <h5 class="card-title">Project<?php echo $i; ?> title</h5>
                                <p class="card-text"><?php echo $i; ?>Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Preview</a>
                                <a href="#" class="btn btn-primary">Github</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
