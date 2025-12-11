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
            ひとつでも当てはまったら、<br class="u-sp">住まいの専門家による点検をおすすめします。
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
                <span class="c-btn-contact__icon">
                    <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="arrow-icon">
                </span>
            </a>
        </div>

    </div>
</section>
<section class="top-service">
    <img src="<?php bloginfo('template_url');?>/img/top-service-deco-left.png" alt=""
        class="top-service__deco top-service__deco--left"> <img
        src="<?php bloginfo('template_url');?>/img/top-service-deco-right.png" alt=""
        class="top-service__deco top-service__deco--right">
    <div class="l-container">
        <div class="c-section-header">
            <h2 class="c-section-header__title">サービス</h2>
            <span class="c-section-header__sub">SERVICE</span>
        </div>

        <!-- リード文 -->
        <p class="top-service__lead">
            お客様の悩みを解決する、<br class="u-sp">たかやしろ住研のサービスをご紹介します。
        </p>

        <!-- サービスリスト -->
        <div class="top-service__list">

            <!-- Item 01 -->
            <div class="top-service__item">
                <figure class="top-service__img-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-01.jpg" alt="外壁・屋根塗装の足場"
                        class="top-service__img">
                </figure>
                <h3 class="top-service__item-title">外壁・屋根塗装</h3>
                <p class="top-service__desc">
                    色褪せやひび割れは、住まいのSOSサイン。家全体を守る「保護膜」を丁寧につくり、新築時のような輝きと安心をお届けします。
                </p>
                <div class="top-service__btn-area">
                    <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-detail">
                        詳しく見る
                        <span class="c-btn-detail__icon">
                            <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="arrow-icon">
                        </span>
                    </a>
                </div>
            </div>

            <!-- Item 02 -->
            <div class="top-service__item">
                <figure class="top-service__img-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-02.jpg" alt="屋根・外壁工事の様子"
                        class="top-service__img">
                </figure>
                <h3 class="top-service__item-title">屋根・外壁工事</h3>
                <p class="top-service__desc">
                    雨漏りが起きる前のメンテナンスが重要です。プロの目で的確に診断し、最適な工事で住まいの寿命を延ばし、この先の安心を守ります。
                </p>
                <div class="top-service__btn-area">
                    <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-detail">
                        詳しく見る
                        <span class="c-btn-detail__icon">
                            <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="arrow-icon">
                        </span>
                    </a>
                </div>
            </div>

            <!-- Item 03 -->
            <div class="top-service__item">
                <figure class="top-service__img-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-03.jpg" alt="雨樋工事"
                        class="top-service__img">
                </figure>
                <h3 class="top-service__item-title">雨樋工事</h3>
                <p class="top-service__desc">
                    見過ごしがちな雨樋は、住まい全体の寿命に関わる重要箇所。雨水を正しく排出し、建物の劣化を防いで、お住まいの健康を足元から支えます。
                </p>
                <div class="top-service__btn-area">
                    <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-detail">
                        詳しく見る
                        <span class="c-btn-detail__icon">
                            <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="arrow-icon">
                        </span>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
