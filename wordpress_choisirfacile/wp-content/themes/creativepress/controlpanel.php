<?php 
function creat_options(){
$themename = "Creativepress";
$shortname = "creat";
$zm_categories_obj = get_categories('hide_empty=0');
$zm_categories = array();
foreach ($zm_categories_obj as $zm_cat) {
	$zm_categories[$zm_cat->cat_ID] = $zm_cat->category_nicename;
}
$categories_tmp = array_unshift($zm_categories, "Select a category:");	
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (

    array(  "name" => "Welcome message",
           "type" => "heading",
			"desc" => "This section lets you display a custom welcome message to your site visitors.",
       ),
	   
	array("name" => "Welcome message",
			"desc" => "Enter some text here.",
            "id" => $shortname."_welcom",
            "std" => "Welcome to my website..",
            "type" => "textarea"),  

	array(  "name" => "Image slider settings",
            "type" => "heading",
			"desc" => "This section customizes the sliding panel area and the number of panels to be displayed.",
			),

	array( 	"name" => "Image Slider Category",
			"desc" => "Select the category from which you want to display the thumbnails.",
			"id" => $shortname."_gldcat",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),

	array(	"name" => "Number of sliding panels",
			"desc" => "Select the number of images to display .",
			"id" => $shortname."_gldct",
			"std" => "Select a Number:",
			"type" => "select",
			"options" => $number_entries),

    array(  "name" => "Featured post settings",
            "type" => "heading",
			"desc" => "This section customizes the three featured miniposts displayed on the home page.",
      ),

	array( 	"name" => "Featured post-1 category",
			"desc" => "Select the category for the first featured post.",
			"id" => $shortname."_bcat1",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),
			
	array( 	"name" => "Featured post-2 category",
			"desc" => "Select the category for the first featured post.",
			"id" => $shortname."_bcat2",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),	

	array( 	"name" => "Featured post-3 category",
			"desc" => "Select the category for the first featured post.",
			"id" => $shortname."_bcat3",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),			
			
	array(  "name" => "Featured Video",
            "type" => "heading",
			"desc" => " Displays a video embedded on your sidebar .",

       ),

	array(	"name" => "Video embed code",
			"desc" => "You can find the embed code for videos on all video sharing sites.",
            "id" => $shortname."_video",
            "std" => "Enter the video embed code here. Remember to change the size to 380 x 300 in the embed code.",
            "type" => "textarea"),   
		

  	array(  "name" => "Twitter Settings",
            "type" => "heading",
			"desc" => " Setup a Twitter updater on your sidebar .",
       ),
	   
	array("name" => "Your Twitter ID",
			"desc" => "Twitter ID here( Case sensitive ).",
            "id" => $shortname."_twit",
           "std" => "twitter",
            "type" => "text"),    

	array(  "name" => "About Me Settings",
            "type" => "heading",
			"desc" => "Set your About me image and text from here .",
       ),			

  	array(	"name" => "About me Image",
			"desc" => "Enter your avatar image url here.",
            "id" => $shortname."_img",
            "std" => "My image",
			"type" => "text"),    

	array(	"name" => "About me text",
			"desc" => "Enter some descriptive text about you, or your site.",
            "id" => $shortname."_about",
            "std" => "There is something about me..",
            "type" => "textarea"),


	array(  "name" => "Adsense Options",
            "type" => "heading",
			"desc" => " Setup the adsense banners for your blog .",
       ),
	   
   	array(	"name" => "726x90 banner on header ",
			"desc" => "adsense 726 x 90 banner script .",
            "id" => $shortname."_ad1",
            "std" => "",
            "type" => "textarea"),   
   
    array(	"name" => "480x60 banner on posts ",
			"desc" => "adsense 480 x 60 banner script .",
            "id" => $shortname."_ad2",
            "std" => "",
            "type" => "textarea"), 
   
   	array(  "name" => "Banner ads",
            "type" => "heading",
			"desc" => " Setup the 125 x 125 banners for your blog .",
       ),
	   
   
	array(	"name" => "Banner-1 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner1",
            "std" => "http://web2feel.com/images/TF.jpg",
            "type" => "text"),    
	   
	array(	"name" => "Banner-1 Url",
			"desc" => "Enter the banner-1 url here.",
            "id" => $shortname."_url1",
            "std" => "Banner-1 url",
            "type" => "text"),    
		 
	array("name" => "Banner-2 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner2",
            "std" => "http://web2feel.com/images/TF.jpg",
            "type" => "text"),    
	   
	array("name" => "Banner-2 Url",
			"desc" => "Enter the banner-2 url here.",
            "id" => $shortname."_url2",
            "std" => "Banner-2 url",
            "type" => "text"), 

	array("name" => "Banner-3 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner3",
            "std" => "http://web2feel.com/images/TF.jpg",
            "type" => "text"),    
	   
	array("name" => "Banner-3 Url",
			"desc" => "Enter the banner-3 url here.",
            "id" => $shortname."_url3",
            "std" => "Banner-3 url",
            "type" => "text"),

	array("name" => "Banner-4 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner4",
            "std" => "http://web2feel.com/images/TF.jpg",
            "type" => "text"),    
	   
	array("name" => "Banner-4 Url",
			"desc" => "Enter the banner-4 url here.",
            "id" => $shortname."_url4",
            "std" => "Banner-4 url",
            "type" => "text"),
	 
	array("name" => "Banner-5 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner5",
            "std" => "http://web2feel.com/images/TF.jpg",
            "type" => "text"),    
	   
	array("name" => "Banner-5 Url",
			"desc" => "Enter the banner-5 url here.",
            "id" => $shortname."_url5",
            "std" => "Banner-4 url",
            "type" => "text"),
			
	array("name" => "Banner-6 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner6",
            "std" => "http://web2feel.com/images/TF.jpg",
            "type" => "text"),    
	   
	array("name" => "Banner-6 Url",
			"desc" => "Enter the banner-6 url here.",
            "id" => $shortname."_url6",
            "std" => "Banner-6 url",
            "type" => "text"),		
	 
	 
);

update_option('creat_template',$options);update_option('creat_themename',$themename);update_option('creat_shortname',$shortname);  
		  
	}
