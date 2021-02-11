<?php
include 'components/options/fields.php';
include 'components/logo/fields.php';
include 'components/payments/fields.php';
include 'components/content_2/fields.php';
include 'components/widget_1/fields.php';
include 'components/widget_2/fields.php';
include 'components/top_win/fields.php';
include 'components/buttons/fields.php';
include 'components/jackpot/fields.php';
include 'components/users/fields.php';
include 'components/slider/fields.php';
include 'components/banner-game/fields.php';
include 'components/sticky_buttons/fields.php';
include 'inc/shortcodes/ref_button/fields.php';
include 'inc/shortcodes/ref_button/index.php';
include 'inc/shortcodes/nav_menu/index.php';

include 'inc/post_types/game.php';

// add support for thumbnails
add_theme_support('post-thumbnails');
add_filter( 'the_content', 'wpautop' );

// register scripts and styles
add_action('wp_enqueue_scripts', 'front_scripts');
function front_scripts()
{
    wp_enqueue_script('slider', get_template_directory_uri() . '/components/slider/slick.min.js?v=1', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/functions.js?v=1', array('jquery'), null, true);

}

/// Удаление редактора Gutenberg с фронтовой части
function wpassist_remove_block_library_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');

function is_amp(){
    $url = $_SERVER['REQUEST_URI'];
    if(strpos($url, 'amp') === false) return false;
    else return true;
}
define(IS_AMP, is_amp());
define(DEFAULT_REF, '/go/');
define(ID_FRONT, get_option( 'page_on_front' ));

function prefix_amp(){
    if(is_home()) return IS_AMP ? '/amp/' : '';
    else return IS_AMP ? 'amp/' : '';
}
define(PREFIX_AMP, prefix_amp());

define(URL, $_SERVER['REQUEST_URI']);
define(THEME_ROOT, __DIR__);

add_action('admin_enqueue_scripts', 'admin_scripts');
function admin_scripts()
{
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.js', array( 'jquery' ), null, true );
    wp_enqueue_script('admin-custom-script', get_template_directory_uri() .  '/js/adminscripts.js', array('jquery'), null, true);
}


// удаление type javascript|css
add_action('init', 'output_buffer_start');
function output_buffer_start()
{
    ob_start("output_callback");
}

add_action('shutdown', 'output_buffer_end');
function output_buffer_end()
{
    ob_end_flush();
}

function output_callback($buffer)
{
    return preg_replace("%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer);
}

add_theme_support('menus');
add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'social_menu' => 'Социальные сети',
    ]);
});

//// Изменение атрибута id у тега li
add_filter('nav_menu_item_id', 'filter_menu_item_css_id', 10, 4);
function filter_menu_item_css_id($menu_id, $item, $args, $depth){
    return $args->theme_location === 'header_menu' ? '' : $menu_id;
}

//// Кастомные классы для li меню
function filter_nav_menu_css_class($classes, $item, $args, $depth)
{
    if ($args->theme_location === 'header_menu') {
        $classes = [
            ''
        ];
        if($depth === 1){
            $classes = [
                'block_tab__item'
            ];
        }
    }

    return $classes;
}

/// Класс к ссылке меню
add_filter('nav_menu_css_class', 'filter_nav_menu_css_class', 10, 4);

function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    if ($args->theme_location === 'header_menu') {
        $atts['class'] = '';

//        if ($item->current) {
//            $atts['class'] .= ' active';
//        }

        if($depth === 1){
            $atts['class'] .= 'bl_tabsStructure__subTitle';
        }
    }

    if ($args->theme_location === 'social_menu') {
        $atts['class'] = '';
    }

    return $atts;
}

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);