<section class="top-plan">
    <div class="l-container">

        <div class="top-plan__header-wrapper">
            <img src="<?php bloginfo('template_url');?>/img/top-plan-deco-left.png" alt=""
                class="top-plan__deco top-plan__deco--left">

            <div class="c-section-header top-plan__header">
                <h2 class="c-section-header__title">プラン紹介</h2>
                <span class="c-section-header__sub">PLAN</span>
            </div>
            <img src="<?php bloginfo('template_url');?>/img/top-plan-deco-right.png" alt=""
                class="top-plan__deco top-plan__deco--right">
            <p class="top-plan__lead">
                お客様のお悩みに合わせた最適な<br class="u-sp">プランをご提案します。
            </p>
        </div>
        <div class="top-plan__body">
            <div class="top-plan__col">
                <h3 class="top-plan__col-title">屋根塗装プラン</h3>
                <div class="top-plan__list">

                    <div class="top-plan__card">
                        <figure class="top-plan__card-img">
                            <img src="<?php bloginfo('template_url');?>/img/top-plan-roof-std.jpg" alt="屋根塗装 スタンダードプラン">
                        </figure>
                        <div class="top-plan__card-info">
                            <h4 class="top-plan__card-name">スタンダード</h4>
                            <dl class="top-plan__spec">
                                <div class="top-plan__spec-row">
                                    <dt>使用塗料</dt>
                                    <dd>2液シリコン</dd>
                                </div>
                                <div class="top-plan__spec-row">
                                    <dt>耐久年数</dt>
                                    <dd>約10〜12年</dd>
                                </div>
                            </dl>
                            <div class="top-plan__cospa">
                                <span class="top-plan__cospa-label">コスパ評価</span>
                                <span class="top-plan__cospa-stars">★★★</span>
                            </div>
                            <p class="top-plan__price">
                                250,000<span class="top-plan__price-unit">円(税込)〜</span>
                            </p>
                        </div>
                    </div>

                    <div class="top-plan__card">
                        <figure class="top-plan__card-img">
                            <img src="<?php bloginfo('template_url');?>/img/top-plan-roof-high.jpg"
                                alt="屋根塗装 ハイグレードプラン">
                        </figure>
                        <div class="top-plan__card-info">
                            <h4 class="top-plan__card-name">ハイグレード</h4>
                            <dl class="top-plan__spec">
                                <div class="top-plan__spec-row">
                                    <dt>使用塗料</dt>
                                    <dd>フッ素塗料</dd>
                                </div>
                                <div class="top-plan__spec-row">
                                    <dt>耐久年数</dt>
                                    <dd>約15〜20年</dd>
                                </div>
                            </dl>
                            <div class="top-plan__cospa">
                                <span class="top-plan__cospa-label">コスパ評価</span>
                                <span class="top-plan__cospa-stars">★★</span>
                            </div>
                            <p class="top-plan__price">
                                350,000<span class="top-plan__price-unit">円(税込)〜</span>
                            </p>
                        </div>
                    </div>

                    <div class="top-plan__card">
                        <figure class="top-plan__card-img">
                            <img src="<?php bloginfo('template_url');?>/img/top-plan-roof-prm.jpg" alt="屋根塗装 プレミアムプラン">
                        </figure>
                        <div class="top-plan__card-info">
                            <h4 class="top-plan__card-name">プレミアム</h4>
                            <dl class="top-plan__spec">
                                <div class="top-plan__spec-row">
                                    <dt>使用塗料</dt>
                                    <dd>無機塗料</dd>
                                </div>
                                <div class="top-plan__spec-row">
                                    <dt>耐久年数</dt>
                                    <dd>約18〜25年</dd>
                                </div>
                            </dl>
                            <div class="top-plan__cospa">
                                <span class="top-plan__cospa-label">コスパ評価</span>
                                <span class="top-plan__cospa-stars">★</span>
                            </div>
                            <p class="top-plan__price">
                                450,000<span class="top-plan__price-unit">円(税込)〜</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="top-plan__col">
                <h3 class="top-plan__col-title">外壁塗装プラン</h3>
                <div class="top-plan__list">
                    <div class="top-plan__card">
                        <figure class="top-plan__card-img">
                            <img src="<?php bloginfo('template_url');?>/img/top-plan-wall-std.jpg" alt="外壁塗装 スタンダードプラン">
                        </figure>
                        <div class="top-plan__card-info">
                            <h4 class="top-plan__card-name">スタンダード</h4>
                            <dl class="top-plan__spec">
                                <div class="top-plan__spec-row">
                                    <dt>使用塗料</dt>
                                    <dd>ラジカル制御型</dd>
                                </div>
                                <div class="top-plan__spec-row">
                                    <dt>耐久年数</dt>
                                    <dd>約12〜15年</dd>
                                </div>
                            </dl>
                            <div class="top-plan__cospa">
                                <span class="top-plan__cospa-label">コスパ評価</span>
                                <span class="top-plan__cospa-stars">★★★</span>
                            </div>
                            <p class="top-plan__price">
                                550,000<span class="top-plan__price-unit">円(税込)〜</span>
                            </p>
                        </div>
                    </div>
                    <div class="top-plan__card">
                        <figure class="top-plan__card-img">
                            <img src="<?php bloginfo('template_url');?>/img/top-plan-wall-high.jpg"
                                alt="外壁塗装 ハイグレードプラン">
                        </figure>
                        <div class="top-plan__card-info">
                            <h4 class="top-plan__card-name">ハイグレード</h4>
                            <dl class="top-plan__spec">
                                <div class="top-plan__spec-row">
                                    <dt>使用塗料</dt>
                                    <dd>フッ素塗料</dd>
                                </div>
                                <div class="top-plan__spec-row">
                                    <dt>耐久年数</dt>
                                    <dd>約15〜20年</dd>
                                </div>
                            </dl>
                            <div class="top-plan__cospa">
                                <span class="top-plan__cospa-label">コスパ評価</span>
                                <span class="top-plan__cospa-stars">★★</span>
                            </div>
                            <p class="top-plan__price">
                                700,000<span class="top-plan__price-unit">円(税込)〜</span>
                            </p>
                        </div>
                    </div>

                    <!-- Card: プレミアム -->
                    <div class="top-plan__card">
                        <figure class="top-plan__card-img">
                            <img src="<?php bloginfo('template_url');?>/img/top-plan-wall-prm.jpg" alt="外壁塗装 プレミアムプラン">
                        </figure>
                        <div class="top-plan__card-info">
                            <h4 class="top-plan__card-name">プレミアム</h4>
                            <dl class="top-plan__spec">
                                <div class="top-plan__spec-row">
                                    <dt>使用塗料</dt>
                                    <dd>無機塗料</dd>
                                </div>
                                <div class="top-plan__spec-row">
                                    <dt>耐久年数</dt>
                                    <dd>約18〜25年</dd>
                                </div>
                            </dl>
                            <div class="top-plan__cospa">
                                <span class="top-plan__cospa-label">コスパ評価</span>
                                <span class="top-plan__cospa-stars">★</span>
                            </div>
                            <p class="top-plan__price">
                                850,000<span class="top-plan__price-unit">円(税込)〜</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- CTAボタン -->
        <div class="top-plan__cta">
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-detail">
                料金情報を見る
                <span class="c-btn-detail__icon">
                    <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="arrow-icon">
                </span>
            </a>
        </div>

    </div>
