<?php

const L37SG0_CONTACT_FORM = [
    'theme-contact-message-post-type.php',
    'theme-contact-message-ajax-submit.php',
    'theme-contact-form-javascript.php'
];

foreach (L37SG0_CONTACT_FORM as $file) {
    require_once $file;
}

if (!function_exists('l37sg0_theme_get_contact_form')) {

    function l37sg0_theme_get_contact_form()
    {
        require_once 'section-contact.php';
    }
}