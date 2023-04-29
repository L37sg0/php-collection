<?php

if (!function_exists('l37sg0_theme_save_contact_message')) {

    function l37sg0_theme_save_contact_message()
    {
        $errors = [];

        /**
         * Validate nonce field
         */
        check_ajax_referer('l37sg0_contact_form_nonce', 'nonce');

        /**
         * Validate name field
         */
        if (isset($_POST['name'])) {
            $name = sanitize_text_field($_POST['name']);
            if (empty($name)) {
                $errors['name'] = 'Your name is required.';
            }
        }

        /**
         * Validate email field
         */
        if (isset($_POST['email'])) {
            $email = sanitize_email($_POST['email']);
            if (empty($email) || !is_email($email)) {
                $errors['email'] = 'Your email is required and should be a valid email address.';
            }
        }

        /**
         * Validate message field
         */
        if (isset($_POST['message'])) {
            $message = sanitize_textarea_field($_POST['message']);
            if (empty($message)) {
                $errors['message'] = 'Your message could not be empty.';
            }
        }

        if (empty($errors)) {
            $args = [
                'post_title' => $name,
                'post_content' => $message,
                'post_author' => 1,
                'post_status' => 'publish',
                'post_type' => 'l37sg0_contact_msgs',
                'meta_input' => [
                    '_contact_email_value_key' => $email
                ]
            ];

            $postID = wp_insert_post($args);

//            if ($postID !== 0) {
//                l37sg0_theme_send_contact_message($name, $email, $message);
//            }
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'message' => 'Message Successfully submitted, thank you!',
                'errors' => []
            ]);
            die();
        }
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'There are errors in the request.',
            'errors' => $errors
        ]);
        die();
    }
}
add_action('wp_ajax_l37sg0_theme_save_contact_message', 'l37sg0_theme_save_contact_message');
add_action('wp_ajax_nopriv_l37sg0_theme_save_contact_message', 'l37sg0_theme_save_contact_message');

if (!function_exists('l37sg0_theme_send_contact_message')) {

    function l37sg0_theme_send_contact_message($name, $email, $message)
    {
        $to = get_bloginfo('admin_email');
        $subject = 'L37sg0 Contact Form - ' . $name;

        $headers[] = 'From: ' . get_bloginfo('name') . ' <' . $to . '>';
        $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
        $headers[] = 'Content-Type: text/html: charset=UTF-8';

        wp_mail($to, $subject, $message, $headers);
    }
}