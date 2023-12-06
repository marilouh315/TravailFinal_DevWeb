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
define( 'DB_NAME', '2023_heonmarilou' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'maril' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'maril' );

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
define( 'AUTH_KEY',         'AZzqil2yA`iTA63(=]T_|iTTK,1ui%C~z$8JIhLN5y[q> :q+GeB5-ds GcojIT[' );
define( 'SECURE_AUTH_KEY',  '{w-aoXqvfQk8!Wn7$:vZ.8oJmx4YDvnmiUm[|4+OU1!7xi_w&li)X<C6mOc}L`>|' );
define( 'LOGGED_IN_KEY',    '|;%^z636a02aCn{3,r^VErL.pQ.V2fG+!@.c^48P?=qDHEnd!M* sqI*I4(/K#c3' );
define( 'NONCE_KEY',        '9}ib%zo!3/kJg_S78vt|y{!6?FL2uKyG.9ba=>tn<dB|,;0dejDIxxBi(KF`w@j6' );
define( 'AUTH_SALT',        'wgfk%tt#)l3gEH4H8Cf>]t(5<$Ut9AD<:%j4f*oz&X)}#<1.4]d9z7?E2aRqIi=o' );
define( 'SECURE_AUTH_SALT', '-oD2N=[[?=.g)(c+POMbaV=6GV4/MO| r=G`:0|8.tx=qXcKyrxj_N.%^soHXqhi' );
define( 'LOGGED_IN_SALT',   'yo;/Uv`H -L2^`2!o3Q5c2tBWsZSK/Z>8;`6q/-)Ba|d1tsm71yW[_nr};r[wF?6' );
define( 'NONCE_SALT',       'Q1spvE|mm6E9,#1Ila2&}PXNW3@2`{g>EMaSC3Bb,lb`PS#e9N#!|EjOQf%bf).%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'maril_tp_';

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
