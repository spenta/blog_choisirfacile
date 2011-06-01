
<div class="sidebar1">
	
	<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar 1') ) : else : ?>
	
		<li>
			<h2>Meta</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
			</ul>
		</li>
		<li>
			<h2>Blogroll</h2>
			<ul>
				<?php get_links(-1, '<li>', '</li>', 'between', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
			</ul>
		</li>
	<?php endif; ?>
	</ul>

</div>
