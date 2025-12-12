<?php get_header(); ?>

<div class="page-raingutter">
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
                        雨樋工事とは？
                    </h2>
                    <p class="c-parts-sec__lead">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <div class="raingutter-worries__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">こんなお悩みありませんか？</h2>
                        <span class="c-title--en">DO YOU HAVE THESE CONCERNS?</span>
                    </div>
                </div>
                <ul class="c-parts-check__list">
                    <li><p>雨樋が割れたり、外れたりしている</p></li>
                    <li><p>大雨の日、雨樋から水が溢れている</p></li>
                    <li><p>落ち葉や土が詰まって、雑草が生えている</p></li>
                    <li><p>雨樋の真下の地面がえぐれている</p></li>
                    <li><p>外壁が濡れている</p></li>
                </ul>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                テキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </section>

        <section class="raingutter-point c-2col c-2col_media">
            <div class="raingutter-point__head">
                <div class="c-title">
                    <h2 class="c-title--jp">「たかが雨樋」が、家全体の寿命を縮めます</h2>
                    <span class="c-title--en">JUST A GUTTER SHORTENS YOUR HOME</span>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/raingutter-point-img1.jpg" alt="ご自宅で打ち合わせをするご家族とスタッフ">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT1</p>
                            <h3 class="c-2col__item--title">外壁の保護</h3>
                            <span class="c-2col__item--tag">テキストテキスト</span>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img1.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/raingutter-point-img2.jpg" alt="天井にできた雨漏りのシミ">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT2</p>
                            <h3 class="c-2col__item--title">
                                土台・基礎の保護
                            </h3>
                            <span class="c-2col__item--tag">テキストテキスト</span>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img2.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/raingutter-point-img3.jpg" alt="塗装されたスレート屋根イメージ">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT3</p>
                            <h3 class="c-2col__item--title">
                                雨漏りの予防
                            </h3>
                            <span class="c-2col__item--tag">テキストテキスト</span>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img3.png" alt="">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="raingutter-ifCase c-2col c-2col_reverse">
            <div class="raingutter-ifCase__head">
                <div class="c-title">
                    <h2 class="c-title--jp">もし放置すると？</h2>
                    <span class="c-title--en">IF LEFT UNATTENDED</span>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/raingutter-ifCase-img1.jpg" alt="ご自宅で打ち合わせをするご家族とスタッフ">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                外壁は常に湿った状態になり、<br class="u-pc">
                                コケやカビが繁殖
                            </h3>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </article>
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/raingutter-ifCase-img2.jpg" alt="ご自宅で打ち合わせをするご家族とスタッフ">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                シロアリの発生原因になり、<br class="u-pc">
                                家の耐震性にも悪影響
                            </h3>
                            <p class="c-2col__item--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="raingutter-repair c-3col">
            <div class="l-container">
                <div class="c-3col__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">症状に合わせた最適な雨樋工事</h2>
                        <span class="c-title--en">OPTIMAL GUTTER REPAIR</span>
                    </div>
                </div>
                <div class="c-3col__inner">
                    <div class="c-3col__list">
                        <div class="c-3col__item">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/raingutter-repair-img1.jpg" alt="外壁・屋根塗装のイメージ画像">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">軽度（詰まり・軽微なズレ）</h3>
                                <p class="c-3col__item--text">
                                    施工事例のテキストが入ります。施工事例のテキストが入ります。施工事例のテキストが…
                                </p>
                            </div> 
                        </div>
                        <div class="c-3col__item">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/raingutter-repair-img2.jpg" alt="外壁・屋根塗装のイメージ画像">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">中度（割れ・外れ）</h3>
                                <p class="c-3col__item--text">
                                    施工事例のテキストが入ります。施工事例のテキストが入ります。施工事例のテキストが…
                                </p>
                            </div>                                
                        </div>
                        <div class="c-3col__item">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/raingutter-repair-img3.jpg" alt="外壁・屋根塗装のイメージ画像">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">重度（全体的な劣化・歪み）</h3>
                                <p class="c-3col__item--text">
                                    施工事例のテキストが入ります。施工事例のテキストが入ります。施工事例のテキストが…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="raingutter-flow c-flow-slim c-3col">
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
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img1.jpg" alt="ご夫婦とスタッフが相談している写真">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">見出し見出し見出し見出し</h3>
                                <p class="c-3col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>                                
                        </div>
                        <div class="c-3col__item">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img2.jpg" alt="外でスタッフが資料を見せながら提案している写真">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">見出し見出し見出し見出し</h3>
                                <p class="c-3col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>                                
                        </div>
                        <div class="c-3col__item">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/c-flow-slim-img3.jpg" alt="新築のように仕上がった白い家の外観">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">見出し見出し見出し見出し</h3>
                                <p class="c-3col__item--text">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="raingutter-cases c-3col">
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
                            <a href="<?php bloginfo('url'); ?>/works/raingutter/">
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
                            <a href="<?php bloginfo('url'); ?>/works/exterior/">
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
                            <a href="<?php bloginfo('url'); ?>/works/exterior/">
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

        <section class="raingutter-faq c-faq">
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