<?php
/**
 * Template Name: Blog
 */

require_once 'sections/blog/blog-section-navigation.php';

if (is_singular('post')) {
    require_once 'templates/blog/post.php';
} else {
    require_once 'templates/blog/posts-list.php';
}