<?php

define("DEBUG", true);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/frontend');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/printhub/core');
define("LIBS", ROOT . '/vendor/printhub/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');

/*http://printhub/frontend/index.php*/
$app_path = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

/*http://printhub/frontend/*/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

/*http://printhub/*/
$app_path = str_replace('/frontend/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');
define("LANG_RU", PATH . '/ru');
define("LANG_UK", PATH . '/en');

require_once ROOT . '/vendor/autoload.php';