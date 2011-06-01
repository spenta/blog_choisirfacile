<?php get_header(); ?>

<div id="bloc_titre">
	<h1>Articles</h1>
</div>
<div id="rond_haut"></div>
<div id="content_all">

	<div id="content" class="widecolumn">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post" class="<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div class="content_post">
					<div class="info">
						<p class="posted_time">Posted by <?php the_author() ?> <?php the_time('F j, Y') ?></p><p class="comment"><?php comments_popup_link('Pas de commentaires &#187;', '1 Commentaire &#187;', '% Commentaires &#187;', 'comm'); ?></p>
					</div>
					<div id="texte">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags('<p>Mots-clefs&nbsp;: ', ', ', '</p>'); ?>
					</div>
					<p class="postmetadata alt">
						<small>
							<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							?>
							<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
								?>
								Les commentaires sont fermés.
							<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								?>
								Les pings ne sont pas autorisés.
							<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
								?>
								Les commentaires et pings sont fermés.
							<?php } ?>
						</small>				
					</p>
				</div>
			</div>
			<?php comments_template(); ?>
		
		<?php endwhile; else: ?>
		
			<p>Désolé, aucun article ne correspond à vos critères.</p>
			
		<?php endif; ?>
		
	</div>
	<?php get_sidebar(); ?>
</div>
<div id="rond_bas"></div>
<?php get_footer(); ?>