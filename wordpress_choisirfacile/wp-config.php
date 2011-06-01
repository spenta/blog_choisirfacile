<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db_b733b207');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'user_b733b207');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'vR66@bG(XJixQR');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', '10.194.111.8');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's8)+[`j/~xQ04x`VWb|k:9mS[61r%>gP71TIi;0ra._U4[|tlK@*dKl-]yY=0-8.'); 
define('SECURE_AUTH_KEY',  '+i$Ry=n31EtPlQxAy,<~Nw.y[U~84}& g8CT+bnX^4-3TQhC8i=aW5*(KOE).yI&'); 
define('LOGGED_IN_KEY',    '8c{|pv5DCEJHn)KE.w|,?Nwxj%&{QW5/8 WeR!/m5$Y4v<O;8vsF]=`RFfc+ak{a'); 
define('NONCE_KEY',        'IW:uU_P>|[|T>9sL99c*MKtqk1c/Yj<@;5|sA^ _ZJoVdt[+Rkx+WxGHS!j;FmCZ'); 
define('AUTH_SALT',        '! #{r)QsI#>!$IF-,5z<,m$*D~R}.WC7S/st=2FqZAErn;Vf-[okQCqu%tmF;.J$'); 
define('SECURE_AUTH_SALT', '<:}~Tt-]7:G_7W+`:V{c;UfMMMoEB8O+*ZN|ntSl!rdx%kWY]Tu0MtF/52C4AYZA'); 
define('LOGGED_IN_SALT',   '5Yxy1u-*uxMQM]t-}aIs9~fAxJu@F3~#,^SP$+|#@NQhA;|^$,yBD|$LLzXJ.4QB'); 
define('NONCE_SALT',       ']]oO5]b|ZI_]I#}6`s)-rL+YXQxaKMz?L<m-0M+:Y^`b+k$HGE_~JI}y2$}B0/F3'); 
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_choisirfacile';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
