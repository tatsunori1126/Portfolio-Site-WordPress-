<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- ここからアドミンバーが表示されている時だけサイドバーを32px下に下げるコード（スマホ、タブレットの画面の時に閉じるボタンがアドミンバーと被ってしまうため） -->
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    @media (max-width: 1024px) {
        .p-header-nav, .p-single-header-nav {
            margin-top: 32px;
        }
    }
    </style>
    <?php endif; ?>
    
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    @media (max-width: 782px) {
        .p-header-nav, .p-single-header-nav {
            margin-top: 46px;
        }
    }
    </style>
    <?php endif; ?>
    <!-- ここまで -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php
    $get_page_id = get_page_by_path( "contact" );   //Contactの固定ページのスラッグを$get_page_idに代入
    // var_dump( $get_page_id );    //IDが返ってきているか確認するためのコード
    if ( $get_page_id ) {
        $get_page_id_contact = $get_page_id->ID;    //返ってきたIDを変数に入れて、その変数をget_page_link(この中に記述$get_page_id_takeout);
    }
    ?>

    <div class="p-mask"></div>
    <header class="l-header p-header">
        <h1 class="p-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <div class="p-hamburger-btn">
            <div class="p-openbtn-area">
                <span></span><span></span><span></span>
            </div>
        </div>
        <?php 
        if(is_home()) {
        ?>
        <nav class="p-header-nav">
            <span class="close-btn" id="is-close"></span>
            <ul class="p-header-nav__list" id="page-link">
                <li class="p-header-nav__list-title"><a href="#">Home</a></li>
                <li class="p-header-nav__list-title"><a href="#aboutme">AboutMe</a></li>
                <li class="p-header-nav__list-title"><a href="#skills">Skills</a></li>
                <li class="p-header-nav__list-title"><a href="#works">Works</a></li>
                <li class="p-header-nav__list-title"><a href="#price">Price</a></li>
                <li class="p-header-nav__list-title"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <?php
        } else {
        ?>
        <nav class="p-single-header-nav">
            <span class="close-btn" id="is-close"></span>
            <ul class="p-single-header-nav__list">    
                <?php
                // カスタムメニューの「メニューの位置」を'side'にしているのでその内容をサイドバーに表示
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'container' => 'div',
                    'container_class' => 'add-class'
                ));
            ?>
            </ul>
        </nav>
        <?php
        }
        ?>
    </header>