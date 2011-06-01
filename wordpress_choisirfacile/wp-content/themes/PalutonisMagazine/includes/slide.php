<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/roundabout.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/easing.js"></script>
<script type="text/javascript">
// <[CDATA[
$(document).ready(function() {
$('ul#myRoundabout').roundabout({
  easing: 'easeInOutExpo',
  maxScale: 1,
  minScale: 0.8
});            
});
// ]]>
</script>
<?php
	$slidecat = get_option('swt_slide_category');
	$slidecount = '4';
?>
<ul id="myRoundabout">
<?php
$my_query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
   <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo get_post_meta($post->ID, 'slide', $single = true); ?>" alt="<?php the_title() ?>" /></a></li>
<?php endwhile; ?>
</ul>
