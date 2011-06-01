<?php
$themename = "Accueil";
$shortname = "swt";
$himg_dir = get_bloginfo('template_directory');
$sfirst_img = $himg_dir . '/images/howtoslide.png';
$mx_categories_obj = get_categories('hide_empty=0');
$mx_categories = array();
foreach ($mx_categories_obj as $mx_cat) {
	$mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name;
}
$categories_tmp = array_unshift($mx_categories, "Select a category:","Uncategorized" );
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (


array( "name" => $themename." Options",
		"type" => "title"),
	
	array( "name" => "Configuration de la bannière ",
	   "type" => "section",
		"niveau" => "1"),
	
	array( "type" => "open"),
			
		array( "type" => "open"),

		array("name" => "Phrase d'introduction",
			"desc" => "Veuillez entrer une phrase d'introduction pour la page d'accueil.",
			"id" => $shortname."_intro",
			"type" => "textarea",
			"std" => ""),
			
		array("name" => "Bouton",
			"desc" => "Texte du bouton.",
			"id" => $shortname."_bouton",
			"type" => "text",
			"std" => ""),
			
		array("name" => "Lien bouton",
			"desc" => "Lien du bouton.",
			"id" => $shortname."_bouton_lien",
			"type" => "text",
			"std" => ""),
			
	
	array( "type" => "close"),
	
	array( "name" => "Configuration des textes",
			"type" => "section",
			"niveau" => "1"),
	array( "type" => "open"),
	
	array( "name" => "partie haute",
			"type" => "section",
			"niveau" => "2"),
	
	array( "type" => "open"),
	
		array( "name" => "Bloc de gauche",
			   "type" => "section",
				"niveau" => "3"),
		array( "type" => "open"),
	
			array( "name" => "Activer l'image de fond",
					"desc" => "Pour activer l'image de fond",
					"id" => $shortname."_activer_fond",
					"std" => "false",
					"type" => "checkbox"),
	
			array( "name" => "Titre article",
					"desc" => "Vous devez choisir l'article de votre bloc",
					"id" => $shortname."_titre_bloc1",
					"std" => "",
					"type" => "add_article"),
	
			array( "name" => "Lien",
				"desc" => "Pour changer le texte du lien",
				"id" => $shortname."_lien_bloc1",
				"std" => "",
				"type" => "text"),
		
		array( "type" => "close"),
	
		array( "name" => "Bloc central",
			   "type" => "section",
				"niveau" => "3"),
		array( "type" => "open"),
	
			array( "name" => "Activer l'image de fond",
				"desc" => "Pour activer l'image de fond",
				"id" => $shortname."_activer_fond_bloc2",
				"std" => "false",
				"type" => "checkbox"),
				
			array( "name" => "Titre article",
				"desc" => "Vous devez choisir l'article de votre bloc",
				"id" => $shortname."_titre_bloc2",
				"std" => "",
				"type" => "add_article"),
	
			array( "name" => "Lien",
					"desc" => "Pour changer le texte du lien",
					"id" => $shortname."_lien_bloc2",
					"std" => "",
					"type" => "text"),
	
		array( "type" => "close"),
	
		array( "name" => "Bloc de droite",
			   "type" => "section",
				"niveau" => "3"),
		array( "type" => "open"),
	
			array( "name" => "Activer l'image de fond",
				"desc" => "Pour activer l'image de fond",
				"id" => $shortname."_activer_fond_bloc3",
				"std" => "false",
				"type" => "checkbox"),
				
			array( "name" => "Titre article",
					"desc" => "Vous devez choisir l'article de votre bloc",
					"id" => $shortname."_titre_bloc3",
					"std" => "",
					"type" => "add_article"),
	
			array( "name" => "Lien",
					"desc" => "Pour changer le texte du lien",
					"id" => $shortname."_lien_bloc3",
					"std" => "",
					"type" => "text"),
		
		array( "type" => "close"),
	array( "type" => "close"),
	array( "name" => "Partie basse",
			"type" => "section",
			"niveau" => "2"),
	array( "type" => "open"),
	
		array( "name" => "Bloc de gauche",
			   "type" => "section",
				"niveau" => "3"),
		array( "type" => "open"),
	
		array( "name" => "Titre article",
			"desc" => "Vous devez choisir l'article de votre bloc",
			"id" => $shortname."_titre_bloc4",
			"std" => "",
			"type" => "add_article"),

		array( "name" => "Image",
				"desc" => "Ajouter une image sur ce bloc",
				"id" => $shortname."_image_bloc4",
				"std" => "",
				"type" => "upload"),
			
		array( "name" => "Lien",
		"desc" => "Pour changer le texte du lien",
		"id" => $shortname."_lien_bloc4",
		"std" => "",
		"type" => "text"),	
	
	array( "type" => "close"),
	
		array( "name" => "Bloc de droite",
			   "type" => "section",
				"niveau" => "3"),
		array( "type" => "open"),
	
		array( "name" => "Titre article",
			"desc" => "Vous devez choisir l'article de votre bloc",
			"id" => $shortname."_titre_bloc5",
			"std" => "",
			"type" => "add_article"),

		array( "name" => "Image",
				"desc" => "Ajouter une image sur ce bloc",
				"id" => $shortname."_image_bloc5",
				"std" => "",
				"type" => "upload"),
			
		array( "name" => "Lien",
		"desc" => "Pour changer le texte du lien",
		"id" => $shortname."_lien_bloc5",
		"std" => "",
		"type" => "text"),	
	array( "type" => "close"),
		
		
	array( "type" => "close"),
		
		
	array( "type" => "close")
);

