
<div class="sidebar2">
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar 2') ) : else : ?>

 <li>
	<h2>Recent Posts</h2>	
<ul>
	<?php $myposts = get_posts('numberposts=10&offset=1');foreach($myposts as $post) :?>
<li>
	<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
</li>
<?php endforeach; ?>
</ul>
</li>


	<?php endif; ?>
</ul>

</div>