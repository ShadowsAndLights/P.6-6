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
define( 'DB_NAME', 'projetvide' );

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
define( 'AUTH_KEY',         '-B|v^X$c<[b<&ttoANJ3MHs]?[PA*s4%*>9A&}( tR7OsORY#]jIki_+&Ea`#,X*' );
define( 'SECURE_AUTH_KEY',  '==S-,+d5AE&s}XPb_RF,IXZNBD[f7aVRABWg3)Wq|R7qdeVyxQlRvV`UGf1yR5of' );
define( 'LOGGED_IN_KEY',    '!].hW~EQcj@2X|:S^)@ (gGkYgBQqjP7%_NT9WCwWYQQjY^y.CcS[s9$~T[WB{#r' );
define( 'NONCE_KEY',        '1V/4aACxNr~lXg:qd$R31FE>RAP#DBJl}L6Y;#m|WGv1HmC%!8OX-1s7_|gxu`7g' );
define( 'AUTH_SALT',        'F,JD_ha(,EbX;jv6n[To}K[p~1E+F|:@&{WeufhikP=$ r1*XB,kk@I}$hQ{{Sqk' );
define( 'SECURE_AUTH_SALT', '!(jj8p~`er<i+NxcHdJFO>7d1P#wv,OWa0`ZZJCEuF5/BU14qvy=_X-kQ?:Y@0~;' );
define( 'LOGGED_IN_SALT',   'UV:*<oHuH1i!9gwX4EbeNw[Izp=:*^+TE&wuqQf3#Z25yifl AQNhJCuE2XYI<u=' );
define( 'NONCE_SALT',       'a^!n&9okfCfF1688VdG:(t0/;<W~X^=>y^^/QB7`a1KJT1?y:TC3#tM*Rk>TO-fu' );
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