/// Класс ul ко второму уровню вложенности меню
add_filter('nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3);
function filter_nav_menu_submenu_css_class($classes, $args, $depth){
    if( $args->theme_location === 'header_menu' ){

        $classes = [
            'block_tab__list',
        ];
    }

    return $classes;
}

//// Добавление  произвольного элемента в меню
add_filter('walker_nav_menu_start_el', 'add_button_for_mobile', 10, 4);
function add_button_for_mobile($item_output, $item, $depth, $args) {

    global $wpdb;
    $has_children = $wpdb->get_var("SELECT COUNT(meta_id) FROM {$wpdb->prefix}postmeta 
          WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='".$item->ID."'");
    if($has_children) {
        $item_output = '<button class="btn_nav__mobil" type="button"></button>'.$item_output; // Add custom elements
    }
    return $item_output;
}

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

function smart_button($atts)
{
    $params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
        'name' => 'Официальный сайт', // параметр 1
        'url' => '/go/', // параметр 2
        'color' => '#0746A1',
    ), $atts );
    $url=$_SERVER['REQUEST_URI'];
    if (strpos($url,"amp"))
    {
        return '<a href="'.$params["url"].'"><span class="r-form__reg">'.$params["name"].'</span></a>';
    } else
    {
        return do_shortcode('[su_button url="'.$params["url"].'" background="'.$params["color"].'" target="blank" size="15" wide="yes" center="yes"]'.$params["name"].'[/su_button]');
    }
}
add_shortcode('knopka','smart_button');

function parseAmpContent($content) {
    if(IS_AMP) {
        $parseImages = preg_match_all('/<img.*?src="([^"]+)".*?(?:data-original="([^"]+)".*?)?>/i', $content, $contentImagesData);
        $ampImageArr = [];
        foreach ($contentImagesData[0] as $key => $contentImageData) {
            $imageSrc = !empty($contentImagesData[1][$key]) ? $contentImagesData[1][$key] : '';
            $imageSrc = !empty($contentImagesData[2][$key]) ? $contentImagesData[2][$key] : $imageSrc;
            $imageInfo = getimagesize( $imageSrc);
            $imageSize = !empty($imageInfo[3]) ? $imageInfo[3] : 'width="520" height="180"';
            $imageAlt =  preg_match('/<img.*?alt="([^"]+).*?>/i', $contentImageData, $parseAlt);
            $imageAlt = !empty($parseAlt[1]) ? 'alt="' . $parseAlt[1]  . '"' : '';
            $ampImage = '<amp-img layout="responsive" ';
            $ampImage .= $imageSize;
            $ampImage .= ' src="' . $imageSrc . '"';
            $ampImage .= $imageAlt;
            $ampImage .= '></amp-img>';
            $replaceString = htmlentities($contentImageData);
            $content = str_replace($contentImageData, $ampImage, $content);
        }
        $parsedLinks = preg_match_all('/<a.*?href="([^"]+)".*?>.*?<\/a>/i', $content, $contentLinksData);
        foreach ($contentLinksData[0] as $key => $linkData){
            if ( strpos($contentLinksData[1][$key] ,'#')  !== 0 && !strpos($contentLinksData[1][$key] ,'amp')){
                if(strpos($contentLinksData[1][$key] ,'http')  !== 0 && $contentLinksData[1][$key] !== '/go/') {
                    $content = str_replace('href="' . $contentLinksData[1][$key] . '"', 'href="' . rtrim($contentLinksData[1][$key], '/') . '/amp"', $content);
                }
            }
        }
        $content = str_replace('<iframe', '<amp-iframe', $content);
        $content = str_replace('</iframe', '</amp-iframe', $content);
        $content = str_replace("100%", '300px', $content);
        $content = preg_replace('/xml:lang=".*?"/i', '', $content);
        return $content;
    }
    return $content;
}

add_action( 'init', 'add_my_endpoint' );
function add_my_endpoint(){
    add_rewrite_endpoint( 'amp', EP_ALL );
}
add_action( 'init', 'amp_replace' );
function amp_replace(){
    add_filter( 'posts_clauses_request', function( $pieces, $wp_query ){
        if(is_home()) {
            $id_front = get_option( 'page_on_front' );
            if( isset($wp_query->query['amp']) && $wp_query->is_main_query() ){
                $pieces['where'] = ' AND ID = '.$id_front;
            }
        }
        return $pieces;
    }, 10, 2 );
}

function remove_jquery_migrate( &$scripts ) {
    if( !is_admin() ) {
        $scripts->remove( 'jquery' );
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
