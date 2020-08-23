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
define( 'DB_NAME', 'mon_cms' );
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
define( 'AUTH_KEY',         '6]_Ptz=Sp;-8.PYrto/B}ES9d>-bz;>c]m|i2+/Aek}Q7l:V&fiD6aZP]_p{;U!L' );
define( 'SECURE_AUTH_KEY',  '*e>;A6@;U?YwRM42M;v>DWWY3/j{NsLt`+o[YqqX#_4Bt ?3.am XYe?gs96ZyLp' );
define( 'LOGGED_IN_KEY',    'HLw6ktlaR2f*+w~{IL,ON@0/xCCQ<L]+_V9 -eKARWx99mm`Yx+(3LDYuy7,:/yk' );
define( 'NONCE_KEY',        'L?v)b%>AhEC+lo~l$)KF5~PQ<MadX $mh:.u@m_QZnF_rk;Fc/uWL*o s)TsW8ha' );
define( 'AUTH_SALT',        'n}#Ha5CcjM$9TdX1>gAeui>5lQWd@faT7%)!u&ka.WJ*0-fV]bll@t])&Kar5X]7' );
define( 'SECURE_AUTH_SALT', '}Nx)alU}<-z@uS>+kmcv>S8a=W,AQ3V~[X~ATkZI+`r9=6r^4pHB<IiK/?+HJJP~' );
define( 'LOGGED_IN_SALT',   'EQ+Pyn Bo+a?UqG%plY&1.RTW)lt8#YHh8H5b1qj<nVf+f@q~;ddK(S8wRN?QLx7' );
define( 'NONCE_SALT',       'XUsu[a;7jwcMv%1P)O=YhH4/5YFtOZ~CuIlKf0o|^5}GP.[u05Y1BUx_Ci$HHkg{' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
