<?php get_header(); ?>
    <div id="splash">
        <div id="splash_text"></div>
    </div>
    <main class="l-main p-main">
        <div class="p-main__top-visual">
            <div class="p-main__title-block">
                <h2 class="p-main__top-title">わくわくするようなWebサイトをあなたへ届けます</h2>
                <p class="p-main__top-text">使いやすく満足していただける・・・そんなWeb制作を心がけています</p>
            </div>
        </div>
        <div class="scroll"></div>
        <div class="p-top-main">
            <section class="p-top-main__about">
                <h2 class="p-top-main__about-title p-top-main__title-logo" id="aboutme">AboutMe</h2>
                <dib class="p-top-main__about-block">
                    <p class="p-top-main__about-text">はじめまして。<br>
                        岡山県出身の岩井辰徳(いわいたつのり)と申します。<br>
                        2021年7月からWeb制作の学習をスタートしました。<br>
                        コーディングやWordPress制作をメインで受注しております。<br>
                        Twitterではこれまでの学習記録やWeb制作に関する情報などを発信しております。<br>
                        どうぞよろしくお願い致します。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/main-top-img.png">
                </dib>
            </section>
            <section class="p-top-main__skills">
                <h2 class="p-top-main__skills-title p-top-main__title-logo" id="skills">Skills</h2>
                <dib class="p-top-main__skills-block">
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-html-5-100.png" alt="HTMLの画像">
                        <p>HTML</p>
                    </div>
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-css3-100.png" alt="CSSの画像">
                        <p>CSS</p>
                    </div>
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-sass-100.png" alt="Sassの画像">
                        <p>Sass</p>
                    </div>
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-jquery-100.png" alt="jQueryの画像">
                        <p>jQuery</p>
                    </div>
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-ワードプレス-100.png" alt="WordPressの画像">
                        <p>WordPress</p>
                    </div>
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-スマートフォンタブレット-100.png" alt="レスポンシブの画像">
                        <p>Responsive</p>
                    </div>
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-github-100.png" alt="GitHubの画像">
                        <p>GitHub</p>
                    </div>
                    <div class="p-top-main__skills-single-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-プログラミング-100.png" alt="FLOCSSの画像">
                        <p>FLOCSS</p>
                    </div>
                </dib>
                <p class="p-top-main__skills-text">Sassを使用してスタイルの装飾をすることが可能であり、FLOCSSによるCSS設計を取り入れ、保守性のあるコーディングも可能です。<br>
                スマートフォン、タブレット、PCといった様々なデバイスに対応できるレスポンシブが可能であり、スマホファーストでのコーディングも可能です。<br>
                jQueryを使用してハンバーガーボタン、ハンバーガーメニュー、スライダーといった動きのあるWebサイトを制作することが可能です。<br>
                ゼロの状態からHTMLファイルをWordPress化することが可能です。</p>
            </section>
            <section class="p-top-main__works">
                <h2 class="p-top-main__works-title p-top-main__title-logo" id="works">Works</h2>
                <div class="p-top-main__works-box">
                    <?php
                        if (have_posts() ) :
                            while(have_posts() ) : the_post();
                    ?>
                    <div class="p-top-main__works-block">
                        <div class="p-top-main__img-box">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="p-top-main__works-text-block">
                            <h3 class="p-top-main__works-text-title"><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <?php
                            endwhile;
                        endif;
                    ?>
                </div>
            </section>
            <section class="p-top-main__price">
                <h2 class="p-top-main__price-title p-top-main__title-logo" id="price">Price</h2>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">トップページ</p>
                    <p class="p-top-main__price-amount">¥25,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">下層ページ</p>
                    <p class="p-top-main__price-amount">¥15,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">派生ページ</p>
                    <p class="p-top-main__price-amount">¥10,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">ランディングページ</p>
                    <p class="p-top-main__price-amount">¥40,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">jQuery実装</p>
                    <p class="p-top-main__price-amount">¥25,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">お問い合わせフォーム</p>
                    <p class="p-top-main__price-amount">¥20,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">レスポンシブ</p>
                    <p class="p-top-main__price-amount">¥15,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">WordPress化</p>
                    <p class="p-top-main__price-amount">¥50,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">サイト内検索フォーム</p>
                    <p class="p-top-main__price-amount">¥15,000円〜</p>
                </div>
                <div class="p-top-main__price-block">
                    <p class="p-top-main__price-item">ハンバーガーメニュー</p>
                    <p class="p-top-main__price-amount">¥15,000円〜</p>
                </div>
            </section>
            <section class="p-top-main__contact">
                <h2 class="p-top-main__contact-title p-top-main__title-logo" id="contact">Contact</h2>
                <?php echo apply_filters( 'the_content', get_page(13)->post_content ); ?>
            </section>
        </div>
    </main>
<?php get_footer(); ?>