</section>
<section class="top-reason">
    <div class="l-container">
        <div class="top-reason__header-area">
            <img src="<?php bloginfo('template_url');?>/img/top-reason-deco-header.png" alt=""
                class="top-reason__deco-header">

            <div class="c-section-header top-reason__header">
                <h2 class="c-section-header__title">
                    たかやしろ住研が<br>選ばれる3つの理由
                </h2>
                <span class="c-section-header__sub">THREE REASONS TO BE CHOSEN</span>
            </div>

            <p class="top-reason__lead">
                たかやしろ住研が選ばれる理由を、<br class="u-sp">3つのポイントでご紹介します。
            </p>
        </div>

        <!-- 理由リスト -->
        <div class="top-reason__list">
            <img src="<?php bloginfo('template_url');?>/img/top-reason-bg-top.png" alt=""
                class="top-reason__bg-shape top-reason__bg-shape--top">
            <img src="<?php bloginfo('template_url');?>/img/top-reason-bg-bottom.png" alt=""
                class="top-reason__bg-shape top-reason__bg-shape--bottom">
            <!-- REASON 1 -->
            <article class="top-reason__item">
                <div class="top-reason__img-box">
                    <img src="<?php bloginfo('template_url');?>/img/top-reason-01.png" alt="お客様との打ち合わせ風景"
                        class="top-reason__img">
                </div>
                <div class="top-reason__content">
                    <span class="top-reason__number">REASON1</span>
                    <h3 class="top-reason__head">
                        しつこい営業は、絶対にしません。
                    </h3>
                    <span class="top-reason__tag">しつこさゼロ、誠実対応。</span>
                    <p class="top-reason__text">
                        私たちの役目は、お客様の「困った」を解決すること。ご納得いただくまで、契約を急かすことは決してありません。
                    </p>
                    <!-- PC用装飾イラスト（SPでは非表示） -->
                    <div class="top-reason__item-deco top-reason__item-deco1">
                        <img src="<?php bloginfo('template_url');?>/img/top-reason-deco-01.png" alt="">
                    </div>
                </div>
            </article>

            <!-- REASON 2 -->
            <article class="top-reason__item">
                <div class="top-reason__img-box">
                    <img src="<?php bloginfo('template_url');?>/img/top-reason-02.png" alt="笑顔のスタッフ"
                        class="top-reason__img">
                </div>
                <div class="top-reason__content">
                    <span class="top-reason__number">REASON2</span>
                    <h3 class="top-reason__head">
                        専属スタッフが直接、<br>ご相談からお引渡しまで担当します。
                    </h3>
                    <span class="top-reason__tag">専属スタッフが、最初から最後まで。</span>
                    <p class="top-reason__text">
                        ご相談から施工管理、アフターフォローまで、専属のスタッフが一貫して責任を持って担当。途中で担当が変わる不安はありません。
                    </p>
                    <!-- PC用装飾イラスト（SPでは非表示） -->
                    <div class="top-reason__item-deco top-reason__item-deco2">
                        <img src="<?php bloginfo('template_url');?>/img/top-reason-deco-02.png" alt="">
                    </div>
                </div>
            </article>

            <!-- REASON 3 -->
            <article class="top-reason__item">
                <div class="top-reason__img-box">
                    <img src="<?php bloginfo('template_url');?>/img/top-reason-03.png" alt="施工後の内覧風景"
                        class="top-reason__img">
                </div>
                <div class="top-reason__content">
                    <span class="top-reason__number">REASON3</span>
                    <h3 class="top-reason__head">
                        施工後からが、<br>本当のお付き合いの始まりです。
                    </h3>
                    <span class="top-reason__tag">施工後から、真のお付き合い。</span>
                    <p class="top-reason__text">
                        何かあればすぐに駆けつけます。1年後も5年後も、「頼んでよかった」とお客様に感謝していただける仕事をすることが私たちの誇りです。
                    </p>
                    <!-- PC用装飾イラスト（SPでは非表示） -->
                    <div class="top-reason__item-deco top-reason__item-deco3">
                        <img src="<?php bloginfo('template_url');?>/img/top-reason-deco-03.png" alt="">
                    </div>
                </div>
            </article>

        </div>

        <!-- CTAボタン -->
        <div class="top-reason__cta">
            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-detail c-btn-detail--green">
                選ばれる理由を見る
                <span class="c-btn-detail__icon">
                    <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="arrow-icon">
                </span>
            </a>
        </div>
    </div>
