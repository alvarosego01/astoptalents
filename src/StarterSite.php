<?php

// use App\Classes\CarbonFields;
// use App\Classes\Custom_PostTypes;
use App\Classes\generalFunctions;
use Timber\Site;
use Timber\Timber;

/**
 * Class StarterSite
 */
class StarterSite extends Site
{

  public function __construct()
  {

    add_action('after_setup_theme', array($this, 'theme_supports'));
    add_action('after_setup_theme', array($this, 'portfolio_theme_setup'));
    add_action('init', array($this, 'register_post_types'));
    add_action('init', array($this, 'register_taxonomies'));
    add_action('init', array($this, 'register_menuZones'));

    add_filter('timber/context', array($this, 'add_to_context'));
    add_filter('timber/twig', array($this, 'add_to_twig'));
    add_filter('timber/twig/environment/options', [$this, 'update_twig_environment_options']);

    // $this->register_custom_postTypes();
    // $this->register_meta_fields();

    $this->register_scripts_styles();

    parent::__construct();
  }

  // private function register_meta_fields()
  // {
  //     (new CarbonFields())->__init();
  // }

  // private function register_custom_postTypes(){
  //     (new Custom_PostTypes())->__init();
  // }



  private function register_scripts_styles()
  {

    add_action('wp_enqueue_scripts', function () {

      wp_enqueue_style('wp-block-library');
      // wp_enqueue_style('dashicons');

      wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
      wp_enqueue_style('box-icons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');

      wp_enqueue_style('styles', THEME_DIRECTORY_URI . '/assets/css/main.css', false, THEME_VERSION);
      wp_enqueue_style('tailwind', THEME_DIRECTORY_URI . '/assets/css/tailwind.css', false, THEME_VERSION);
      wp_enqueue_style('aos_css', THEME_DIRECTORY_URI . '/resources/css/vendors/aos.css', false, THEME_VERSION);

      wp_enqueue_script('alpinejs', THEME_DIRECTORY_URI . '/resources/js/vendors/alpinejs.min.js', ['jquery'], THEME_VERSION, true);
      wp_enqueue_script('aos_js', THEME_DIRECTORY_URI . '/resources/js/vendors/aos.js', ['jquery'], THEME_VERSION, true);

      wp_enqueue_script('scriptsjs', THEME_DIRECTORY_URI . '/assets/js/scripts.js', ['jquery'], THEME_VERSION, true);
    });

    add_action('after_setup_theme', function () {

      add_theme_support('editor-styles');
      add_editor_style(THEME_DIRECTORY_URI . '/assets/css/tailwind.css');
    });
  }

  /**
   * This is where you can register custom post types.
   */
  public function register_post_types() {}

  /**
   * This is where you can register custom taxonomies.
   */
  public function register_taxonomies() {}

  /**
   * This is where you add some context
   *
   * @param string $context context['this'] Being the Twig's {{ this }}.
   */
  public function add_to_context($context)
  {

    $context['menu']  = Timber::get_menu();
    $context['site']  = $this;

    $context['project_root'] = THEME_ROOT_PATH;
    $context['home_url'] = home_url();
    $context['server_name'] = (new generalFunctions())->get_TypeUrl();

    $context['server_uri'] = THEME_DIRECTORY_URI;

    return $context;
  }

  public function theme_supports()
  {

    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
      'html5',
      array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );

    /*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
    add_theme_support(
      'post-formats',
      array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
      )
    );

    add_theme_support('menus');
  }

  public function register_menuZones()
  {

    register_nav_menus(
      array(
        'navbar_primary' => __('Primary Menu', THEME_NAME),
        'navbar_primary_right' => __('Primary right Menu', THEME_NAME),
        'footer' => __('Footer Menu', THEME_NAME),
        'socials' => __('Social network', THEME_NAME)
      )
    );

    $menu_name = 'Footer Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
      $menu_id = wp_create_nav_menu($menu_name);
      wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' => __('Home'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish'
      ));

      if (!has_nav_menu('footer')) {
        set_theme_mod('nav_menu_locations', array(
          'footer' => $menu_id
        ));
      }
    }

    $menu_name = 'Principal main';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
      $menu_id = wp_create_nav_menu($menu_name);
      wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' => __('Home'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish'
      ));

      if (!has_nav_menu('navbar_primary')) {
        set_theme_mod('nav_menu_locations', array(
          'navbar_primary' => $menu_id
        ));
      }
    }

    $menu_name = 'Principal main right';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
      $menu_id = wp_create_nav_menu($menu_name);
      wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' => __('Home'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish'
      ));

      if (!has_nav_menu('navbar_primary_right')) {
        set_theme_mod('nav_menu_locations', array(
          'navbar_primary_right' => $menu_id
        ));
      }
    }

    $menu_name = 'Socials';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
      $menu_id = wp_create_nav_menu($menu_name);
      wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' => __('Home'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish'
      ));

      if (!has_nav_menu('socials')) {
        set_theme_mod('nav_menu_locations', array(
          'socials' => $menu_id
        ));
      }
    }
  }

  /**
   * his would return 'foo bar!'.
   *
   * @param string $text being 'foo', then returned 'foo bar!'.
   */
  public function myfoo($text)
  {
    $text .= ' bar!';
    return $text;
  }

  /**
   * This is where you can add your own functions to twig.
   *
   * @param Twig\Environment $twig get extension.
   */
  public function add_to_twig($twig)
  {
    /**
     * Required when you want to use Twig’s template_from_string.
     * @link https://twig.symfony.com/doc/3.x/functions/template_from_string.html
     */

    $twig->addFilter(new Twig\TwigFilter('myfoo', [$this, 'myfoo']));

    $twig->addFunction(new Twig\TwigFunction('get_color', [new generalFunctions(), 'get_color']));
    $twig->addFunction(new Twig\TwigFunction('get_file', [new generalFunctions(), 'get_file']));


    // $twig->addFunction(new Twig\TwigFunction('__', function ($text) {
    //     return __($text, THEME_NAME);
    // }));

    $twig->addFunction(new Twig\TwigFunction('t_e', function ($text) {
      _e($text, THEME_NAME);
    }));
    return $twig;
  }

  /**
   * Updates Twig environment options.
   *
   * @link https://twig.symfony.com/doc/2.x/api.html#environment-options
   *
   * \@param array $options An array of environment options.
   *
   * @return array
   */
  function update_twig_environment_options($options)
  {
    // $options['autoescape'] = true;

    return $options;
  }

  function portfolio_theme_setup()
  {
    load_theme_textdomain(THEME_NAME, get_template_directory() . '/languages');
  }

}
