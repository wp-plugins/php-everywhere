<?php


// display the metabox
function php_everywhere_options_box_content( $post_id ) {
    // nonce field for security check, you can have the same
    // nonce field for all your meta boxes of same plugin
    wp_nonce_field( plugin_basename( __FILE__ ), 'php_everywhere' );
	$text = get_post_meta( get_the_ID(),'php_everywhere_code',true);
	if($text == '')
	{
		$text = 'Just put [php_everywhere] where you want the code to be executed.';
	}
    echo '<div style="width:100%;"><textarea name="php_everywhere_code" rows="7" style="width:100%">'.$text.'</textarea></div>';
    
}

// save data from checkboxes
add_action( 'save_post', 'php_everywhere_data' );
function php_everywhere_data() {

    // check if this isn't an auto save
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return;

    // security check
    if ( !wp_verify_nonce( $_POST['php_everywhere'], plugin_basename( __FILE__ ) ) )
        return;

    // further checks if you like, 
    // for example particular user, role or maybe post type in case of custom post types
	$post_id = get_the_ID();
    // now store data in custom fields based on checkboxes selected
    update_post_meta( $post_id, 'php_everywhere_code', $_POST['php_everywhere_code'] );
	update_post_meta(76, 'my_key', $post_id);
}
?>