<?php

/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

if (!defined('THEME_ROOT_PATH')) {
  define('THEME_ROOT_PATH', __DIR__);
}

if (!defined('THEME_DIRECTORY_URI')) {
  define('THEME_DIRECTORY_URI', get_stylesheet_directory_uri());
}

if (!defined('THEME_NAME')) {
  define('THEME_NAME', 'portfolio');
}

if (!defined('THEME_VERSION')) {
  $theme = wp_get_theme();
  define('THEME_VERSION', $theme->Version);
}

require_once THEME_ROOT_PATH . '/vendor/autoload.php';
require_once THEME_ROOT_PATH . '/src/classes/index.php';
require_once THEME_ROOT_PATH . '/src/StarterSite.php';

Timber\Timber::init();

Timber::$dirname = [
  'templates',
  'src/views',
  'src/views/pages'
];

// Cargar controladores automáticamente
add_action('wp', function() {
    if (is_page()) {
        $page_slug = get_post_field('post_name');
        $controller_path = get_template_directory() . "/src/views/pages/{$page_slug}/controller.php";

        if (file_exists($controller_path)) {
            require_once($controller_path);

            foreach (get_declared_classes() as $class) {
                if (strpos($class, 'Controller') !== false && stripos($class, $page_slug) !== false) {
                    $controller = new $class();
                    $controller->render();
                    exit();
                }
            }
        }
    }
});

new StarterSite();
