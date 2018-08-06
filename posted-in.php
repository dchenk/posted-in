<?php
/*
Plugin Name: Posted In
Plugin URI: https://widerwebs.com
Description: Add a "This entry was posted in..." box after posts.
Version: 0.1.0
Author: Wider Webs (Dmitriy C)
Author URI: https://widerwebs.com
*/

define('POSTED_IN_PLUGIN_VER', '0.1.0');
define('POSTED_IN_TEMPLATE', dirname(__FILE__) . '/template.php');

if (!function_exists('posted_in')) {
	function posted_in() {
	}
}
