<?php
global $post;
$postid = get_the_ID();

wp_enqueue_script('cstheme_owlcarousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true);
wp_enqueue_style('cstheme_owl_carousel_css', get_template_directory_uri() . '/css/owl.carousel.css');

$sidebar_layout = cstheme_option( 'sidebar_layout' );
if( $sidebar_layout == 'left-sidebar' || $sidebar_layout == 'right-sidebar' ) {
	$width = 870;
	$height = 520;
} else {
	$width = 1170;
	$height = 700;
}

$unique_id = uniqid('post_gallery');
$gallery_image_ids = get_post_meta($post->ID, 'gallery_image_ids', true);

if (!empty($gallery_image_ids)) {
	$my_posts_image_gallery = get_post_meta($postid, 'gallery_image_ids', true);
} else {
	// Backwards compat
	$attachment_ids = get_posts('post_parent=' . $postid . '&numberposts=-1&post_type=attachment&orderby=menu_order&order=ASC&post_mime_type=image&fields=ids');
	$attachment_ids = array_diff($attachment_ids, array(get_post_thumbnail_id()));
	$my_posts_image_gallery = implode(',', $attachment_ids);
}

$attachments = array_filter(explode(',', $my_posts_image_gallery));

    if ($attachments) {
        echo '<div id="'. $unique_id .'" class="post-slider owl-carousel clearfix">';
			foreach ($attachments as $attachment) {
				$featured_image_url = wp_get_attachment_url($attachment);
				$featured_image = '<img src="' . aq_resize( $featured_image_url, $width, $height, true, true, true ) . '" alt="" />';
				?>
				<div class="item">
					<?php echo $featured_image; ?>
				</div>
			<?php  }
        echo '</div>';
    }
?>
<script type="text/javascript">
	jQuery(window).load(function() {
		jQuery('#<?php echo $unique_id; ?>.owl-carousel').owlCarousel({
			items: 1,
			margin: 0,
			dots: false,
			nav: true,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
				"<i class='fa fa-chevron-right'></i>"
			],
			loop: true,
			autoplay: true,
			autoplaySpeed: 1000,
			autoplayTimeout: 5000,
			navSpeed: 1000,
			autoplayHoverPause: true,
			thumbs: false
		});
	});
</script>