<!-- Pagination Links -->
<?php $pagination = paginate_links([
    'total' => $query->max_num_pages,
    'current' => $paged,
    'type' => 'array',
    'prev_text' => __('<< Previous'),
    'next_text' => __('Next >>')
]); ?>
<?php if ($pagination): ?>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php foreach ($pagination as $link): ?>
            <?php
            $link = str_replace('class="page-numbers"', 'class="page-link"', $link);
            $link = str_replace('class="prev page-numbers"', 'class="page-link" aria-label="Previous"', $link);
            $link = str_replace('class="next page-numbers"', 'class="page-link" aria-label="Next"', $link);

            if (strpos($link, 'current') !== false) {
                $link = '<a aria-current="page" class="page-link active">' . strip_tags($link) . '</a>';
            }
            ?>
            <li class="page-item"><?php echo $link; ?></li>
        <?php endforeach; ?>
    </ul>
</nav>
<?php endif; ?>
