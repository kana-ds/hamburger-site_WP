<?php
function add_files() {
    // リセットCSS
    wp_enqueue_style('reset-style', get_theme_file_uri('/css/ress.css'));
    // Google Fonts
    wp_enqueue_style('google-fonts', esc_url('https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap'), array(), null);
    // メインのCSSファイル
    wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '', true);
    // JavaScriptファイル
    wp_enqueue_script('main-script', get_theme_file_uri().'/js/main.js', array(), '', true);
}
// add_files()を呼び出す
add_action('wp_enqueue_scripts', 'add_files');

function theme_setup(){
    // titleタグ
    add_theme_support('title-tag');
    // アイキャッチ画像
    add_theme_support('post-thumbnails'); 
    // メニュー
    register_nav_menus(
        array(
            'main_menu' => __( 'メインメニュー' ),
            'footer_menu' => 'フッターメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup', 'init', 'register_my_menus');

// サイト内検索から固定ページを除外
function SearchFilter($query) {
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
        $query-> set( 'post_type', 'post' );
        }
}
add_action( 'pre_get_posts','SearchFilter' );

// 管理画面・メインクエリ以外に影響を与えないように
function custom_main_query($query) {
    if ( is_admin() || ! $query -> is_main_query()) {
        return;
    } 
    if ($query -> is_category()) {
        $query -> set( 'posts_per_page', 3 );
    }
}
add_action( 'pre_get_posts', 'custom_main_query');