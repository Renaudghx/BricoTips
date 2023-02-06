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
define( 'DB_NAME', 'bricotips' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')aY8^L(R9Hm~&pS[yc8rw>dgUd.zq.d)4Al{ OD>gOv7J(D~;*!imy3I3|Xv,c-r' );
define( 'SECURE_AUTH_KEY',  'r!1E4>xoPcUIIhKf]KP9{ddhOG9x&9N*NS8|bP1:YHU>A6iC_OG&LeEAq#EwFJFj' );
define( 'LOGGED_IN_KEY',    'x!i_Gtg/+[KWHXO};4ok8N85nI;~rA{]Dyw@n^b{AX*w~:t~:ZW~j-w^fX?5p!~x' );
define( 'NONCE_KEY',        'K%H*{~fTAzc #^GiGHCFGJyG:N{$.+t3/5x1SD)azM9(UZ}<d)TJJe( XI?X*Olb' );
define( 'AUTH_SALT',        'u^ko4Qc@qqWN)]vLv8z7DAqkebT|E|lx/kndnW}U:i/b--{?$!>2 dWm),R2Of$$' );
define( 'SECURE_AUTH_SALT', 'PQ $gPdwj^j&[!-qC([}T&<M,]:KI8-TQU58ix0C#K[7jnBvXcyLx_E1d-{UBkti' );
define( 'LOGGED_IN_SALT',   ';[QZ*7yG>.-YH:Ks/uHAa,8Ms/iq7sYN7yN~Pv@erjB$:Y6-6/;}IJc!<tu18Pm[' );
define( 'NONCE_SALT',       'u6fwQ<p{4aJZp^AF>E1hl`Z+=yI:iJ^]&0P/5|G$iijOOk5HFzfcy=8{>XVE10PW' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define ('QM_HIDE_CORE_ACTIONS', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
