</div>	
<div class="clear"></div>
</div>

<div id="bottom">
<div class="fcenter">

<div class="about">
<?php 
	$img = get_option('creat_img'); 
	$about = get_option('creat_about'); 
?>	
<h2 class="am">About Us</h2>
<img class="myphoto" src="<?php echo ($img); ?>"  alt="" />
<p><?php echo ($about); ?> </p>
</div>


<div class="about">
<h2 class="fl">Flickr</h2>
<?php get_flickrRSS(); ?>
</div>

<div class="clear"></div>
</div>