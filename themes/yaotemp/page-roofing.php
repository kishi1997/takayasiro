<?php get_header(); ?>

<div class="page-roofing">
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
                        屋根・外壁工事とは？
                    </h2>
                    <p class="c-parts-sec__lead">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </div>
        </section>

        <section class="roofing-worries c-parts-check">
            <div class="l-container">
                <div class="roofing-worries__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">こんなお悩みありませんか？</h2>
                        <span class="c-title--en">DO YOU HAVE THESE CONCERNS?</span>
                    </div>
                </div>
                <ul class="c-parts-check__list">
                    <li><p>すでに雨漏りが発生している</p></li>
                    <li><p>屋根材が割れたり、大きく剥がれたりしている</p></li>
                    <li><p>業者に「これは塗装では無理だ」と断られた</p></li>
                    <li><p>築20年以上が経過し、下地から不安だ</p></li>
                </ul>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                テキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </section>

        <section class="roofing-point c-2col c-2col_media">
            <div class="roofing-point__head">
                <div class="c-title">
                    <h2 class="c-title--jp">なぜ「塗装」ではなく「工事」が必要か</h2>
                    <span class="c-title--en">WHY PAINTING IS NOT ENOUGH</span>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/roofing-point-img1.jpg" alt="施工されたスレート屋根の表面">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT1</p>
                            <h3 class="c-2col__item--title">雨漏りの根本解決</h3>
                            <span class="c-2col__item--tag">テキストテキストテキストテキスト</span>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img1.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/roofing-point-img2.jpg" alt="和風住宅の瓦屋根">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT2</p>
                            <h3 class="c-2col__item--title">
                                住まいの長寿命化
                            </h3>
                            <span class="c-2col__item--tag">テキストテキストテキストテキスト</span>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img2.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/roofing-point-img3.jpg" alt="白い外壁のモダンな住宅外観">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT3</p>
                            <h3 class="c-2col__item--title">
                                耐震性の向上
                            </h3>
                            <span class="c-2col__item--tag">テキストテキストテキストテキスト</span>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img3.png" alt="">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="roofing-ifCase c-2col c-2col_reverse">
            <div class="roofing-ifCase__head">
                <div class="c-title">
                    <h2 class="c-title--jp">もし放置すると？</h2>
                    <span class="c-title--en">IF LEFT UNATTENDED</span>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/roofing-ifCase-img1.jpg" alt="天井にできた雨漏りのシミ">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                わずかな雨漏りでも、<br class="u-pc">
                                内部の柱や断熱材を湿らせ、<br class="u-pc">
                                腐食やカビの原因
                            </h3>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </article>
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/roofing-ifCase-img2.jpg" alt="小屋裏に見える雨漏りの水濡れ跡">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                シロアリを呼び寄せる原因にもなり、<br class="u-pc">
                                家の耐震性が著しく低下する危険
                            </h3>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="roofing-method c-2col">
            <div class="roofing-method__head">
                <div class="c-title">
                    <h2 class="c-title--jp">選べる2つの工法</h2>
                    <span class="c-title--en">TWO METHODS TO CHOOSE FROM</span>
                </div>
            </div>

            <div class="l-container">
                <div class="roofing-method__list">
                    <div class="roofing-method__item">
                        <div class="roofing-method__img">
                            <img src="<?php bloginfo('template_url');?>/img/roofing-method-img1.jpg" alt="">
                        </div>
                        <div class="roofing-method__content">
                            <span class="bg-number">01</span>
                            <h3 class="roofing-method__content--title">
                                カバー工法
                            </h3>
                            <p class="roofing-method__content--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>

                    <div class="roofing-method__item">
                        <div class="roofing-method__img">
                            <img src="<?php bloginfo('template_url');?>/img/roofing-method-img2.jpg" alt="">
                        </div>
                        <div class="roofing-method__content">
                            <span class="bg-number">02</span>
                            <h3 class="roofing-method__content--title">
                                葺き替え（張り替え）
                            </h3>
                            <p class="roofing-method__content--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="roofing-flow c-flow-slim c-3col">
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
                            <p class="c-flow-slim__desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>02</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">見出し見出し見出し</h3>
                            <p class="c-flow-slim__desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>03</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">見出し見出し見出し</h3>
                            <p class="c-flow-slim__desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>04</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">見出し見出し見出し</h3>
                            <p class="c-flow-slim__desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                </div>
                <div class="c-3col__inner">
                    <div class="c-3col__list">
                        <div class="c-3col__item">
                            <a href="<?php bloginfo('url'); ?>/works/exterior/">
                                <div class="c-3col__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img1.jpg" alt="外壁・屋根塗装のイメージ画像">
                                </div>
                                <div class="c-3col__item--body">
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
                                    <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img2.jpg" alt="外壁・屋根塗装のイメージ画像">
                                </div>
                                <div class="c-3col__item--body">
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
                                    <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img3.jpg" alt="外壁・屋根塗装のイメージ画像">
                                </div>
                                <div class="c-3col__item--body">
                                    <h3 class="c-3col__item--title">施工事例テスト施工事例テスト</h3>
                                    <p class="c-3col__item--text">
                                        施工事例のテキストが入ります。施工事例のテキストが入ります。施工事例のテキストが…
                                    </p>
                                </div>                                
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="roofing-cases c-3col">
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
                            <a href="<?php bloginfo('url'); ?>/works/roofing/">
                                <div class="c-3col__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/c-service-img1.jpg" alt="施工事例のイメージ画像">
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
                            <a href="<?php bloginfo('url'); ?>/works/roofing/">
                                <div class="c-3col__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/c-service-img2.jpg" alt="施工事例のイメージ画像">
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
                            <a href="<?php bloginfo('url'); ?>/works/roofing/">
                                <div class="c-3col__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/c-service-img3.jpg" alt="施工事例のイメージ画像">
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

        <section class="roofing-faq c-faq">
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
                                <p>回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります</p>
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
                                <p>回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります</p>
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
                                <p>回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります回答が入ります</p>
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