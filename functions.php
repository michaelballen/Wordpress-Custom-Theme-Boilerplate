<?php
//this function will import all files in the functions directory of the themes folder
// ** Allows for more modulized function setup so we don't have one huge functions.php file
// ** && we don't have to worry about going and adding in a reference every time we add a file to the directory
function loadFunctions (){
	//set the directory we're looking in
	$dir = dirname(__FILE__) . '/functions';
	//get all files with a .php extension.
	$scripts = glob($dir . "/*.php");
	//require each file
	foreach ($scripts as $script) {
		require_once $script;
	}
}
//load 'em up!
loadFunctions();