<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/all.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/comments.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/script_page.js"></script>
	<!--[if lte IE 7]><link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/ie7.css" type="text/css" media="screen" /><![endif]-->

<?php 
	if((is_home())or(is_single())or(is_category())or(is_archive())or(is_search())){
?>
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/article.css" type="text/css" media="screen" />
<?php
	}
?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
	<?php wp_head(); ?>
</head>

<body>
	<div id="page">
		<div id="header">
			<div id="headerimg">
				<div id="logo">
					<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
					<div class="description"><?php bloginfo('description'); ?></div>
				</div>
				<div id="droite">
				<div id="sociaux">
							<ul>
								<li><a href="#" target="_blank"><img src="<?php echo get_bloginfo('template_directory') ?>/images/twitter.png" /></a></li>
								<li><a href="#" target="_blank"><img src="<?php echo get_bloginfo('template_directory') ?>/images/facebook.png" /></a></li>
							</ul>
					</div>
					<div id="menu">
						<?php wp_nav_menu( array('menu' => 'Menu site'));?>
				
					</div>

				</div>
			</div>
		</div>	