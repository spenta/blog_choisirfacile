<?php

	$titre1 = get_option('swt_titre_bloc1');
	$titre2 = get_option('swt_titre_bloc2');
	$titre3 = get_option('swt_titre_bloc3');
	$titre4 = get_option('swt_titre_bloc4');
	$titre5 = get_option('swt_titre_bloc5');
	$lien_bloc_1 = get_option('swt_lien_bloc1');
	$lien_bloc_2 = get_option('swt_lien_bloc2');
	$lien_bloc_3 = get_option('swt_lien_bloc3');
	$lien_bloc_4 = get_option('swt_lien_bloc4');
	$lien_bloc_5 = get_option('swt_lien_bloc5');
	$image1 = get_option('swt_image_bloc4');
	$image2 = get_option('swt_image_bloc5');
?>
<div class="content">		
	<?php if (get_option('swt_titre') == 'hide') { ?><?php { echo ''; } ?><?php } else { 
	?>
    	<div>
            <div class="article <?php if (get_option('swt_activer_fond') == true){echo "article_home_3";}?><?php if (get_option('swt_activer_fond') == false){echo "article_home_3_sans_fond";}?>">
				<?php query_posts("p=".$titre1.""); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div>
					<h1><?php the_title(); ?></h1>
					<?php the_content_limit(150,$lien_bloc_1); ?>
				</div>
				<?php
					endwhile;
					endif;
				?>
            </div>
            
            <div class="separateur_article_home_3"></div>
            <div class="article <?php if (get_option('swt_activer_fond_bloc2') == true){echo "article_home_3";}?><?php if (get_option('swt_activer_fond_bloc2') == false){echo "article_home_3_sans_fond";}?>">
				<?php query_posts("p=".$titre2.""); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div>
					<h1><?php the_title(); ?></h1>
					<?php the_content_limit(150,$lien_bloc_2); ?>
				</div>
				<?php
					endwhile;
					endif;
				?>
            </div>
            
            <div class="separateur_article_home_3"></div>
            
            <div class="article <?php if (get_option('swt_activer_fond_bloc3') == true){echo "article_home_3";}?><?php if (get_option('swt_activer_fond_bloc3') == false){echo "article_home_3_sans_fond";}?>">
				<?php query_posts("p=".$titre3.""); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div>
					<h1><?php the_title(); ?></h1>
					<?php the_content_limit(150,$lien_bloc_3); ?>
				</div>
				<?php
					endwhile;
					endif;
				?>
            </div>
        </div>
        <div>
        	<div class="article2 article_home_2">
            	<img class="image_article_home_2" src="<?php echo $image1; ?>" height="177px" width="124px" />
                <div class="txt_aticle_home_2">
					<?php query_posts("p=".$titre4.""); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div>
						<h1><?php the_title(); ?></h1>
						<?php the_content_limit(150,$lien_bloc_4); ?>
					</div>
					<?php
						endwhile;
						endif;
					?>
                </div>
            </div>
            <div class="separateur_article_home_2"></div>
            <div class="article2 article_home_2">
				<img class="image_article_home_2" src="<?php echo $image2; ?>" height="190px" width="227px" />
				<div class="txt_aticle_home_2">
					<?php query_posts("p=".$titre5.""); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div>
						<h1><?php the_title(); ?></h1>
						<?php the_content_limit(150,$lien_bloc_5); ?>
					</div>
					<?php
						endwhile;
						endif;
					?>
				</div>
				
			</div>
        </div>
    	
    <?php 
	} ?>
</div>