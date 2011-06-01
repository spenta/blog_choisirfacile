<?php get_header(); ?>

<div id="bloc_titre">
	<h1>Blog</h1>
</div>
<div id="rond_haut"></div>
<div id="content_all">
	<div id="content" class="widecolumn">
	<?php if (have_posts()) : ?>
	
	<?php if (have_posts()) : ?>		
		<?php $post = $posts[0]; ?>		
		<?php if (is_category()) { ?>
			<h2 class="pagetitle">Catégorie <?php single_cat_title(); ?></h2>
		<?php } elseif( is_tag() ) { ?> 
			<h2 class="pagetitle">Mot-clef <?php single_tag_title(); ?></h2> 
		<?php } elseif (is_day()) { ?>
			<h2 class="pagetitle">Archive pour <?php the_time('j F Y'); ?></h2>
		<?php } elseif (is_month()) { ?>
			<h2 class="pagetitle">Archive pour <?php the_time('F Y'); ?></h2>
		<?php } elseif (is_year()) { ?>
			<h2 class="pagetitle">Archive pour <?php the_time('Y'); ?></h2>
		<?php } elseif (is_author()) { ?>
			<h2 class="pagetitle">Archive par auteur </h2>
		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2 class="pagetitle">Archives du blog </h2>
		<?php } ?>
	<?php endif; ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="post" class="<?php the_ID(); ?>">
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<div class="content_post">
				<div class="info">
					<p class="posted_time">Posted by <?php the_author() ?> <?php the_time('F j, Y') ?></p><p class="comment"><?php comments_popup_link('Pas de commentaires &#187;', '1 Commentaire &#187;', '% Commentaires &#187;', 'comm'); ?></p>
				</div>
				<div id="texte">
					<?php the_excerpt(); ?>
					<p class="more"><a href="<?php the_permalink() ?>">Lire la suite de l'article &raquo;</a></p>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags('<p>Mots-clefs&nbsp;: ', ', ', '</p>'); ?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	<?php else : ?>
	
		<h2 class="center">Aucun article trouvé. Essayer une autre recherche ?</h2>
		<?php get_search_form(); ?>
		
	<?php endif; ?>
		<div class="navigation">

        <?php

            include('includes/wp-pagenavi.php');

            if(function_exists('wp_pagenavi')) { wp_pagenavi(); }

        ?>

		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<div id="rond_bas"></div>
<?php get_footer(); ?>