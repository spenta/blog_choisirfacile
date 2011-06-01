<?php get_header() ?>
<?php $theme_options = get_option('wktheme'); ?>
	<div id="content">
	<?php if (have_posts()) : ?>
		<h3 class="page-subtitle">Search results for: <?php echo wp_specialchars(stripslashes($_GET['s']), true); ?></h3>
        <?php while ( have_posts() ) : the_post() ?>
		<div id="post-<?php the_ID() ?>" class="post">
        	<?php $postimageurl = get_post_meta($post->ID, 'post-img', true);
            if ($postimageurl) {
            ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><img class="front-image" src="<?php echo $postimageurl; ?>" alt="<?php the_title() ?>" /></a>
            <?php } else { ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><img class="front-image" src="<?php bloginfo('template_url'); ?>/images/soccer.jpg" alt="<?php the_title() ?>" /></a>
            <?php } ?>
        
			<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>								
			<div class="post-meta">Posted on <?php the_time('F j, Y'); ?> in: <?php the_category(', '); ?><span class="sep">|</span><?php comments_popup_link('Post Comment', '1 Comment', '% Comments') ?>                </div>
			<?php if ($theme_options['cp_tweetmeme']) { ?>
            <div class="tweetmeme_button">
                <script type="text/javascript">tweetmeme_url = '<?php the_permalink(); ?>';</script>
                <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
            </div>
            <?php } ?>
			<div class="post-content">
				<?php the_content('read more &raquo;'); ?>
			</div>
		</div><!-- .post -->
        <div class="post-spacer"></div>        
		<?php endwhile ?>
		<div class="navigation">
			<div class="navleft"><?php next_posts_link('&laquo; Older Posts', '0') ?></div>
			<div class="navright"><?php previous_posts_link('Newer Posts &raquo;', '0') ?></div>
		</div>
	<?php else : ?>
		<div id="post-0" class="post">
			<h2 class="post-title">Nothing Found</h2>
			<div class="post-content">
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
			</div>
		</div><!-- .post -->
	<?php endif; ?>
	</div><!-- #content -->
<?php get_sidebar() ?>
<?php get_footer() ?>