<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'objectstore' => 
  array (
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => 
    array (
      'bucket'        => getenv('OBJECTSTORE_S3_BUCKET'),
      'key'           => getenv('OBJECTSTORE_S3_KEY'),
      'secret'        => getenv('OBJECTSTORE_S3_SECRET'),
      'region'        => getenv('OBJECTSTORE_S3_REGION'),
      'hostname'      => getenv('OBJECTSTORE_S3_HOST'),
      'port' => '',
      'objectPrefix' => 'urn:oid:',
      'autocreate' => false,
      'use_ssl' => false,
      'use_path_style' => false,
      'legacy_auth' => false,
    ),
  ),
  'passwordsalt' => getenv('SALT'),
  'secret'       => getenv('SECRET'),
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'cloud.qbrstories.com',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '23.0.0.10',
  'overwriteprotocol' => 'https',
  'overwrite.cli.url' => 'http://localhost',
  'dbname'        => getenv('POSTGRES_DB'),
  'dbhost'        => getenv('POSTGRES_HOST'),
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser'        => getenv('POSTGRES_USER'),
  'dbpassword'    => getenv('POSTGRES_PASSWORD'),
  'installed' => true,
  'instanceid'    => getenv('INSTANCE_ID'),
);
