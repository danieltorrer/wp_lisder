<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_lisder');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'I?2qix%)6LKUuyt&&;@23N8r)Ys7(~)>kt1WBv1%!QDf3&5Y=#Lbe0.T_Xn-_#ec'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'QUZBWQl:Z;*/= 6?M:LV[-;]hUc#Hb)_8j@2WnloXWrrYh]Q&|L:*$KhD=z YcPg'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'n8@XiFbbLW4xXj$`i3gf>m,FF&Xk4,zt?!|^8lfV~wE:Wc2EorXn?p.)7?j`OC*P'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'jDztzb;2=pZZ_ohJ4~-+mngELnRBoq&PYlpMJ_ :662Mk<MIDCM#%1K$99FJk7hW'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'QI&BGele,^IB<u%$4oD|g?DaeY>x^DOi%@92MqpD=3cbF$[0 1Y0[o$(/yy=$k{2'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', ' aG0r1o8{3jiJZ:*OAIY$K~mdgx (R3^_}$.$^-M-p`)j|01$6No,aHr5`k/OEWP'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '`{qAvjANgo3UXAIl0,>LVG_-jaY*6y97N[2g..1U)$Hg*@*rV=%iKS?h]KSZeMay'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '6,([YhAD],:we$E8+Bl6r^p:vy9n{k,#y1yq}7J-@i-=88 3Bj*a]@ec<A.CIaU1'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

