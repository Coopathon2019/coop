<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chientai_808' );

/** MySQL database username */
define( 'DB_USER', 'chientai_808' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C9FEA7Da0h1r6d3pq5m8go4b2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zo7}#=h .ui6p=&t5t+h4VvDfUhF.Ng@q( @ !w~5MZaj7O-yY rF8/@l*B,UQfm');
define('SECURE_AUTH_KEY',  'ooV0nenl]?0D!=03`&.PLR,B>S^5f8FeN@+&+_(2~nZJyJ*P`o$nZ`sPuY|=L>e<');
define('LOGGED_IN_KEY',    '-]hJj#W|-5%v59spO8*.HPQ9ok}9V)E@0r/j6e:+=S6?Ra<n+-++(>fF$70B|5BH');
define('NONCE_KEY',        '+KOq|cCxi]BbyC{m+(J({6/,O?]_[Gfm2(.+W5sy%-m<SLAiw^}}N3K%4j+@n}aA');
define('AUTH_SALT',        'r5Mee+Hj{mNJLGOVfuoo]*)IaIMcV3=gudI?j^{Xcc<3OF]VRX-i%+TsDp*$&l|i');
define('SECURE_AUTH_SALT', 't1D,G7M3t6FVCR8H2`2kztos95Vn[oIp#)TWb|ng|/Uc,0Kt|U!aV_O(HQX! bM]');
define('LOGGED_IN_SALT',   '96c[f7;;tgX&u-gX+-pZj>;ORgTlUVjxOUd4ws]>0dTT*8}Moq?|(&S-v`NiAf$2');
define('NONCE_SALT',       'KXxC2am1E|}H,EhHJKqk~~PN9C9l$!=`@m=OY|IKvg2YyayI<IkOn:hHp*76*cfl');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '808_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
