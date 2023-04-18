<?php

const L37SG0_THEME_FUNCTIONS = [
    'functions/theme-styles.php',
    'functions/theme-javascript.php',
    'functions/theme-support.php',
    'functions/theme-menus.php',
//    'functions/theme-admin-styles.php',
//    'functions/theme-admin-javascript.php',
    'functions/theme-options/functions.php',
    'functions/theme-custom-post-types/functions.php',
    'functions/theme-offcanvas-navbar-style.php',
    'functions/theme-offcanvas-navbar-javascript.php',
    'functions/theme-url-rewrite.php',
//    'functions/theme-permalink-structure.php'
];

foreach (L37SG0_THEME_FUNCTIONS as $file) {
    require_once $file;;
}