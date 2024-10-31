<?php 
function popup_shraddha_html_contaner(){
global $wpdb;
$table_name = $wpdb->prefix . "popup_shraddha";
$om_stripe_key= $wpdb->get_row("SELECT * FROM `$table_name` WHERE  id=1"); 
$om_middle_bar_setting = get_option( 'om_middle_bar_setting');
$om_top_bar_setting = get_option( 'om_top_bar_setting');
$om_footer_bar_setting = get_option( 'om_footer_bar_setting'); 

if($om_top_bar_setting == 1){ if ( is_front_page() ) {?>
<!--Top bar stat-->
<div id="popup_shraddha_top_bar"><?=$om_stripe_key->top_bar;?><div id="popup_shraddha_close_top_bar"><i class="fa fa-arrow-circle-up"></i></div></div>
<!--Top bar end-->
<?php }}else{ ?>
<!--Top bar stat-->
<div id="popup_shraddha_top_bar"><?=$om_stripe_key->top_bar;?><div id="popup_shraddha_close_top_bar"><i class="fa fa-arrow-circle-up"></i></div></div>
<!--Top bar end-->
<?php }if($om_middle_bar_setting == 1){if ( is_front_page() ) { ?>
<!--Middle bar stat-->
<div id="popup_shraddha_middle_contaner"><div id="popup_shraddha_middle_message"><div id="popup_shraddha_close_middle_button"><i class="fa fa-close"></i></div><div id="popup_shraddha_text_container">
<?=$om_stripe_key->middle_alert;?>
</div><div style="clear:both;"></div></div></div>
<!--Middle bar end-->
<?php }}else{ ?>
<!--Middle bar stat-->
<div id="popup_shraddha_middle_contaner"><div id="popup_shraddha_middle_message"><div id="popup_shraddha_close_middle_button"><i class="fa fa-close"></i></div><div id="popup_shraddha_text_container">
<?=$om_stripe_key->middle_alert;?>
</div><div style="clear:both;"></div></div></div>
<!--Middle bar end-->	
<?php } if($om_footer_bar_setting == 1){ if ( is_front_page() ) {?>
<!--Footer bar stat-->
<div id="popup_shraddha_footer_bar"><?=$om_stripe_key->footer_bar;?>
<div id="popup_shraddha_close_bottom_bar"><i class="fa fa-arrow-circle-down"></i></div></div>
<!--Footer bar stat-->
<?php }}else{ ?>
<!--Footer bar stat-->
<div id="popup_shraddha_footer_bar"><?=$om_stripe_key->footer_bar;?>
<div id="popup_shraddha_close_bottom_bar"><i class="fa fa-arrow-circle-down"></i></div></div>
<!--Footer bar stat-->
<?php	} }
add_action('wp_head', 'popup_shraddha_html_contaner');?>