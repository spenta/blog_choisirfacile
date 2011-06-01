<div>
	<div <?php if (get_option('swt_activer_fond') == true){echo "id='bloc_1_fond'";}?><?php if (get_option('swt_activer_fond') == false){echo "id='bloc_1_sans_fond'";}?>>
		<h1><?php $titre_bloc1 = get_option('swt_titre'); echo $titre_bloc1;?></h1>
		<div><?php $texte_bloc1 = get_option('swt_texte'); echo $texte_bloc1;?></div>
		<p><?php $lien_bloc1 = get_option('swt_lien'); echo $lien_bloc1;?></p>
	</div>
	<div <?php if (get_option('swt_activer_fond_bloc2') == true){echo "id='bloc_2_fond'";}?><?php if (get_option('swt_activer_fond_bloc2') == false){echo "id='bloc_2_sans_fond'";}?>>
		<h1><?php $titre_bloc2 = get_option('swt_titre_bloc2'); echo $titre_bloc2;?></h1>
		<div><?php $texte_bloc2 = get_option('swt_texte_bloc2'); echo $texte_bloc2;?></div>
		<div><?php $lien_bloc2 = get_option('swt_lien_bloc2'); echo $lien_bloc2;?></div>
	</div>
	<div <?php if (get_option('swt_activer_fond_bloc3') == true){echo "id='bloc_3_fond'";}?><?php if (get_option('swt_activer_fond_bloc3') == false){echo "id='bloc_3_sans_fond'";}?>>
	<h1><?php $titre_bloc3 = get_option('swt_titre_bloc3'); echo $titre_bloc3;?></h1>
	<div></div>
	<div><div><?php $lien_bloc3 = get_option('swt_lien_bloc3'); echo $lien_bloc3;?></div></div>
	</div>
</div>
<div>
	<div></div>
	<div></div>
</div>