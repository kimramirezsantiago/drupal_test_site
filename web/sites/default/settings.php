<?php


$databases = [];


$settings['hash_salt'] = 'jujWnd36p5Bvgz794TqFR04bFrHNl9XB_IV9_8XeXcb9sPhXdIPYMMzNFxzbQpHJhcCezesrVg';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;
#
# if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
#   include $app_root . '/' . $site_path . '/settings.local.php';
# }
$databases['default']['default'] = array (
  'database' => 'drupal_test_site',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
$settings['config_sync_directory'] = 'sites/default/files/config_qPcSBqYLiXqszlK-pF0SnC8gllDujkm4c6glaRPdZ-ev4VTp4nDL_Xodv4UPVxkPY4y5vNBGeg/sync';
$settings['trusted_host_patterns'] = [
  '^localhost$',
];
