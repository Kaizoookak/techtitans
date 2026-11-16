<?php

function techtitans_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'techtitans_setup');

function techtitans_styles() {

    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        array(),
        '6.5.2'
    );

    // filemtime() makes the browser load the newest CSS/JS after every deploy
    wp_enqueue_style(
        'techtitans-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    wp_enqueue_script(
        'techtitans-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        filemtime( get_template_directory() . '/js/main.js' ),
        true
    );
}

add_action('wp_enqueue_scripts', 'techtitans_styles');


/**
 * Handle the Tech Titans contact form.
 * Sends messages to the team's inbox without exposing the recipient in the form.
 */
function techtitans_contact_redirect( $status ) {
    $redirect_url = wp_get_referer();

    if ( ! $redirect_url ) {
        $redirect_url = home_url( '/#contact' );
    }

    $redirect_url = remove_query_arg( 'contact', $redirect_url );
    $redirect_url = add_query_arg( 'contact', $status, $redirect_url );

    wp_safe_redirect( $redirect_url . '#contact' );
    exit;
}

function techtitans_handle_contact_form() {
    if (
        ! isset( $_POST['techtitans_contact_nonce'] ) ||
        ! wp_verify_nonce(
            sanitize_text_field( wp_unslash( $_POST['techtitans_contact_nonce'] ) ),
            'techtitans_contact_submit'
        )
    ) {
        techtitans_contact_redirect( 'invalid' );
    }

    // Honeypot: real visitors leave this hidden field empty.
    if ( ! empty( $_POST['website'] ) ) {
        techtitans_contact_redirect( 'sent' );
    }

    $name    = isset( $_POST['contact_name'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) : '';
    $email   = isset( $_POST['contact_email'] ) ? sanitize_email( wp_unslash( $_POST['contact_email'] ) ) : '';
    $subject = isset( $_POST['contact_subject'] ) ? sanitize_text_field( wp_unslash( $_POST['contact_subject'] ) ) : '';
    $message = isset( $_POST['contact_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ) ) : '';

    if ( '' === $name || ! is_email( $email ) || '' === $subject || '' === $message ) {
        techtitans_contact_redirect( 'invalid' );
    }

    $recipient    = 'occ.techtitans@gmail.com';
    $mail_subject = 'Website contact: ' . $subject;
    $mail_body    = "You received a new message from the Tech Titans portfolio website.\\n\\n";
    $mail_body   .= "Name: {$name}\\n";
    $mail_body   .= "Email: {$email}\\n";
    $mail_body   .= "Subject: {$subject}\\n\\n";
    $mail_body   .= "Message:\\n{$message}\\n";

    // Reply-To lets the team reply directly to the visitor.
    $headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );

    if ( wp_mail( $recipient, $mail_subject, $mail_body, $headers ) ) {
        techtitans_contact_redirect( 'sent' );
    }

    techtitans_contact_redirect( 'failed' );
}

add_action( 'admin_post_nopriv_techtitans_contact', 'techtitans_handle_contact_form' );
add_action( 'admin_post_techtitans_contact', 'techtitans_handle_contact_form' );