</section>
<section class="top-case">
    <div class="l-container">
        <div class="top-case__inner">
            <img src="<?php bloginfo('template_url');?>/img/top-case-deco-left.png" alt=""
                class="top-case__deco top-case__deco--left">
            <img src="<?php bloginfo('template_url');?>/img/top-case-deco-right.png" alt=""
                class="top-case__deco top-case__deco--right">
            <div class="top-case__header-wrapper">
                <div class="c-section-header top-case__header">
                    <h2 class="c-section-header__title">施工事例・お客様の声</h2>
                    <span class="c-section-header__sub">CONSTRUCTION CASES &<br class="u-sp"> CUSTOMER VOICES</span>
                </div>
            </div>
            <p class="top-case__lead">
                施工事例とお客様の声から、<br class="u-sp">私たちの取り組みと品質をご覧ください。
            </p>
            <div class="top-case__list">
                <a href="<?php bloginfo('url'); ?>/works/" class="top-case__card">
                    <figure class="top-case__card-img-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-01.jpg" alt="施工事例画像"
                            class="top-case__card-img">
                    </figure>
                    <div class="top-case__card-body">
                        <div class="top-case__card-meta">
                            <span class="top-case__tag">リフォーム</span>
                            <span class="top-case__tag">お客様の声</span>
                            <span class="top-case__name">長野市 山口様</span>
                        </div>
                        <h3 class="top-case__card-title">家族の時間とアトリエの時間。</h3>
                        <p class="top-case__card-text">
                            長野にいながら全国の多様な家づくりや暮らしに触れる機会を提供します。
                        </p>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/works/" class="top-case__card">
                    <figure class="top-case__card-img-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-02.jpg" alt="施工事例画像"
                            class="top-case__card-img">
                    </figure>
                    <div class="top-case__card-body">
                        <div class="top-case__card-meta">
                            <span class="top-case__tag">リフォーム</span>
                            <span class="top-case__name">長野市 山口様</span>
                        </div>
                        <h3 class="top-case__card-title">家族の時間とアトリエの時間。</h3>
                        <p class="top-case__card-text">
                            長野にいながら全国の多様な家づくりや暮らしに触れる機会を提供します。
                        </p>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/works/" class="top-case__card">
                    <figure class="top-case__card-img-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-03.jpg" alt="施工事例画像"
                            class="top-case__card-img">
                    </figure>
                    <div class="top-case__card-body">
                        <div class="top-case__card-meta">
                            <span class="top-case__tag">リフォーム</span>
                            <span class="top-case__tag">お客様の声</span>
                            <span class="top-case__name">長野市 山口様</span>
                        </div>
                        <h3 class="top-case__card-title">家族の時間とアトリエの時間。</h3>
                        <p class="top-case__card-text">
                            長野にいながら全国の多様な家づくりや暮らしに触れる機会を提供します。
                        </p>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/works/" class="top-case__card">
                    <figure class="top-case__card-img-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-04.jpg" alt="施工事例画像"
                            class="top-case__card-img">
                    </figure>
                    <div class="top-case__card-body">
                        <div class="top-case__card-meta">
                            <span class="top-case__tag">リフォーム</span>
                            <span class="top-case__name">長野市 山口様</span>
                        </div>
                        <h3 class="top-case__card-title">家族の時間とアトリエの時間。</h3>
                        <p class="top-case__card-text">
                            長野にいながら全国の多様な家づくりや暮らしに触れる機会を提供します。
                        </p>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/works/" class="top-case__card">
                    <figure class="top-case__card-img-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-05.jpg" alt="施工事例画像"
                            class="top-case__card-img">
                    </figure>
                    <div class="top-case__card-body">
                        <div class="top-case__card-meta">
                            <span class="top-case__tag">リフォーム</span>
                            <span class="top-case__name">長野市 山口様</span>
                        </div>
                        <h3 class="top-case__card-title">家族の時間とアトリエの時間。</h3>
                        <p class="top-case__card-text">
                            長野にいながら全国の多様な家づくりや暮らしに触れる機会を提供します。
                        </p>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/works/" class="top-case__card">
                    <figure class="top-case__card-img-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-06.jpg" alt="施工事例画像"
                            class="top-case__card-img">
                    </figure>
                    <div class="top-case__card-body">
                        <div class="top-case__card-meta">
                            <span class="top-case__tag">お客様の声</span>
                            <span class="top-case__name">長野市 山口様</span>
                        </div>
                        <h3 class="top-case__card-title">家族の時間とアトリエの時間。</h3>
                        <p class="top-case__card-text">
                            長野にいながら全国の多様な家づくりや暮らしに触れる機会を提供します。
                        </p>
                    </div>
                </a>
            </div>
            <div class="top-case__cta">
                <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-detail c-btn-detail--green-border">
                    事例一覧を見る
                    <span class="c-btn-detail__icon">
                        <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="arrow-icon">
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="top-message">
    <div class="l-container">
        <div class="top-message__inner">

            <div class="top-message__content">
                <div class="top-message__header-area">
                    <div class="c-section-header c-section-header--message">
                        <span class="c-section-header__sub">MESSAGE</span>
                        <h2 class="c-section-header__title">
                            <span>地域密着型の</span><span>私達にお任せください。</span>
                        </h2>
                    </div>
                    <img src="<?php bloginfo('template_url');?>/img/top-message-deco-people.png" alt=""
                        class="top-message__deco-people">
                </div>

                <p class="top-message__text">
                    たかやしろ住研は、「住まいのかかりつけ医」を目指して、あなたの住まいをあなたと共に守る会社です。<br>
                    住まいの状態や不具合を把握し、修繕のほか維持管理上のアドバイスなどもします。住まいで困っているあなたを不安や心配から解放し、快適で穏やかな暮らしを過ごしてもらえるように努力しています。<br>
                    「こんなのどこへ頼めばいいかわからない」と困っていられる方は、是非お待ちしております。
                </p>

                <div class="top-message__name-label">
                    <span class="top-message__post">
                        <span class="u-show-pc">代表</span>
                        <span class="u-show-sp">代表取締役</span>
                    </span>
                    <span class="top-message__name">小笹 正幸</span>
                    <span class="top-message__name-en">Masayuki Kosasa</span>
                </div>
            </div>

            <div class="top-message__img-area">
                <figure class="top-message__photo-wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/top-message-photo.jpg" alt="代表 小笹 正幸"
                        class="top-message__photo">
                </figure>
                <img src="<?php bloginfo('template_url');?>/img/top-message-deco-building.png" alt=""
                    class="top-message__deco-building">
            </div>

        </div>
    </div>
