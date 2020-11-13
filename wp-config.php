<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'topgiftsyear' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '-}wkuVW.Q:b9@c)&LG0mr4ls.,D8xP+]alGf.qjlAvLoIM64Q<PQHdf++N`hg80c' );
define( 'SECURE_AUTH_KEY',  '?Z._YBcgD(!Hy5@wAlh,9lm6M-E(4/hF|(CH,n&ns-Vm/#ai^u5z|f<3B=nMrC-]' );
define( 'LOGGED_IN_KEY',    'JB)<%_X~B*Vp7w9~E-P$C{R<wA>j;Gx_V]C&&r^hqPz$pB)H9Z};|o$mnsdU0t>Z' );
define( 'NONCE_KEY',        'D[& 4f1PBZO@ssK 8/k[APSh@nBpVx|NC{wm{ztHew& :)8qFGB2!5`/x_(m{7|=' );
define( 'AUTH_SALT',        'K/SCh8c.SU<5q]%EB5jO($UytXL>aqc(8L*+NLNxg`%X6q+DxSYKa6}h90n)[_Z!' );
define( 'SECURE_AUTH_SALT', 'zZhrRJ=_k<9;{7n=8SeErr0Di! kqv^`9;-5YFRsGP5kR(YX4e]3ybe]]Bk%Fr*r' );
define( 'LOGGED_IN_SALT',   'bO;5-;*pjJQEzkv:;^[]vC3$g-s<(c>tEwlz*UjbRRQ_y@I@u(;c4zfl$^?2~okd' );
define( 'NONCE_SALT',       '=w[~-(;V*yr@:@-WQ>nE^wkY$$IDVKutj>RNwIP8*7n]t=J)K7:xJ^(r(=Al|4,R' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'tgsy_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
