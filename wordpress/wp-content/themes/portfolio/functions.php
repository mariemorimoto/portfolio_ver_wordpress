<?php
    function add_my_file() {
        //デフォルトのjQuryの読み込みをキャンセル
        wp_deregister_script('jquery');

        // jQueryの読み込み
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

        //Cart
        wp_enqueue_script( 'chart', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js');
        
        //トップページのみ読み込み
        if(is_front_page()){
            wp_enqueue_script('js_fornt_page', get_template_directory_uri().'/js/front_page.js', array());
            wp_enqueue_script('vivus', get_template_directory_uri().'/js/vivus.min.js', array());
        }

        //プラグイン
        wp_enqueue_script('ofi', get_template_directory_uri().'/js/ofi.min.js', array());
        wp_enqueue_script('matchHeight', get_template_directory_uri().'/js/jquery.matchHeight-min.js', array());
        wp_enqueue_script('js_bootstrap', get_template_directory_uri().'/js/bootstrap.js', array());
        wp_enqueue_script('js_bootstrap_min', get_template_directory_uri().'/js/bootstrap.min.js', array());
        wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', array());

        //独自JSの読み込み
        wp_enqueue_script('js_common', get_template_directory_uri().'/js/js_common.js', array());
        

        //独自CSSの読み込み
        wp_enqueue_style('css_common', get_template_directory_uri().'/css/css_common.css', array());
        wp_enqueue_style('home', get_template_directory_uri().'/css/home.css', array());
        wp_enqueue_style('page', get_template_directory_uri().'/css/page.css', array());

        //プラグインCSSの読み込み
        wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array());
        wp_enqueue_style('bootstrap_reboot', get_template_directory_uri().'/css/bootstrap-reboot.css', array());
        wp_enqueue_style('bootstrap_theme', get_template_directory_uri().'/css/bootstrap-theme.css', array());
        wp_enqueue_style('bootstrap_theme_min', get_template_directory_uri().'/css/bootstrap-theme.min.css', array());
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array());
        wp_enqueue_style('bootstrap_min', get_template_directory_uri().'/css/bootstrap.css', array());
        wp_enqueue_style('bootstrap_reboot.css_map', get_template_directory_uri().'/css/bootstrap-reboot.css.map', array());
        wp_enqueue_style('bootstrap_theme_map', get_template_directory_uri().'/css/bootstrap-theme.css.map', array());
        wp_enqueue_style('bootstrap_theme_min_map', get_template_directory_uri().'/css/bootstrap-theme.min.css.map', array());
        wp_enqueue_style('bootstrap_map', get_template_directory_uri().'/css/bootstrap.min.css.map', array());
        wp_enqueue_style('bootstrap_min_map', get_template_directory_uri().'/css/bootstrap.css.map', array());
    }
    add_action('wp_enqueue_scripts', 'add_my_file');

    //WP設定画面でのカスタムメニューの有効化
    register_nav_menus(
        array(
            'global' => 'グローバル',
            'footer' => 'フッターナビ',
        )
    );
?>