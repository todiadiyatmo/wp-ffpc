<?php 

if( ! function_exists('is_user_logged_in') ) : 
    function is_user_logged_in() {
        $user = wp_get_current_user();
        
        // Add action when user_log_in function is called
        // Clear the exlude role cookies
        do_action( 'wp_ffpc_is_user_log_in', $user );
     
        return $user->exists();
    }

endif;