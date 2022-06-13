<?php
/**
 * La configuració base del WordPress
 *
 * L'script de creació wp-config.php usarà aquest fitxer durant la instal·lació. 
 * No heu d'utilitzar la web, podeu copiar aquest fitxer al fitxer "wp-config.php" 
 * i emplenar els valors.
 *
 * Aquest fitxer contè els següents paràmetres:
 *
 * * La configuració de la base de dades
 * * Les claus secretes
 * * El prefix de les taules de la base de dades
 * * L'ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Configuració de la base de dades - Podeu obtenir aquesta informació de l'amfitrió de la web ** //
/** El nom de la base de dades del WordPress */
define( 'DB_NAME', 'wpdaw' );

/** El nom d'usuari de la base de dades */
define( 'DB_USER', 'root' );

/** La contrasenya de la base de dades */
define( 'DB_PASSWORD', '' );

/** Nom de l'amfitrió de la base de dades */
define( 'DB_HOST', 'localhost' );

/** Joc de caràcters usat en crear taules a la base de dades. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Tipus d'ordenació en la base de dades. No ho canvieu si tens cap dubte. */
define('DB_COLLATE', '');

/**#@+
 * Claus úniques d'autentificació.
 *
 * Canvieu-les per frases úniques diferents! 
 * Les podeu generar usant el {@link http://api.wordpress.org/secret-key/1.1/salt/ servei de claus secretes de WordPress.org}
 * Podeu canviar-les en qualsevol moment per invalidar totes les galetes existents. Això forçarà tots els usuaris a iniciar sessió de nou.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+FH7.E.0~Z:AvTt1e)Sz5g|G)Gf3cUTb*{T>vO9&|2Pn$tx]6~NU$E}3}_VeHj[k' );
define( 'SECURE_AUTH_KEY',  'mlFNeSd74D?sT7un6e$tXAD?.B`)2*YHTZFXJs .r^B]h/kOcQIUiVe8Vw|7~8V@' );
define( 'LOGGED_IN_KEY',    '#%.V&5wc~o,s2npQKYX,4$6Xd)5>|2?8OAaY8}+r:T8ubFs)b?OrP9okS{.#T;O?' );
define( 'NONCE_KEY',        '!%+;_oi#b(akkpc*wD>c(Xe@wN7yYp<k `@10N{NgOUA 9K,vPv/D}JCO1Nvo,R9' );
define( 'AUTH_SALT',        '2H>wqH?yEWTTaxQlmB4;QIi>q1FXB^fC_:AnR._Z|d:UY3bs4%S{g99LfE`)Vx|g' );
define( 'SECURE_AUTH_SALT', '2iXN)>CO(095e*|E2H9J3@GrI:  NRp!Y/mKiJ*zUs&n]i{i}f3g`jeX@jkC8V= ' );
define( 'LOGGED_IN_SALT',   '>7 4bYiK8^5fL 0T,,{[5VG}k#)aPN(jQ2!1yQ#*,);<Z(cz]x1G?Q:b>9>+TGR$' );
define( 'NONCE_SALT',       '2LIN_LAlJ8<?3#{A#viE`ixS_!p2v.>:=;91LD}_[6C a[[y@0tl:?OL5z~>R(`J' );

/**#@-*/

/**
 * Prefix de taules per a la base de dades del WordPress.
 *
 * Podeu tenir múltiples instaŀlacions en una única base de dades usant prefixos
 * diferents. Només xifres, lletres i subratllats!
 */
$table_prefix = 'wordpdaw_';

/**
 * Per a desenvolupadors: WordPress en mode depuració.
 *
 * Canvieu això si voleu que es mostren els avisos durant el desenvolupament.
 * És molt recomanable que les extensions i el desenvolupadors de temes facien servir WP_DEBUG
 * al seus entorns de desenvolupament.
 *
 * Per informació sobre altres constants que es poden utilitzar per depurar,
 * visiteu el còdex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Podeu afegir valors personalitzats entre aquesta línia i la de "prou d'editar". */

/* Això és tot, prou d'editar - que publiqueu de gust! */

/** Ruta absoluta del directori del Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Assigna les variables del WordPress vars i fitxers inclosos. */
require_once(ABSPATH . 'wp-settings.php');
