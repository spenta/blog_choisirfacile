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
<div class="date">
<div class="author">Posted by <?php the_author(); ?></div> 
<div class="clock"> <?php the_time('F - j - Y'); ?></div>	
	 <div class="clear"></div>
</div>	

<div class="title">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="cover">
<div class="entry">

				<?php the_content('Read the rest of this entry &raquo;'); ?>
				
				 <div class="clear"></div>
	
</div>

</div>

<div class="date"><span class="category"><?php the_category(' '); ?> </span></div>	



</div>


<div class="clear"> </div>

<?php comments_template(); ?>
	<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I am Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>