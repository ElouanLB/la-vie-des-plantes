<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'la-vie-des-plantes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K?fNcdp1Rm1<F?#9c283NZB=?~Rq.6OOYL>rh0@5KI3%:E|4+W9!r x,>e5P#tFj' );
define( 'SECURE_AUTH_KEY',  'Z_,E^9WFK$qe?ruBm5ldx*+wD #&)89y{=;]mj0qq$31wn,Jb;NlR5?+EN>bZ;_Y' );
define( 'LOGGED_IN_KEY',    '>bcB6tPX=`/H(|7w(0[Y-1J-Au31-gF=H1(7-5A|wih`;4_nlZS!<ZDR(cy*R=iJ' );
define( 'NONCE_KEY',        'O pPZQjRo;i6mQttBMaL:4Gl(`*N]{qFV#cmE{8r@f<3KZMhg290_3_i5*Cuw/Sj' );
define( 'AUTH_SALT',        'q$SjmWh6.PC5-j6YcrfhIZ/h6U<@n=<$+DV~B`vF,a`{6457JzgP^soM|?#/`S?c' );
define( 'SECURE_AUTH_SALT', ' _gyw3R9i,6=;n-,Z4b>nw7%j!7M+^|9~Semu@z?1^dnFehw`$~6&`kVz&H^fyg5' );
define( 'LOGGED_IN_SALT',   '|qVT ra)V(%ckSD4lM<]:ynEC8UhL_&=`!/-IN!VZ#bbKGe]+z@@QfvY%I(;^8BD' );
define( 'NONCE_SALT',       '!D^k%`rr*a6qs]|(zAe_6RvV]`Yz*Ldvm$$e4rQ}Yg3vlsp>:3N$c%I-jxp- hq3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
