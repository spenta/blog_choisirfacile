<?php
$themename2 = "une information la";
$shortname2 = "swt";
$himg_dir2 = get_bloginfo('template_directory');
$sfirst_img2 = $himg_dir2 . '/images/howtoslide.png';
$mx_categories_obj2 = get_categories('hide_empty=0');
$mx_categories2 = array();
foreach ($mx_categories_obj2 as $mx_cat2) {
	$mx_categories2[$mx_cat2->cat_ID] = $mx_cat2->cat_name;
}
$categories_tmp2 = array_unshift($mx_categories2, "Select a category:","Uncategorized" );
$number_entries2 = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options2 = array (

array( "name" => $themename2." Options",
       "type" => "title"),
	array( "name" => "Ajouter de l'information",
			"type" => "section"),
	   
		array("name" => "un texte",
			"desc" => "entre un jolie texte pour me faire plaisir",
			"id" => $shortname."text_simple2",
			"type" => "textarea",
			"std" => ""),
	   
		array( "type" => "close"),
);

function mytheme_add_admin2() {

global $themename2, $shortname2, $options2;

if ( $_GET['page'] == basename(__FILE__) ) {

	if ( 'save' == $_REQUEST['action'] ) {

		foreach ($options2 as $value2) {
		update_option( $value2['id'], $_REQUEST[ $value2['id'] ] ); }

foreach ($options2 as $value2) {
	if( isset( $_REQUEST[ $value2['id'] ] ) ) { update_option( $value2['id'], $_REQUEST[ $value2['id'] ]  ); } else { delete_option( $value2['id'] ); } }

	header("Location: admin.php?page=themeoptions2.php&saved=true");
die;

}
else if( 'reset' == $_REQUEST['action'] ) {

	foreach ($options2 as $value2) {
		delete_option( $value2['id'] ); }

	header("Location: admin.php?page=themeoptions2.php&reset=true");
die;

}
}

      add_theme_page($themename2."", "$themename2", 'edit_themes', basename(__FILE__), 'mytheme_admin2');
}

function mytheme_add_init2() {

$file_dir2=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir2."/includes/admin/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir2."/includes/admin/rm_script.js", false, "1.0");

}
function mytheme_admin2() {

global $themename2, $shortname2, $options2;
$i2=0;

if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename2.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename2.' settings reset.</strong></p></div>';

?>
<div class="wrap rm_wrap">
<h2><?php echo $themename2; ?> Settings</h2>

<div class="rm_opts">
<form method="post">
<?php foreach ($options2 as $value2) {
switch ( $value2['type'] ) {

case "open":
?>

<?php break;

case "close":
?>

</div>
</div>
<br />


<?php break;

case "title":
?>
<p>To easily use the <?php echo $themename2;?>, you can use the menus below. <b>Check the README.TXT for instructions!</b></p>


<?php break;

case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value2['id']; ?>"><?php echo $value2['name']; ?></label>
 	<input name="<?php echo $value2['id']; ?>" id="<?php echo $value2['id']; ?>" type="<?php echo $value2['type']; ?>" value="<?php if ( get_settings( $value2['id'] ) != "") { echo stripslashes(get_settings( $value2['id'])  ); } else { echo $value2['std']; } ?>" />
 <small><?php echo $value2['desc']; ?></small><div class="clearfix"></div>

 </div>
<?php
break;

case 'textarea':
?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value2['id']; ?>"><?php echo $value2['name']; ?></label>
 	<textarea name="<?php echo $value2['id']; ?>" type="<?php echo $value2['type']; ?>" cols="" rows=""><?php if ( get_settings( $value2['id'] ) != "") { echo stripslashes(get_settings( $value2['id']) ); } else { echo $value2['std']; } ?></textarea>
 <small><?php echo $value2['desc']; ?></small><div class="clearfix"></div>

 </div>

<?php
break;

case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value2['id']; ?>"><?php echo $value2['name']; ?></label>

<select name="<?php echo $value2['id']; ?>" id="<?php echo $value2['id']; ?>">
<?php foreach ($value2['options'] as $option2) { ?>
		<option <?php if (get_settings( $value2['id'] ) == $option2) { echo 'selected="selected"'; } ?>><?php echo $option2; ?></option><?php } ?>
</select>

	<small><?php echo $value2['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;

case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value2['id']; ?>"><?php echo $value2['name']; ?></label>

<?php if(get_option($value2['id'])){ $checked2 = "checked=\"checked\""; }else{ $checked2 = "";} ?>
<input type="checkbox" name="<?php echo $value2['id']; ?>" id="<?php echo $value2['id']; ?>" value="true" <?php echo $checked2; ?> />


	<small><?php echo $value2['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break;
case "section":

$i++;

?>

<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/includes/admin/images/trans.gif" class="inactive" alt="""><?php echo $value2['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="rm_options">


<?php break;

}
}
?>

<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
 </div>


<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init2');
add_action('admin_menu', 'mytheme_add_admin2');
?>