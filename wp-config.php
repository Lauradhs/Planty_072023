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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':@:`-Ig- ;#tpp^Vrs]Qnx!uq`uiJ2s-tou9:mK~ic-e3.zlNsUfN$CE{e&+j4E.' );
define( 'SECURE_AUTH_KEY',  '9nmF,DMox]QTWWvMg&mq.DqI8)|puIkVtxlD<lP}uOQ%C=9y=#X:_~Hqe{mmw,=p' );
define( 'LOGGED_IN_KEY',    '=B(lA0Qz0LL5ly`Sbdo-]jmFX,)_pj/IOUPp3&!qCxVW]#TGw#k}Bd};c#K^Y|3>' );
define( 'NONCE_KEY',        '~aY7>fxU9)M:qIo~2NUHIcKaoGFOVG|XzxdDRJ-%Gb?-E<[v=Ew(6KhW)i;nSb)5' );
define( 'AUTH_SALT',        ')@-U^/D9p#~[J8=j9`b=Jzv5p-2%t-`>^P#zj#$`<=8ZJvOF/+,9&gVM?4e:zS-K' );
define( 'SECURE_AUTH_SALT', 's}a5y-Uiz^ Wb(U#I`V!u!?^+t{`)Rq6UYt+q|]b(m3^<wIlu_2-6K(a*E@:*a.$' );
define( 'LOGGED_IN_SALT',   'PSFju+$fibkHLW%yidX{M;%gnnj;}.kuUg*luDVHT97,S#?Tcq7/1d,]+/*T3V/{' );
define( 'NONCE_SALT',       'q@`iD3*ZKf0sDa`n[fDO3~]Q3b.eZq|~/D/QqNUTwAoA=xXw@EjlAY]wDp/pF4C^' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