</section>
<section class="top-blog">
    <div class="l-container">

        <!-- ヘッダーエリア -->
        <div class="top-blog__head">
            <div class="top-blog__head-left">
                <div class="c-section-header top-blog__title-area">
                    <h2 class="c-section-header__title">ブログ</h2>
                    <span class="c-section-header__sub">BLOG</span>
                </div>
                <p class="top-blog__lead">多くのお客様に選ばれる理由をご紹介します。</p>
            </div>

            <!-- タブ -->
            <div class="top-blog__tabs">
                <span class="top-blog__tab is-active" data-target="#blog-tab-column">お役立ちコラム</span>
                <span class="top-blog__tab" data-target="#blog-tab-staff">スタッフブログ</span>
            </div>
        </div>

        <!-- スライダーエリア -->
        <div class="top-blog__sliders">

            <!-- ① お役立ちコラム用 -->
            <!-- ラッパーを追加 -->
            <div id="blog-tab-column" class="top-blog__slider-wrapper">

                <div class="top-blog__slider js-slick-blog">
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-01.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">お役立ちコラム</span>
                                <span class="top-blog__name">長野市 山口様</span>
                            </div>
                            <p class="top-blog__text">
                                長野県北部にある中野市を中心にお住まいや建物に関するお困りゴトに対応しております
                            </p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-02.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">お役立ちコラム</span>
                                <span class="top-blog__name">長野市 山口様</span>
                            </div>
                            <p class="top-blog__text">長野県北部にある中野市を中心にお住まいや建物に関するお困りゴトに対応しております</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-03.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">お役立ちコラム</span>
                                <span class="top-blog__name">長野市 山口様</span>
                            </div>
                            <p class="top-blog__text">長野県北部にある中野市を中心にお住まいや建物に関するお困りゴトに対応しております</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-04.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">お役立ちコラム</span>
                                <span class="top-blog__name">長野市 山口様</span>
                            </div>
                            <p class="top-blog__text">長野県北部にある中野市を中心にお住まいや建物に関するお困りゴトに対応しております</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-01.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">お役立ちコラム</span>
                                <span class="top-blog__name">長野市 山口様</span>
                            </div>
                            <p class="top-blog__text">
                                長野県北部にある中野市を中心にお住まいや建物に関するお困りゴトに対応しております
                            </p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-02.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">お役立ちコラム</span>
                                <span class="top-blog__name">長野市 山口様</span>
                            </div>
                            <p class="top-blog__text">長野県北部にある中野市を中心にお住まいや建物に関するお困りゴトに対応しております</p>
                        </a>
                    </article>
                </div>

                <!-- 自作矢印ボタン (Slickの外に配置) -->
                <div class="top-blog__arrows">
                    <button class="top-blog__arrow top-blog__arrow--prev">
                        <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="前へ">
                    </button>
                    <button class="top-blog__arrow top-blog__arrow--next">
                        <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="次へ">
                    </button>
                </div>

            </div><!-- /#blog-tab-column -->


            <!-- ② スタッフブログ用 -->
            <div id="blog-tab-staff" class="top-blog__slider-wrapper" style="display: none;">

                <div class="top-blog__slider js-slick-blog">
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-01.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">スタッフブログ</span>
                                <span class="top-blog__name">スタッフ</span>
                            </div>
                            <p class="top-blog__text">スタッフブログの内容が入ります。</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-02.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">スタッフブログ</span>
                                <span class="top-blog__name">スタッフ</span>
                            </div>
                            <p class="top-blog__text">スタッフブログの内容が入ります。</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-03.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">スタッフブログ</span>
                                <span class="top-blog__name">スタッフ</span>
                            </div>
                            <p class="top-blog__text">スタッフブログの内容が入ります。</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-04.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">スタッフブログ</span>
                                <span class="top-blog__name">スタッフ</span>
                            </div>
                            <p class="top-blog__text">スタッフブログの内容が入ります。</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-01.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">スタッフブログ</span>
                                <span class="top-blog__name">スタッフ</span>
                            </div>
                            <p class="top-blog__text">スタッフブログの内容が入ります。</p>
                        </a>
                    </article>
                    <article class="top-blog__item">
                        <a href="<?php bloginfo('url'); ?>/works/" class="top-blog__link">
                            <figure class="top-blog__img-wrap">
                                <img src="<?php bloginfo('template_url');?>/img/top-blog-02.jpg" alt="記事サムネイル"
                                    class="top-blog__img">
                            </figure>
                            <div class="top-blog__meta">
                                <span class="top-blog__cat">スタッフブログ</span>
                                <span class="top-blog__name">スタッフ</span>
                            </div>
                            <p class="top-blog__text">スタッフブログの内容が入ります。</p>
                        </a>
                    </article>
                </div>

                <!-- 自作矢印ボタン -->
                <div class="top-blog__arrows">
                    <button class="top-blog__arrow top-blog__arrow--prev">
                        <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="前へ">
                    </button>
                    <button class="top-blog__arrow top-blog__arrow--next">
                        <img src="<?php bloginfo('template_url');?>/img/ico-arrow.svg" alt="次へ">
                    </button>
                </div>

            </div><!-- /#blog-tab-staff -->

        </div><!-- /.top-blog__sliders -->

    </div>
</section>


<?php get_footer(); ?>