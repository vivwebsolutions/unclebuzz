<?php
/**
 * @package WordPress
 */

define('DB_NAME', 'unclebuz_wrdp1');
define('DB_USER', 'unclebuz_wrdp1');
define('DB_PASSWORD', 'aKYAq8wOlaNa008B');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('WP_POST_REVISIONS', false);
define('AUTH_KEY',         'Qn8BrJ5.j4!G_ZQ5.tyQZ_qkQB4mp,3(2H`D}4Ua)zi): 5lhN<@k}sJ%c`{ {!C');
define('SECURE_AUTH_KEY',  'bTKuK5%L|j+jW|Z`K,;[tR3:wJw*djH) |YiC-YbuKdFbzR-V-mCU=5uuu$0:JY0');
define('LOGGED_IN_KEY',    'ud;aw^s^L(|=y}S?xv@_~3WT<|9JRh=rr0@s$m~O8%z=Z%rEK2E|(>&lp(a2keq2');
define('NONCE_KEY',        'z@9={~fxA%%8K~I+~BzukM?>6y}BI=yN|J*sf=W~F]r.K]oo7]t8-EuWOf~loJ[Z');
define('AUTH_SALT',        'RgtZ1}J-:9+SB$;z.ysQi2?Zfj%;t? 4}U(Wq7c1hqdujxz>tR)>B-Ir#6_;ClyM');
define('SECURE_AUTH_SALT', '3LkpguWWYI:TO^BH5A:a+Pn#gI%d+|*>n|XF&:{q-xp!Vlq|RMH>x!+f99rWW/k|');
define('LOGGED_IN_SALT',   ')TKf#Qa2TFrX$ZgJ8*m]zqBkUQ[Kt--B0<M:Z(o.}9@diKXEYo<X[I;VP3jmHRTG');
define('NONCE_SALT',       'Mi|tm1c.(Z<CqVE+l[]a]eUj>)ggcXipCt:b.[ra9PeR~a/S1{ec_/Eh_/@07t/e');

$table_prefix  = 'bu_';
define('WPLANG', '');
define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
