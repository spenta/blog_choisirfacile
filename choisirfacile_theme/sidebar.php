<div id="sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			 
		<li>
			<?php get_search_form(); ?>
		</li>

		 
		<!--<li><h2>Auteur</h2>
			<p>Une petite description de vue. Pas un roman... juste un apercu !</p>
		</li>
		-->

		<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?> 
		<li> 
			<?php if (is_404()) { ?>
			<?php } elseif (is_category()) { ?>
				<p>Vous vous trouvez dans les archives de la catégorie <?php single_cat_title(''); ?>.</p>
			<?php } elseif (is_day()) { ?>
				<p>Vous vous trouvez dans les archives du blog <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> pour la journée du <?php the_time('l j F Y'); ?>.</p>
			<?php } elseif (is_month()) { ?>
				<p>Vous vous trouvez dans les archives du blog <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> pour <?php the_time('F Y'); ?>.</p>
			<?php } elseif (is_year()) { ?>
				<p>Vous vous trouvez dans les archives du blog <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> pour l'année <?php the_time('Y'); ?>.</p>
			<?php } elseif (is_search()) { ?>
				<p>Vous avez lancé la recherche <strong>'<?php the_search_query(); ?>'</strong> dans les archives du blog  <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> . Si vous ne trouvez rien dans ces résultats, essayez l'un de ces liens.</p>
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<p>Vous vous trouvez dans les archives du blog <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a>.</p>
			<?php } ?>
		</li> 
		<?php }?> 

		<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

		<li><h2>Archives</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>

		<?php wp_list_categories('orderby=order&hierarchical=0&exclude=12$&show_count=1&title_li=<h2>Catégories</h2>');  ?>

		<?php if ( is_home() || is_page() ) { ?>
			<?php wp_list_bookmarks(); ?>

			<li><h2>Méta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="Cette page valide en XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML valide</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Propulsé par WordPress, plate-forme de publication personnelle à la pointe de la sémantique.">WordPress</a></li>
					<li><a href="http://wordpress-fr.net/" title="Communauté francophone des CMS libres WordPress et WordPres MU.">WordPress Francophone</a></li>
					<?php wp_meta(); ?>
				</ul>
			</li>
		<?php } ?>
		
		<?php endif; ?> 
	</ul>
	
	<div class='featbox'>
	<div class='feedlist'>
	<ul>		
		<li><a href="<?php $yout = get_option('clyp_yout'); echo ($yout); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube.png" title="Youtube" alt="Youtube"/></a></li>
		<li><a href="http://twitter.com/<?php $twit = get_option('clyp_twit'); echo ($twit); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" title="Twitter" alt="Twitter"/></a></li>
		<li><a href="<?php $face = get_option('clyp_face'); echo ($face); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" title="Facebook" alt="Facebook"/></a></li>   
		<li><a href="<?php bloginfo('rss2_url'); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" title="subscribe" alt="RSS"/></a></li>
		<li><a href="http://www.digg.com/submit?phase=2&amp;url=<?php bloginfo('siteurl');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/digg.png" title="Digg" alt="Digg"/></a></li>
	</ul>
	</div>
	</div>
</div>



