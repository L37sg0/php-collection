<!-- Categories Navigation -->
<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
        <?php $currentCategory = get_queried_object(); ?>
        <?php (empty($currentCategory->name)) ? $active = 'active' : $active = ''; ?>
        <a class="nav-link <?php echo $active; ?>" aria-current="page" href="<?php echo home_url() . '/blog'; ?>">Latest</a>
        <?php $categories = get_categories(); ?>
        <?php if (!empty($categories)): ?>
            <?php foreach ($categories as $category): ?>
                <?php ($currentCategory->name === $category->name) ? $active = 'active' : $active = ''; ?>
                <a class="nav-link <?php echo $active; ?>" href="<?php echo get_category_link($category->term_id); ?>">
                    <?php echo ucfirst(strtolower($category->name)); ?>
                    <span class="badge text-bg-light rounded-pill align-text-bottom">
                        <?php echo $category->count; ?>
                    </span>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
        <!-- Example Categories -->
            <a class="nav-link" href="#">
                Category1
                <span class="badge text-bg-light rounded-pill align-text-bottom">2</span>
            </a>
            <a class="nav-link" href="#">
                Category2
                <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
            </a>
            <a class="nav-link" href="#">
                Category3
                <span class="badge text-bg-light rounded-pill align-text-bottom">7</span>
            </a>
            <a class="nav-link" href="#">
                Category4
                <span class="badge text-bg-light rounded-pill align-text-bottom">15</span>
            </a>
        <?php endif; ?>
    </nav>
</div>