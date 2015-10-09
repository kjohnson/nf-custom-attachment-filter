<?php

/*
Plugin Name: Ninja Forms - Custom Attachment Filter
*/

add_filter( 'nf_email_notification_attachments', 'my_custom_attachment', 9001, 2 );

function my_custom_attachment( $attachments, $action_id ){

    // Confirm the Action ID is the intended email action.
    // TODO: Set your own ID for your action
    if( '60' != $action_id ) return $attachments;
    
    // Create Attachment File Path
    // TODO: Set your own file path for your attachment
    $file_path = WP_CONTENT_DIR . '/uploads/ninja-forms/-001.png';
    
    // Push File Path to attachments array
    $attachments[] = $file_path;
    
    // Return the updated attachments array
    return $attachments;
}
