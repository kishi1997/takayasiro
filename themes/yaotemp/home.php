<?php get_header(); ?>

<section class="top-fv">
    <div class="top-fv__inner">

        <!-- 画像エリア -->
        <div class="top-fv__img-wrap">
            <picture>
                <!-- PC用画像：768px以上 -->
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/img/top-fv-pc.png">
                <!-- SP用画像：デフォルト -->
                <img src="<?php bloginfo('template_url');?>/img/top-fv-sp.png" alt="明るいリビングのソファでくつろぐ家族"
                    class="top-fv__img">
            </picture>
        </div>

        <!-- テキストコンテンツエリア -->
        <div class="top-fv__content">
            <!-- キャッチコピー -->
            <h2 class="top-fv__title">
                <span class="top-fv__title-row">あなたの大切な家</span>
                <span class="top-fv__title-row">プロの目でしっかり守ります</span>
            </h2>
            <!-- リード文 -->
            <p class="top-fv__lead">
                長野の環境を知り尽くした私たちが、<br>
                お住まいの悩みに誠実に向き合います。
            </p>
        </div>

    </div>
</section>
<section class="top-news">
    <div class="l-container top-news__inner">
        <!-- 共通パーツ：セクションヘッダー -->
        <div class="c-section-header">
            <h2 class="c-section-header__title">お知らせ</h2>
            <span class="c-section-header__sub">INFORMATION</span>
        </div>

        <!-- お知らせリスト（ベタ書き） -->
        <div class="top-news__body">
            <ul class="top-news__list">

                <li class="top-news__item">
                    <a href="<?php bloginfo('url'); ?>/works/" class="top-news__link">
                        <time class="top-news__date" datetime="2025-10-20">2025.10.20</time>
                        <p class="top-news__title">令和4年9月24日(土)感謝祭開催のお知らせ</p>
                    </a>
                </li>

                <li class="top-news__item">
                    <a href="<?php bloginfo('url'); ?>/works/" class="top-news__link">
                        <time class="top-news__date" datetime="2025-10-20">2025.10.20</time>
                        <p class="top-news__title">令和4年9月24日(土)感謝祭開催のお知らせ</p>
                    </a>
                </li>

                <li class="top-news__item">
                    <a href="<?php bloginfo('url'); ?>/works/" class="top-news__link">
                        <time class="top-news__date" datetime="2025-10-20">2025.10.20</time>
                        <p class="top-news__title">令和4年9月24日(土)感謝祭開催のお知らせ</p>
                    </a>
                </li>

            </ul>
        </div>

    </div>
</section>
<section class="top-trouble">

    <!-- 背景・装飾エリア -->
    <div class="top-trouble__decorations">
        <!-- 背景のベージュシェイプ -->
        <picture class="top-trouble__bg-shape">
            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/img/top-trouble-bg-pc.png">
            <img src="<?php bloginfo('template_url');?>/img/top-trouble-bg-sp.png" alt="" class="top-trouble__bg-img">
        </picture>

        <!-- 左上の装飾（人、木、花など統合） -->
        <picture>
            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/img/top-trouble-deco-left.png">
            <img src="<?php bloginfo('template_url');?>/img/top-trouble-deco-left-sp.png" alt=""
                class="top-trouble__deco-left">
        </picture>

        <!-- 右上の装飾（ビル、家、木など統合） -->
        <picture>
            <source media="(min-width: 768px)"
                srcset="<?php bloginfo('template_url');?>/img/top-trouble-deco-right.png">
            <img src="<?php bloginfo('template_url');?>/img/top-trouble-deco-right-sp.png" alt=""
                class="top-trouble__deco-right">
        </picture>

        <!-- SP右下の装飾（木単体 / SPのみ表示） -->
        <img src="<?php bloginfo('template_url');?>/img/top-trouble-deco-tree.png" alt=""
            class="top-trouble__deco-sp-bottom">
    </div>

    <!-- コンテンツエリア -->
    <div class="l-container">

        <!-- 共通パーツ：セクションタイトル -->
        <div class="c-section-header top-trouble__header">
            <h2 class="c-section-header__title">
                お住まいのこんな症状、<br />見過ごしていませんか？
            </h2>
            <span class="c-section-header__sub">ARE YOU IN TROUBLE?</span>
        </div>

        <!-- リード文 -->
        <p class="top-trouble__lead">
            ひとつでも当てはまったら、住まいの専門家による点検をおすすめします。
        </p>

        <!-- 症状リスト -->
        <div class="top-trouble__list">

            <!-- Item 01 -->
            <div class="top-trouble__item">
                <figure class="top-trouble__img-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-trouble-case-01.jpg" alt="外壁のひび割れ"
                        class="top-trouble__img">
                </figure>
                <span class="top-trouble__label top-trouble__label--green">外壁のひび割れ・コケ</span>
                <p class="top-trouble__text">触ると手に白い粉がつく</p>
            </div>

            <!-- Item 02 -->
            <div class="top-trouble__item">
                <figure class="top-trouble__img-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-trouble-case-02.jpg" alt="屋根の色褪せ"
                        class="top-trouble__img">
                </figure>
                <span class="top-trouble__label top-trouble__label--orange">屋根の色褪せ・サビ</span>
                <p class="top-trouble__text">近所の方から劣化を指摘された</p>
            </div>

            <!-- Item 03 -->
            <div class="top-trouble__item">
                <figure class="top-trouble__img-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-trouble-case-03.jpg" alt="雨樋の破損"
                        class="top-trouble__img">
                </figure>
                <span class="top-trouble__label top-trouble__label--green">雨樋の破損・つまり</span>
                <p class="top-trouble__text">大雨の日に水が溢れている</p>
            </div>

            <!-- Item 04 -->
            <div class="top-trouble__item">
                <figure class="top-trouble__img-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-trouble-case-04.jpg" alt="古い日本家屋の外観"
                        class="top-trouble__img">
                </figure>
                <span class="top-trouble__label top-trouble__label--orange">10年以上</span>
                <p class="top-trouble__text">メンテナンスをしていない</p>
            </div>

        </div>

        <!-- CTAボタン -->
        <div class="top-trouble__cta">
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-contact">
                気になる症状について相談する
                <span class="c-btn-contact__icon"></span>
            </a>
        </div>

    </div>
</section>
<!-- l-wrapper -->
<div class="l-wrapper">

    <main class="l-main">
        <p style="margin: 100px 0;">トップページのコンテンツがここに入ります</p>

        <div class="main-contents">

            <!-- 記事一覧 -->
            <?php include("part-postlist.php"); ?>

            <!-- 施工事例一覧 -->
            <?php include("part-workslist.php"); ?>

            <!-- イベント一覧 -->
            <?php include("part-eventslist.php"); ?>

        </div>
    </main>
</div>
<!-- /l-wrapper -->



<?php get_footer(); ?>