add_action('init','creat_options'); 	

function mytheme_add_admin() {



 $options =  get_option('creat_template'); $themename =  get_option('creat_themename');$shortname =  get_option('creat_shortname');    



    if ( $_GET['page'] == basename(__FILE__) ) {

    

        if ( 'save' == $_REQUEST['action'] ) {



                foreach ($options as $value) {

                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }



                foreach ($options as $value) {

                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }



                header("Location: themes.php?page=controlpanel.php&saved=true");

                die;



        } else if( 'reset' == $_REQUEST['action'] ) {



            foreach ($options as $value) {

                delete_option( $value['id'] ); 

                update_option( $value['id'], $value['std'] );}



            header("Location: themes.php?page=controlpanel.php&reset=true");

            die;



        }

    }



      add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');



}



function mytheme_admin() {



   $options =  get_option('creat_template');$themename =  get_option('creat_themename');$shortname =  get_option('creat_shortname');  



    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';

    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';

    

    

?>

<div class="wrap">

<h2><b><?php echo $themename; ?> theme options</b></h2>



<form method="post">



<table class="optiontable">



<?php foreach ($options as $value) { 

    

	

if ($value['type'] == "text") { ?>

        

<tr align="left"> 

    <th scope="row"><?php echo $value['name']; ?>:</th>

    <td>

        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" size="40" />

				

    </td>

	

</tr>

<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>



<?php } elseif ($value['type'] == "textarea") { ?>

<tr align="left"> 

    <th scope="row"><?php echo $value['name']; ?>:</th>

    <td>

                   <textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="50" rows="8"/>

				   <?php if ( get_settings( $value['id'] ) != "") { echo stripslashes (get_settings( $value['id'] )); } 

				   else { echo $value['std']; 

				   } ?>

</textarea>



				

    </td>

	

</tr>

<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>





<?php } elseif ($value['type'] == "select") { ?>



    <tr align="left"> 

        <th scope="top"><?php echo $value['name']; ?>:</th>

	        <td>

            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">

                <?php foreach ($value['options'] as $option) { ?>

                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; }?>><?php echo $option; ?></option>

                <?php } ?>

            </select>

			

        </td>

	

</tr>

<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>







<?php } elseif ($value['type'] == "heading") { ?>



   <tr valign="top"> 

		    <td colspan="2" style="text-align: left;"><h2 style="color:green;"><?php echo $value['name']; ?></h2></td>

		</tr>

<tr><td colspan=2> <small> <p style="color:red; margin:0 0;" > <?php echo $value['desc']; ?> </P> </small> <hr /></td></tr>



<?php } ?>

<?php 

}

?>

</table>

<p class="submit">

<input name="save" type="submit" value="Save changes" />    

<input type="hidden" name="action" value="save" />

</p>

</form>

<form method="post">

<p class="submit">

<input name="reset" type="submit" value="Reset" />

<input type="hidden" name="action" value="reset" />

</p>

</form>

<h2>Preview (updated when options are saved)</h2>

<iframe src="../?preview=true" width="100%" height="600" ></iframe>

<p> For more <a href="http://www.web2feel.com" >wordpress themes </a>and support, contact the <a href="http://web2feel.com/forum/" > support forums </a> </p>

<?php

}

add_action('admin_menu', 'mytheme_add_admin'); ?>