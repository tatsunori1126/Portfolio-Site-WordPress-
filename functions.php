<?php
    //テーマサポート
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); //必ず記述する
    add_theme_support( 'title-tag' );   //<title>タグを出力する
    add_theme_support( 'post-thumbnails' );     //アイキャッチ画像を扱えるようにする
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'wp-block-styles' ); 
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', );
    add_theme_support( 'align-wide' );

    function portfolio_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名にする
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルにする
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'portfolio_title' );

    function portfolio_script() {
        wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap', false );
        wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@700&display=swap', false );
        wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@700&family=Roboto:wght@700&display=swap', false );
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.0/css/all.css' , array(), 'v5.15.0');
        wp_enqueue_style( 'portfolio', get_theme_file_uri (  '/css/portfolio.css' ), array(), '1.0.0' );
        wp_enqueue_script( 'loading', '//rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js', array(), '1.0.0');
        wp_enqueue_script('jquery');
        if(is_home()) {
            wp_enqueue_script( 'script', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0.0', true );
        }else {
            wp_enqueue_script( 'single-script', get_theme_file_uri('/js/single-script.js'), array('jquery'), '1.0.0', true );
        }
    }
    add_action( 'wp_enqueue_scripts', 'portfolio_script' );

    // 固定ページのヘッダーナビにメニューを表示
    function register_my_menus() {
        register_nav_menus( array(  //複数のナビゲーションメニューを登録する関数
        //'管理画面のカスタムメニューの「メニューの位置」の識別子' => 'メニューの説明の文字列'
        'header' => 'ヘッダー',
        'side'   => 'サイド',
        'footer' => 'フッター'
        ) );
    }
    add_action( 'after_setup_theme', 'register_my_menus' );