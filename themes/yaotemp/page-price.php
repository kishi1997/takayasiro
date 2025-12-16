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

        <section class="c-parts-sec">
            <div class="l-container">
                <div class="c-parts-sec__item">
                    <h2 class="c-parts-sec__title">
                    料金について、大切なお約束
                    </h2>
                    <p class="c-parts-sec__lead">
                        一番気になる「費用」のことだからこそ、私たちは正直でありたいと考えています。<br>
                        不透明な価格提示や、不当な追加請求は一切いたしません。<br>
                        お住まいの状況は一軒ごとに異なるため、掲載価格はあくまで「目安」となります。<br class="u-pc">正確な金額は、代表が現地を調査し、「本当に必要な工事」だけを厳選してご提示します。<br>
                        まずは費用のイメージとしてご覧ください。
                    </p>
                </div>
            </div>
        </section>

        <section class="price-table">
            <div class="price-table__inner">
                <div class="c-title">
                    <h3 class="c-title--jp">外壁塗装</h3>
                    <span class="c-title--en">EXTERIOR WALL PAINTING</span>
                </div>  

                <div class="price-table__wrapper">
                    <table class="price-table__box">
                        <tbody>
                            <tr class="price-table__box--head">
                                <th>プラン名</th>
                                <th>使用塗料</th>
                                <th>耐久年数</th>
                                <th>
                                    価格目安<br>
                                    (30坪建物)
                                </th>
                                <th>コスパ評価</th>
                                <th>オススメな方</th>
                            </tr>
                            <tr class="price-table__box--body">
                                <td class="plan-title">スタンダード</td>
                                <td>２液シリコン</td>
                                <td>約10～12年</td>
                                <td class="plan-price">約25万円～</td>
                                <td class="plan-evaluation">★★★</td>
                                <td>10年ごとのメンテナンスでもOKな方</td>
                            </tr>
                            <tr class="price-table__box--body">
                                <td class="plan-title">ハイグレード</td>
                                <td>フッ素塗料</td>
                                <td>約15～20年</td>
                                <td class="plan-price">約35万円～</td>
                                <td class="plan-evaluation">★★</td>
                                <td>長く持たせたいが価格も気になる方</td>
                            </tr>
                            <tr class="price-table__box--body">
                                <td class="plan-title">プレミアム</td>
                                <td>無機塗料</td>
                                <td>約18～25年</td>
                                <td class="plan-price">約45万円～</td>
                                <td class="plan-evaluation">★</td>
                                <td>とにかく長持ち！塗り替え頻度を減らしたい方</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="price-table">
            <div class="price-table__inner">
                <div class="c-title">
                    <h3 class="c-title--jp">屋根塗装</h3>
                    <span class="c-title--en">ROOF PAINTING</span>
                </div>  

                <div class="price-table__wrapper">
                    <table class="price-table__box">
                        <tbody>
                            <tr class="price-table__box--head">
                                <th>プラン名</th>
                                <th>使用塗料</th>
                                <th>耐久年数</th>
                                <th>
                                    価格目安<br>
                                    (30坪建物)
                                </th>
                                <th>コスパ評価</th>
                                <th>オススメな方</th>
                            </tr>
                            <tr class="price-table__box--body">
                                <td class="plan-title">スタンダード</td>
                                <td>ラジカル制御型</td>
                                <td>約12～15年</td>
                                <td class="plan-price">約55万円～</td>
                                <td class="plan-evaluation">★★★</td>
                                <td>コスパ重視＆初めての方にも安心</td>
                            </tr>
                            <tr class="price-table__box--body">
                                <td class="plan-title">ハイグレード</td>
                                <td>フッ素塗料</td>
                                <td>約15～20年</td>
                                <td class="plan-price">約70万円～</td>
                                <td class="plan-evaluation">★★</td>
                                <td>長持ち＋美観を保ちたい方におすすめ</td>
                            </tr>
                            <tr class="price-table__box--body">
                                <td class="plan-title">プレミアム</td>
                                <td>無機塗料</td>
                                <td>約18～25年</td>
                                <td class="plan-price">約85万円～</td>
                                <td class="plan-evaluation">★</td>
                                <td>次の塗り替えは20年後にしたい方向け</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div>
        </section>

        <section class="price-type">
            <div class="price-type__inner">
                <div class="c-title">
                    <h3 class="c-title--jp">塗料の種類と耐用年数</h3>
                    <span class="c-title--en">PAINT TYPES & DURABILITY</span>
                </div>

                <div class="price-type__menu">
                    <div class="price-type__item">
                        <h4 class="price-type__item--title">無機系塗料</h4>
                        <div class="price-type__item-box">
                            <span>特性・特徴</span>
                            <p>
                                無機系塗料は、ガラスや石などの無機物を主成分とした塗料で、紫外線や雨風などの自然環境に極めて強く、「塗膜の劣化が非常に少ない」という特長を持ちます。<br>
                                塗料中の有機成分が少ないため、カビやコケが付きにくく、防汚性・防カビ性にも優れています。<br>
                                一部の高性能製品は、無機＋フッ素や無機＋シリコンといったハイブリッド型もあります。
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>耐久性</span>
                            <p>
                                約18〜25年と、住宅用塗料の中では最長クラスの耐用年数を誇ります。<br>
                                ※使用環境や塗料の種類により差はあります。
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>メリット・デメリット</span>
                            <p>
                                【メリット】<br>
                                圧倒的な耐候性と耐久性（20年以上持つ製品も）<br>
                                紫外線・酸性雨・塩害などの劣化要因に非常に強い<br>
                                カビ・藻が発生しにくく、美観を長く維持できる<br>
                                長期的に見ればメンテナンスコストを大幅に削減できる<br>
                                <br>
                                【デメリット】<br>
                                初期費用が非常に高い（フッ素よりも高価な場合あり）<br>
                                塗膜が硬いため、下地のひび割れに追従しにくいことがある<br>
                                製品によっては施工難易度が高く、職人の経験や技術差が出やすい
                            </p> 
                        </div>
                        <div class="price-type__item-box">
                            <span>実用的な情報</span>
                            <p>
                                【適した建物の条件】<br>
                                「とにかく長持ちさせたい」「頻繁に足場を組むのが難しい」「塗り替えの回数を減らしたい」という方に最適です。<br>
                                特に高層住宅や別荘、沿岸地域、日当たりの強い立地で効果を発揮します。<br>
                                <br>
                                【メンテナンス頻度】<br>
                                18〜25年に1回の塗り替えが目安。<br>
                                外壁・屋根ともに、長期間にわたって保護・美観維持が可能です。
                            </p> 
                        </div>
                    </div>

                    <div class="price-type__item">
                        <h4 class="price-type__item--title">
                            フッ素塗料<br>
                            <small>工事費　1m2あたり5,600円～</small>
                        </h4>
                        <div class="price-type__item-box">
                            <span>特性・特徴</span>
                            <p>
                                フッ素樹脂を使用した塗料で、最高レベルの耐候性を誇ります。<br>
                                紫外線や酸性雨、塩害に非常に強く、厳しい環境でも塗膜の劣化を抑えられるため、プレミアム塗料として利用されています。
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>耐久性</span>
                            <p>
                                耐久年数は約15〜20年。<br>
                                他の塗料に比べて圧倒的に長寿命で、メンテナンス頻度を大幅に削減できます。
                            メリット・デメリット
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>メリット・デメリット</span>
                            <p>
                                【メリット】<br>
                                高耐久性・耐候性により長期間の美観維持が可能。<br>
                                メンテナンスコストを抑えられる。<br>
                                <br>
                                【デメリット】<br>
                                他の塗料よりも初期費用が高い。
                            </p> 
                        </div>
                        <div class="price-type__item-box">
                            <span>実用的な情報</span>
                            <p>
                                【適した建物の条件】<br>
                                沿岸地域や高層建築、塗り替え頻度を抑えたい方に最適です。<br>
                                特にメンテナンスが難しい建物に適しています。<br>
                                <br>
                                【メンテナンス頻度】<br>
                                20年程度で再塗装を行うことで、建物の美観と保護を持続できます。
                            </p> 
                        </div>
                    </div>

                    <div class="price-type__item">
                        <h4 class="price-type__item--title">
                            2液シリコン塗料<br>
                            <small>工事費　1m2あたり4,200円～</small>
                        </h4>
                        <div class="price-type__item-box">
                            <span>特性・特徴</span>
                            <p>
                                主剤と硬化剤を混合して使用する2液タイプの塗料。<br>
                                塗膜が強く、耐候性や密着性に優れています。外壁や屋根の保護を長期間維持するのに適した塗料です。<br>
                                プロ仕様のため、仕上がりが高品質。
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>耐久性</span>
                            <p>
                                耐久年数は約10〜12年。屋外環境から建物をしっかり保護します。
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>メリット・デメリット</span>
                            <p>
                                【メリット】<br>
                                高い耐候性と防汚性。美しい仕上がりを長期間維持できます。<br>
                                <br>
                                【デメリット】<br>
                                施工には専門的な知識と技術が必要で、1液タイプより施工コストがやや高いです。
                            </p> 
                        </div>
                        <div class="price-type__item-box">
                            <span>実用的な情報</span>
                            <p>
                                【適した建物の条件】<br>
                                紫外線や雨風が強い地域、耐久性を重視する建物におすすめです。<br>
                                <br>
                                【メンテナンス頻度】<br>
                                12年ごとにメンテナンスを行うことで、長期的な美観と保護が可能です。
                            </p> 
                        </div>
                    </div>

                    <div class="price-type__item">
                        <h4 class="price-type__item--title">ラジカル制御形塗料</h4>
                        <div class="price-type__item-box">
                            <span>特性・特徴</span>
                            <p>
                                紫外線による塗膜劣化を抑える「ラジカル制御技術」を採用した新世代塗料。<br>
                                シリコン塗料より高い耐候性を持ちながら、コストパフォーマンスに優れています。<br>
                                美観を長期間維持する効果があります。
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>耐久性</span>
                            <p>
                                耐久年数は約12〜15年。紫外線の強い地域や塩害地域でも優れた耐久性を発揮します。
                            </p>
                        </div>
                        <div class="price-type__item-box">
                            <span>メリット・デメリット</span>
                            <p>
                                【メリット】<br>
                                色褪せやチョーキング（白粉化）を抑え、長期間美しい外観を保ちます。<br>
                                <br>
                                【デメリット】<br>
                                シリコン塗料よりも価格がやや高いが、フッ素塗料ほどではありません。
                            </p> 
                        </div>
                        <div class="price-type__item-box">
                            <span>実用的な情報</span>
                            <p>
                                【適した建物の条件】<br>
                                日当たりが良く紫外線を強く受ける場所に建つ住宅や、外観を重要視する方に最適。<br>
                                <br>
                                【メンテナンス頻度】<br>
                                12〜15年程度での再塗装を目安とし、長期間維持できます。
                            </p>
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
                        <a href="<?php bloginfo('url'); ?>/tosou/">
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
                        <a href="<?php bloginfo('url'); ?>/kouji/">
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
                        <a href="<?php bloginfo('url'); ?>/amadoi/">
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