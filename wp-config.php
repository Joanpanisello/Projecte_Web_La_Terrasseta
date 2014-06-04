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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Jp977470207');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?x;|l|&ac)IT]_!|7/# )HP{3Q~@y8P )xFsq,S3V2isQ*6o%pnS0b-N1^|b9MH6');
define('SECURE_AUTH_KEY',  'X ?[=SU+su^unx!zMMmnKUG%[iyN},C6qE/SU=me1yoO4PD)R+dI;SbZlzQzV.Z9');
define('LOGGED_IN_KEY',    ' ||Nq+jM5a,$3nwkD#^o0,x0te);c$?T.s+P#m-37SS7N=jenY7dK90%6{5ga+T1');
define('NONCE_KEY',        'o}4G@7ENKdI)e!-^Q|7fxiu]~eO.rk2*^aMZnnVv6 L9-j6(*Z33b5CUjF]T:(Hq');
define('AUTH_SALT',        'k,?IFnxQb5ERU1t-At~{n>$<@6%L7c,Uin:wjF)Q-67RCX[@~`bnJc?@EdLR8dlV');
define('SECURE_AUTH_SALT', '0W(P2[2jI%`M%yvT8mv;YWOY2|9oq|+(8NUslIs:jL0r8]9OKh})y|C+G[}HXBCy');
define('LOGGED_IN_SALT',   'R8$ZjzQ~Ze:91PGjuta>nmQP^NH#G|[L+~,NF)3^W9Qdk+J-J3EXAA }mVM>R 7N');
define('NONCE_SALT',       '6(l=bR6sVVr-j@&Sf3Y#`Le8eY44$Q}<-UWtM(USD Yab5_|B:=KX<T~+JCVj.mn');

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

