<?php

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
$file_wp_config = dirname( __FILE__ ) . '/core/wp-config.php';
$file_bootstrap = dirname( __FILE__ ) . '/core/wp-blog-header.php';
if (is_file($file_bootstrap)) {

	if (is_file($file_wp_config)) {
		echo "Error: wp-config.php found inside ./core, please remove / move this file.";
	} else {
		require $file_bootstrap;
	}

} else {
	echo "Error: No wordpress installed inside ./core";
}
