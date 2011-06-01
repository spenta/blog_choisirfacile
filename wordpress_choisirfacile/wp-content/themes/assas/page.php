<?php get_header() ?>
	<div id="content">

		<?php the_post() ?>

		<div id="post-<?php the_ID(); ?>" class="post">
			<h1 class="post-title"><?php the_title(); ?></h1>

			<div class="post-content">
				<?php the_content() ?>
			</div>

		</div><!-- .post -->
	</div><!-- #content -->

<?php get_sidebar() ?>

<?php get_footer() ?>