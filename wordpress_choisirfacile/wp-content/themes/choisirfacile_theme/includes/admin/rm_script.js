    jQuery(document).ready(function(){
		jQuery('.rm_options').slideUp();
		
		jQuery('.rm_section h3').click(function(){		
			if(jQuery(this).parent().next('.rm_options').css('display')=='none')
				{	jQuery(this).removeClass('inactive');
					jQuery(this).addClass('active');
					jQuery(this).children('img').removeClass('inactive');
					jQuery(this).children('img').addClass('active');
					
				}
			else
				{	jQuery(this).removeClass('active');
					jQuery(this).addClass('inactive');		
					jQuery(this).children('img').removeClass('active');			
					jQuery(this).children('img').addClass('inactive');
				}
				
			jQuery(this).parent().next('.rm_options').slideToggle('slow');	
		});

});
	
	
	
	
function alertselected(lui){

	/*alert(lui.options[lui.selectedIndex].id);
	alert(lui.nextSibling.nodeName);
	alert(lui.nodeName)
	alert(lui.parentNode.nodeName);*/
	/*alert(lui.parentNode.children[2].id);
	alert(lui.parentNode.children[2].value);*/
	//document.getElementById('input_bloc').value=selectobj;
	//.options[this.selectedIndex].id
	//alert(lui.options[this.selectedIndex].id);
	
	//alert(lui.nextSibling.value);
	/*alert(lui.parentNode.children[2].value);
	alert(lui.options[lui.selectedIndex].id);*/
	lui.parentNode.children[2].value = lui.options[lui.selectedIndex].id;
	/*
	
	jQuery('input#input_bloc').each(function(index,affiche){
    	alert(index + ': ' + jQuery(this).attr('value'));
	});
	*/
}


function replace_name_by_id(){
	alert("test");
}