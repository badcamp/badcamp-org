<?php

define('PANTHEON_SITE', '2cf9ec6a-4305-42d0-8eb0-a7ee20c036fe');
define('PANTHEON_ENVIRONMENT', 'docksal');

define('PANTHEON_DATABASE_HOST', getenv('MYSQL_HOST'));
define('PANTHEON_DATABASE_PORT', '3306');
define('PANTHEON_DATABASE_USERNAME', getenv('MYSQL_USER'));
define('PANTHEON_DATABASE_PASSWORD', getenv('MYSQL_PASSWORD'));
define('PANTHEON_DATABASE_DATABASE', getenv('MYSQL_DATABASE'));
define('PANTHEON_DATABASE_PREFIX', '');

define('PANTHEON_REDIS_HOST', 'redis');
define('PANTHEON_REDIS_PORT', '6379');
define('PANTHEON_REDIS_PASSWORD', '');
define('PANTHEON_INDEX_HOST', 'solr');
define('PANTHEON_INDEX_PORT', '8983');
define('DRUPAL_HASH_SALT', '22f0d9fd0cf922ac045bd07db7802945e99f6ee09dac695e8d01b17131f2b67c');

$_ENV['PANTHEON_SITE'] = PANTHEON_SITE;
$_ENV['PANTHEON_ENVIRONMENT'] = PANTHEON_ENVIRONMENT;
$_ENV['DRUPAL_HASH_SALT'] = DRUPAL_HASH_SALT;
$_ENV['DB_HOST'] = PANTHEON_DATABASE_HOST;
$_ENV['DB_PORT'] = PANTHEON_DATABASE_PORT;
$_ENV['DB_USER'] = PANTHEON_DATABASE_USERNAME;
$_ENV['DB_PASSWORD'] = PANTHEON_DATABASE_PASSWORD;
$_ENV['DB_NAME'] = PANTHEON_DATABASE_DATABASE;
$_ENV['DB_PREFIX'] = PANTHEON_DATABASE_PREFIX;
$_ENV['CACHE_HOST'] = PANTHEON_REDIS_HOST;
$_ENV['CACHE_PORT'] = PANTHEON_REDIS_PORT;
$_ENV['CACHE_PASSWORD'] = PANTHEON_REDIS_PASSWORD;
$_ENV['PANTHEON_INDEX_PORT'] = PANTHEON_INDEX_PORT;
$_ENV['PANTHEON_INDEX_HOST'] = PANTHEON_INDEX_HOST;

// System paths
putenv('PATH=/usr/local/bin:/bin:/usr/bin:/srv/bin');

$settings = array (
    'conf' => array (
      'pressflow_smart_start' => true,
      'pantheon_site_uuid' => PANTHEON_SITE,
      'pantheon_environment' => PANTHEON_ENVIRONMENT,
      'pantheon_tier' => 'live',
      'pantheon_index_host' => PANTHEON_INDEX_HOST,
      'pantheon_index_port' => PANTHEON_INDEX_PORT,
      'redis_client_host' => PANTHEON_REDIS_HOST,
      'redis_client_port' => PANTHEON_REDIS_PORT,
      'redis_client_password' => PANTHEON_REDIS_PASSWORD,
      'file_public_path' => 'sites/default/files',
      'file_private_path' => 'sites/default/files/private',
      'file_directory_path' => 'sites/default/files',
      //'file_temporary_path' => '/tmp',
      //'file_directory_temp' => '/tmp',
      'css_gzip_compression' => false,
      'js_gzip_compression' => false,
      'page_compression' => false,
      'drupal_hash_salt' => DRUPAL_HASH_SALT,
      'config_directory_name' => 'config',
      'file_chmod_directory' => 0777,
      'file_chmod_file' => 0666
    ),
    'databases' => array (
      'default' => array (
        'default' => array (
          'host' => PANTHEON_DATABASE_HOST,
          'port' => PANTHEON_DATABASE_PORT,
          'username' => PANTHEON_DATABASE_USERNAME,
          'password' => PANTHEON_DATABASE_PASSWORD,
          'database' => PANTHEON_DATABASE_DATABASE,
          'driver' => 'mysql',
          'prefix' => '',
        ),
      ),
    ),
  );
  
  // Legacy Drupal Settings Block
  $_SERVER['PRESSFLOW_SETTINGS'] = json_encode($settings);