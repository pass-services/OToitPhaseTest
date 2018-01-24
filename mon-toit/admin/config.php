<?php
// HTTP
define('HTTP_SERVER', 'http://o-toit.fr/admin/');
define('HTTP_CATALOG', 'http://o-toit.fr/');

// HTTPS
define('HTTPS_SERVER', 'https://o-toit.fr/admin/');
define('HTTPS_CATALOG', 'https://o-toit.fr/');

// DIR
define('DIR_APPLICATION', '/var/www/html/admin/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_LANGUAGE', '/var/www/html/admin/language/');
define('DIR_TEMPLATE', '/var/www/html/admin/view/template/');
define('DIR_CONFIG', '/var/www/html/system/config/');
define('DIR_CACHE', '/var/www/html/system/storage/cache/');
define('DIR_DOWNLOAD', '/var/www/html/system/storage/download/');
define('DIR_LOGS', '/var/www/html/system/storage/logs/');
define('DIR_MODIFICATION', '/var/www/html/system/storage/modification/');
define('DIR_UPLOAD', '/var/www/html/system/storage/upload/');
define('DIR_CATALOG', '/var/www/html/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'otoit');
define('DB_PASSWORD', 'oTo1tdela');
define('DB_DATABASE', 'OToit');
define('DB_PORT', '3306');
define('DB_PREFIX', 'otoit_');

// Cache
define('CACHE_DRIVER', 'mem'); // 'file', 'apc', 'mem' or 'memcached'
define('CACHE_HOSTNAME', 'localhost');
define('CACHE_PORT', '11211');
define('CACHE_PREFIX', 'oc_');
