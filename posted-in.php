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

if (!function_exists('posted_in')) {
	function posted_in() {
		$categories = get_the_category_list(', ');
		$tags = get_the_tag_list('', ', ');
		$fmt = '. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.';

		if ($tags != '') {
			$fmt = 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>' . $fmt;
		} else if ($categories != '') {
			$fmt = 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>' . $fmt;
		} else {
			$fmt = 'This entry was posted by <a href="%6$s">%5$s</a>' . $fmt;
		}

		printf(
			$fmt,
			$categories,
			$tags,
			esc_url(get_permalink()),
			the_title_attribute('echo=0'),
			get_the_author(),
			esc_url(get_author_posts_url(get_the_author_meta('ID')))
		);
	}
}
