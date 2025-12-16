<?php get_header(); ?>

<div class="page-tosou">
    <div class="c-pagehead-set">
        <div class="c-pagehead-text">
            <h1><?php the_title(); ?></h1>
            <p>COATING</p>
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
                        <p class="c-parts-sec__lead">
                            住まいは毎日、雨や風、紫外線という過酷な環境にさらされています。 <br>
                            外壁・屋根塗装とは、単に見た目をきれいに色付けするだけのものではありません。 その最大の目的は、強固な「塗料の膜」で家全体を包み込み、鎧のように守ること。 <br>
                            定期的にメンテナンスを行い、この「保護膜」を新しくすることで、 大切なお住まいを雨水の侵入や老朽化から守り、長く安心して暮らせる状態を保ちます。
                        </p>
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
                    <p>
                        もし、これらの中に一つでも当てはまる症状があれば、それはお住まいからの「SOSサイン」かもしれません。<br>
                        「まだ大丈夫だろう」と見過ごしていると、目に見えない部分で劣化が進行してしまうことも。<br>
                        手遅れになる前に、一度専門家の目による診断を受けることをおすすめします。
                    </p>
                </div>
            </section>

            <section class="tosou-point c-2col c-2col_media">
                <div class="tosou-point__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">なぜ塗装が必要なのでしょうか？</h2>
                        <span class="c-title--en">WHY PAINTING IS ESSENTIAL</span>
                    </div>
                </div>

                <div class="l-container">
                    <div class="c-2col__list">
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-point-img1.jpg"
                                    alt="外壁サイディングの素材感と継ぎ目のディテール">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT1</p>
                                <h3 class="c-2col__item--title">防水性の回復</h3>
                                <p class="c-2col__item--text">
                                    塗装によって作られる「塗膜」は、雨水を弾き返す防水シートの役割を果たします。経年劣化でこの機能が失われると、建物内部へ水分が侵入しやすくなります。塗装で防水性を回復させることは、雨漏りを未然に防ぎ、建物の寿命を延ばすための最も基本的なメンテナンスです。
                                </p>
                                <div class="c-2col__item--illust u-pc">
                                    <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img1.png"
                                        alt="">
                                </div>
                            </div>
                        </article>

                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-point-img2.jpg"
                                    alt="スレート屋根の施工と仕上がりイメージ">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT2</p>
                                <h3 class="c-2col__item--title">
                                    美観の向上
                                </h3>
                                <p class="c-2col__item--text">
                                    新築時は輝いていたお住まいも、年月と共に色褪せや汚れが目立ってきます。塗装を行うことで、新築のような美しい外観を取り戻すことができます。お住まいへの愛着が深まるだけでなく、資産価値を維持するという点でも大きなメリットがあります。
                                </p>
                                <div class="c-2col__item--illust u-pc">
                                    <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img2.png"
                                        alt="">
                                </div>
                            </div>
                        </article>

                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-point-img3.jpg"
                                    alt="外装リフォーム後の住宅外観と仕上がりイメージ">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT3</p>
                                <h3 class="c-2col__item--title">
                                    遮熱・断熱効果
                                </h3>
                                <p class="c-2col__item--text">
                                    最新の機能性塗料を使用することで、夏は太陽の熱を反射して室内の温度上昇を抑え、冬は室内の暖かさを逃しにくくする効果が期待できます。長野の厳しい暑さ・寒さを和らげ、一年を通して快適な室内環境をつくり、光熱費の削減にも貢献します。
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

            <section class="tosou-ifCase c-2col c-2col_reverse">
                <div class="tosou-ifCase__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">もし放置すると？</h2>
                        <span class="c-title--en">IF LEFT UNATTENDED</span>
                    </div>
                </div>

                <div class="l-container">
                    <div class="c-2col__list">
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-ifCase-img1.jpg"
                                    alt="ひび割れた壁の様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    劣化した塗膜の隙間から雨水が侵入し、<br class="u-pc">
                                    壁の内側や柱（構造体）を腐食
                                </h3>
                                <p class="c-2col__item--text">
                                    塗装の劣化を放置すると、ひび割れや剥がれた部分から雨水が建物内部へ侵入します。湿気を含んだ木材は腐りやすく、カビの発生や、建物を支える柱や土台（構造体）の腐食を引き起こし、シロアリ被害のリスクも高めてしまいます。
                                </p>
                            </div>
                        </article>
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-ifCase-img2.jpg"
                                    alt="ひび割れた壁の様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    最終的には塗装では対応できなくなり、<br class="u-pc">
                                    高額な「張り替え工事」が必要になる可能性
                                </h3>
                                <p class="c-2col__item--text">
                                    塗装メンテナンスの適切な時期を逃し、内部の腐食が進行してしまうと、表面の塗装だけでは修復できなくなります。外壁材や屋根材そのものを交換する「張り替え工事」や、大規模な修繕工事が必要となり、結果としてリフォーム費用が数百万円単位で高額になってしまう可能性があります。
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="tosou-work c-2col">
                <div class="tosou-work__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">「長持ち」が違う、<br class="u-pc">たかやしろ住研の丁寧な仕事</h2>
                        <span class="c-title--en">LASTING QUALITY FROM CAREFUL WORK</span>
                    </div>
                </div>

                <div class="l-container">
                    <div class="c-2col__list">
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-work-img1.jpg"
                                    alt="壁を高圧洗浄する様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    塗料の性能を最大化する「高圧洗浄と下地処理」
                                </h3>
                                <p class="c-2col__item--text">
                                    どんなに高級な塗料を使っても、塗る前の下地が汚れていたり傷んでいては、すぐに剥がれてしまいます。私たちは塗装前の洗浄とひび割れ補修に徹底的に時間をかけ、塗料が密着する土台を完璧に整えます。
                                </p>
                            </div>
                        </article>
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-work-img2.jpg"
                                    alt="壁の塗装をしている様子">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    耐久性を約束する「基本の3回塗り」
                                </h3>
                                <p class="c-2col__item--text">
                                    メーカーが定めた基準を守り、「下塗り・中塗り・上塗り」の計3回塗りを徹底します。厚みのある強い塗膜をつくることで、色ムラのない美しい仕上がりと、長期間長持ちする耐久性を実現します。
                                </p>
                            </div>
                        </article>
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/tosou-work-img3.jpg"
                                    alt="黒い外壁の戸建ての外観">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    代表が直接管理する「安心の施工品質」
                                </h3>
                                <p class="c-2col__item--text">
                                    現場の管理はすべて代表の高屋代が直接行います。「見えない部分だから手を抜く」といったことは一切ありません。一工程ごとに厳しい目でチェックを行い、責任を持って品質を担保します。
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="tosou-flow c-flow-slim c-3col">
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
                                    まずはお気軽にご連絡ください。 「外壁のひび割れが気になる」「そろそろ塗り替え時期かも？」など、小さなお悩みでも大歓迎です。お電話、またはお問い合わせフォームより承っております。 <br>
                                    ※しつこい営業電話は一切いたしませんので、ご安心ください。
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>02</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">現地調査（無料お住まい診断）</h3>
                                <p class="c-flow-slim__desc">
                                    お客様のお住まいに伺い、建物の状態を細かくチェックします。 外壁や屋根の劣化状況はもちろん、普段見えない部分までプロの目で診断。診断結果は写真付きの報告書としてまとめ、分かりやすくご説明します。
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>03</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">プラン・お見積りのご提案</h3>
                                <p class="c-flow-slim__desc">
                                    診断結果に基づき、お住まいの状況に最適なプランとお見積書を作成します。 「なぜこの工事が必要なのか」「なぜこの塗料を選ぶのか」を根拠を持って丁寧にご説明します。ご不明な点があれば、何度でもご質問ください。
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>04</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">ご契約</h3>
                                <p class="c-flow-slim__desc">
                                    工事内容、費用、期間など、すべてにご納得いただけましたら、正式なご契約となります。 工事日程の調整を行い、着工に向けての準備を進めさせていただきます。ここからが、お客様との本当のお付き合いの始まりです。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tosou-cases c-3col">
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
                                <a href="<?php bloginfo('url'); ?>/works/tosou/">
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
                                <a href="<?php bloginfo('url'); ?>/works/tosou/">
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
                                <a href="<?php bloginfo('url'); ?>/works/tosou/">
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

            <section class="tosou-faq c-faq">
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
                                    <span class="c-faq__question--title">お見積りを出してもらった後、追加料金が発生することはありますか？</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>基本的には発生いたしません。私たちはお見積り前に詳細な診断を行い、必要な工事を全て洗い出しています。万が一、足場を組んだ後に内部の深刻な腐食など予期せぬ問題が見つかった場合は、必ず施工前にお客様にご相談・ご説明をし、ご納得いただいてから対応いたします。勝手に工事を進めて費用を請求することは絶対にありませんので、ご安心ください。
                                    </p>
                                </dd>
                            </div>
                            <div class="c-faq__item">
                                <dt class="c-faq__question">
                                    <span class="c-faq__question--title">工事期間中は、普段通りに生活できますか？（窓の開閉や洗濯物など）</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>基本的には普段通りお過ごしいただけますが、工程によって一部制限がございます。例えば「高圧洗浄」の日は洗濯物を外に干せなかったり、塗料が飛散しないよう窓をビニールで覆う期間（養生期間）は、窓の開閉ができなくなります。ご不便を最小限にするため、スケジュールの事前案内を徹底しております。
                                    </p>
                                </dd>
                            </div>

                            <div class="c-faq__item">
                                <dt class="c-faq__question">
                                    <span class="c-faq__question--title">塗料の種類が多くて、どれを選べばいいか分かりません。</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>ご安心ください。専門知識がなくても大丈夫です。お客様のご予算はもちろん、「あと何年この家に住みたいか」というライフプランに合わせて、最適な塗料をご提案します。「ただ高い塗料」を勧めるのではなく、それぞれの塗料のメリット・デメリットを分かりやすくご説明し、一緒にプランを決めていきます。
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