<?php 
function popup_shraddha_register_scripts() {
wp_enqueue_script( 'popup_shraddha_frontend_script', plugins_url('js/script.js', __FILE__), array('jquery'), '1.0.0', true );  
}add_action('wp_enqueue_scripts', "popup_shraddha_register_scripts"); 

function popup_shraddha_register_style() {
wp_enqueue_style( 'popup_shraddha_style', plugin_dir_url( __FILE__ ).'/css/style.css', array(), '1.0.0', 'all' );
wp_enqueue_style( 'popup_shraddha_font-awesome.min', plugins_url('/css/font-awesome.min.css', __FILE__), array(), '4.4.0', 'all' );
}add_action('wp_enqueue_scripts', "popup_shraddha_register_style"); 
?>