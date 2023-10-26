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
define( 'DB_NAME', 'ad_factory' );

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
define( 'AUTH_KEY',         '5-cDkgx@0?.}iFT-uNREoFT{@(1#O }5%gCyD=ck30|(f} @[2SFvmj9O aG;*]]' );
define( 'SECURE_AUTH_KEY',  'e1KLzuaN@4afU1$*|9zKZAHb1/L|PG9Ou]#/5HT1/1+i#25wgAU eW(t?B9`lB<B' );
define( 'LOGGED_IN_KEY',    '0ui^mgiFbFB~8%PoBEMvP[V!blBv}*eHE8`O4D}Dn&tpf$/GE6/X;R}f4CVy9bPq' );
define( 'NONCE_KEY',        '1KKwvS*T_;hctd(I?*.ViJ#6sG?jdF_Sm^+Z4DipNv 0_/NBb2V:x8/:!;e[FL4v' );
define( 'AUTH_SALT',        'n`LyX5YuL@EQK3nK<_Ts~U?<LzcCytke,;i!5sh^@v?8Hm7PRd?#N$q!4X9{^m8r' );
define( 'SECURE_AUTH_SALT', 'Mt2DAxyTRCEm.CTuhf8RZ,8}iObXJi**}# !s~~L@pRii@_7]~qg{oWI 1pT!Qru' );
define( 'LOGGED_IN_SALT',   'L?4n!Kv;;sj_u{~7C ?vG78$g(L; T8,LNoQX4P|4A%,VEnSX(u,SuAamrhlR)is' );
define( 'NONCE_SALT',       'LOF*nW{4Ya89NY&n`oM+6kKeMv|clE$o5yT-BM+m+!_o%pWreKKq*5v[O/z22b[6' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'adwpf_';

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
