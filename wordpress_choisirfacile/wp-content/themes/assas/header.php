<?php $theme_options = get_option('wktheme'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="icon" href="<?php echo $theme_options['cp_favicon']; ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $theme_options['cp_favicon']; ?>" type="image/x-icon" /> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/grid.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/colorthemes/<?php echo $theme_options['cp_blogcolortheme']; ?>.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Comments RSS Feed" href="<?php bloginfo('comments_rss2_url') ?>"  />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/jquery.nivo.slider.js" type="text/javascript"></script>
<?php if ($theme_options['cp_trackingcode']) { ?>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("<?php echo $theme_options['cp_trackingcode']; ?>");
		pageTracker._trackPageview();
	} catch(err) {}
</script>
<?php } ?>
<script type="text/javascript">
$(document).ready(function(){
	<?php if (((is_home() && $theme_options["cp_slider_show"] == 'frontpage') || $theme_options["cp_slider_show"] == 'everywhere') && $theme_options["cp_slider_show"] != 'nowhere') { ?>
	//slider settings
	$('#slider').nivoSlider({
		effect:'<?php echo $theme_options["cp_slider_effect"] ?>',
		slices: 12,
		animSpeed: 500,
		pauseTime: <?php echo ($theme_options["cp_slider_time"] * 1000) ?>,
		directionNav:true,
		directionNavHide:true,
		controlNav:true,
		pauseOnHover:true,
		manualAdvance:false,
		beforeChange: function(){},
		afterChange: function(){}
	});
	<?php } ?>
	//menu hover effect
	$('#menu .children').append('<div class="menubg"></div>');
	$('#menu .menubg').animate({
		opacity: 0.8
	}, 0);
	$('#menu li').hover(
		function(){
			$('.children',$(this)).show('fast');
		},
		function(){
			$('.children',$(this)).hide('fast');
		}
	);
	$('img').load(function() {
		$('#wrapper').css('padding-bottom',$('#footer-container').height()+'px');
	});
});
</script>

</head>
<body>
<div id="top_bg">
	<?php if ($theme_options['cp_bloglogo']) { ?>
		<div id="logo-img">
			<img src="<?php echo $theme_options['cp_bloglogo']; ?>" />
		</div>
	<?php } ?>
	<div id="logo-text">
		<?php if (is_single() OR is_page()) { ?>
			<h2 id="logo"><a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name'); ?>"><span><?php bloginfo('name'); ?></span></a></h2>
			<div id="description"><?php bloginfo('description') ?></div>
		<?php } else { ?>
			<h1 id="logo"><a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
			<div id="description"><?php bloginfo('description') ?></div>
		<?php }	?>
</div>
<div id="header_bg"></div>
<div id="topline_bg"></div>
<div id="container_bg"></div>
<?php if (((is_home() && $theme_options["cp_slider_show"] == 'frontpage') || $theme_options["cp_slider_show"] == 'everywhere') && $theme_options["cp_slider_show"] != 'nowhere') { ?>
	<div id="slider_shadow"></div>
<?php } ?>
<div id="fullwrapper">
<div id="wrapper">
	<div id="menu">
		<?php wp_page_menu('title_li=&sort_column=menu_order&depth=2&show_home=1'); ?>
	</div>
	<div id="header">
    	<div id="subheader">

            </div>
<?php $theme_options = get_option('wktheme'); ?>
<?php if ($theme_options['cp_ad1_path'] || $theme_options['cp_ad2_path'] || $theme_options['cp_ad3_path'] || $theme_options['cp_ad5_path']) { ?>
            <div id="ads468">
                <?php if ($theme_options['cp_ad5_path']) { ?>
			<a href="<?php echo $theme_options['cp_ad5_url']; ?>" target="_BLANK" alt="<?php echo $theme_options['cp_ad5_url']; ?>"><img class="ads" src="<?php echo $theme_options['cp_ad5_path']; ?>" alt="<?php echo $theme_options['cp_ad5_url']; ?>" /></a>
		<?php } ?>
            </div>
    <?php } ?>
        </div>
        <?php if (((is_home() && $theme_options["cp_slider_show"] == 'frontpage') || $theme_options["cp_slider_show"] == 'everywhere') && $theme_options["cp_slider_show"] != 'nowhere') { ?>
        <div id="slider-container">
            <div id="slider">
                <?php if ($theme_options["cp_slider_cat"] && $theme_options["cp_slider_number"] > 0) {
                    query_posts( 'cat='.$theme_options["cp_slider_cat"].'&showposts=-1' );
                    if( have_posts() ) {
                        if ($theme_options['cp_slider_flag'] == 1) { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/colorthemes/<?php echo $theme_options['cp_blogcolortheme']; ?>.jpg" />
                        <?php } 
						$x = 0;
                        while( have_posts() && $x < $theme_options["cp_slider_number"] ) : the_post();
							$postimageurl = get_post_meta($post->ID, "post-img", true);
							if ($postimageurl) { ?>
								<a href="<?php echo $post->guid; ?>" alt="<?php echo esc_html($post->post_title); ?>"><img src="<?php echo $postimageurl; ?>" title="<?php echo esc_html($post->post_title); ?>" /></a>
								<?php $x++;
							}
                        endwhile;
                    }
                }
                else { ?>
                    <img src="<?php bloginfo('template_directory'); ?>/colorthemes/<?php echo $theme_options['cp_blogcolortheme']; ?>.jpg" />
                <?php }
				wp_reset_query();
				?>
            </div>
        </div>
        <div id="header-spacer"></div>
        <?php } ?>
	</div><!--  #header -->
	<div id="container">