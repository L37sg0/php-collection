<form class="d-flex" role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')) ?>">
    <input class="form-control me-2" type="search" name="s" placeholder="Search" aria-label="Search" value="<?php echo esc_attr(get_search_query()); ?>">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
