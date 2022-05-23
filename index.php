<?php
/**
 * Plugin Name: WordPress Plugin
 * Plugin URI: https://github.com/kml92/wordpress-plugin
 * Description: This is your starter template for your next WordPress plugin.
 * Author: FYCLABS
 * Version: 1.0.1
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
$updater = new PDUpdater(__FILE__);
$updater->set_username('kml92');
$updater->set_repository('wordpress-plugin');
$updater->authorize('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');
$updater->initialize();
