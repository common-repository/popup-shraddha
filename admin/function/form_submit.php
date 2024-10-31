<?php 
add_action( 'wp_ajax_popup_shraddha_reponse', 'popup_shraddha_reponse_message_submit' );
function popup_shraddha_reponse_message_submit(){
$message=(object) $_POST['message'];
$top_bar=$message->top_bar;
$footer_bar=$message->footer_bar;
$middle_alert=$message->middle_alert;
global $wpdb;
$table_name = $wpdb->prefix . "popup_shraddha";
$rows_updated=$wpdb->query("UPDATE `$table_name` SET `top_bar` = '$top_bar' , `footer_bar` = '$footer_bar' , `middle_alert` = '$middle_alert' 	WHERE  id=1"); echo ($rows_updated) ? 'success' : 'error' ; die();}


add_action( 'wp_ajax_popup_shraddha_setting_reponse', 'popup_shraddha_setting_reponse' );
function popup_shraddha_setting_reponse(){
$setting = (object) $_POST['setting'];
$top_bar = ($setting->top_bar == 'true' ) ? 1 : 2;
$footer_bar = ($setting->footer_bar == 'true' ) ? 1 : 2;
$middle_alert= ($setting->middle_alert == 'true' ) ? 1 : 2;
update_option('om_top_bar_setting', $top_bar);
update_option('om_footer_bar_setting', $footer_bar);
update_option('om_middle_bar_setting', $middle_alert);
echo 'success'; die();}
?>