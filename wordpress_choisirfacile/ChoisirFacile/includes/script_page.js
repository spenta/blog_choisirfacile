$(document).ready(function() {
	$(".table table tr:odd").css("background-color","#eff7fb");
	$("#headerimg #menu ul li:last").css("background-image","none");
	$("#menu_footer li:last").html($("#menu_footer li:last").html().replace("</a>|","</a>"));
	$("#menu_footer li:last").html($("#menu_footer li:last").html().replace("</A>|","</A>")); /* pour IE 7/8 */
	
});