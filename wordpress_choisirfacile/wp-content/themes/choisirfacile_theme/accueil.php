<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

<?php

    /*
     * This example will work with WordPress 2.7
     */

    /*
     * register with hook 'wp_print_styles'
     */
    add_action('wp_print_styles', 'add_my_stylesheet');

    /*
     * Enqueue style-file, if it exists.
     */

    function add_my_stylesheet() {
        $myStyleUrl = 'http://testwordpress.lanouvelle-r.com/wp-content/themes/choisirfacile_theme/style.css';
            wp_register_style('myStyleSheets', $myStyleUrl);
            wp_enqueue_style( 'myStyleSheets');
    }

?>

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

	<div id="contenu">
	
    	<div id="haut">
            <div id="titre">
                <p>Choisir Facile vous aide à trouver facilement le PC qu'il vous faut. C'est GRATUIT, OBJECTIF et RAPIDE</p>
            </div>
            <div id="banniere">
                <div id="images" class="image_1">
                	<div id="image">
                    	<img src="<?php echo get_bloginfo('template_directory') ?>/images/image_index1.png" />
					</div>
                    <div id="information">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/images/numero_1.png" />
                        <p>Profitez de nos conseils</p>                    
                    </div>
                    <div id="sous_information">
                        <p>Ça ne prend que deux minutes</p>
                    </div>				
				</div>

                <div id="images" class="image_2">
                	<div id="image">
                    	<img src="<?php echo get_bloginfo('template_directory') ?>/images/image_index2.png" />
                    </div>
                    <div id="information">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/images/numero_2.png" />
                        <p>Répondez à nos questions</p>                    
                    </div>
                    <div id="sous_information">
                    	<p>Ils sont taillés pour vos besoins</p>
                    </div>
                </div>
				
                <div id="images" class="image_3">
                	<div id="image">
                    	<img src="<?php echo get_bloginfo('template_directory') ?>/images/image_index3.png" />
                    </div>
                    <div id="information">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/images/numero_3.png" />
                        <p>Choisissez la meilleure affaire</p>                    
                    </div>
                    <div id="sous_information">
                    	<p>Nous sommes 100% indépendants</p>
                    </div>
                </div>
            </div>
			
			
			
            <div id="separateur"></div>
			
            <div id="bouton">
            	<p><a href="<?php $texte_bouton_lien = get_option('swt_bouton_lien'); echo $texte_bouton_lien;?>"><?php $texte_bouton = get_option('swt_bouton'); echo $texte_bouton;?></a></p>
            </div>
		 </div>
		 
		 
		 
		
		 
         <div id="bas">
				<?php if (get_option('swt_titre') == 'hide') { ?><?php { echo ''; } ?><?php } else { 
				?>
					<div id="bloc_du_haut">
						<div id="bloc_3" <?php if (get_option('swt_activer_fond') == true){echo "class='bloc_avec_fond'";}?><?php if (get_option('swt_activer_fond') == false){echo "class='bloc_sans_fond'";}?>>
						
							<?php query_posts("p=".$titre1.""); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div id="content_bloc_3">
								<h1><?php the_title(); ?></h1>
								<?php the_content_limit(150,$lien_bloc_1); ?>
							</div>
							<?php
								endwhile;
								endif;
							?>
						</div>
						
						<div id="separateur_bloc"></div>
						<div id="bloc_3" <?php if (get_option('swt_activer_fond_bloc2') == true){echo "class='bloc_avec_fond'";}?><?php if (get_option('swt_activer_fond_bloc2') == false){echo "class='bloc_sans_fond'";}?>>
						
							<?php query_posts("p=".$titre2.""); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div id="content_bloc_3">
								<h1><?php the_title(); ?></h1>
								<?php the_content_limit(150,$lien_bloc_2); ?>
							</div>
							<?php
								endwhile;
								endif;
							?>
						</div>
						
						<div id="separateur_bloc"></div>
						
						<div id="bloc_3" <?php if (get_option('swt_activer_fond_bloc3') == true){echo "class='bloc_avec_fond'";}?><?php if (get_option('swt_activer_fond_bloc3') == false){echo "class='bloc_sans_fond'";}?>>
						
							<?php query_posts("p=".$titre3.""); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div id="content_bloc_3">
								<h1><?php the_title(); ?></h1>
								<?php the_content_limit(150,$lien_bloc_3); ?>
							</div>
							<?php
								endwhile;
								endif;
							?>
						</div>
					</div>
										
					<div id="bloc_du_bas">
						<div id="bloc_2">
							<div id="image_bloc_2">
								<img src="<?php echo $image1; ?>" />
							</div>
							<div id="content_bloc_2">
								<?php query_posts("p=".$titre4.""); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<h1><?php the_title(); ?></h1>
									<?php the_content_limit(150,$lien_bloc_4); ?>
								<?php
									endwhile;
									endif;
								?>
							</div>
						</div>
						
						<div id="separateur_bloc_2"></div>
						
						<div id="bloc_2">
							<div id="image_bloc_2">
								<img src="<?php echo $image2; ?>" />
							</div>
							<div id="content_bloc_2">
								<?php query_posts("p=".$titre5.""); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<h1><?php the_title(); ?></h1>
									<?php the_content_limit(150,$lien_bloc_5); ?>
								<?php
									endwhile;
									endif;
								?>
							</div>
						</div>
				<?php 
				} ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>