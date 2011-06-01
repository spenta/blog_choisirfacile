<?php get_header() ?>
<?php $theme_options = get_option('wktheme'); ?>
	<div id="content">
		<?php the_post(); ?>
		<div id="post-<?php the_ID() ?>" class="post">
			<?php $postimageurl = get_post_meta($post->ID, 'post-img', true);
            if ($postimageurl) {
            ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><img class="front-image" src="<?php echo $postimageurl; ?>" alt="Post Pic" width="570" height="270" /></a>
            <?php } else { ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><img class="front-image" src="<?php bloginfo('template_url'); ?>/images/soccer.jpg" alt="VIVA2010" width="570" height="270" /></a>
            <?php } ?>
			<div class="top-meta">
                <?php if ($theme_options['cp_tweetmeme']) { ?><div class="title-container"><?php } ?>
                    <h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>								
                    <div class="post-meta">Posted by <span class="author"><?php the_author_link(); ?></span> on <?php the_time('F j, Y'); ?> in: <?php the_category(', '); ?><span class="sep">|</span><?php comments_popup_link('Post Comment', '1 Comment', '% Comments') ?></div>
				<?php if ($theme_options['cp_tweetmeme']) { ?>
                </div>
                <div class="tweetmeme_button">
                    <script type="text/javascript">tweetmeme_url = '<?php the_permalink(); ?>';</script>
                    <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
                </div>
                <?php } ?>
            </div>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div><!-- .post -->
		<?php comments_template(); ?>		
	</div><!-- #content -->
<?php get_sidebar() ?>
<?php get_footer() ?>