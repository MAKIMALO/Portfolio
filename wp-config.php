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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\MAMP\htdocs\Portfolio\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'portfolio' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*ue-A9[yMts2iwsxXv%%$0afk?qtoc`^R8`joV4%*/*/W[9-o yjFIY#Z8of nXX' );
define( 'SECURE_AUTH_KEY',  'w88=w7*omZsH8<uRB%9%r7Bu~Z6w`S2Jr%Cma{)(&ETo,UadN2-)gj=M3P<(EHCX' );
define( 'LOGGED_IN_KEY',    '}36[z;ZZppoQBr55H!AqgPX[1)kq%]Xh|;ho5e<2A+y]MzXc])y(w:].qt^8*p%l' );
define( 'NONCE_KEY',        'YH<1`kC.=FQ%~PQ dTDVG#Gl{}<-R9X ~*mpK|m.O0-%30W./^+)<YSUZK~]eM{Q' );
define( 'AUTH_SALT',        '0+A`G;TGh qO+dwWh~otvsEaMqgZ]no]^(7{;w&Lwl;MFQPN;ub+k`c<N,Z=cr11' );
define( 'SECURE_AUTH_SALT', 'Bk$Oq<HLw6Z&yG2&=wN?g0X8_6w:v6X+fkG!~JU<lNTrvm58=dT3x}HF)Td /+FM' );
define( 'LOGGED_IN_SALT',   '&OfMIt,E69VRCnzxg#xc3VBXA$:<-(/W@MEZwkbCP%A]e[KZp{G!=ATuoXqt-!)a' );
define( 'NONCE_SALT',       '0t?ckX<#por8 r>7!#rMD+oN0aU{%hW36oOyWr#Q4@4v-)S/~I0?%VT?Z;D30R^w' );
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
