<?php

$cs_image = array(
	array(
		"name" 		=> esc_html__('Upload images',  'voyager' ),
		"desc" 		=> esc_html__('Select the images that should be upload to this gallery',  'voyager' ),
		"id" 		=> "gallery_image_ids",
		"type" 		=> 'gallery'
	)
);

$cs_audio = array(
	array(
		"name" 		=> esc_html__('Embeded Code', 'voyager' ),
		"desc" 		=> esc_html__('The embed code', 'voyager' ),
		"id" 		=> "post_format_audio_embed",
		"type" 		=> "textarea",
		'std' 		=> ''
	)
);

$cs_video = array(
	array(
		"name" 		=> esc_html__('YouTube video ID', 'voyager' ),
		"desc" 		=> '',
		"id" 		=> "post_youtube_video_url",
		"type" 		=> "text",
		'std' 		=> ''
	),
	array(
		"name" 		=> esc_html__('Vimeo video ID', 'voyager' ),
		"desc" 		=> '',
		"id" 		=> "post_vimeo_video_url",
		"type" 		=> "text",
		'std' 		=> ''
	)
);

$cs_quote = array(
	array(
		"name" 		=> esc_html__('The Quote', 'voyager' ),
		"desc" 		=> esc_html__('Write your quote in this field.', 'voyager' ),
		"id" 		=> "format_quote_text",
		"type" 		=> "textarea",
		'std' 		=> ''
	),
	array(
		"name" 		=> esc_html__('The Author', 'voyager' ),
		"desc" 		=> esc_html__('Write your author name of this.', 'voyager' ),
		"id" 		=> "format_quote_author",
		"type" 		=> "text",
		'std' 		=> ''
	)
);

$cs_link = array(
	array(
		"name" 		=> esc_html__('The URL', 'voyager' ),
		"desc" 		=> esc_html__('Insert the URL you wish to link to.', 'voyager' ),
		"id" 		=> "format_link_url",
		"type" 		=> "text",
		'std' 		=> ''
	)	
);

$cs_status = array(
	array(
		"name" 		=> esc_html__('The URL', 'voyager' ),
		"desc" 		=> esc_html__('Insert the status URL.', 'voyager' ),
		"id" 		=> "format_status_url",
		"type" 		=> "text",
		'std' 		=> ''
	)	
);


/* ================================================================================== */
/*      Add Metabox
/* ================================================================================== */

add_action('admin_init', 'cs_post_format_add_box');
if (!function_exists('cs_post_format_add_box')) {
    function cs_post_format_add_box() { 
        global $cs_quote, $cs_image, $cs_link, $cs_audio, $cs_video, $cs_status;
        add_meta_box('cs-format-quote', esc_html__('Quote Settings', 'voyager'), 'post_format_metabox', 'post', 'normal', 'high', $cs_quote);
        add_meta_box('cs-format-gallery', esc_html__('Gallery Settings', 'voyager'), 'post_format_metabox', 'post', 'normal', 'high', $cs_image);
        add_meta_box('cs-format-link', esc_html__('Link Settings', 'voyager'), 'post_format_metabox', 'post', 'normal', 'high', $cs_link);
        add_meta_box('cs-format-audio', esc_html__('Audio Settings', 'voyager'), 'post_format_metabox', 'post', 'normal', 'high', $cs_audio);
        add_meta_box('cs-format-video', esc_html__('Video Settings', 'voyager'), 'post_format_metabox', 'post', 'normal', 'high', $cs_video);
        add_meta_box('cs-format-status', esc_html__('Status Settings', 'voyager'), 'post_format_metabox', 'post', 'normal', 'high', $cs_status);
    }
}


/* ================================================================================== */
/*      Callback function to show fields in meta box
/* ================================================================================== */
if (!function_exists('post_format_metabox')) {
    function post_format_metabox($post, $metabox) {
        global $post; ?>
	<input type="hidden" name="cstheme_postformat_box_nonce" value="<?php echo wp_create_nonce(basename(__FILE__));?>" />
        <table class="form-table cs-metaboxes">
            <tbody>
                    <?php	                              
                    foreach ($metabox['args'] as $settings) {
                        $options = get_post_meta($post->ID, $settings['id'], true);
                        
                        $settings['value'] = !empty($options) ? $options : (isset($settings['std']) ? $settings['std'] : '');
                        call_user_func('settings_'.$settings['type'], $settings);	
                    }
                    ?>
            </tbody>
        </table><?php
    }
}


/* ================================================================================== */
/*      Save post data
/* ================================================================================== */

add_action('save_post', 'postformat_save_postdata');
if (!function_exists('postformat_save_postdata')) {
    function postformat_save_postdata($post_id) {
		global $cs_image, $cs_audio, $cs_video, $cs_quote, $cs_link, $cs_status;

		// verify nonce
		if (!isset($_POST['cstheme_postformat_box_nonce']) || !wp_verify_nonce($_POST['cstheme_postformat_box_nonce'], basename(__FILE__))) {
				return $post_id;
		}

		// check autosave
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
				return $post_id;
		}

		// check permissions
		if (!current_user_can('edit_post', $post_id)) {
				return $post_id;
		}

		$metaboxes = array_merge($cs_link, $cs_quote, $cs_audio, $cs_image, $cs_video, $cs_status);
		foreach ($metaboxes as $metabox) {
				$value = ( isset($_POST[$metabox['id']]) ) ? $_POST[$metabox['id']] : false; 
				update_post_meta($post_id, $metabox['id'], stripslashes(htmlspecialchars($value)));
		}
    }
}
?>