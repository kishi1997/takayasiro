<?php get_header(); ?>

<div class="page-amadoi">
    <div class="c-pagehead-set">
        <div class="c-pagehead-text">
            <h1><?php the_title(); ?></h1>
            <p>RAINGUTTER</p>
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
                        普段あまり意識することのない「雨樋（あまどい）」ですが、実は屋根と同じくらい重要な役割を担っています。<br>
                        その役割とは、屋根に降った大量の雨水を集め、地面の排水溝へとスムーズに誘導する「水の通り道」をつくること。もし雨樋がなければ、雨水は屋根から直接地面に落ち、泥はねで外壁を汚したり、建物の土台を傷めたりしてしまいます。<br>
                        雨樋工事とは、この「水の通り道」を正常に機能させ、お住まいを足元から守るための大切なメンテナンスです。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <div class="amadoi-worries__head">
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
                <p>
                    もし一つでも当てはまる場合、雨樋が正常に機能していない可能性があります。<br>
                    「たかが雨樋」と放置してしまうと、溢れ出した雨水がお住まい全体に悪影響を及ぼし、気づかないうちに家の寿命を縮めてしまっているかもしれません。<br>
                    被害が広がる前に、早めの点検をおすすめします。
                </p>
            </div>
        </section>

        <section class="amadoi-point c-2col c-2col_media">
            <div class="amadoi-point__head">
                <div class="c-title">
                    <h2 class="c-title--jp">「たかが雨樋」が、家全体の寿命を縮めます</h2>
                    <span class="c-title--en">JUST A GUTTER SHORTENS YOUR HOME</span>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/amadoi-point-img1.jpg" alt="ご自宅で打ち合わせをするご家族とスタッフ">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT1</p>
                            <h3 class="c-2col__item--title">外壁の保護</h3>
                            <p class="c-2col__item--text">
                                雨樋が正常であれば、雨水はパイプを通って地面へ流れます。しかし、壊れていると雨水が直接外壁を伝って流れ落ちてしまいます。これにより、外壁が常に湿った状態になり、汚れやコケが付着しやすくなるだけでなく、外壁材のひび割れや劣化を早める原因となります。
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img1.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/amadoi-point-img2.jpg" alt="天井にできた雨漏りのシミ">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT2</p>
                            <h3 class="c-2col__item--title">
                                土台・基礎の保護
                            </h3>
                            <p class="c-2col__item--text">
                                屋根から地面へ直接雨水が落ちると、その衝撃で地面がえぐれたり、泥はねが起きたりします。さらに深刻なのは、建物を支える「基礎コンクリート」の周りが常に水浸しになることです。基礎周辺の地盤が緩むリスクや、床下の湿気上昇を招き、家の土台を脅かします。
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img2.png" alt="">
                            </div>
                        </div>
                    </article>

                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/amadoi-point-img3.jpg" alt="塗装されたスレート屋根イメージ">
                        </figure>
                        <div class="c-2col__item--body">
                            <p class="c-2col__item--label">POINT3</p>
                            <h3 class="c-2col__item--title">
                                雨漏りの予防
                            </h3>
                            <p class="c-2col__item--text">
                                ゴミが詰まって雨水が逆流（オーバーフロー）すると、屋根の裏側（軒天）や外壁の隙間から、建物内部へ水が浸入することがあります。「天井にシミができたと思ったら、原因は屋根ではなく雨樋の詰まりだった」というケースも少なくありません。
                            </p>
                            <div class="c-2col__item--illust u-pc">
                                <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img3.png" alt="">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="amadoi-ifCase c-2col c-2col_reverse">
            <div class="amadoi-ifCase__head">
                <div class="c-title">
                    <h2 class="c-title--jp">もし放置すると？</h2>
                    <span class="c-title--en">IF LEFT UNATTENDED</span>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__list">
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/amadoi-ifCase-img1.jpg" alt="ご自宅で打ち合わせをするご家族とスタッフ">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                外壁は常に湿った状態になり、<br class="u-pc">
                                コケやカビが繁殖
                            </h3>
                            <p class="c-2col__item--text">
                                壊れた雨樋からバシャバシャと水がかかり続ける外壁は、常にジメジメと湿った状態になります。日当たりが悪い北面などでは特に、緑色のコケや黒カビが繁殖しやすくなり、建物の美観を損なうだけでなく、外壁材そのものを腐らせてしまいます。
                            </p>
                        </div>
                    </article>
                    <article class="c-2col__item">
                        <figure class="c-2col__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/amadoi-ifCase-img2.jpg" alt="ご自宅で打ち合わせをするご家族とスタッフ">
                        </figure>
                        <div class="c-2col__item--body">
                            <h3 class="c-2col__item--title">
                                シロアリの発生原因になり、<br class="u-pc">
                                家の耐震性にも悪影響
                            </h3>
                            <p class="c-2col__item--text">
                                基礎周辺や床下の湿気が高まると、湿った木材を好むシロアリを呼び寄せる格好の環境となってしまいます。もし建物を支える重要な柱や土台がシロアリに食べられてしまうと、家の強度がガクンと落ち、地震が起きた際に倒壊する危険性が高まります。
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="amadoi-repair c-3col">
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
                                <img src="<?php bloginfo('template_url');?>/img/amadoi-repair-img1.jpg" alt="外壁・屋根塗装のイメージ画像">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">軽度（詰まり・軽微なズレ）</h3>
                                <span class="c-3col__item--tag">雨樋の清掃・調整</span>
                                <p class="c-3col__item--text">
                                    落ち葉や土砂が詰まっているだけなら、高圧洗浄や手作業での清掃で解決します。また、雪の重みなどで金具が少し曲がっている場合は、水の流れる角度（勾配）を調整し直すことで、スムーズな排水を取り戻します。
                                </p>
                            </div> 
                        </div>
                        <div class="c-3col__item">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/amadoi-repair-img2.jpg" alt="外壁・屋根塗装のイメージ画像">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">中度（割れ・外れ）</h3>
                                <span class="c-3col__item--tag">雨樋の補修・部分交換</span>
                                <p class="c-3col__item--text">
                                    「継ぎ目が外れて水が漏れている」「一部だけ割れている」といった場合は、その部分だけを新しい部材に交換したり、専用の接着剤で補修したりします。全面交換よりも費用を抑え、機能を回復させることができます。
                                </p>
                            </div>                                
                        </div>
                        <div class="c-3col__item">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/amadoi-repair-img3.jpg" alt="外壁・屋根塗装のイメージ画像">
                            </div>
                            <div class="c-3col__item--body">
                                <h3 class="c-3col__item--title">重度（全体的な劣化・歪み）</h3>
                                <span class="c-3col__item--tag">雨樋の全交換（架け替え）</span>
                                <p class="c-3col__item--text">
                                    経年劣化で全体的に割れやすくなっていたり、雪の重みで大きく歪んでしまっている場合は、すべての雨樋を新しいものに交換（架け替え）します。最新の雨樋は耐久性が高く、デザインも豊富です。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="amadoi-flow c-flow-slim c-3col">
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
                            <h3 class="c-flow-slim__heading">お問い合わせ・ご相談</h3>
                            <p class="c-flow-slim__desc">
                                「雨の日に水が溢れている気がする」「掃除だけで頼んでいいの？」など、お気軽にご連絡ください。雨樋掃除などの小工事も喜んで承ります。お電話、またはお問い合わせフォームより承っております。<br>
                                ※しつこい営業電話は一切いたしませんので、ご安心ください。</p>
                        </div>
                    </div>
                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>02</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">現地調査（無料診断）</h3>
                            <p class="c-flow-slim__desc">
                                実際にハシゴをかけて雨樋の中を確認したり、水を流して「勾配（傾き）」が正しいかチェックしたりします。詰まりが原因か、破損が原因かを特定し、無駄な工事を提案しないよう正確に診断します。
                            </p>
                        </div>
                    </div>
                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>03</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">プラン・お見積りのご提案</h3>
                            <p class="c-flow-slim__desc">
                                「清掃だけで直るのか」「交換が必要か」を判断し、最適なプランをご提案します。部分的な修理で済む場合は、そのように正直にお伝えし、費用を最小限に抑えるご提案を心がけています。
                            </p>
                        </div>
                    </div>
                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>04</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">ご契約</h3>
                            <p class="c-flow-slim__desc">
                                内容にご納得いただけましたら、工事日程を調整し、作業を開始いたします。近隣の方へのご挨拶回りなど、工事前の準備もしっかりサポートいたします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="amadoi-cases c-3col">
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
                            <a href="<?php bloginfo('url'); ?>/works/amadoi/">
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

        <section class="amadoi-faq c-faq">
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
                                <span class="c-faq__question--title">雨樋の掃除だけでもお願いできますか？</span>
                                <span class="c-faq__question--arrows">
                                    <span class="c-faq__question-right"></span>
                                </span>
                            </dt>
                            <dd class="c-faq__answer">
                                <p>はい、もちろんです！高い場所の掃除は危険ですので、ぜひプロにお任せください。「詰まりを取るだけで水漏れが直った」というケースも非常に多いです。定期的な清掃も承っておりますので、お気軽にご相談ください。</p>
                            </dd>
                        </div>
                        <div class="c-faq__item">
                            <dt class="c-faq__question">
                                <span class="c-faq__question--title">雪の重みで雨樋が歪んでしまいました。火災保険は使えますか？</span>
                                <span class="c-faq__question--arrows">
                                    <span class="c-faq__question-right"></span>
                                </span>
                            </dt>
                            <dd class="c-faq__answer">
                                <p>はい、使える可能性が高いです。雪害（雪の重み）や台風（風災）、雹（ひょう）などで雨樋が破損した場合は、火災保険の補償対象となることが一般的です。保険申請に必要な「被害状況の写真撮影」や「お見積書の作成」も私たちがサポートいたします。</p>
                            </dd>
                        </div>

                        <div class="c-faq__item">
                            <dt class="c-faq__question">
                                <span class="c-faq__question--title">工事にはどれくらいの日数がかかりますか？</span>
                                <span class="c-faq__question--arrows">
                                    <span class="c-faq__question-right"></span>
                                </span>
                            </dt>
                            <dd class="c-faq__answer">
                                <p>工事内容によりますが、清掃や部分的な修理であれば半日〜1日で完了することがほとんどです。家全体の雨樋をすべて交換する場合でも、足場の設置を含めて数日〜1週間程度で完了します。</p>
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