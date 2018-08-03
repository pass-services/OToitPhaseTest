<?php
// HTTP
define('HTTP_SERVER', 'http://otoit.cleverapps.io/bergerac/admin/');
define('HTTP_CATALOG', 'http://otoit.cleverapps.io/bergerac/');

// HTTPS
define('HTTPS_SERVER', 'http://otoit.cleverapps.io/bergerac/admin/');
define('HTTPS_CATALOG', 'http://otoit.cleverapps.io/bergerac/');

// DIR
define('DIR_APPLICATION', '/home/bas/'.getenv(APP_ID).'/bergerac/admin/');
define('DIR_SYSTEM', '/home/bas/'.getenv(APP_ID).'/bergerac/system/');
define('DIR_IMAGE', '/home/bas/'.getenv(APP_ID).'/bergerac/image/');
define('DIR_LANGUAGE', '/home/bas/'.getenv(APP_ID).'/bergerac/admin/language/');
define('DIR_TEMPLATE', '/home/bas/'.getenv(APP_ID).'/bergerac/admin/view/template/');
define('DIR_CONFIG', '/home/bas/'.getenv(APP_ID).'/bergerac/system/config/');
define('DIR_CACHE', '/home/bas/'.getenv(APP_ID).'/bergerac/system/storage/cache/');
define('DIR_DOWNLOAD', '/home/bas/'.getenv(APP_ID).'/bergerac/system/storage/download/');
define('DIR_LOGS', '/home/bas/'.getenv(APP_ID).'/bergerac/system/storage/logs/');
define('DIR_MODIFICATION', '/home/bas/'.getenv(APP_ID).'/bergerac/system/storage/modification/');
define('DIR_UPLOAD', '/home/bas/'.getenv(APP_ID).'/bergerac/system/storage/upload/');
define('DIR_CATALOG', '/home/bas/'.getenv(APP_ID).'/bergerac/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'bxsbp46v8-mysql.services.clever-cloud.com');
define('DB_USERNAME', 'ucuhpcyth82wavgt');
define('DB_PASSWORD', '8usvJVdn5T04ARYZI5t');
define('DB_DATABASE', 'bxsbp46v8');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// Cache
define('CACHE_DRIVER', 'file'); // 'file', 'apc', 'mem' or 'memcached'
define('CACHE_EXPIRE', '3600');
//define('CACHE_HOSTNAME', 'localhost');
//define('CACHE_PORT', '11211');
//define('CACHE_PREFIX', 'oc_');
