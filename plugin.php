<?php
/**
 * Plugin Name: Bootstrap Blocks for Gutenberg
 * Plugin URI: https://github.com/buckpesch-io/gutenberg-bootstrap
 * Description: Add bootstrap 4 components using Gutenberg
 * Author: Sebastian Buckpesch <sebastian@buckpesch.io>
 * Author URI: https://gutenberg-unlimited.org/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package GBB
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
