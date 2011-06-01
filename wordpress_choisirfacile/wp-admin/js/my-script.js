jQuery(document).ready(function() {

jQuery('#upload_image_button').click(function() {
	alert('lol');
});

window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#upload_image').val(imgurl);
 tb_remove();
}

});
