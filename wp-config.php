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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'Ziem2,vTQH.$ r!uO%5p=]IPFwLKl(Y(I%~+nqE?%]C]LQe<a<:<_d{oVieCSC5{' );
define( 'SECURE_AUTH_KEY',  '%BpS#fr5|H>U^G~VNm6)]1i->&2H}hYGa0#B8{ebn[W;{TY.N%y4o<Xa(md)cn}~' );
define( 'LOGGED_IN_KEY',    'IyV2!RT,;vm/_7lsP?cYKl/-RT3=#Wj8!B/xd*F^*N^guhs#gw3q&TN:x4LCmq}9' );
define( 'NONCE_KEY',        '@k[X)T>%A4x-A dY^txzVXj?=i]H>,w:NL[a$`Z h(8HOWk*AJA*zi2:Aeu+]m35' );
define( 'AUTH_SALT',        '/q&,$*XvXjt|Bx}t3bi/^WV55HZ[D5%pU?At-F=*xi0Mcv:R Evy,Zn7$DawRXGt' );
define( 'SECURE_AUTH_SALT', '_%zzmlv]z9[{S}dST?l`=}961]lnwthnRqvylXoA,&2FKv?TzLPHN{}n9O2%j2<m' );
define( 'LOGGED_IN_SALT',   'aD;NnogJxg=b;%l7A8#uB/HY}23fok8wQ%e$%GEkCq2^SZn2w$$D`$Z)G<NJb/2t' );
define( 'NONCE_SALT',       'c;l_8Wd4O(V}MB&x5G[,N^dC,rO6{u2UTDM &K3_B(/f43k$EiLsc_u^ZnsnP=&i' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_plugin';

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
