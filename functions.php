<?php

const L37SG0_THEME_FUNCTIONS = [
    'functions/theme-styles.php',
    'functions/theme-javascript.php',
    'functions/theme-support.php',
    'functions/theme-menus.php',
];

foreach (L37SG0_THEME_FUNCTIONS as $file) {
    require_once $file;
}
