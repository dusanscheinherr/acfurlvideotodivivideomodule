<?php
add_filter('et_pb_module_shortcode_attributes', 'video_divi_acf', 20, 3);

function video_divi_acf($props, $atts, $slug) {
	$gallery_module_slugs = array('et_pb_video');
	if (!in_array($slug, $gallery_module_slugs)) {
		return $props;
	}
	if ( 'post' == get_post_type() ) {
		$props['src'] = get_field('acfvideourl', false, false);
		return $props;
	}
	else return $props;
}
