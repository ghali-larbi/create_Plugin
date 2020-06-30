<?php

/**
 * Fired during plugin activation
 *
 * @link       https://wppb.me/
 * @since      1.0.0
 *
 * @package    App
 * @subpackage App/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    App
 * @subpackage App/includes
 * @author     ghali <larbighali89@gmail.com>
 */
class App_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$query="CREATE TABLE `settings` (
			`nom` varchar(255) NOT NULL,
			`text` varchar(255) NOT NULL,
			`options` varchar(255) NOT NULL
		   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
		   ";
		require_once(ABSPATH.'wp-admin/includes/upgrade.php');
		dbDelta($query);
	}

}
