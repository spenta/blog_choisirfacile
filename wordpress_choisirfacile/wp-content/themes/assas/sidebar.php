<div id="sidebar">	
	<?php $theme_options = get_option('wktheme'); ?>
    <?php if ($theme_options['cp_ad1_path'] || $theme_options['cp_ad2_path'] || $theme_options['cp_ad3_path'] || $theme_options['cp_ad4_path']) { ?>	
    <div class="sidepanel">
        <?php if ($theme_options['cp_ad1_path']) { ?>
			<a href="<?php echo $theme_options['cp_ad1_url']; ?>" target="_BLANK" alt="<?php echo $theme_options['cp_ad1_url']; ?>"><img class="ads" src="<?php echo $theme_options['cp_ad1_path']; ?>" alt="<?php echo $theme_options['cp_ad1_url']; ?>" /></a>
		<?php } ?>
        <?php if ($theme_options['cp_ad2_path']) { ?>
			<a href="<?php echo $theme_options['cp_ad2_url']; ?>" target="_BLANK" alt="<?php echo $theme_options['cp_ad2_url']; ?>"><img class="ads" src="<?php echo $theme_options['cp_ad2_path']; ?>" alt="<?php echo $theme_options['cp_ad2_url']; ?>" /></a>
		<?php } ?>
        <?php if ($theme_options['cp_ad3_path']) { ?>
			<a href="<?php echo $theme_options['cp_ad3_url']; ?>" target="_BLANK" alt="<?php echo $theme_options['cp_ad3_url']; ?>"><img class="ads" src="<?php echo $theme_options['cp_ad3_path']; ?>" alt="<?php echo $theme_options['cp_ad3_url']; ?>" /></a>
		<?php } ?>
        <?php if ($theme_options['cp_ad4_path']) { ?>
			<a href="<?php echo $theme_options['cp_ad4_url']; ?>" target="_BLANK" alt="<?php echo $theme_options['cp_ad4_url']; ?>"><img class="ads" src="<?php echo $theme_options['cp_ad4_path']; ?>" alt="<?php echo $theme_options['cp_ad4_url']; ?>" /></a>
		<?php } ?>
    </div>
    <?php } ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
    <?php endif; ?>
</div><!-- #sidebar -->