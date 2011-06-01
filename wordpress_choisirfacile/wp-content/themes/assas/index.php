<?php get_header() ?>

	<div class="container_12" style="margin-bottom: 40px;">

<div class="grid_3">
<img style="margin-right: 15px; float: left; margin-top: 8px;" src="http://img443.imageshack.us/img443/30/dashboard.png" alt="" />
<h3 style="clear: none; margin: 0px; margin-bottom: 20px; position: relative; display: inline;">Custom Admin Area</h3>
<p>Assas has admin panels with lots of custom options that will enable you to quickly and easily manage your website! You can easilly add thumbnails in posting. Its well-written documentation covers all of these options with comprehensive explanation!</p>
<a href="#" class="more-link">Read More <span>&rArr;</span></a>

</div>

<?php if (get_option('swttexte_simple') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/test_contenu.php'); } ?>
<?php if (get_option('swttext_simple2') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/test_contenu2.php'); } ?>

<div class="grid_3">
<img style="margin-right: 15px; float: left; margin-top: 8px;" src="http://img805.imageshack.us/img805/4286/honey.png" alt="" />
<h3 style="clear: none; margin: 0px; margin-bottom: 20px; position: relative; display: inline;">Premium Clean Design</h3>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal. Valid XHTML Strict 1.0 and WordPress 3.0 Supported!</p>
<a href="#" class="more-link">Read More <span>&rArr;</span></a>

</div>

<div class="grid_3">
<img style="margin-right: 15px; float: left; margin-top: 8px;" src="http://img576.imageshack.us/img576/2048/browsers.png" alt="" />
<h3 style="clear: none; margin: 0px; margin-bottom: 20px; position: relative; display: inline;">Works Everywhere</h3>
<p>Assas has solid and valid code. It displays fine in all major modern browsers. It has optimized code to load quicker and rank better in search engines! Furthermore, it uses CSS3 improvements that make it look even better in the newest browsers!</p>

<a href="#" class="more-link">Read More <span>&rArr;</span></a>


</div>

<div class="grid_3">
<img style="margin-right: 15px; float: left; margin-top: 8px;" src="http://img706.imageshack.us/img706/8406/blockst.png" alt="" />
<h3 style="clear: none; margin: 0px; margin-bottom: 10px; position: relative; display: inline;">Shortcodes &amp; Widgets</h3>
<p>Assas comes with over 10 custom shortcodes and pre-made classes including simple ones like columns, boxes, buttons and advanced ones like show/hide content toggler, tabbed content, accordion slider and image slider that you can put in posts or on pages!</p>

<a href="#" class="more-link">Read More <span>&rArr;</span></a>

</div>

</div>


<center>
<a href=""><img style="margin-top: 30px;" src="<?php bloginfo('template_directory'); ?>/images/working.png" alt="working" /></a>
</center>


<?php get_footer() ?>