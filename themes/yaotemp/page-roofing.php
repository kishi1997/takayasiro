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
                            外壁や屋根のメンテナンスには、大きく分けて「塗装」と「工事（張り替え・葺き替え）」の2種類があります。
                            「塗装」が今ある素材を守るためのメンテナンスであるのに対し、「工事」は素材そのものを新しくする、いわばお住まいの「再生手術」です。
                            塗装では手が届かない防水シート（下地）の寿命や、雨漏りといった深刻なトラブルも、建材を一新することで根本から解決。
                            お住まいの寿命をリセットし、この先何十年も安心して暮らせる強い家へと蘇らせます。</p>
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
                        <li>
                            <p>すでに雨漏りが発生している</p>
                        </li>
                        <li>
                            <p>屋根材が割れたり、大きく剥がれたりしている</p>
                        </li>
                        <li>
                            <p>業者に「これは塗装では無理だ」と断られた</p>
                        </li>
                        <li>
                            <p>築20年以上が経過し、下地から不安だ</p>
                        </li>
                    </ul>
                    <p>これらの症状は、表面の塗装だけでは解決できない、お住まいの危険信号です。
                        もし、この状態で無理に塗装をしても、すぐに剥がれてしまったり、内部で腐食が進行してしまったりと、費用が無駄になってしまう可能性があります。
                        まずはプロの目で「塗装で大丈夫か」「工事が必要か」を正しく診断することが大切です。</p>
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
                                <img src="<?php bloginfo('template_url');?>/img/roofing-point-img1.jpg"
                                    alt="施工されたスレート屋根の表面">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT1</p>
                                <h3 class="c-2col__item--title">雨漏りの根本解決</h3>
                                <p class="c-2col__item--text">
                                    雨漏りの多くの原因は、屋根材や外壁材の下にある「防水シート」の劣化です。塗装はあくまで表面の保護であり、この防水シートまで直すことはできません。工事（葺き替えや張り替え）を行うことで、防水シートを新しくし、雨水の侵入経路を完全に断ち切ることができます。
                                </p>
                                <div class="c-2col__item--illust u-pc">
                                    <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img1.png"
                                        alt="">
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
                                <p class="c-2col__item--text">
                                    一般的な屋根・外壁材の寿命は20年〜30年と言われています。寿命を迎えた建材を新しいものに交換することで、建物の耐久性が新築同様に回復します。特に最新の「ガルバリウム鋼板」などは耐久性が非常に高く、メンテナンスの手間も大幅に減らすことができます。
                                </p>
                                <div class="c-2col__item--illust u-pc">
                                    <img src="<?php bloginfo('template_url');?>/img/about-reason-illust-img2.png"
                                        alt="">
                                </div>
                            </div>
                        </article>

                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/roofing-point-img3.jpg"
                                    alt="白い外壁のモダンな住宅外観">
                            </figure>
                            <div class="c-2col__item--body">
                                <p class="c-2col__item--label">POINT3</p>
                                <h3 class="c-2col__item--title">
                                    耐震性の向上
                                </h3>
                                <p class="c-2col__item--text">
                                    特に屋根工事において、昔ながらの重い日本瓦から、軽量な金属屋根に葺き替えることで、屋根の重量を大幅に（約1/10程度まで）軽くすることができます。建物の頭が軽くなることで重心が下がり、地震の際の揺れを軽減する効果が期待できます。
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
                                <img src="<?php bloginfo('template_url');?>/img/roofing-ifCase-img1.jpg"
                                    alt="天井にできた雨漏りのシミ">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    わずかな雨漏りでも、<br class="u-pc">
                                    内部の柱や断熱材を湿らせ、<br class="u-pc">
                                    腐食やカビの原因
                                </h3>
                                <p class="c-2col__item--text">
                                    雨漏りは、天井から水が滴ってくる状態だけではありません。気づかないうちに壁の内側に水が浸入し、断熱材を湿らせ、柱や梁を腐らせていきます。湿った木材はカビの温床となり、アレルギーなどご家族の健康被害にもつながる恐れがあります。
                                </p>
                            </div>
                        </article>
                        <article class="c-2col__item">
                            <figure class="c-2col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/roofing-ifCase-img2.jpg"
                                    alt="小屋裏に見える雨漏りの水濡れ跡">
                            </figure>
                            <div class="c-2col__item--body">
                                <h3 class="c-2col__item--title">
                                    シロアリを呼び寄せる原因にもなり、<br class="u-pc">
                                    家の耐震性が著しく低下する危険
                                </h3>
                                <p class="c-2col__item--text">
                                    湿気を含んで柔らかくなった木材は、シロアリの大好物です。シロアリに柱や土台を食べられてしまうと、建物を支える力が弱まり、地震が発生した際に倒壊するリスクが著しく高まってしまいます。
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
                                    既存の屋根や外壁を撤去せず、その上から新しい防水シートと屋根材（外壁材）を重ねて張る工法です。
                                    【メリット】 古い建材の撤去・処分費用がかからないため、費用を抑えることができます。また、屋根が二重になることで断熱性や遮音性が向上します。
                                    【おすすめの方】 費用を抑えたい方、工期を短くしたい方。</p>
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
                                    既存の屋根や外壁をすべて撤去し、下地から新しいものに交換する工法です。
                                    【メリット】
                                    下地（野地板など）の状態を目視で確認し、傷んでいる部分を補修できるため、お住まいの健康状態を完璧にリセットできます。屋根の軽量化による耐震対策にも最適です。
                                    【おすすめの方】 雨漏りが進行している方、築年数が古く下地が心配な方、耐震性を高めたい方。 </p>
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
                                <h3 class="c-flow-slim__heading">お問い合わせ・ご相談</h3>
                                <p class="c-flow-slim__desc">
                                    「雨漏りが心配」「他社で葺き替えが必要と言われたが本当か？」など、不安な点は何でもご相談ください。専門知識を持つスタッフが丁寧に対応いたします。お電話、またはお問い合わせフォームより承っております。
                                    ※しつこい営業電話は一切いたしませんので、ご安心ください。 </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>02</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">現地調査（無料お住まい診断）</h3>
                                <p class="c-flow-slim__desc">
                                    お客様のお住まいに伺い、屋根に登ったり、小屋裏（天井裏）を確認したりして、雨漏りの有無や下地の状態を徹底的に調査します。
                                    「本当に工事が必要か、塗装で済むのか」をプロの視点で正直に判断します。
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>03</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">工法・お見積りのご提案</h3>
                                <p class="c-flow-slim__desc">
                                    診断結果に基づき、お客様のお住まいに最適な工法（カバー工法または葺き替え）をご提案します。
                                    それぞれのメリット・デメリット、費用対効果を分かりやすくご説明し、納得のいくプランを一緒に考えます。
                                </p>
                            </div>
                        </div>
                        <div class="c-flow-slim__item">
                            <div class="c-flow-slim__step">STEP<br><span>04</span></div>
                            <div class="c-flow-slim__content">
                                <h3 class="c-flow-slim__heading">ご契約</h3>
                                <p class="c-flow-slim__desc">
                                    工事内容、費用、工期など、すべてにご納得いただけましたらご契約となります。 近隣の方へのご挨拶回りなど、工事前の準備もしっかりサポートいたします。
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
                                            alt="外壁・屋根塗装のイメージ画像">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <h3 class="c-3col__item--title">見出し見出し見出し見出し
                                            見出し見出し見出し見出し見出し</h3>
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
                                            alt="外壁・屋根塗装のイメージ画像">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <h3 class="c-3col__item--title">見出し見出し見出し見出し
                                            見出し見出し見出し見出し見出し</h3>
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
                                            alt="外壁・屋根塗装のイメージ画像">
                                    </div>
                                    <div class="c-3col__item--body">
                                        <h3 class="c-3col__item--title">見出し見出し見出し見出し
                                            見出し見出し見出し見出し見出し</h3>
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
                                <a href="<?php bloginfo('url'); ?>/works/roofing/">
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
                                <a href="<?php bloginfo('url'); ?>/works/roofing/">
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
                                もっと見る
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
                                    <span class="c-faq__question--title">「カバー工法」と「葺き替え」、うちはどちらが良いのでしょうか？</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>お住まいの劣化状況によります。下地（野地板）がしっかりしていれば、費用を抑えられる「カバー工法」がおすすめですが、雨漏りが進行して下地が腐食している場合は、根本から直す「葺き替え」が必要です。まずは無料診断で、下地の状態を確認させてください。最適な方法を正直にご提案します。
                                    </p>
                                </dd>
                            </div>
                            <div class="c-faq__item">
                                <dt class="c-faq__question">
                                    <span class="c-faq__question--title">工事中、雨が降っても大丈夫ですか？ 雨漏りしませんか？</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>全の対策をしておりますのでご安心ください。屋根工事では、屋根材を剥がした状態で雨が降らないよう、天気予報を細かくチェックしながら作業を進めます。また、作業終了後は毎日必ず、雨が入らないようブルーシート等で厳重に養生（保護）を行います。
                                    </p>
                                </dd>
                            </div>

                            <div class="c-faq__item">
                                <dt class="c-faq__question">
                                    <span class="c-faq__question--title">台風や雪で屋根が壊れました。火災保険は使えますか？</span>
                                    <span class="c-faq__question--arrows">
                                        <span class="c-faq__question-right"></span>
                                    </span>
                                </dt>
                                <dd class="c-faq__answer">
                                    <p>はい、使える可能性があります。台風、雪、雹（ひょう）などの自然災害が原因で破損した場合は、火災保険の補償対象となるケースが多くあります。私たちは保険申請のための写真撮影や、お見積書の作成サポートも行っておりますので、まずはお気軽にご相談ください。
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