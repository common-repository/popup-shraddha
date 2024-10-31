<?php global $wpdb; $table_name = $wpdb->prefix . "popup_shraddha";
$om_stripe_key= $wpdb->get_row("SELECT * FROM `$table_name` WHERE  id=1"); ?>

<div class="container main_part">
<?php if(isset($_GET['setting']) == 'om_update_setting'){ ?>
  <div class="row">
  <div id="popupShraddhaMessageOutput"></div>
  <!--sidebar start-->
  <div class="col-md-12 om_popup_head">
  <div class="text-center " role="alert"><b> <?php _e('Your Pop Setting','om_popup_shraddha');?></b></div>
  </div>
  <!--/sidebar end--> 
  
  <!--Main data-->
  <div class="col-md-12 om_popup_admin_bar">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" <?php echo (get_option( 'om_top_bar_setting' ) == 1 ) ? 'checked' : ""; ?> id="om_top_bar_setting"><?php _e('Top Bar show only Home pages','om_popup_shraddha');?>
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" <?php echo (get_option( 'om_footer_bar_setting' ) == 1 ) ? 'checked' : ""; ?> id="om_footer_bar_setting"><?php _e('Footer Bar show only on Home pages','om_popup_shraddha');?>
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="1" <?php echo (get_option( 'om_middle_bar_setting' ) == 1 ) ? 'checked' : ""; ?> id="om_middle_bar_setting"><?php _e('Middle Alert Message show on only Home pages','om_popup_shraddha');?>
        </label>
      </div>
    </div>
  </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10" id="update_setting">
        <button type="submit" class="btn btn-default">
        <?php _e('Update Setting','om_popup_shraddha');?>
        </button>
      </div>
    </div>
    <!--/Main end--> 
  </div>
  <!--row end--> 
  
</div>

<?php }else{
// Main form start form below 
  ?>
<!--row start-->
<div class="row">
  <div id="popupShraddhaMessageOutput"></div>
  <!--sidebar start-->
  <div class="col-md-12 om_popup_head">
  <div class="text-center " role="alert"><b> <?php _e('Input Your Message','om_popup_shraddha');?></b></div>
  </div>
  <!--/sidebar end--> 
  
  <!--Main data-->
  <div class="col-md-12 om_popup_admin_bar">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        <?php _e('Top Bar','om_popup_shraddha');?>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="top_bar_message" placeholder="Top Bar Message" aria-describedby="sizing-addon1" value="<?=$om_stripe_key->top_bar;?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        <?php _e('Footer Bar','om_popup_shraddha');?>
      </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="footer_bar_message" placeholder="Footer Bar Message" aria-describedby="sizing-addon1" value="<?=$om_stripe_key->footer_bar;?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">
        <?php _e('Middle Alert Message','om_popup_shraddha');?>
      </label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" id="middle_alert_message" placeholder="Middle Alert Message"><?=$om_stripe_key->middle_alert;?>
</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10" id="submit_message">
        <button type="submit" class="btn btn-default">
        <?php _e('Submit','om_popup_shraddha');?>
        </button>
      </div>
    </div>
    <!--/Main end--> 
  </div>
  <!--row end--> 
  
</div>
<?php 
// Main form end
} ?>


<div class="menu-wrap">
  <nav class="menu">
    <div class="icon-list"> 
      <a href="<?php echo get_admin_url();?>/admin.php?page=om-popup-shraddha-page"><span>Home</span></a> 
      <a href="<?php echo get_admin_url();?>/admin.php?page=om-popup-shraddha-page&setting=om_update_setting"><span>Setting</span></a> 
    </div>
    <button class="close-button" id="close-button">X</button>
  </nav>
</div>
<button class="menu-button fa fa-bars" id="open-button">=</button>
<div class="content">
</div>