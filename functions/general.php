<?php 
//functions (hooks at bottom)
function logo_header () {
	$str = '<div class="logo"><a href="' . site_url() . '"';
	if (is_front_page()) {
		$str .= '<h1>';
	} else {
		$str .= '<div>';
	}
	$str .= get_bloginfo('title');
	if (is_front_page()) {
		$str .= '</h1>';
	} else {
		$str .= '</div>';
	}
	$str .= '</a></div>';
	echo $str;
}

function change_permalinks() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%category%/%postname%/');
    $wp_rewrite->flush_rules();
}

function replace_excerpt($content) {
       return str_replace('[...]', '<a href="'. get_permalink() .'">' . __('Read More') . '</a>', $content);
}


//hooks
add_action('init', 'change_permalinks');
add_filter('the_excerpt', 'replace_excerpt');