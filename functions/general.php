<?php 
//functions (hooks at bottom)
function logo_header () {
	$str = '<div class="logo">';
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
	$str .= '</div>';
	echo $str;
}

function change_permalinks() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%category%/%postname%/');
    $wp_rewrite->flush_rules();
}

//hooks
add_action('init', 'change_permalinks');