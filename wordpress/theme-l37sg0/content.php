<?php if (is_404()){
    include 'parts/page-404.php';
} elseif (strpos($_SERVER['REQUEST_URI'], '/blog') === 0) {
    include 'parts/blog/blog.php';
} else {
    include 'parts/home/home.php';
}?>
