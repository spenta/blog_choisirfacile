<?php get_header(); ?>

<div id="content" class="narrowcolumn">
	<div id="top">
		<div class="content">
			<div class="gauche">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(292,250), array('class' => 'thumbnail')); ?></a>
				<div class="score_image"><img src="<?php echo get_bloginfo('template_directory') ?>/images/score.png" /></div>
			</div>
			<div class="droite">
				<div class="top">
				<?php if($_GET["page"]=='dynamique'){?>
					<div class="haut avec_fond">
						<div class="bouton"><a href="<?php $texte_bouton_lien = get_option('swt_bouton_lien'); echo $texte_bouton_lien;?>" class="icone"><?php $texte_bouton = get_option('swt_bouton'); echo $texte_bouton;?></a></div>
						<div class="texte">
							<h2>Vous ne savez pas quel PC choisir ?</h2>
							<p>En quelques minutes, répondez à notre questionnaire et nous trouvons le meilleur PC portable pour vos besoins !</p>
						</div>
					</div>
					
					<div class="bas">
						<h2 class="titre">Les caractéristiques qui comptent le plus pour vous</h2>
						<p class="soustitre">Comparez facilement les performances de cet ordinateur avec ce dont vous avez besoin.</p>
					</div>
					<?php } if($_GET["page"]=='statique'){ ?>
					<div class="haut sans_fond">
						<div class="bouton"><a href="<?php $texte_bouton_lien = get_option('swt_bouton_lien'); echo $texte_bouton_lien;?>" class="icone"><?php $texte_bouton = get_option('swt_bouton'); echo $texte_bouton;?></a></div>
					</div>

					<div class="bas">
						<h2 class="titre">Les caractéristiques importantes</h2>
						<p class="soustitre">Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam.</p>
					</div>
					<?php } ?>
				</div>
				<div class="bottom">
					<div class="bloc_config_haut">
						<table border="0">
							  <tr>
								<th scope="row"><div class="texte">Processeur</div><div class="bulle"><a href="#" class="tooltip"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bulle.png" alt="bulle" /><em><span></span>texte de l'infobulle</em></a></div></th>
								<td>Intel Celeron</td>
								<td>Procedente igitur</td>
								<td><a href="#" class="tooltip">Procedente igitur<em><span></span>texte de l'infobulle</em></a></td>
							  </tr>
							  <tr>
								<th scope="row"><div class="texte">Carte graphique</div><div class="bulle"><a href="#" class="tooltip"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bulle.png" alt="bulle" /><em><span></span>texte de l'infobulle</em></a></div></th>
								<td>GMA 5400</td>
								<td>Procedente igitur</td>
								<td><a href="#" class="tooltip">Procedente igitur<em><span></span>texte de l'infobulle</em></a></td>
							  </tr>
							  <tr>
								<th scope="row"><div class="texte">Taille de l'écran (pouces)</div><div class="bulle"><a href="#" class="tooltip"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bulle.png" alt="bulle" /><em><span></span>texte de l'infobulle</em></a></div></th>
								<td>15.6</td>
								<td>Procedente igitur</td>
								<td><a href="#" class="tooltip">Procedente igitur<em><span></span>texte de l'infobulle</em></a></td>
							  </tr>
							  <tr>
								<th scope="row"><div class="texte">Mémoire vive (Mo)</div><div class="bulle"><a href="#" class="tooltip"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bulle.png" alt="bulle" /><em><span></span>texte de l'infobulle</em></a></div></th>
								<td>2048</td>
								<td>Procedente igitur</td>
								<td><a href="#" class="tooltip">Procedente igitur<em><span></span>texte de l'infobulle</em></a></td>
							  </tr>
							  <tr>
								<th scope="row"><div class="texte">Poids (kg)</div><div class="bulle"><a href="#" class="tooltip"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bulle.png" alt="bulle" /><em><span></span>texte de l'infobulle</em></a></div></th>
								<td>2.64</td>
								<td>Procedente igitur</td>
								<td><a href="#" class="tooltip">Procedente igitur<em><span></span>texte de l'infobulle</em></a></td>
							  </tr>
							  <tr>
								<th scope="row"><div class="texte">Disque dur (Go)</div><div class="bulle"><a href="#" class="tooltip"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bulle.png" alt="bulle" /><em><span></span>texte de l'infobulle</em></a></div></th>
								<td>250</td>
								<td>Procedente igitur</td>
								<td><a href="#" class="tooltip">Procedente igitur<em><span></span>texte de l'infobulle</em></a></td>
							  </tr>
						</table>
					</div>
					<div class="partage">
						<ul>
							<li>Partager cette fiche produit :</li>
							<li><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
							<li><a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php">Partager</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></li>
						</ul>
					</div>				
				</div>

			</div>
		</div>
	</div>
	<div id="bottom">
		<div class="content">
			<div class="banner_top">
			<h3>Nous vous proposons</h3>
			<div class="bloc">
				<div class="img">
					<div class="img_1"><img src="wp-content/themes/choisirfacile_theme/images/exemple_ordi.jpg" height="60px" width="66px" /></div>
					<div class="img_2"><img src="wp-content/themes/choisirfacile_theme/images/exemple_logo.jpg" height="61px" width="68px" /></div>
				</div>
				<p class="prix">286,99 €</p>
				<div class="bouton"><a href="#">Acheter</a></div>
			</div>
			<div class="separation"></div>
			<div class="bloc">
				<div class="img">
					<div class="img_1"><img src="wp-content/themes/choisirfacile_theme/images/exemple_ordi.jpg" height="60px" width="66px" /></div>
					<div class="img_2"><img src="wp-content/themes/choisirfacile_theme/images/exemple_logo.jpg" height="61px" width="68px" /></div>
				</div>
				<p class="prix">286,99 €</p>
				<div class="bouton"><a href="#">Acheter</a></div>
			</div>
			<div class="separation"></div>
			<div class="bloc">
				<div class="img">
					<div class="img_1"><img src="wp-content/themes/choisirfacile_theme/images/exemple_ordi.jpg" height="60px" width="66px" /></div>
					<div class="img_2"><img src="wp-content/themes/choisirfacile_theme/images/exemple_logo.jpg" height="61px" width="68px" /></div>
				</div>
				<p class="prix">286,99 €</p>
				<div class="bouton"><a href="#">Acheter</a></div>
			</div>
			<div class="separation"></div>
			<div class="bloc">
				<div class="img">
					<div class="img_1"><img src="wp-content/themes/choisirfacile_theme/images/exemple_ordi.jpg" height="60px" width="66px" /></div>
					<div class="img_2"><img src="wp-content/themes/choisirfacile_theme/images/exemple_logo.jpg" height="61px" width="68px" /></div>
				</div>
				<p class="prix">286,99 €</p>
				<div class="bouton"><a href="#">Acheter</a></div>
			</div>
			<div class="separation"></div>
			<div class="bloc">
				<div class="img">
					<div class="img_1"><img src="wp-content/themes/choisirfacile_theme/images/exemple_ordi.jpg" height="60px" width="66px" /></div>
					<div class="img_2"><img src="wp-content/themes/choisirfacile_theme/images/exemple_logo.jpg" height="61px" width="68px" /></div>
				</div>
				<p class="prix">286,99 €</p>
				<div class="bouton"><a href="#">Acheter</a></div>
			</div>
						<div class="clear"></div>
		</div>
		
