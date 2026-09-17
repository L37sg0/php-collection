<?php
    $args = [
        'status' => 'approve'
    ];

    $comments_query = new WP_Comment_Query();
    $comments = $comments_query->query($args);
?>
<div class="container bg-light comments">
<?php
    comment_form();
    if ($comments) {
?>
    <h3>Comments:</h3>
    <ul class="comment-list">
        <?php
        wp_list_comments([
            'style'         => 'li',
            'short_ping'    => true,
            'avatar_size'   => 74
        ]);
        ?>
    </ul><!-- comment-list -->
<?php

    } else {
        echo sprintf(
           "<h3>%s</h3>",
        'No comments found'
        );
    }
?>
</div>
