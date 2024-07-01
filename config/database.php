<?php

return array (
  'default' => 'mysql',
  'connections' => 
  array (
    'mysql' => 
    array (
      'driver' => 'mysql',
      'url' => '',
      'host' => 'localhost',
      'port' => '3306',
      'database' => 'sid',
      'username' => 'root',
      'password' => NULL,
      'unix_socket' => '',
      'charset' => 'utf8mb4',
      'collation' => 'utf8mb4_unicode_ci',
      'prefix' => 'sid_',
      'prefix_indexes' => true,
      'strict' => true,
      'engine' => NULL,
      'options' => 
      array (
      ),
    ),
  ),
  'migrations' => 
  array (
    'table' => 'migrations',
    'update_date_on_publish' => true,
  ),
  'redis' => 
  array (
    'client' => 'phpredis',
    'options' => 
    array (
      'cluster' => 'redis',
      'prefix' => 'laravel_database_',
    ),
    'default' => 
    array (
      'url' => NULL,
      'host' => '127.0.0.1',
      'username' => NULL,
      'password' => NULL,
      'port' => '6379',
      'database' => '0',
    ),
    'cache' => 
    array (
      'url' => NULL,
      'host' => '127.0.0.1',
      'username' => NULL,
      'password' => NULL,
      'port' => '6379',
      'database' => '1',
    ),
  ),
);
