jQuery(function() {

    //テキストのカウントアップ+バーの設定
    let bar = new ProgressBar.Line(splash_text, {//id名を指定
        easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
        duration: 1000,//時間指定(1000＝1秒)
        strokeWidth: 0.2,//進捗ゲージの太さ
        color: '#555',//進捗ゲージのカラー
        trailWidth: 0.2,//ゲージベースの線の太さ
        trailColor: '#bbb',//ゲージベースの線のカラー
        text: {//テキストの形状を直接指定       
            style: {//天地中央に配置
                position: 'absolute',
                left: '50%',
                top: '50%',
                padding: '0',
                margin: '-30px 0 0 0',//バーより上に配置
                transform:'translate(-50%,-50%)',
                'font-size':'1rem',
                color: '#fff',
            },
            autoStyleContainer: false //自動付与のスタイルを切る
        },
        step: function(state, bar) {
            bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
        }
    });
    //アニメーションスタート
    bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
        jQuery("#splash").delay(500).fadeOut(800);//アニメーションが終わったら#splashエリアをフェードアウト
    });  

    // ハンバーガーボタン
    jQuery('.p-hamburger-btn').click(function () {
        jQuery('.p-header-nav').toggleClass('is-open');
        jQuery('.p-mask').toggleClass("is-show");
        jQuery('body').toggleClass('is-fixed');
    });
    //  Xボタン
    jQuery('#is-close').click(function () {
        jQuery('.p-header-nav').toggleClass('is-open');
        jQuery('.p-mask').toggleClass("is-show");
        jQuery('body').toggleClass('is-fixed');
    });

    // リンクをクリックしたときにスクロール
    jQuery('#page-link a[href*="#"]').click(function () {
        if(window.matchMedia('(min-width: 1025px)').matches) {
            let elmHash = jQuery(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
            let pos = jQuery(elmHash).offset().top-80;//idの上部の距離からHeaderの高さを引いた値を取得
            jQuery('body,html').animate({scrollTop: pos}, 800); //取得した位置にスクロール。800の数値が大きくなるほどゆっくりスクロール
            return false;
        } else {
            let elmHash = jQuery(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
            let pos = jQuery(elmHash).offset().top-30;//idの上部の距離を取得
            jQuery('body,html').animate({scrollTop: pos}, 800); //取得した位置にスクロール。800の数値が大きくなるほどゆっくりスクロール
            return false;
        }
    });

    jQuery('#page-link a[href*="#"]').click(function () {
        if(window.matchMedia('(min-width: 1025px)').matches) {
            let elmHash = jQuery(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
            let pos = jQuery(elmHash).offset().top-80;//idの上部の距離からHeaderの高さを引いた値を取得
            jQuery('body,html').animate({scrollTop: pos}, 800); //取得した位置にスクロール。800の数値が大きくなるほどゆっくりスクロール
            return false;
        } else {
            let elmHash = jQuery(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
            let pos = jQuery(elmHash).offset().top-30;//idの上部の距離を取得
            jQuery('body,html').animate({scrollTop: pos}, 800); //取得した位置にスクロール。800の数値が大きくなるほどゆっくりスクロール
            return false;
        }
    });
    jQuery('#home').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 800);    //スムーススクロールの速度
        return false;
    });
});