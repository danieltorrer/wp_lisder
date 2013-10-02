<?php
  define('HTTP_SERVER', 'http://localhost');
  define('HTTPS_SERVER', 'https://localhost');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', 'localhost');
  define('HTTPS_COOKIE_DOMAIN', 'localhost');
  define('HTTP_COOKIE_PATH', '/wp_lisder/wp-content/plugins/wp-online-store/');
  define('HTTPS_COOKIE_PATH', '/wp_lisder/wp-content/plugins/wp-online-store/');
  define('DIR_WS_HTTP_CATALOG', '/wp_lisder/wp-content/plugins/wp-online-store/');
  define('DIR_WS_HTTPS_CATALOG', '/wp_lisder/wp-content/plugins/wp-online-store/');
  define('DIR_WS_IMAGES', '/wp_lisder/wp-content/plugins/WP-online-store-product-images/images/');
  define('DIR_WS_ICONS',  DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_INCLUDES',WP_PLUGIN_DIR. '/wp-online-store/includes/');
  define('DIR_WS_BOXES',  DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES',  DIR_WS_INCLUDES . 'languages/');
  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG','C:/wamp/www/wp_lisder/wp-content/plugins/wp-online-store');
  define('DIR_FS_DOWNLOAD',DIR_FS_CATALOG . '/downloads/');
  define('DIR_FS_DOWNLOAD_PUBLIC',  DIR_FS_CATALOG . 'pub/');
  define('DB_SERVER', '127.0.0.1');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', '');
  define('DB_DATABASE', 'wp_lisder');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
?>