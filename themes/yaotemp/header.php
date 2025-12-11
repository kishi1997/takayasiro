<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php fit_ogp();?>
</head>

<?php if (is_home()) : ?>

<body class="top">
    <?php else : ?>
    <!--　body Start-->
    <body<?php fit_body_class();?>>
        <?php endif; ?>
        <header class="header">
            <div class="header-wrapper">
                <?php if (is_home()) : ?>
                <h1 class="header-logo">
                    <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php wp_title(); ?>">
                </h1>
                <?php else : ?>
                <div class="header-logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php wp_title(); ?>">
                    </a>
                </div>
                <?php endif; ?>
                <div class="header-info">
                    <div class="header-nav__contact">
                        <div class="header-nav__tel">
                            <div class="tel-icon">
                                <img src="<?php bloginfo('template_url');?>/img/ico-tel.png" alt="電話アイコン">
                            </div>
                            <a href="tel:0269-23-2658">0269-23-2658</a>
                        </div>
                        <span>営業時間/9:00-18:00（定休日/水曜日）</span>
                    </div>
                    <nav class="header-nav">
                        <ul class="header-nav__list">
                            <li>
                                <a href="<?php bloginfo('url'); ?>/feature/">たかやしろ住研について</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/performance/">サービス</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/company/">料金情報</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/company/">施工事例＆お客様の声</a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
                            </li>
                        </ul>
                        <div class="header-nav__contact">
                            <a class="c-btn u-bg-orange" href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
                            <a class="c-btn u-bg-line" href="<?php bloginfo('url'); ?>//">展示予約</a>
                            <div class="header-button js-button" id="menu-button">
                                <span class="header-button__line"></span>
                                <span class="header-button__line"></span>
                                <span class="header-button__line"></span>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="header-open__menu js-open-menu">
                <div class="header-open__container">
                    <div class="header-open__left">
                        <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php wp_title(); ?>">
                    </div>
                    <div class="header-open__right">
                        <div class="header-open__right__container">
                            <nav class="header-open__nav">
                                <ul class="header-open__list">
                                    <!-- トップページ -->
                                    <li><a href="<?php echo home_url() ?>">トップページ</a></li>

                                    <!-- たかやしろ住研について -->
                                    <li><a href="<?php bloginfo('url'); ?>/about/">たかやしろ住研について</a></li>

                                    <!-- サービス（親メニュー） -->
                                    <li>
                                        <p>サービス</p>
                                        <ul class="header-child__menu">
                                            <li><a href="<?php bloginfo('url'); ?>/service/painting/">外壁・屋根塗装</a></li>
                                            <li><a href="<?php bloginfo('url'); ?>/service/roof-wall/">屋根工事・外壁工事</a>
                                            </li>
                                            <li><a href="<?php bloginfo('url'); ?>/service/gutter/">雨樋工事</a></li>
                                        </ul>
                                    </li>

                                    <!-- 料金情報 -->
                                    <li><a href="<?php bloginfo('url'); ?>/price/">料金情報</a></li>
                                </ul>

                                <ul class="header-open__list">
                                    <!-- 施工事例＆お客様の声 -->
                                    <li><a href="<?php bloginfo('url'); ?>/works/">施工事例＆お客様の声</a></li>

                                    <!-- ブログ（親メニュー） -->
                                    <li>
                                        <p>ブログ</p>
                                        <ul class="header-child__menu">
                                            <li><a href="<?php bloginfo('url'); ?>/news/">お知らせ</a></li>
                                            <li><a href="<?php bloginfo('url'); ?>/column/">お役立ちコラム</a></li>
                                            <li><a href="<?php bloginfo('url'); ?>/staffblog/">スタッフブログ</a></li>
                                        </ul>
                                    </li>

                                    <!-- 会社概要 -->
                                    <li><a href="<?php bloginfo('url'); ?>/company/">会社概要</a></li>

                                    <!-- お問い合わせ -->
                                    <li><a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></li>
                                </ul>
                            </nav>
                            <div class="header-open__contact">
                                <div class="header-open__contact--item header-open__contact--phone">
                                    <p class="header-open__contact--title">お電話でのお問い合わせ</p>
                                    <p>
                                        <img src="<?php bloginfo('template_url');?>/img/ico-tel.png" alt="電話アイコン">
                                        <a href="tel:0269-23-2658">0269-23-2658</a>
                                    </p>
                                    <p class="header-open__contact--time">営業時間/13:00-18:00 土日祝休</p>
                                </div>
                                <div class="header-open__contact--item header-open__contact--mail">
                                    <a href="<?php bloginfo('url'); ?>/contact/">
                                        <p class="header-open__contact--title">
                                            <span><img src="<?php bloginfo('template_url');?>/img/ico-mail.png"
                                                    alt="メールアイコン"></span>メールでのお問い合わせ
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--/l-header-->