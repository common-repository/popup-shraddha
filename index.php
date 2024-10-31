<?php
/* Plugin Name: Popup Shraddha
 * Plugin URI: http://sanditsolution.com/
 * Description: Popup and alert bar on top and on footer. 
 * Version: 01.04.02
 * Author:Siddharth Singh
 * Text Domain: om_popup_shraddha
 * Domain Path: /languages/
 * Author URI:http://codecanyon.net/user/siddharthsingh91
 * License: A "Slug" license name e.g. GPL2
 */ 
global $popup_shraddha_db_version;

// Adding text domain support.
add_action( 'init', 'om_popup_shraddha_textdomain' );
function om_popup_shraddha_textdomain() {
    load_plugin_textdomain( 'om_popup_shraddha', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}



// Adding plugin setting.
function om_popup_shraddha_setting() {
	add_option( 'om_top_bar_setting', 1,'yes');
	add_option( 'om_footer_bar_setting', 1,'yes');
	add_option( 'om_middle_bar_setting', 1 ,'yes');
}




// Deleting plugin setting.
function om_popup_shraddha_setting_delete() {
	delete_option( 'om_top_bar_setting');
	delete_option( 'om_footer_bar_setting');
	delete_option( 'om_middle_bar_setting');
}





$popup_shraddha_db_version = "1.0";

function popup_shraddha_db_install() {
global $wpdb; 
global $popup_shraddha_db_version;
$charset_collate = $wpdb->get_charset_collate();
$table_name = $wpdb->prefix . "popup_shraddha";
$sql="CREATE TABLE $table_name (
`id` int(11) NOT NULL AUTO_INCREMENT,
`top_bar` text DEFAULT NULL,
`footer_bar` text DEFAULT NULL,
`middle_alert` text DEFAULT NULL,
PRIMARY KEY (`id`), UNIQUE KEY `id` (`id`)
)$charset_collate;";	
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql ); add_option( "popup_shraddha_db_version", $popup_shraddha_db_version );} 

function popup_shraddha_insert_value() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'popup_shraddha';	
	$wpdb->insert( 
		$table_name, 
		array( 
			'top_bar' => 'Use admin area and put your top bar message', 
			'footer_bar' => 'Use admin area and put your footer bar message',
			'middle_alert'=>'Use admin area and put your middle bar message' 
		) 
	);
}




function popup_shraddha_db_uninstall() {
        global $wpdb;
        $table = $wpdb->prefix."popup_shraddha";
        //Delete any options thats stored also?
	    delete_option('popup_shraddha_db_version');
	    $wpdb->query("DROP TABLE IF EXISTS $table");
} register_deactivation_hook( __FILE__, 'popup_shraddha_db_uninstall' );

//Add action link start
add_filter( 'plugin_action_links', 'popup_shraddha_add_action_plugin', 10, 5 ); 
function popup_shraddha_add_action_plugin( $actions, $plugin_file ){
static $plugin; if(!isset($plugin))$plugin = plugin_basename(__FILE__); 
if ($plugin == $plugin_file) { 
	$more_product = array('more product' => '<a href="http://www.sanditsolution.com/shops/">' . __('More Product', 'General') . '</a>');
	$site_link = array('support' => '<a href="http://www.sanditsolution.com/contact.html" target="_blank">Support</a>');
   $became_client = array('became client' => '<a href="http://doc.sanditsolution.com/register/" target="_blank">Became Client</a>');
   $actions = array_merge($more_product, $actions);$actions = array_merge($site_link, $actions);$actions = array_merge($became_client, $actions);
} return $actions;}

register_activation_hook( __FILE__, 'popup_shraddha_db_install' );
register_activation_hook( __FILE__, 'popup_shraddha_insert_value' );
register_activation_hook( __FILE__, 'om_popup_shraddha_setting' );
register_deactivation_hook( __FILE__, 'om_popup_shraddha_setting_delete' );
register_deactivation_hook( __FILE__, 'popup_shraddha_db_uninstall' );



include_once dirname( __FILE__ ) . '/html_container.php'; 
include_once dirname( __FILE__ ) . '/including_js_css.php'; 

if ( is_admin() ) :
require_once dirname( __FILE__ ) . '/admin/function/admin_main_menu.php';
require_once dirname( __FILE__ ) . '/admin/function/form_submit.php';
if(isset($_GET['page']) == 'om-popup-shraddha-page'){
require_once dirname( __FILE__ ) . '/admin/function/include_js_css.php';
require_once dirname( __FILE__ ) . '/admin/function/admin_function.php';
} endif; ?>