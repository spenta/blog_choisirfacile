<div id="sidebar">

<?php if (get_option('swt_fcats') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/featured-cats.php'); } ?>

<?php if (get_option('swt_banners') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/banners.php'); } ?>

<?php if (get_option('swt_social') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/social.php'); } ?>

    <?php if (!function_exists('dynamic_sidebar')
	|| !dynamic_sidebar()) : ?>

    <div class="side-widget">
    <h3>Search</h3>
    <?php get_search_form(); ?>
    </div>

    <div class="side-widget">
    <h3>Pages</h3>
    <ul><?php wp_list_pages('title_li=&depth=1' ); ?></ul>
    </div>

    <div class="side-widget">
    <h3>Categories</h3>
    <ul>
    <?php wp_list_categories('title_li=&depth=1' ); ?>
    </ul>
    </div>

    <?php endif; ?>
</div>
</div>

<div id="sidebar2w">
<div id="sidebar2">

<div id="footer1">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>

    <div class="widget">
    <h3>Recent Posts</h3>
    <ul>
    <?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?>
    </ul>
    </div>


<?php endif; ?>
</div>

<div id="footer2">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>

    <div class="widget">
    <h3>Meta</h3>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
      <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
      <?php wp_meta(); ?>
    </ul>
    </div>

<?php endif; ?>
</div>

<div id="footer3">

<?php if (get_option('swt_flickr') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/flickr.php'); } ?>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>


<?php endif; ?>
</div>

<div id="footer4">

<?php if (get_option('swt_follow') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/follow.php'); } ?>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) : else : ?>


<?php endif; ?>
</div>
</div>
