<?php 
session_start();

define('DB_HOST','localhost');
define('DB_USER','jusmaxdy_justine');
define('DB_PASS','justine-1755');
define('DB_NAME','jusmaxdy_crystalnet_sitecms');

define('URL', 'http://jus.maxdyna.com/crystalnet/admin/');
define('ROOT', realpath(dirname(__FILE__) . '/../') . '/admin/');
define('FRONTEND_ROOT',realpath(dirname(__FILE__) . '/../'));
define('FRONTEND_URL', rtrim('http://jus.maxdyna.com/crystalnet/','/'));
define('LIBS','libraries/');
define('ACTIVE_THEME','site-theme');
define('PATH',__DIR__.'/../assets/');

define('PATCH_SOURCE', 'http://cmsupdates.kb.sg/cms-patcher/');