<!--        <div id="container">  
            <ul class="menu">  
                <li id="fiche" class="active">Fiche détaillée</li>  
                <li id="voir">Voir toutes les offres</li>  
                <li id="avis_expert">Avis d'expert</li>
				<li id="avis_client">Avis de clients</li>
            </ul>  
            <span class="clear"></span>  
            <div class="content fiche">  
                <h3>Description de <php the_title(); ?></h3>  
				<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
				<div class="table"></div>
            </div>  
            <div class="content voir">  
                <h3>Titre 2</h3>  
				<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
				<div class="table"></div>
            </div>  
            <div class="content avis_expert">  
                <h3>Titre 3</h3>  
				<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
				<div class="table"></div>

            </div>
            <div class="content avis_client">  
                <h3>Titre 4</h3>  
				<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
				<div class="table"></div>
            </div>
        </div>-->
        <script type="text/javascript" src="wp-content/themes/choisirfacile_theme/js/domtab.js"></script>
			<div id="id_container">
				<div class="container">
								<ul class="menu_bottom">
									<li><a href="#fiche">Fiche détaillée</a></li>
									<li><a href="#voir">Voir toutes les offres</a></li>
									<li><a href="#avis_expert">Avis d'expert</a></li>
									<li><a href="#avis_client">Avis de clients</a></li>
								</ul>
					<span class="clear"></span>  
					<div class="content fiche">
						<h2><a name="fiche" id="fiche">Description de <?php the_title(); ?></a></h2>  
						<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
						<div class="table">
							<table border="0" class="gauche">
								  <tr>
									<th colspan="2" scope="col" class="title">Caractéristiques système</th>
								  </tr>
								  <tr>
									<th scope="row">Processeur</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Mémoire vive (Mo)</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Disque dur (Go)</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Système d'exploitation</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
							</table>
							
							<table border="0" class="droite">
								  <tr>
									<th colspan="2" scope="col" class="title">Caractéristiques système</th>
								  </tr>
								  <tr>
									<th scope="row">Processeur</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Mémoire vive (Mo)</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Disque dur (Go)</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Système d'exploitation</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
							</table>
							
							<table border="0" class="gauche">
								  <tr>
									<th colspan="2" scope="col" class="title">Caractéristiques système</th>
								  </tr>
								  <tr>
									<th scope="row">Processeur</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Mémoire vive (Mo)</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Disque dur (Go)</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
								  <tr>
									<th scope="row">Système d'exploitation</th>
									<td>Ardeo, mihi credite</td>
								  </tr>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					<div class="content voir">
						<h2><a name="voir" id="voir">Titre 2</a></h2>  
						<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
						<div class="table"></div>
						<div class="clear"></div>
					</div>
					<div class="content avis_expert">
						<h2><a name="avis_expert" id="avis_expert">Titre 3</a></h2>  
						<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
						<div class="table"></div>
						<div class="clear"></div>
					</div>
					<div class="content avis_client">
						<h2><a name="avis_client" id="avis_client">Titre 4</a></h2>  
						<div class="text_intro">Ardeo, mihi credite, Patres conscripti (id quod vosmet de me existimatis et facitis ipsi) incredibili quodam amore patriae, qui me amor et subvenire olim impendentibus periculis maximis cum dimicatione capitis, et rursum, cum omnia tela undique esse intenta in patriam viderem, subire coegit atque excipere unum pro universis. Hic me meus in rem publicam animus pristinus ac perennis cum C. Caesare reducit, reconciliat, restituit in gratiam.</div>
						<div class="table"></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
	</div>
		
	</div>
<!--	<php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<php the_ID(); ?>">
			<h2><php the_title(); ?></h2>
			<div class="entry">
				<php the_content('<p class="serif">Lire le reste de cette page &raquo;</p>'); ?>
				<php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		<php edit_post_link('Modifier cette page.', '<p>', '</p>'); ?>
	 <php endwhile; endif; ?>-->
	
</div>

						<div class="clear"></div>
<?php get_footer(); ?>