<?php
global $post;
	
	if ( get_post_meta( $post->ID, 'post_vimeo_video_url', true ) ) { ?>

		<div class="post-video vimeo_video">
			<iframe src='https://player.vimeo.com/video/<?php echo get_post_meta($post->ID, 'post_vimeo_video_url', true); ?>?portrait=0'></iframe>
		</div>

	<?php }

	if ( get_post_meta( $post->ID, 'post_youtube_video_url', true ) ) { ?>

		<div class="post-video youtube_video">
			<iframe src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'post_youtube_video_url', true); ?>?wmode=opaque" class="youtube-video" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
		
	<?php }