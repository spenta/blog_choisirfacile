<script type="text/javascript">
var $jx = jQuery.noConflict(); 
$jx(function() {
 $jx(".mygallery").jCarouselLite({
 btnNext: ".next",
        btnPrev: ".prev",
		easing: "backout",
		vertical: true,
	    speed: 1000
    });
 $jx(".mytext").jCarouselLite({
         btnNext: ".next",
        btnPrev: ".prev",
		visible: 1,
		easing: "backout",
	    speed: 1000
    });	
});
</script>

<div id="slidearea">
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<div id="gallerycover">
<div class="mygallery">

        <ul>
			<?php 
	$gldcat = get_option('creat_gldcat'); 
	$gldct = get_option('creat_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
            <li>
			<?php if ($preview = get_post_meta($post->ID, 'preview', $single = true)) { ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $preview; ?>&amp;h=220&amp;w=357&amp;zc=1" alt=""/> 
				<?php } else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/pf.png"  />
				<?php } ?> 
			</li>
			<?php endwhile; ?>
        </ul>

    <div class="clear"></div>  
	
</div>
</div>
   <a href="#" class="prev"><img src="<?php bloginfo('template_directory'); ?>/images/prevtbn.gif" alt="Previous" /></a>
   <a href="#" class="next"><img src="<?php bloginfo('template_directory'); ?>/images/nextbtn.gif" alt="Next" /></a>   
<div id="textcover">
<div class="mytext">

<ul>
	<?php 
	$gldcat = get_option('creat_gldcat'); 
	$gldct = get_option('creat_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
        <li>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php if(function_exists('the_content_limit')) { ?>
		<?php the_content_limit(300);  ?>
		<?php } else { ?>
		<p> Activate the limitpost plugin to see the post contents ! </p>
		<?php } ?> 
                    
		</li>
		<?php endwhile; ?>
        </ul>

    <div class="clear"></div>  
</div>
</div>


</div>