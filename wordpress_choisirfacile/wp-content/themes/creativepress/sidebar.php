<div id="rightcol">



<?php if ( is_home()) { ?>

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
<div class="twifol"> 
<span class="flink"> <a href="http://twitter.com/<?php $twit = get_option('creat_twit'); echo ($twit); ?>"> Follow me</a> </span>
</div>

<div id="twitter_div">

<ul id="twitter_update_list"></ul>
</div>
<div class="twitb"></div>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php $twit = get_option('creat_twit'); echo ($twit); ?>.json?callback=twitterCallback2&amp;count=2"></script>
</div>


<?php } else { ?>
	

<?php include (TEMPLATEPATH . '/sponsors.php'); ?>	
<div class="clear"></div>
<div class="videotab">
<h2> Featured Video</h2>
<?php $vid = get_option('creat_video'); echo stripslashes($vid); ?>
  
</div>





<div id="sidebar">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>	
</div>

<?php } ?> 

</div>

