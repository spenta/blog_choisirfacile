<?php get_header(); ?>

<?php if (get_option('swt_slider') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/slide.php'); } ?>

<div id="contentwrap">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

              <?php if ( has_post_thumbnail() ) { ?>
               <div class="time">
                <?php the_time('d.m'); ?>
                <span class="year">
                    <?php the_time('Y'); ?>
                </span>
                </div>
              <?php } ?>
				<div class="entry">
                <?php if ( function_exists( 'get_the_image' ) ) {
                get_the_image( array( 'custom_key' => array( 'post_thumbnail' ), 'default_size' => 'full', 'image_class' => 'alignleft', 'width' => '170', 'height' => '121' ) ); }
            ?>
					<?php the_content('Read More'); ?>
				</div>
			</div>
            <div class="post-bot"></div>

		<?php endwhile; ?>

		<div class="navigation">
        <?php
            include('includes/wp-pagenavi.php');
            if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
        ?>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
