<?php

const L37SG0_CUSTOM_POST_TYPES = [
    'theme-post-type-message.php',
    'theme-post-type-project.php',
    'theme-post-type-service/functions.php'
];

foreach (L37SG0_CUSTOM_POST_TYPES as $file) {
    require_once $file;
}
