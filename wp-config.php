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
define('DB_NAME', 'playful');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '#(>X9j{I)4h~UuRjt&seSBtEn1&0;Q,eTQFUR}74WmV67Sf]KL`/D#@;Tk_W3YAB');
define('SECURE_AUTH_KEY', 'h+R9UI4z?N$I_/H]F79m2.q<F)J3>R3?lBZH%:<rY``T!Ty/f7seN+yR`ol}g9E&');
define('LOGGED_IN_KEY', 'r-OV.w4(]1MwuS{eto,ELGzc&s^K5qqz}V377Qji=Nv.[XMT!aB6n|y,$gZ5DAmZ');
define('NONCE_KEY', 'T{k n)+QU<51lFvcQ(~t[-2_4LD!&Ok+d3BB%jGs=!LnY-LL-?x%8ZE}7]NK(`wm');
define('AUTH_SALT', 'rsv{.-q~z8pOEYjaCp?ZC|M:&1YiEN(d81RJGy[<7(Eh+{;;tIA? hT6S%.gvZ?f');
define('SECURE_AUTH_SALT', 'oA0pJuiZXUs0<]NIzYqpABtZYE$x>S&)<JeMq<^nMAKcuTKz_{?LcUpm2wJ*rWb*');
define('LOGGED_IN_SALT', '^Pn0CJDJ%G_^72BVfY$(5rWK<nx.wi:Ij{m2P5[&u6D(mmfVRU?-zzg;k+fASH|_');
define('NONCE_SALT', 'p]yJgp_}g kZKFYrr+MowBq|EoVdb3rlFXckxRU4$8Ju!U!gb]?6MYb##(7yo)j[');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

