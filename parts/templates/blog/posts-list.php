<div class="container">

    <?php $currentCategory = get_queried_object(); ?>

    <div class="container p-3 my-3 text-white bg-dark rounded shadow-sm text-center">
        <div class="lh-1">
            <h1 class="h6 mb-0 text-white"><?php echo ucfirst(strtolower($currentCategory->name ?? 'Latest')); ?></h1>
        </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Posts</h6>
        <?php $paged = (get_query_var('page')) ? get_query_var('page') : 1; ?>
        <?php if (!empty($currentCategory->name)): ?>
            <?php $args = [
                'post_type' => 'post',
                'category__in' => [$currentCategory->term_id],
                'posts_per_page' => 5,
                'paged' => $paged
            ]; ?>
        <?php else: ?>
            <?php $args = [
                'post_type' => 'post',
                'posts_per_page' => 5,
                'paged' => $paged
            ] ?>
        <?php endif; ?>
        <?php $query = new WP_Query($args); ?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): ?>
                <?php $query->the_post(); ?>
                <!-- Post Preview -->
                <div class="d-flex text-muted pt-3">
                    <?php add_filter('excerpt_length', function ($length) {
                        return 20;
                    }, 999); ?>
                    <?php add_image_size('post-thumbnail', 100, 100, true); ?>
                    <?php $thumbnail_url = get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>
                    <?php if ($thumbnail_url): ?>
                        <a href="<?php echo get_permalink(); ?>">
                            <img
                                class="bd-placeholder-img flex-shrink-0 me-2 rounded"
                                width="100" height="100" alt="PostThumbnail"
                                src="<?php echo esc_html($thumbnail_url); ?>"
                            >
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_permalink(); ?>">
                            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="100" height="100"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 100x100"
                                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#007bff"/>
                                <text x="50%" y="50%" fill="#007bff" dy=".3em">100x100</text>
                            </svg>
                        </a>
                    <?php endif; ?>
                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark"><?php the_title(); ?></strong>
                        <?php echo get_the_excerpt(); ?>
                    </p>
                </div>
            <?php endwhile; ?>
            <!-- Pagination Links -->
            <?php $pagination = paginate_links([
                'total' => $query->max_num_pages,
                'current' => $paged,
                'type' => 'array',
                'prev_text' => __('<< Previous'),
                'next_text' => __('Next >>')
            ]); ?>
            <?php if ($pagination): ?>
                <div class="pagination">
                    <?php foreach ($pagination as $link): ?>
                        <span class="page-numbers"><?php echo $link ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <!-- Example posts list -->
            <?php for ($i = 1; $i < 7; $i++): ?>
                <div class="d-flex text-muted pt-3">
                    <a href="#">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="100" height="100"
                             xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 100x100"
                             preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#007bff"/>
                            <text x="50%" y="50%" fill="#007bff" dy=".3em">100x100</text>
                        </svg>
                    </a>
                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">Post Title <?php echo $i; ?></strong>
                        Some representative placeholder content, with some information about this post. Imagine this
                        being
                        some
                        sort of status update, perhaps?
                    </p>
                </div>
            <?php endfor; ?>
            <!-- Example post page navigation -->
            <small class="d-block text-end mt-3">
                <a href="#">Prev page</a>
                <a href="#">Next page</a>
            </small>
        <?php endif; ?>
    </div>
</div>