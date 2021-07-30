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
define( 'DB_NAME', 'briefwordpress' );

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
define( 'AUTH_KEY',         '1KY81T Og^bWabD6,mi3)wq&[Ge}Aso5zJeI;<1X6<5nVQrGhzwRCPvmCuy`,w 8' );
define( 'SECURE_AUTH_KEY',  'U.O_u+ =cJ?= coWvGr(Et(@mfj!X1FRr[dGG-{+Lc@8fzTRN3{*gakH3ln5R<2m' );
define( 'LOGGED_IN_KEY',    'h,6z?f5$Bw:J!n?3{U GcphWu8Z?-OjC^H l/VFm;%+^ngy8Xl#wLI9Q<W`;.>b,' );
define( 'NONCE_KEY',        'v BYOc9!=BTBe|=iTy^,EHGqQdmj/%`2w;vEG_o|M|M_w)EHC[hx}bP!HVz.~i9z' );
define( 'AUTH_SALT',        'BVzD4PNlhBZ%DN;Qj[}[W*5_D5XP1M*c 3f)fBvK#7P*|p~wBXfQ*vDIe#zl(!`,' );
define( 'SECURE_AUTH_SALT', '6s[(St~4(8:M0NI. J1v}nbbXybg <Uc&(n8^hU~W`}5~>A8Ispyk7/*E*{nA-4(' );
define( 'LOGGED_IN_SALT',   'Q{4pqyCT*<Z kL6r>Hj#9E6S^k}rvM?,##m!69-TAd83]`+*4%PzyApempI/1`}*' );
define( 'NONCE_SALT',       'j(3fPj_X5AJk>UjpxWKi2#~M#lvTcB@RInQ*XbXh;0ih,Ov97`9xPWH#pc|C!I%t' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
