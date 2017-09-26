<?php
/*  Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) { define('ABSPATH', dirname(__FILE__) . '/'); }


/* Debug Mode */
error_reporting(0);
@ini_set('display_errors',			0 );
define( 'WP_DEBUG',					false );
define( 'WP_DEBUG_LOG',				false );
define( 'WP_DEBUG_DISPLAY',			false );
define( 'SCRIPT_DEBUG',				true );
define( 'SAVEQUERIES', 				false );


/*  https://api.wordpress.org/secret-key/1.1/salt/  */
define('AUTH_KEY',          'put your unique phrase here');
define('SECURE_AUTH_KEY',   'put your unique phrase here');
define('LOGGED_IN_KEY',     'put your unique phrase here');
define('NONCE_KEY',         'put your unique phrase here');
define('AUTH_SALT',         'put your unique phrase here');
define('SECURE_AUTH_SALT',  'put your unique phrase here');
define('LOGGED_IN_SALT',    'put your unique phrase here');
define('NONCE_SALT',        'put your unique phrase here');


/* Database */
$table_prefix           =   		'wp_';
define( 'DB_NAME',           		'' );
define( 'DB_USER',           		'' );
define( 'DB_PASSWORD',       		'' );
define( 'DB_HOST',           		'localhost' );
define( 'DB_CHARSET',        		'utf8' );
define( 'DB_COLLATE',        		'' );
define( 'CUSTOM_USER_TABLE', 		$table_prefix.'users' );
define( 'CUSTOM_USER_META_TABLE', 	$table_prefix.'usermeta' );


/* Server and Paths */
$use_ssl 				=			true;
$wp_content_root		=			'assets';
$wp_content_uploads		=			"{$wp_content_root}/media";
$wp_content_plugins		=			"{$wp_content_root}/plugins";
$wp_content_plugins_mu	=			"{$wp_content_root}/plugins";

define( 'WP_SITEURL', 				($use_ssl ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] );
define( 'WP_HOME',					WP_SITEURL);
define( 'UPLOADS', 					$wp_content_uploads );
define( 'WP_CONTENT_DIR',  			ABSPATH . "/{$wp_content_root}" );
define( 'WP_CONTENT_URL',  			WP_SITEURL . "/{$wp_content_root}" );
define( 'WP_PLUGIN_DIR',			ABSPATH . "/{$wp_content_plugins}" );
define( 'WP_PLUGIN_URL',			WP_SITEURL . "/{$wp_content_plugins}" );
define( 'WPMU_PLUGIN_DIR', 			ABSPATH . "/{$wp_content_plugins_mu}" );
define( 'WPMU_PLUGIN_URL', 			WP_SITEURL . "/{$wp_content_plugins_mu}" );


/* Cookies */
define( 'COOKIEPATH',				preg_replace( '|https?://[^/]+|i', '', WP_HOME . '/' ) );
define( 'SITECOOKIEPATH', 			preg_replace( '|https?://[^/]+|i', '', WP_SITEURL . '/' ) );
define( 'ADMIN_COOKIE_PATH', 		SITECOOKIEPATH . 'wp-admin' );
define( 'PLUGINS_COOKIE_PATH', 		preg_replace( '|https?://[^/]+|i', '', WP_PLUGIN_URL ) );


/* Restrict External Access */
define( 'WP_HTTP_BLOCK_EXTERNAL', 	true );
define( 'WP_ACCESSIBLE_HOSTS', 		"{$_SERVER['HTTP_HOST']},*.{$_SERVER['HTTP_HOST']}" );


/* Cache */
define( 'WP_CACHE'					false );
define( 'WP_CACHE_KEY_SALT',		'' );

/* Languages */
define( 'WPLANG', 					'en_CA' );
define( 'WP_LANG_DIR', 				ABSPATH . '/lang' );

/* Options */
define( 'DISABLE_WP_CRON',			  true );
define( 'ALTERNATE_WP_CRON', 		  false );
define( 'WP_CRON_LOCK_TIMEOUT', 	  3600 );
define( 'WP_POST_REVISIONS',		  2 );
define( 'DISALLOW_FILE_EDIT',		  true );
define( 'DISALLOW_FILE_MODS',		  true );
define( 'EMPTY_TRASH_DAYS', 		  0 );
define( 'WP_MEMORY_LIMIT', 			  '96M' );
define( 'WP_MAX_MEMORY_LIMIT',		  '512M' );
define( 'WP_ALLOW_MULTISITE',		  false );
define( 'AUTOSAVE_INTERVAL',		  600 );
define( 'NOBLOGREDIRECT',			  WP_HOME );
define( 'CONCATENATE_SCRIPTS',		  true );
define( 'DISALLOW_UNFILTERED_HTML',	  true );
define( 'IMAGE_EDIT_OVERWRITE',		  true );
define( 'FORCE_SSL_ADMIN',			  $use_ssl );
define( 'WP_ALLOW_REPAIR',			  false );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', 		  false );


/* Override File/Dir Permissions */
$use_fsoverride					=	  false;
if( $use_fsoverride ) {
	define( 'FS_CHMOD_DIR',				  ( 0515 & ~ umask() ) );
	define( 'FS_CHMOD_FILE',			  ( 0404 & ~ umask() ) );
}


/* FTP/SSH OPTIONS */
$use_ftpssh				=			false;
if( $use_ftpssh ) {
	// direct, ssh2, ftpext, ftpsockets
	define( 'FS_METHOD', 		'ssh2' );
	define( 'FTP_SSL',			true );

	// hostname:port combo for your SSH/FTP server
	define( 'FTP_HOST',			'' );
	
	// absolute path to root installation directory
	define( 'FTP_BASE',			ABSPATH );
	define( 'FTP_CONTENT_DIR',	WP_CONTENT_DIR );
	define( 'FTP_PLUGIN_DIR ',	WP_PLUGIN_DIR );

	// absolute path to your SSH public key
	define( 'FTP_PUBKEY',		'../.ssh/id_rsa.pub' );
	define( 'FTP_PRIKEY',		'../.ssh/id_rsa' );

	// either your FTP or SSH username
	define( 'FTP_USER',			'' );
	define( 'FTP_PASS', 		'' );
}


/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
