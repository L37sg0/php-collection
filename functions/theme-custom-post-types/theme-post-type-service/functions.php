<?php

const L37SG0_POST_TYPE_SERVICE = [
    'theme-post-type-service.php',
//    'icon-support-per-post.php'
];

foreach (L37SG0_POST_TYPE_SERVICE as $file) {
    require_once $file;
}