<?php

/**
 * Plugin Name: Protect WordPress From Anonymous
 * Version: 1.0.0
 * Plugin URI: https://github.com/diditho/protect-wordpress-from-anonymous
 * Description: WordPress plugin for protecting WordPress content sites from anonymous (non logged) users. 
 * Version:1.0.1
 * Author: didit s.banuardi.n
 * Author URI: http://diditho.com
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

# do securables
defined( 'ABSPATH' ) or die();

# read url
$strrequesturi 				= $_SERVER['REQUEST_URI'];

$bolfalseonlyrequesturi 	= parse_url($strrequesturi, PHP_URL_PATH);

# exclude path for register, login. xmlrpc connection
$arrexludepath = array(
	'wp-login.php',
	'wp-register.php',
	'wp-cron.php', // Just incase
	'wp-trackback.php',
	'wp-app.php',
	'xmlrpc.php',
);