function mytheme_add_admin() {



global $themename, $shortname, $options;

if ( $_GET['page'] == basename(__FILE__) ) {

	if ( 'save' == $_REQUEST['action'] ) {
		
		foreach ($options as $value) {
			
			if($value['id']==$shortname."_titre_bloc1"){
				$_REQUEST[ $value['id'] ] =  $_REQUEST[ 'V_'.$shortname.'_titre_bloc1'];
			}
			
			if($value['id']==$shortname."_titre_bloc2"){
				$_REQUEST[ $value['id'] ] =  $_REQUEST[ 'V_'.$shortname.'_titre_bloc2'];
			}
			
			if($value['id']==$shortname."_titre_bloc3"){
				$_REQUEST[ $value['id'] ] =  $_REQUEST[ 'V_'.$shortname.'_titre_bloc3'];
			}
			
			if($value['id']==$shortname."_titre_bloc4"){
				$_REQUEST[ $value['id'] ] =  $_REQUEST[ 'V_'.$shortname.'_titre_bloc4'];
			}
			
			if($value['id']==$shortname."_titre_bloc5"){
				$_REQUEST[ $value['id'] ] =  $_REQUEST[ 'V_'.$shortname.'_titre_bloc5'];
			}
			
			
			if($value['id']=="swt_image_bloc4"){
				$_REQUEST[ $value['id'] ] =  $_REQUEST[ 'upload_image_swt_image_bloc4'];
			}
			
			if($value['id']=="swt_image_bloc5"){
				$_REQUEST[ $value['id'] ] =  $_REQUEST[ 'upload_image_swt_image_bloc5'];
			}
			
			
			/*print $_REQUEST[ "upload_image_swt_image_bloc4" ] ;*/ 
			//print '<br/> val : '.$value['id'].'   '.$_REQUEST[ $value['id'] ] ;
			
			update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
		}

foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

	header("Location: admin.php?page=themeoptions.php&saved=true");
die;

}
else if( 'reset' == $_REQUEST['action'] ) {

	foreach ($options as $value) {
		delete_option( $value['id'] ); }

	header("Location: admin.php?page=themeoptions.php&reset=true");
die;

}
}

      add_menu_page("page_title", "Options thème", 'edit_themes', basename(__FILE__), 'mytheme_admin');
	  add_submenu_page("themeoptions.php", $themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function my_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');}

function my_admin_styles() {
wp_enqueue_style('thickbox');
}


function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/includes/admin/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/includes/admin/rm_script.js", false, "1.0");

}

function mytheme_admin() {

global $themename, $shortname, $options;
$i=0;

if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';

?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>

<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {

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
<p>To easily use the <?php echo $themename;?>, you can use the menus below. <b>Check the README.TXT for instructions!</b></p>


<?php break;

case 'add_article':
?>



<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

<!--<php echo get_category_link( '7' ); ?>-->
<select id="select_add_article" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" onChange="alertselected(this)">

<?php
query_posts('tag_ID=7Article&order=ASC&orderby=title'); 
$choix=0;
$valeur_par_defaut="";
 ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<option <?php if (get_settings( $value['id'] ) == get_the_ID()) { echo 'selected="selected"'; } ?> id="<?php the_ID(); ?>"><?php the_title(); ?></option>
<?php 
	 endwhile;
?>
<?php endif; ?>
</select>
<input id="input_bloc" name="V_<?php echo $value['id']; ?>" value="<?php echo get_settings( $value['id']); ?>" style="display:none;"/>

<!--</ul>-->



<!--
<php foreach ($value['options'] as $option) { ?>
		<option <php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><php echo $option; ?></option><php } ?>
</select>
-->

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>

<?php break;

case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>

 </div>
<?php
break;

case 'textarea':
?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>

 </div>

<?php break;

case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;

case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>

<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
 
<?php break;
case "section":
$i++;
?>

<div class="rm_section">

<div class="rm_title level_<?php echo $value['niveau']; ?>"><h3><img src="<?php bloginfo('template_directory')?>/includes/admin/images/trans.gif" class="inactive" alt="""><?php echo $value['name']; ?></h3>
<!--<span class="submit"><input name="save<php echo $i; ?>" type="submit" value="Save changes" />
</span>-->
<div class="clearfix"></div></div>
<div class="rm_options">


<?php break;
case "upload":
?>


<div class="rm_upload_image">

	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>




<input id="upload_image_<?php echo $value['id']; ?>" type="text" size="36" name="upload_image_<?php echo $value['id']; ?>" value="<?php echo stripslashes(get_settings( $value['id'])  ); ?>" />
<input id="upload_image_button" type="button" value="Upload Image" />

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>

 </div>
 
 
<?php break;

}
}

?>


<span class="submit" style="float:right;"><input name="save" type="submit" value="Save changes" /></span>
<input type="hidden" name="action" value="save" />
</form>
<input id="champ_image" value="" type="hidden">
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
 </div>
 
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/includes/admin/script.js"></script> 



<?php
}

add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');

add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
?>