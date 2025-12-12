<?php get_header(); ?>

<div class="page-exterior">
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

            <section class="c-parts-sec">
                <div class="l-container">
                    <div class="c-parts-sec__item">
                        <h2 class="c-parts-sec__title">
                            外壁・屋根塗装とは？
                        </h2>
                        <p class="c-parts-sec__lead">外壁や屋根のメンテナンスには、大きく分けて「塗装」と「工事（張り替え・葺き替え）」の2種類があります。
                            「塗装」が今ある素材を守るためのメンテナンスであるのに対し、「工事」は素材そのものを新しくする、いわばお住まいの「再生手術」です。
                            塗装では手が届かない防水シート（下地）の寿命や、雨漏りといった深刻なトラブルも、建材を一新することで根本から解決。
                            お住まいの寿命をリセットし、この先何十年も安心して暮らせる強い家へと蘇らせます。</p>
                    </div>
                </div>
            </section>

            <section class="c-parts-check">
                <div class="l-container">
                    <div class="about-reason__head">
                        <div class="c-title">
                            <h2 class="c-title--jp">こんなお悩みありませんか？</h2>
                            <span class="c-title--en">DO YOU HAVE THESE CONCERNS?</span>
                        </div>
                    </div>
                    <ul class="c-parts-check__list">
                        <li>
                            <p>外壁にひび割れ（クラック）がある</p>
                        </li>
                        <li>
                            <p>壁を触ると手に白い粉がつく</p>
                        </li>
                        <li>
                            <p>屋根の色が褪せている、コケが生えている</p>
                        </li>
                    </ul>
                    <p>これらの症状は、表面の塗装だけでは解決できない、お住まいの危険信号です。
                        もし、この状態で無理に塗装をしても、すぐに剥がれてしまったり、内部で腐食が進行してしまったりと、費用が無駄になってしまう可能性があります。
                        まずはプロの目で「塗装で大丈夫か」「工事が必要か」を正しく診断することが大切です。</p>
                </div>
            </section>

            <section class="exterior-point c-2col c-2col_media">
                <div class="exterior-point__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">なぜ塗装が必要なのでしょうか？</h2>
                        <span class="c-title--en">WHY PAINTING IS ESSENTIAL</span>
                    </div>
                </div>

                <div class="l-container">
                    <div class="c-2col__list">
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-point-img1.jpg"
                                    alt="外壁サイディングの素材感と継ぎ目のディテール">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT1</p>
                                <h3 class="c-2col__item--title">防水性の回復</h3>
                                <span class="c-2col__item--tag">テキストテキスト</span>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                                <div class="c-2col__item--illust u-pc">
                                    <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img1.png"
                                        alt="">
                                </div>
                            </div>
                        </article>

                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-point-img2.jpg"
                                    alt="スレート屋根の施工と仕上がりイメージ">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT2</p>
                                <h3 class="c-2col__item--title">
                                    美観の向上
                                </h3>
                                <span class="c-2col__item--tag">テキストテキスト</span>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                                <div class="c-2col__item--illust u-pc">
                                    <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img2.png"
                                        alt="">
                                </div>
                            </div>
                        </article>

                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-point-img3.jpg"
                                    alt="外装リフォーム後の住宅外観と仕上がりイメージ">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT3</p>
                                <h3 class="c-2col__item--title">
                                    遮熱・断熱効果
                                </h3>
                                <span class="c-2col__item--tag">テキストテキスト</span>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                                <div class="c-2col__item--illust u-pc">
                                    <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img3.png"
                                        alt="">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="exterior-ifCase c-2col c-2col_reverse">
                <div class="exterior-ifCase__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">もし放置すると？</h2>
                        <span class="c-title--en">IF LEFT UNATTENDED</span>
                    </div>
                </div>

                <div class="l-container">
                    <div class="c-2col__list">
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-ifCase-img1.jpg"
                                    alt="ひび割れた壁の様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    劣化した塗膜の隙間から雨水が侵入し、<br class="u-pc">
                                    壁の内側や柱（構造体）を腐食
                                </h3>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </article>
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-ifCase-img2.jpg"
                                    alt="ひび割れた壁の様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    最終的には塗装では対応できなくなり、<br class="u-pc">
                                    高額な「張り替え工事」が必要になる可能性
                                </h3>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="exterior-work c-2col">
                <div class="exterior-work__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">「長持ち」が違う、<br class="u-pc">たかやしろ住研の丁寧な仕事</h2>
                        <span class="c-title--en">LASTING QUALITY FROM CAREFUL WORK</span>
                    </div>
                </div>

                <div class="l-container">
                    <div class="c-2col__list">
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-work-img1.jpg"
                                    alt="壁を高圧洗浄する様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    塗料の性能を最大化する「高圧洗浄と下地処理」
                                </h3>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </article>
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-work-img2.jpg"
                                    alt="壁の塗装をしている様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    耐久性を約束する「基本の3回塗り」
                                </h3>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </article>
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/exterior-work-img3.jpg"
                                    alt="黒い外壁の戸建ての外観">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    代表が直接管理する「安心の施工品質」
                                </h3>
                                <p class="c-2col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="exterior-flow c-flow-slim c-3col">
                <div class="l-container">
                    <div class="c-flow-slim__head">
                        <div class="c-title">
                            <h2 class="c-title--jp">お問い合わせ～ご契約の流れ</h2>
                            <span class="c-title--en">INQUIRY TO CONTRACT PROCESS</span>
                        </div>
                    </div>

                    <div class="c-flow-slim__list">
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>01</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">見出し見出し見出し</h3>
                                <p class="c-flow-slim__desc">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>02</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">見出し見出し見出し</h3>
                                <p class="c-flow-slim__desc">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>03</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">見出し見出し見出し</h3>
                                <p class="c-flow-slim__desc">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>04</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">見出し見出し見出し</h3>
                                <p class="c-flow-slim__desc">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-3col__inner">
                        <div class="c-3col__list">
                            <div class="c-3col__item">
                                <a href="<?php bloginfo('url'); ?>/works/exterior/">
                                    <div class="c-3col__item--img">
                                        <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img1.jpg"
                                            alt="ご夫婦とスタッフが相談している写真">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <h3 class="c-3col__item--title">見出し見出し見出し見出し</h3>
                                        <p class="c-3col__item--text">
                                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="c-3col__item">
                                <a href="<?php bloginfo('url'); ?>/works/exterior/">
                                    <div class="c-3col__item--img">
                                        <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img2.jpg"
                                            alt="外でスタッフが資料を見せながら提案している写真">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <h3 class="c-3col__item--title">見出し見出し見出し見出し</h3>
                                        <p class="c-3col__item--text">
                                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="c-3col__item">
                                <a href="<?php bloginfo('url'); ?>/works/exterior/">
                                    <div class="c-3col__item--img">
                                        <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img3.jpg"
                                            alt="新築のように仕上がった白い家の外観">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <h3 class="c-3col__item--title">見出し見出し見出し見出し</h3>
                                        <p class="c-3col__item--text">
                                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="exterior-cases c-3col">
                <div class="l-container">
                    <div class="c-3col__head">
                        <div class="c-title">
                            <h2 class="c-title--jp">施工事例</h2>
                            <span class="c-title--en">CONSTRUCTION CASES</span>
                        </div>
                    </div>
                    <div class="c-3col__inner">
                        <div class="c-3col__list">
                            <div class="c-3col__item">
                                <a href="<?php bloginfo('url'); ?>/works/exterior/">
                                    <div class="c-3col__item--img">
                                        <img src="<?php bloginfo('template_url');?>/img/c-service-img1.jpg"
                                            alt="施工事例のイメージ画像">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <span class="c-3col__item--tag">外壁・屋根塗装</span>
                                        <div class="c-3col__item--meta">
                                            <span class="c-3col__item--place">〇〇市〇〇様</span>
                                        </div>
                                        <h3 class="c-3col__item--title">施工事例テスト施工事例テスト</h3>
                                        <p class="c-3col__item--text">
                                            施工事例のテキストが入ります。施工事例のテキストが入ります。施工事例のテキストが…
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="c-3col__item">
                                <a href="<?php bloginfo('url'); ?>/works/exterior/">
                                    <div class="c-3col__item--img">
                                        <img src="<?php bloginfo('template_url');?>/img/c-service-img2.jpg"
                                            alt="施工事例のイメージ画像">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <span class="c-3col__item--tag">外壁・屋根塗装</span>
                                        <div class="c-3col__item--meta">
                                            <span class="c-3col__item--place">〇〇市〇〇様</span>
                                        </div>
                                        <h3 class="c-3col__item--title">施工事例テスト施工事例テスト</h3>
                                        <p class="c-3col__item--text">
                                            施工事例のテキストが入ります。施工事例のテキストが入ります。施工事例のテキストが…
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="c-3col__item">
                                <a href="<?php bloginfo('url'); ?>/works/exterior/">
                                    <div class="c-3col__item--img">
                                        <img src="<?php bloginfo('template_url');?>/img/c-service-img3.jpg"
                                            alt="施工事例のイメージ画像">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <span class="c-3col__item--tag">外壁・屋根塗装</span>
                                        <div class="c-3col__item--meta">
                                            <span class="c-3col__item--place">〇〇市〇〇様</span>
                                        </div>
                                        <h3 class="c-3col__item--title">施工事例テスト施工事例テスト</h3>
                                        <p class="c-3col__item--text">
                                            施工事例のテキストが入ります。施工事例のテキストが入ります。施工事例のテキストが…
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="c-btn--line">
                            <a href="<?php bloginfo('url'); ?>/works/" class="c-btn--lineCircle">
                                事例一覧を見る
                                <span class="c-btn--arrows">
                                    <span class="c-btn--arrows-right"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="exterior-faq c-faq">
                <div class="l-container">
                    <div class="c-faq__head">
                        <div class="c-title">
                            <h2 class="c-title--jp">よくあるご質問</h2>
                            <span class="c-title--en">FAQ</span>
                        </div>
                    </div>

                    <div class="c-faq__inner">
                        <dl class="c-faq__list">
                            <div class="c-faq__item">
                                <dt class="c-faq__question">
                                    <span class="c-faq__question--title">質問が入ります質問が入ります質問が入ります</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります
                                    </p>
                                </dd>
                            </div>
                            <div class="c-faq__item">
                                <dt class="c-faq__question">
                                    <span class="c-faq__question--title">質問が入ります質問が入ります質問が入ります</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります
                                    </p>
                                </dd>
                            </div>

                            <div class="c-faq__item">
                                <dt class="c-faq__question">
                                    <span class="c-faq__question--title">質問が入ります質問が入ります質問が入ります</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります
                                    </p>
                                </dd>
                            </div>
                        </dl>
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