<?php get_header(); ?>

<?php wp_enqueue_style( 'get_bloginfo("template_directory")/article.css'); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><span><?php the_title(); ?></span></h2>
			<div id="rond_haut"></div>
			<div id="content_page">
			<?php if (function_exists('the_subheading')) { the_subheading('<h3>', '</h3>'); } ?>
				<div id="contenu">
				<?php the_content('<p class="serif">Lire le reste de cette page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
			</div>
			<div id="rond_bas"></div>
		</div>
</div>
	 <?php endwhile; endif; ?>
<?php get_footer(); ?>