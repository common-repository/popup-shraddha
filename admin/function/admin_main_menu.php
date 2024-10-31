<?php
function popup_shraddha_admin_menu(){
 add_menu_page(
 'Popup Shraddha : alert Message',//page title
 'Popup Shraddha',//Stripe Menu Name 
 'manage_options',
 'om-popup-shraddha-page',
 'om_popup_shraddha',//calling function 
 'dashicons-editor-kitchensink','3'); }	
add_action('admin_menu','popup_shraddha_admin_menu');
function om_popup_shraddha() {
include("html_container.php"); } ?>