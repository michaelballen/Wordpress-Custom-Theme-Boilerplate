<?php 
//functions (hooks at bottom)
function logo_header () {
	$str = '<div class="logo">';
	if (is_front_page()) {
		$str .= '<h1>';
	} else {
		$str .= '<div>';
	}
	$str .= '<a href="' . site_url() . '"><img alt="' . get_bloginfo('title') . '" src="' . get_bloginfo('template_directory') . '/css/img/title-block.png"  /></a>';
	if (is_front_page()) {
		$str .= '</h1>';
	} else {
		$str .= '</div>';
	}
	$str .= '</div>';
	echo $str;
}

function replace_excerpt($content) {
       return str_replace('[...]', '<a href="'. get_permalink() .'">' . __('Read More') . '</a>', $content);
}

function do_main_menu () {
	wp_nav_menu(array(
		'theme_location'=>'primary',
		'container_class'=>'primary-nav',
		'menu_class'=>'group'
	));
}

function do_title ($divider = ' | ') {
	if (is_front_page()) {
		bloginfo('title');
	} else {
		_e(get_the_title() . $divider . get_bloginfo('title'));
	}
}


//hooks
add_filter('the_excerpt', 'replace_excerpt');