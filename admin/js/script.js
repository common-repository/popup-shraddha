// JavaScript Document
jQuery(document).ready(function(e) {
    jQuery("#submit_message").click(function(e) {
    jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-warning">Please wait....</p>');
	message=Object();
    message.top_bar=jQuery("#top_bar_message").val();
	message.footer_bar=jQuery("#footer_bar_message").val();
	message.middle_alert=jQuery("#middle_alert_message").val();
	
jQuery.ajax({
	     beforeSend:function(){
			jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-warning">Please wait....</p>');
			},			
		type:'POST',
		url: popup_shraddha_ajax_script.ajaxurl,
		data:{'message': message, 'action': 'popup_shraddha_reponse'}
		}).success(function(resultData){
		  if(jQuery.trim(resultData) == "success"){
    	  jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-success">Your message update successfully</p>'); return false;
				}else{
				jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-warning">!Something went wrong try again later</p>'); return false;	
					}
			}).error(function(){
				jQuery('#popupShraddhaMessageOutput').html('<p class="alert alert-danger">Something went wrong try again later</p>'); return false;
				})
    });
});




