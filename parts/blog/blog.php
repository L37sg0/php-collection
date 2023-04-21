<?php
/**
 * Template Name: Blog
 */

require_once 'blog-section-navigation.php';

if (is_singular('post')) {
    require_once 'post.php';
} else {
    require_once 'posts-list.php';
}