<?php

if (!function_exists('l37sg0_theme_save_contact_message')) {

    function l37sg0_theme_save_contact_message()
    {
//        $nonceIsValid = true;
//        if (isset($_POST['nonce'])) {
//            $nonceIsValid = wp_verify_nonce($_POST['nonce'], 'l37sg0_contact_form_nonce');
//        }

//        if ($nonceIsValid) {
        check_ajax_referer('l37sg0_contact_form_nonce', 'nonce');

            $title = wp_strip_all_tags($_POST['name']);
            $email = wp_strip_all_tags($_POST['email']);
            $message = wp_strip_all_tags($_POST['message']);

            $args = [
                'post_title' => $title,
                'post_content' => $message,
                'post_author' => 1,
                'post_status' => 'publish',
                'post_type' => 'l37sg0_contact_msgs',
                'meta_input' => [
                    '_contact_email_value_key' => $email
                ]
            ];

            $postID = wp_insert_post($args);

//        if ($postID !== 0) {
//            $to = get_bloginfo('admin_email');
//            $subject = 'L37sg0 Contact Form - ' . $title;
//
//            $headers[] = 'From: ' . get_bloginfo('name') . ' <' . $to . '>';
//            $headers[] = 'Reply-To: ' . $title . ' <' . $email . '>';
//            $headers[] = 'Content-Type: text/html: charset=UTF-8';
//
//            wp_mail($to, $subject, $message, $headers);
//        }

            echo $postID;
//            die();
//        }
//        die(404);
    }
}
add_action('wp_ajax_l37sg0_theme_save_contact_message', 'l37sg0_theme_save_contact_message');
add_action('wp_ajax_nopriv_l37sg0_theme_save_contact_message', 'l37sg0_theme_save_contact_message');