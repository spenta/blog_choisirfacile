jQuery(document).ready(function(){
	
	jQuery('#upload_image_button').live('click',function() {
		//alert("test");
		jQuery('#champ_image').attr('value',jQuery(this).prev().attr('id'));

		 //formfield = jQuery('#upload_image').attr('name');
		 formfield = jQuery(this).prev().attr('id');
		 tb_show('','media-upload.php?type=image&amp;TB_iframe=true');

		 return false;

	});





	window.send_to_editor = function(html) {

		 imgurl = jQuery('img',html).attr('src');

		 jQuery('#'+jQuery('#champ_image').attr('value')).val(imgurl);

		 tb_remove();

	}
});