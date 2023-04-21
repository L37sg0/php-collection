<div class="container">
    <div class="container p-3 my-3 text-white bg-dark rounded shadow-sm text-center">
        <div class="lh-1">
            <h1 class="h6 mb-0 text-white"><?php echo the_title(); ?></h1>
        </div>
    </div>

    <div class="my-3 bg-body rounded shadow-sm">
        <?php add_image_size('project-thumbnail', 500, 500, true);?>
        <?php $thumbnail_url = get_the_post_thumbnail_url(null, 'project-thumbnail');?>
        <?php if ($thumbnail_url): ?>
            <div class="text-center my-auto">
                <img
                    class="img-fluid mx-auto d-block"
                    width="500" height="500" alt="<?php echo the_title(); ?>"
                    src="<?php echo esc_html($thumbnail_url); ?>"
                >
            </div>
        <?php endif; ?>
        <div class="my-3">
            <?php the_content(); ?>
        </div>
    </div>
</div>