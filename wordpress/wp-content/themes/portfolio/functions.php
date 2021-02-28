<?php
    function add_my_file() {
        //デフォルトのjQuryの読み込みをキャンセル
        wp_deregister_script('jquery');

        // jQueryの読み込み
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

        //Cart
        wp_enqueue_script( 'js_chart', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js');
        
        //トップページのみ読み込み
        if(is_front_page()){
            wp_enqueue_script('js_fornt_page', get_template_directory_uri().'/js/front_page.js', array());
            wp_enqueue_script('js_vivus', get_template_directory_uri().'/js/vivus.min.js', array());
        }

        //プラグイン
        wp_enqueue_script('js_ofi', get_template_directory_uri().'/js/ofi.min.js', array());
        wp_enqueue_script('js_matchHeight', get_template_directory_uri().'/js/jquery.matchHeight-min.js', array());
        wp_enqueue_script('js_bootstrap', get_template_directory_uri().'/js/bootstrap.js', array());
        wp_enqueue_script('js_bootstrap_min', get_template_directory_uri().'/js/bootstrap.min.js', array());
        wp_enqueue_script('js_wow', get_template_directory_uri().'/js/wow.min.js', array());

        //独自JSの読み込み
        wp_enqueue_script('js_global', get_template_directory_uri().'/js/js_global.js', array());
        

        //独自CSSの読み込み
        wp_enqueue_style('css_global', get_template_directory_uri().'/css/global.css', array());
        wp_enqueue_style('css_parts', get_template_directory_uri().'/css/parts.css', array());
        wp_enqueue_style('css_top', get_template_directory_uri().'/css/top.css', array());

        //プラグインCSSの読み込み
        wp_enqueue_style('css_animate', get_template_directory_uri().'/css/animate.css', array());
        wp_enqueue_style('css_bootstrap_reboot', get_template_directory_uri().'/css/bootstrap-reboot.css', array());
        wp_enqueue_style('css_bootstrap_theme', get_template_directory_uri().'/css/bootstrap-theme.css', array());
        wp_enqueue_style('css_bootstrap_theme_min', get_template_directory_uri().'/css/bootstrap-theme.min.css', array());
        wp_enqueue_style('css_bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array());
        wp_enqueue_style('css_bootstrap_min', get_template_directory_uri().'/css/bootstrap.css', array());
        wp_enqueue_style('map_bootstrap_reboot.css_map', get_template_directory_uri().'/css/bootstrap-reboot.css.map', array());
        wp_enqueue_style('map_bootstrap_theme_map', get_template_directory_uri().'/css/bootstrap-theme.css.map', array());
        wp_enqueue_style('map_bootstrap_theme_min_map', get_template_directory_uri().'/css/bootstrap-theme.min.css.map', array());
        wp_enqueue_style('map_bootstrap_map', get_template_directory_uri().'/css/bootstrap.min.css.map', array());
        wp_enqueue_style('map_bootstrap_min_map', get_template_directory_uri().'/css/bootstrap.css.map', array());
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