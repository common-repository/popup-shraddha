/*
*Developed and Maintaining by:Siddharth Singh, v 01.00
*Detail:Use For Only Popup Shraddha
*Author URI: http://sanditsolution.com/
*Email:siddharthsingh91@gmail.com
*/
jQuery(document).ready(function(e) {
//jQuery for top bar	
	jQuery("#popup_shraddha_close_top_bar").click(function(e) {
        jQuery("#popup_shraddha_top_bar").slideUp();
    });
	
//jQuery for bottom bar	
	jQuery("#popup_shraddha_close_bottom_bar").click(function(e) {
        jQuery("#popup_shraddha_footer_bar").slideUp();
    });	
	
//jQuery for middle container	
	jQuery("#popup_shraddha_close_middle_button").click(function(e) {
        jQuery("#popup_shraddha_middle_message,#popup_shraddha_middle_contaner").fadeOut('slow');
    });	
  
 });