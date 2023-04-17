<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php get_template_part('content', 'none'); ?>
    </main>
</div>
<div class="content-area bg-dark">
    <main id="main" class="site-main" role="main">
        <?php get_footer(); ?>
    </main>
</div>
</body>
</html>

