<?php
/**
 * Plugin Name: WordPress Plugin
 * Version: 1.0.0
 * Plugin URI: ///
 * Description: This is your starter template for your next WordPress plugin.
 * Author: FYCLABS
 *
 * Text Domain: wordpress-plugin
 *
 * @package WordPress
 * @author FYCLabs
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once 'plugin-updater.php';
if ( is_admin() ) {
  new BFIGitHubPluginUpdater( __FILE__, 'kml92', 'wordpress-plugin', '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' );
}