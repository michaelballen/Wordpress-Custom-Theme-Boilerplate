<?php 
//register all scripts here
add_action('wp_enqueue_scripts', 'register_scripts');
function register_scripts () {
	$bs = get_bloginfo('template_directory') . '/js/vendor/bootstrap/bootstrap-';
	wp_register_script('bootstrap-affix', $bs . 'affix.js', array('jquery'), false, true);
	wp_register_script('bootstrap-alert', $bs . 'alert.js', array('jquery'), false, true);
	wp_register_script('bootstrap-button', $bs . 'button.js', array('jquery'), false, true);
	wp_register_script('bootstrap-carousel', $bs . 'carousel.js', array('jquery'), false, true);
	wp_register_script('bootstrap-collapse', $bs . 'collapse.js', array('jquery', 'bootstrap-transition'), false, true);
	wp_register_script('bootstrap-dropdown', $bs . 'dropdown.js', array('jquery'), false, true);
	wp_register_script('bootstrap-modal', $bs . 'modal.js', array('jquery'), false, true);
	wp_register_script('bootstrap-popover', $bs . 'popover.js', array('jquery', 'bootstrap-tooltip'), false, true);
	wp_register_script('bootstrap-scrollspy', $bs . 'scrollspy.js', array('jquery'), false, true);
	wp_register_script('bootstrap-tab', $bs . 'tab.js', array('jquery'), false, true);
	wp_register_script('bootstrap-tooltip', $bs . 'tooltip.js', array('jquery'), false, true);
	wp_register_script('bootstrap-transition', $bs . 'transition.js', array('jquery'), false, true);
	wp_register_script('bootstrap-typeahead', $bs . 'typeahead.js', array('jquery'), false, true);
	
	wp_register_style('screen-css', get_bloginfo('template_directory') . '/css/screen.css');
	wp_register_style('print-css', get_bloginfo('template_directory') . '/css/print.css', array(), false, 'print');
	
	wp_enqueue_style('screen-css');
	wp_enqueue_style('print-css');
}