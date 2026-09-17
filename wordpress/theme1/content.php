<div class="container bg-light">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
</div>
<?php
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
?>