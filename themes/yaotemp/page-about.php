<?php get_header(); ?>

<div class="page-about">
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
                    <h2 class="c-parts-sec__title">私たちが大切にしているのは、<br>
                    1年後も「ありがとう」と<br class="u-sp">言われる仕事です。</h2>
                    <p class="c-parts-sec__lead">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </div>
        </section>

        <section class="about-reason c-2col c-2col_media">
            <div class="about-reason__head">
                <div class="c-title">
                    <h2 class="c-title--jp">たかやしろ住研が<br>選ばれる3つの理由</h2>
                    <span class="c-title--en">THREE REASONS TO BE CHOSEN</span>
                    <p class="c-title__desc">
                        たかやしろ住研が選ばれる理由を、<br class="u-sp">
                        3つのポイントでご紹介します。
                    </p>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-reason-img1.jpg" alt="ご自宅で打ち合わせをするご家族とスタッフ">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">REASON1</p>
                            <h3 class="c-2col__item--title">しつこい営業は、絶対にしません。</h3>
                            <span class="c-2col__item--tag">しつこさゼロ、誠実対応。</span>
                            <p class="c-2col__item--text">
                                私たちの役目は、お客様の「困った」を解決すること。ご納得いただくまで、契約を急かすことは決してありません。
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img1.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-reason-img2.jpg" alt="キッチンで設備説明を行うスタッフとお客様">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">REASON2</p>
                            <h3 class="c-2col__item--title">
                                専属スタッフが直接、<br>
                                ご相談からお引渡しまで担当します。
                            </h3>
                            <span class="c-2col__item--tag">専属スタッフが、最初から最後まで。</span>
                            <p class="c-2col__item--text">
                                ご相談から施工管理、アフターフォローまで、専属のスタッフが一貫して責任を持って担当。途中で担当が変わる不安はありません。
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img2.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-reason-img3.jpg" alt="施工後の住まいをご案内するスタッフとお客様">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">REASON3</p>
                            <h3 class="c-2col__item--title">
                                施工後からが、<br>
                                本当のお付き合いの始まりです。
                            </h3>
                            <span class="c-2col__item--tag">施工後から、真のお付き合い。</span>
                            <p class="c-2col__item--text">
                                何かあればすぐに駆けつけます。1年後も5年後も、「頼んでよかった」とお客様に感謝していただける仕事をすることが私たちの誇りです。
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img3.png" alt="">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="about-commitment c-2col c-2col_square">
            <div class="about-reason__head">
                <div class="c-title">
                    <h2 class="c-title--jp">たかやしろ住研5つの約束</h2>
                    <span class="c-title--en">TAKAYASHIRO’S 5 COMMITMENTS</span>
                    <p class="c-title__desc">
                        たかやしろ住研の5つの約束をご紹介します。
                    </p>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-commitment-img1.jpg" alt="工事内容についてスタッフが女性に直接説明している様子">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                あなたの「住まいのかかりつけ医」を<br class="u-sp">
                                目指します
                            </h3>
                            <p class="c-2col__item--text">
                                かかりつけ医とは、あなたやご家族の病気のことについて親身になってみてくれるお医者さんのことです。 日頃から患者の体質や病歴、健康状態を把握し、診療行為のほか健康管理上のアドバイスなどもしてくれる身近な医師のこと。<br>
                                常日頃から患者の状況をくわしく把握しているので、いざというとき適切に対応し、対応が困難な場合は専門医を紹介してくれます。<br>
                                このかかりつけ医の住宅版を目指し、たかやしろ住研は行動しています。
                            </p>
                        </div>
                    </article>
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-commitment-img2.jpg" alt="スタッフがご依頼者と打ち合わせをしながらお見積り相談をしている様子">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                住まいに関する相談を<br class="u-sp">
                                初回無料で行ないます
                            </h3>
                            <p class="c-2col__item--text">
                                住まいに関する色々な相談を受付けています。<br>
                                こんなの聞いていいのか迷うような事や些細な疑問等、大事になる前に気軽にご相談ください。 大事になるとそれこそ大きなお金がかかってくる場合があります。<br>
                                これは、人間と同じですね。<br>
                                ただし、私も万能ではありませんので、わからないことは少し時間をいただき専門家に聞きます。<br>
                                また、アフィリエイテッド・ファイナンシャル・プランナー（ＡＦＰ）と2級FP技能士の資格を有していますので、不動産や権利・登記関係・税金等お住まいに関するあらゆることもご相談ください。弊社で適切な対応ができない場合は、専門家の紹介もしております。<br>
                                どこに相談して良いのかわからない時は、まずはご相談ください。
                            </p>
                        </div>
                    </article>
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-commitment-img3.jpg" alt="図面を見ながら担当者が工事計画をご提案している様子">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">詳細で明確な見積が無料</h3>
                            <p class="c-2col__item--text">
                                一式○○，○○○円では終わらせません。<br>
                                出来る限りわかりやすく見積書を作成、 出来る限りわかりやすくご説明をし、出来る限りわかりやすい資料を添えるようにしています。<br>
                                ただし、見積もりは無料ですが、相見積もりは基本お受けしておりません。ご希望の方のみ、相見積もり料金5,400円（税込）をいただいてから見積作成をしております。（弊社施工依頼の場合は、工事代金に充当いたします）
                            </p>
                        </div>
                    </article>
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-commitment-img4.jpg" alt="お客様ご夫婦へ工事内容を丁寧に説明する担当者の様子">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">しつこい営業は一切しておりません</h3>
                            <p class="c-2col__item--text">
                                弊社からのしつこい営業（電話・訪問）は一切致しておりません。よくお客様に「結構あっさりしてるね！」とか「そんなんで大丈夫なの」と言われます。が、こういうスタンスが好みの方もいらっしゃるようですね。<br>
                                ※実は、一人でやっていますのでそこまでしつこく営業に時間がかけられません。
                            </p>
                        </div>
                    </article>
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/about-commitment-img5.jpg" alt="建築図面と住宅模型を使って工事提案を行うイメージ写真">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                契約するまで、<br class="u-sp">
                                いつでもキャンセルできます
                            </h3>
                            <p class="c-2col__item--text">
                                施工依頼や契約締結をするまでは、いつでもキャンセルができます。問い合わせや見積依頼したからと言って契約をしなければいけないことはありませんのでご安心ください。
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="about-message c-2col">
            <div class="l-container">
                <div class="about-message__left">
                    <div class="c-title">
                        <span class="c-title--en">MESSAGE</span>
                        <h2 class="c-title--jp">
                            地域密着型の<br>
                            私達にお任せください。
                        </h2>
                        <p class="c-title__desc">
                            たかやしろ住研は、「住まいのかかりつけ医」を目指して、あなたの住まいをあなたと共に守る会社です。<br>
                            住まいの状態や不具合を把握し、修繕のほか維持管理上のアドバイスなどもします。住まいで困っているあなたを不安や心配から解放し、快適で穏やかな暮らしを過ごしてもらえるように努力しています。<br>
                            「こんなのどこへ頼めばいいかわからない」と困っていられる方は、是非お待ちしております。
                        </p>
                    </div>
                    <div class="about-message__rep">
                        <span class="about-message__rep--label">代表</span>
                        <span class="about-message__name--jp">小笹 正幸</span>
                        <span class="about-message__name--en">Masayuki Kosasa</span>
                    </div>
                </div>
                <div class="about-message__right">
                    <figure class="about-message__figure">
                        <img src="<?php bloginfo('template_url');?>/img/about-message-img1.jpg" alt="たかやしろ住研 代表 小笹正幸">
                    </figure>
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
                        <a href="<?php bloginfo('url'); ?>/service/roof/">
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