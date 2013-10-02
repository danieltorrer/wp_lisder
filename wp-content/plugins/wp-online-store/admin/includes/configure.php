<?php
  define('HTTP_SERVER', 'http://localhost');
  define('HTTP_CATALOG_SERVER', 'http://localhost');
  define('HTTPS_CATALOG_SERVER', 'https://localhost');
  define('ENABLE_SSL_CATALOG', false);
  define('DIR_FS_DOCUMENT_ROOT', 'C:/wamp/www/wp_lisder/wp-content/plugins/wp-online-store');
  define('DIR_WS_ADMIN', 'http://localhost/wp_lisder/wp-admin/');
  define('DIR_FS_ADMIN', 'C:/wamp/www/wp_lisder/wp-content/plugins/wp-online-store/admin/');
  define('DIR_WS_CATALOG', '/wp_lisder/wp-content/plugins/wp-online-store/');
  define('DIR_FS_CATALOG', 'C:/wamp/www/wp_lisder/wp-content/plugins/wp-online-store/');
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', '/wp_lisder/wp-content/plugins/WP-online-store-product-images/images/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_BOXES',   'boxes/');
  define('DIR_WS_FUNCTIONS',   'functions/');
  define('DIR_WS_CLASSES',  DIR_FS_ADMIN.DIR_WS_INCLUDES. 'classes/');
  define('DIR_WS_MODULES',   'modules/');
  define('DIR_WS_LANGUAGES',  'languages/');
  define('DIR_WS_CATALOG_LANGUAGES', DIR_WS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . '/includes/languages/');
  define('DIR_FS_CATALOG_IMAGES', 'C:\wamp\www\wp_lisder/wp-content/plugins/WP-online-store-product-images/images/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . '/includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');

  define('DB_SERVER', '127.0.0.1');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', '');
  define('DB_DATABASE', 'wp_lisder');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
?>