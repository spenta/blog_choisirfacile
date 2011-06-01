<?php get_header(); ?>

<div id="bloc_titre">
	<h1>Recherche</h1>
</div>
<div id="rond_haut"></div>
<div id="content_all">
	<div id="content" class="widecolumn">
	<?php if (have_posts()) : ?>
	
		<h2 class="pagetitle">Résultats de recherche</h2>
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