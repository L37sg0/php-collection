<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <?php
    wp_head();
    ?>
</head>
<body>
<?php
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()):
            get_template_part('loop');
        else:
            get_template_part('content', 'none');
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>
</body>
</html>

