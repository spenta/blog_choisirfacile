<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/slide.php'); ?>


<div id="casing">	

<div id="content">

<div class="welcome">

<h2> welcome to <?php bloginfo('name');?> </h2>

<p> <?php $welcome = get_option('creat_welcom'); echo ($welcome); ?> </p>

</div>

<div class="featured">
<h2> Featured Posts </h2>
<div class="featblock">
<?php 
	$fcat1 = get_option('creat_bcat1'); 
	$my_query = new WP_Query('category_name='. $fcat1 .'&showposts= 1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<?php $preview = get_post_meta($post->ID, 'preview', $single = true); ?>

<img class="custim2" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $preview; ?>&amp;h=100&amp;w=150&amp;zc=1" alt=""/> 

<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

<?php if(function_exists('the_content_limit')) { ?>
<?php the_content_limit(250);  ?>
<?php } else { ?>
<p> Activate the limitpost plugin to see the post contents ! </p>
<?php } ?> 
<?php endwhile; ?>

</div>


<div class="featblock">
<?php 
	$fcat2 = get_option('creat_bcat2'); 
	$my_query = new WP_Query('category_name='. $fcat2 .'&showposts= 1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<?php $preview = get_post_meta($post->ID, 'preview', $single = true); ?>
<img class="custim2" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $preview; ?>&amp;h=100&amp;w=150&amp;zc=1" alt=""/> 

<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php if(function_exists('the_content_limit')) { ?>
<?php the_content_limit(250);  ?>
<?php } else { ?>
<p> Activate the limitpost plugin to see the post contents ! </p>
<?php } ?> 
<?php endwhile; ?>
</div>


<div class="featblock">
<?php 
	$fcat3 = get_option('creat_bcat3');  
	$my_query = new WP_Query('category_name='. $fcat3 .'&showposts= 1');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<?php $preview = get_post_meta($post->ID, 'preview', $single = true); ?>
<img class="custim2" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $preview; ?>&amp;h=100&amp;w=150&amp;zc=1" alt=""/> 
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php if(function_exists('the_content_limit')) { ?>
<?php the_content_limit(250);  ?>
<?php } else { ?>
<p> Activate the limitpost plugin to see the post contents ! </p>
<?php } ?> 
<?php endwhile; ?>
</div>

	
</div>


</div>
<?php get_sidebar(); ?>


<?php get_footer(); ?>
