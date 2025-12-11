<?php get_header(); ?>

<div class="page-price">
    <div class="c-pagehead-set">
        <div class="c-pagehead-text">
            <h1><?php the_title(); ?></h1>
            <p><?php echo $slug = get_post(get_the_ID())->post_name; ?></p>
        </div>
    </div>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
    </div>

    <!-- l-wrapper -->
    <div class="l-wrapper">

        <!-- l-main -->
        <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
        <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
        <?php endif; ?>">

        <section class="price-info">
            <div class="l-container">
                <div class="price-info__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">料金について、大切なお約束</h2>
                        <span class="c-title--en">OUR PROMISES ON PRICING</span>
                        <p class="c-title__desc">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>

                <div class="price-info__inner">
                    <ul class="price-info__linkList">
                        <li class="c-btn--line">
                            <a href="#price01" class="c-btn--lineCircle">
                                外壁塗装
                                <span class="c-btn--arrows">
                                    <span class="c-btn--arrows-right"></span>
                                </span>
                            </a>
                        </li>
                        <li class="c-btn--line">
                            <a href="#price02" class="c-btn--lineCircle">
                                屋根塗装
                                <span class="c-btn--arrows">
                                    <span class="c-btn--arrows-right"></span>
                                </span>
                            </a>
                        </li>
                        <li class="c-btn--line">
                            <a href="#price03" class="c-btn--lineCircle">
                                外壁工事
                                <span class="c-btn--arrows">
                                    <span class="c-btn--arrows-right"></span>
                                </span>
                            </a>
                        </li>
                        <li class="c-btn--line">
                            <a href="#price04" class="c-btn--lineCircle">
                                屋根工事
                                <span class="c-btn--arrows">
                                    <span class="c-btn--arrows-right"></span>
                                </span>
                            </a>
                        </li>
                        <li class="c-btn--line">
                            <a href="#price05" class="c-btn--lineCircle">
                                雨樋工事
                                <span class="c-btn--arrows">
                                    <span class="c-btn--arrows-right"></span>
                                </span>
                            </a>
                        </li>
                    </ul>

                    <div id="price01" class="priceBox">
                        <h3 class="price-info--jp">外壁塗装</h3>
                        <span class="price-info--en">EXTERIOR WALL PAINTING</span>
                        <div class="price-info__menu">
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img1.jpg" alt="外壁塗装の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img2.jpg" alt="外壁塗装の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="price02" class="priceBox">
                        <h3 class="price-info--jp">屋根塗装</h3>
                        <span class="price-info--en">ROOF PAINTING</span>
                        <div class="price-info__menu">
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img3.jpg" alt="屋根塗装の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img4.jpg" alt="屋根塗装の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="price03" class="priceBox">
                        <h3 class="price-info--jp">外壁工事</h3>
                        <span class="price-info--en">EXTERIOR WALL WORK</span>
                        <div class="price-info__menu">
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img5.jpg" alt="外壁工事の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img6.jpg" alt="外壁工事の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="price04" class="priceBox">
                        <h3 class="price-info--jp">屋根工事</h3>
                        <span class="price-info--en">ROOF CONSTRUCTION</span>
                        <div class="price-info__menu">
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img7.jpg" alt="屋根工事の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img8.jpg" alt="屋根工事の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="price05" class="priceBox">
                        <h3 class="price-info--jp">雨樋工事</h3>
                        <span class="price-info--en">RAINGUTTER CONSTRUCTION</span>
                        <div class="price-info__menu">
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img9.jpg" alt="雨樋工事の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                            <div class="price-info__item">
                                <figure class="price-info__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/price-info-img10.jpg" alt="雨樋工事の施工イメージ写真">
                                </figure>
                                <div class="price-info__item--body">
                                    <span class="price-info__item--title">メニュー名メニュー名メニュー名</span>
                                    <p class="price-info__item--text">
                                        説明文など説明文など説明文など説明文など説明文など説明文など
                                    </p>
                                    <p class="price-info__item--price">
                                        000,000<span>円</span>
                                    </p>
                                    <p class="price-info__item--tax">（税込 000,000円）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-service">
            <div class="c-service__head">
                <div class="c-title">
                    <h2 class="c-title--jp">サービス</h2>
                    <span class="c-title--en">SERVICE</span>
                    <p class="c-title__desc">
                        お客様の悩みを解決する、<br class="u-sp">
                        たかやしろ住研のサービスをご紹介します。
                    </p>
                </div>
            </div>

            <div class="l-container">
                <div class="c-service__list">
                    <div class="c-service__card">
                        <a href="<?php bloginfo('url'); ?>/service/exterior/">
                            <figure class="c-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/c-service-img1.jpg" alt="外壁・屋根塗装のイメージ画像">
                            </figure>
                            <div class="c-service__card--body">
                                <h3 class="c-service__card--title">外壁・屋根塗装</h3>
                                <button class="c-service__button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="#ffffff" d="m12.9 5.1 10.7 10.7c.5.5.5 1.4 0 1.9l-1.2 1.2c-.5.5-1.3.5-1.9 0L12 10.4l-8.5 8.5c-.5.5-1.3.5-1.9 0L.4 17.7c-.5-.5-.5-1.4 0-1.9L11.1 5.1c.5-.5 1.3-.5 1.8 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="c-service__card">
                        <a href="<?php bloginfo('url'); ?>/service/roofing/">
                            <figure class="c-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/c-service-img2.jpg" alt="屋根・外壁工事のイメージ画像">
                            </figure>
                            <div class="c-service__card--body">
                                <h3 class="c-service__card--title">屋根・外壁工事</h3>
                                <button class="c-service__button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="#ffffff" d="m12.9 5.1 10.7 10.7c.5.5.5 1.4 0 1.9l-1.2 1.2c-.5.5-1.3.5-1.9 0L12 10.4l-8.5 8.5c-.5.5-1.3.5-1.9 0L.4 17.7c-.5-.5-.5-1.4 0-1.9L11.1 5.1c.5-.5 1.3-.5 1.8 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="c-service__card">
                        <a href="<?php bloginfo('url'); ?>/service/raingutter/">
                            <figure class="c-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/c-service-img3.jpg" alt="雨樋工事のイメージ画像">
                            </figure>
                            <div class="c-service__card--body">
                                <h3 class="c-service__card--title">雨樋工事</h3>
                                <button class="c-service__button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path fill="#ffffff" d="m12.9 5.1 10.7 10.7c.5.5.5 1.4 0 1.9l-1.2 1.2c-.5.5-1.3.5-1.9 0L12 10.4l-8.5 8.5c-.5.5-1.3.5-1.9 0L.4 17.7c-.5-.5-.5-1.4 0-1.9L11.1 5.1c.5-.5 1.3-.5 1.8 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->

<?php get_footer(); ?>