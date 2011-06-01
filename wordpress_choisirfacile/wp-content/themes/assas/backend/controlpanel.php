<?php
if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	header( 'Location: '.admin_url().'admin.php?page=wktheme' ) ;
}
class ControlPanel {
  var $default_settings = Array(
    'cp_blogcolortheme' => 'usa',
	'cp_slider_show' => 'frontpage',
	'cp_tweetmeme' => '1',
	'cp_slider_flag' => '1',
	'cp_slider_time' => '10',
	'cp_slider_number' => '1',
	'cp_twitter_visible' => '1',
    'cp_twitter_title' => 'Tweets about wc2010',
	'cp_twitter_keyword' => 'wc2010',
	'cp_twitter_interval' => '10'
  );
  
  function ControlPanel() {
	add_action('admin_menu', array(&$this, 'admin_menu'));
	if ($_GET['page'] == 'wktheme') {
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_enqueue_style('thickbox');
	}
	add_action('admin_head', array(&$this, 'admin_head'));
	if (!is_array(get_option('wktheme'))) {
		add_option('wktheme', $this->default_settings);
		$this->options = get_option('wktheme');
	}
	$this->options = get_option('wktheme');
  }
  function admin_menu() {
    add_theme_page('Theme Control Panel', 'Assas settings', 'edit_themes', "wktheme", array(&$this, 'optionsmenu'));
  }
  function admin_head() {
    ob_start();
  	?>
	<link rel="stylesheet" href="<?=get_bloginfo('template_url')?>/backend/controlpanel.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".item-general").css("display","block");
		$(".menu-item").click(function(){
			$(".menu-item").removeClass("current-item");
			$(this).addClass("current-item");
			var item = $(this).attr("item");
			$(".rm_section").css("display","none");
			$("."+item).css("display","block");
			return false;
		});
		
		window.formfield = '';
		
		$('.upload_button').click(function() {
		 	window.formfield = $('.upload_field',$(this).parent().parent());
		 	tb_show('', 'media-upload.php?type=image&TB_iframe=true');
			return false;
		});
		
		window.original_send_to_editor = window.send_to_editor;
		window.send_to_editor = function(html) {
			if (window.formfield != '') {
				imgurl = $('img',html).attr('src');
				window.formfield.val(imgurl);
				window.formfield = '';
				tb_remove();
			}
			else {
				window.original_send_to_editor(html);
			}
		}
	});
	</script>	
	<?php
  	$o = ob_get_contents();
  	return $o;
  }
  function optionsmenu() {
	  if ($_POST['ss_action'] == 'save') {
		$this->options["cp_blogcolortheme"] = $_POST['cp_blogcolortheme'];
		$this->options["cp_bloglogo"] = $_POST['cp_bloglogo'];
		$this->options["cp_favicon"] = $_POST['cp_favicon'];
		$this->options["cp_tweetmeme"] = $_POST['cp_tweetmeme'];
		$this->options["cp_trackingcode"] = $_POST['cp_trackingcode'];
		$this->options["cp_slider_show"] = $_POST['cp_slider_show'];
		$this->options["cp_slider_effect"] = $_POST['cp_slider_effect'];
		$this->options["cp_slider_flag"] = $_POST['cp_slider_flag'];
		$this->options["cp_slider_time"] = $_POST['cp_slider_time'];
        $this->options["cp_slider_cat"] = ($_POST['cp_slider_cat'] ? implode(",",$_POST['cp_slider_cat']) : '0');
        $this->options["cp_slider_number"] = $_POST['cp_slider_number'];
		$this->options["cp_twitter_button"] = $_POST['cp_twitter_button'];
		$this->options["cp_facebook_button"] = $_POST['cp_facebook_button'];
		$this->options["cp_flickr_button"] = $_POST['cp_flickr_button'];
		$this->options["cp_twitter_visible"] = $_POST['cp_twitter_visible'];
		$this->options["cp_twitter_title"] = $_POST['cp_twitter_title'];
		$this->options["cp_twitter_keyword"] = $_POST['cp_twitter_keyword'];
		$this->options["cp_twitter_interval"] = $_POST['cp_twitter_interval'];
		$this->options["cp_ad1_path"] = $_POST['cp_ad1_path'];
		$this->options["cp_ad1_url"] = $_POST['cp_ad1_url'];
		$this->options["cp_ad2_path"] = $_POST['cp_ad2_path'];
		$this->options["cp_ad2_url"] = $_POST['cp_ad2_url'];
		$this->options["cp_ad3_path"] = $_POST['cp_ad3_path'];
		$this->options["cp_ad3_url"] = $_POST['cp_ad3_url'];
		$this->options["cp_ad4_path"] = $_POST['cp_ad4_path'];
		$this->options["cp_ad4_url"] = $_POST['cp_ad4_url'];
		$this->options["cp_ad5_path"] = $_POST['cp_ad5_path'];
		$this->options["cp_ad5_url"] = $_POST['cp_ad5_url'];
		update_option('wktheme', $this->options);
		echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 300px; margin-left: 20px"><p>Settings <strong>saved</strong>.</p></div>';
	  }
	  ?>
      <div class="wrap rm_wrap">
          <h2>Assas settings</h2>
          <p>To easily use the theme, use the options below.</p>
          <div id="theme-menu">
              <div class="menu-item current-item" item="item-general">General</div>
              <div class="menu-item" item="item-frontpage">Slider</div>
              <div class="menu-item" item="item-banners">Bannder ads</div>
          </div>
          <div class="rm_opts">
              <form action="" method="post" class="themeform">
                  <input type="hidden" id="ss_action" name="ss_action" value="save">
                  <div class="rm_section item-general">
                      <div class="rm_title">
                          <h3>General</h3>
                          <span class="submit">
                              <input type="submit" value="Save Changes" name="cp_save"/>
                          </span>
                          <div class="clearfix"></div>
                      </div>
                      
                      <div class="rm_input rm_text">
                          <label for="cp_bloglogo">Blog logo</label>
                          <input type="text" name="cp_bloglogo" id="cp_bloglogo" class="upload_field" value="<?php echo $this->options["cp_bloglogo"]; ?>" />
                          <small><input class="upload_button" type="button" value="Browse" /><br />The logo image for you website</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_favicon">Favicon</label>
                          <input type="text" name="cp_favicon" id="cp_favicon" class="upload_field" value="<?php echo $this->options["cp_favicon"]; ?>" />
                          <small><input class="upload_button" type="button" value="Browse" /><br />The favicon which will show up in the adresbar and bookmarks. Must be a .ico file</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_tweetmeme">Use tweetmeme</label>
                          <input type="checkbox" <?php if ($this->options["cp_tweetmeme"] == '1') { echo 'checked'; } ?>  name="cp_tweetmeme" id="cp_tweetmeme" value="1" />
                          <small>This will display the tweetmeme link and counter on all your posts</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_trackingcode">Google analytics</label>
                          <input type="text" name="cp_trackingcode" id="cp_trackingcode" value="<?php echo $this->options["cp_trackingcode"]; ?>" />
                          <small>Insert your google analytics tracking number</small><div class="clearfix"></div>
                      </div>
                  </div>
                  <div class="rm_section item-frontpage">
                      <div class="rm_title">
                          <h3>Slider</h3>
                          <span class="submit">
                              <input type="submit" value="Save Changes" name="cp_save"/>
                          </span>
                          <div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_select">
                          <label for="cp_slider_show">Show slider</label>
                          <select name="cp_slider_show" id="cp_slider_show">
                          	  <option <?php if ($this->options["cp_slider_show"] == 'everywhere') { ?>selected="selected"<?php } ?> value="everywhere">Everywhere</option>
                              <option <?php if ($this->options["cp_slider_show"] == 'frontpage') { ?>selected="selected"<?php } ?> value="frontpage">Frontpage</option>
                              <option <?php if ($this->options["cp_slider_show"] == 'nowhere') { ?>selected="selected"<?php } ?> value="nowhere">Nowhere</option>
                          </select>
                          <small>Where to show the slider</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_select">
                          <label for="cp_slider_effect">Transition effect</label>
                          <select name="cp_slider_effect" id="cp_slider_effect">
                          	  <option <?php if ($this->options["cp_slider_effect"] == 'random') { ?>selected="selected"<?php } ?> value="random">Random</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'sliceDown') { ?>selected="selected"<?php } ?> value="sliceDown">Slice down</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'sliceDownLeft') { ?>selected="selected"<?php } ?> value="sliceDownLeft">Slice down left</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'sliceUp') { ?>selected="selected"<?php } ?> value="sliceUp">Slice up</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'sliceUpLeft') { ?>selected="selected"<?php } ?> value="sliceUpLeft">Slice up left</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'sliceUpDown') { ?>selected="selected"<?php } ?> value="sliceUpDown">Slice up down</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'sliceUpDownLeft') { ?>selected="selected"<?php } ?> value="sliceUpDownLeft">Slice up down left</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'fold') { ?>selected="selected"<?php } ?> value="fold">Fold</option>
                              <option <?php if ($this->options["cp_slider_effect"] == 'fade') { ?>selected="selected"<?php } ?> value="fade">Fade</option>
                          </select>
                          <small>The effect of the slider transition</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_slider_time">Rotation interval</label>
                          <input type="text" name="cp_slider_time" id="cp_slider_time" value="<?php echo $this->options["cp_slider_time"]; ?>" />
                          <small>Number of seconds each item should be displayed</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_slider_cat">Content categories</label>
                          <div style="overflow:auto;width:280px;height:100px;border: 1px solid #DFDFDF;display:inline-block;">
                          	<?php $temp_array = explode(',',$this->options["cp_slider_cat"]);
							$categories = get_categories('order_by=name&order=asc&hide_empty=0');
                            foreach ($categories as $cat) { ?>
                            	<input type="checkbox" <?php if ($temp_array && in_array($cat->term_id, $temp_array)) { echo 'checked'; } ?>  name="cp_slider_cat[]" id="cp_slider_cat" value="<?php echo $cat->term_id; ?>" /> <?php echo $cat->name; ?><br />
                            <?php } ?>
                          </div>
                          <small>Select which categories you wish to display</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_slider_number">Number of posts</label>
                          <input type="text" name="cp_slider_number" id="cp_slider_number" value="<?php echo $this->options["cp_slider_number"]; ?>" />
                          <small>Number of posts to rotate</small><div class="clearfix"></div>
                      </div>
                     
                  </div>
                  
                  <div class="rm_section item-banners">
                      <div class="rm_title">
                          <h3>Banners ads (125x125)</h3>
                          <span class="submit">
                              <input type="submit" value="Save Changes" name="cp_save"/>
                          </span>
                          <div class="clearfix"></div>
                      </div>

					<div class="rm_input rm_text">
                          <label for="cp_ad5_path">Banner ad #header image</label>
                          <input type="text" name="cp_ad5_path" id="cp_ad5_path" value="<?php echo $this->options["cp_ad5_path"]; ?>" />
                          <small>Url to the banner image (468x60)</small><div class="clearfix"></div>
                          <br />
                          <label for="cp_ad5_url">Banner ad #header destination</label>
                          <input type="text" name="cp_ad5_url" id="cp_ad5_url" value="<?php echo $this->options["cp_ad5_url"]; ?>" />
                          <small>Banner destination link (like http://www.google.nl)</small><div class="clearfix"></div>
                      </div>

                      <div class="rm_input rm_text">
                          <label for="cp_ad1_path">Banner ad #1 image</label>
                          <input type="text" name="cp_ad1_path" id="cp_ad1_path" value="<?php echo $this->options["cp_ad1_path"]; ?>" />
                          <small>Url to the banner image (125x125)</small><div class="clearfix"></div>
                          <br />
                          <label for="cp_ad1_url">Banner ad #1 destination</label>
                          <input type="text" name="cp_ad1_url" id="cp_ad1_url" value="<?php echo $this->options["cp_ad1_url"]; ?>" />
                          <small>Banner destination link (like http://www.google.nl)</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_ad2_path">Banner ad #2 image</label>
                          <input type="text" name="cp_ad2_path" id="cp_ad2_path" value="<?php echo $this->options["cp_ad2_path"]; ?>" />
                          <small>Url to the banner image (125x125)</small><div class="clearfix"></div>
                          <br />
                          <label for="cp_ad2_url">Banner ad #2 destination</label>
                          <input type="text" name="cp_ad2_url" id="cp_ad2_url" value="<?php echo $this->options["cp_ad2_url"]; ?>" />
                          <small>Banner destination link (like http://www.google.nl)</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_ad3_path">Banner ad #3 image</label>
                          <input type="text" name="cp_ad3_path" id="cp_ad3_path" value="<?php echo $this->options["cp_ad3_path"]; ?>" />
                          <small>Url to the banner image (125x125)</small><div class="clearfix"></div>
                          <br />
                          <label for="cp_ad3_url">Banner ad #3 destination</label>
                          <input type="text" name="cp_ad3_url" id="cp_ad3_url" value="<?php echo $this->options["cp_ad3_url"]; ?>" />
                          <small>Banner destination link (like http://www.google.nl)</small><div class="clearfix"></div>
                      </div>
                      <div class="rm_input rm_text">
                          <label for="cp_ad4_path">Banner ad #4 image</label>
                          <input type="text" name="cp_ad4_path" id="cp_ad4_path" value="<?php echo $this->options["cp_ad4_path"]; ?>" />
                          <small>Url to the banner image (125x125)</small><div class="clearfix"></div>
                          <br />
                          <label for="cp_ad4_url">Banner ad #4 destination</label>
                          <input type="text" name="cp_ad4_url" id="cp_ad4_url" value="<?php echo $this->options["cp_ad4_url"]; ?>" />
                          <small>Banner destination link (like http://www.google.nl)</small><div class="clearfix"></div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
      <?php	 
  }
}
?>