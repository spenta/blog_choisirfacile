<?php get_header(); ?>
<div id="topad">
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<div class="topban">
<?php $ad1 = get_option('creat_ad1'); echo stripslashes($ad1); ?>
</div>
</div>
<div id="catmenucontainer">
	<div id="catmenu">
			<ul>
				<?php wp_list_categories('sort_column=name&title_li=&depth=4'); ?>
			</ul>
	</div>		
</div>
<div class="clear"></div>
<div id="casing">	
	
<div id="content">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="single" id="post-<?php the_ID(); ?>">
<div class="title">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="cover">
<div class="entry">

					<?php the_content('Read the rest of this entry &raquo;'); ?>
				
				 <div class="clear"></div>
	
</div>

</div>


<div class="date"><span class="author">Posted by <?php the_author(); ?></span> <span class="clock"> On <?php the_time('F - j - Y'); ?></span>	</div>	


</div>



		<?php endwhile; endif; ?>
	</div>		


<div id="rightcol">

<?php include (TEMPLATEPATH . '/sponsors.php'); ?>	
<div class="recpostlist">
<h2> Recent from Blog </h2>

<?php 
	$my_query = new WP_Query('showposts= 3');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>

<div class="recpost">

<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

<?php if(function_exists('the_content_limit')) { ?>
<?php the_content_limit(150);  ?>
<?php } else { ?>
<p> Activate the limitpost plugin to see the post contents ! </p>
<?php } ?> 
</div>
<div class="clear"></div>
<div class="recbot"> 
<div class="aut"> <?php the_author(); ?></div>
<div class="dis"> <?php comments_popup_link('0 COMMENTS', '1 COMMENT', '% COMMENTS'); ?> </div>
<div class="clear"></div>
</div>

<?php endwhile; ?>

</div>
<div class="clear"></div>	
</div>
	
<?php get_footer(); ?>