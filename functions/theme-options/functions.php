<?php

const L37SG0_THEME_OPTIONS = [
    'theme-option-custom-images.php',
    'theme-option-custom-about-section.php',
    'theme-option-social-links.php'
];

foreach (L37SG0_THEME_OPTIONS as $file) {
    require_once $file;
}
