<?php get_header(); ?>

<div class="page-company">
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

        <section class="c-message c-2col">
            <div class="l-container">
                <div class="c-message__left">
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
                    <div class="c-message__rep">
                        <span class="c-message__rep--label">代表</span>
                        <span class="c-message__name--jp">小笹 正幸</span>
                        <span class="c-message__name--en">Masayuki Kosasa</span>
                    </div>
                </div>
                <div class="c-message__right">
                    <figure class="c-message__figure">
                        <img src="<?php bloginfo('template_url');?>/img/c-message-img1.jpg" alt="たかやしろ住研 代表 小笹正幸">
                    </figure>
                </div>
            </div>
        </section>

        <section class="company-story c-2col">
            <div class="l-container">
                <div class="company-story__left">
                    <figure class="company-story__figure">
                        <img src="<?php bloginfo('template_url');?>/img/company-story-img1.jpg" alt="住宅について打ち合わせするご夫婦と担当者の様子">
                    </figure>
                    <figure class="company-story__figure">
                        <img src="<?php bloginfo('template_url');?>/img/company-story-img2.jpg" alt="緑に囲まれた木造住宅の外観イメージ">
                    </figure>
                </div>
                <div class="company-story__right">
                    <div class="c-title">
                        <span class="c-title--en">FOUNDING STORY</span>
                        <h2 class="c-title--jp">創業のきっかけ</h2>
                        <p class="c-title__desc">
                            それは、突然の出来事でした。<br>
                            <br>
                            平成19年10月某日 午前 私は、お客様と打合せをしていました。打合せが終わり少し早い昼食をとっていると携帯電話がなり1時までに会社に戻れとのこと。食事もそこそこに急いで帰った会社では、社長からの「会社倒産」の一言･･･。<br>
                            <br>
                            次の日から数日間は、営業の私と工事担当者で工事中のお客様のところに出向き、事情を説明して事後処理にまわっておりました。その間、数多くのお客様から連絡があり、「これからどうすればいいの？」とか「困った時、誰に言えばいいの？」とか色々と言われました。<br>
                            <br>
                            そんな中でも、あるお客様からこんなことを言われました。<br>
                            「次の会社に移ってもうちの面倒を見て欲しい。」と、続けて「出来れば小笹さんに今後も家の面倒を見て欲しい。」と･･･。<br>
                            <br>
                            このようなお言葉を数人のお客様からもいただきました。<br>
                            それから身の振り方を色々と考え、創業を決意したわけですが、お客様の一言やお付き合いのあったさまざまな業者さんのご協力やご支援・後押しがなかったら、自分で事業を起こそうとも思っておりませんでした。今では貴重な体験をさせてもらって良かったとさえ思っています。<br>
                            <br>
                            今は、そんな皆様の声を裏切らないように頑張って行かないといけないと思っております。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="company-about">
            <div class="l-container">
                <div class="company-about__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">たかやしろ住研はこんな会社です</h2>
                        <span class="c-title--en">ABOUT TAKAYASHIRO JUKEN</span>
                        <p class="c-title__desc">
                            たかやしろ住研は、「住まいのかかりつけ医」を目指して、あなたの住まいをあなたと共に守る会社です。<br>
                            住まいの状態や不具合を把握し、修繕のほか維持管理上のアドバイスなどもします。<br>
                            住まいで困っているあなたを不安や心配から解放し、快適で穏やかな暮らしを過ごしてもらえるように努力しています。
                        </p>
                    </div>
                </div>

                <ul class="company-about__list">
                    <li class="company-about__item">
                        <div class="company-about__item--lead">
                            <h3>1. 今のところ、私一人でやっています。</h3>
                            <p>
                                たかやしろ住研は、「住まいのかかりつけ医」を目指して、あなたの住まいをあなたと共に守る会社です。<br class="u-pc">
                                住まいの状態や不具合を把握し、修繕のほか維持管理上のアドバイスなどもします。<br class="u-pc">
                                住まいで困っているあなたを不安や心配から解放し、快適で穏やかな暮らしを過ごしてもらえるように努力しています。
                            </p>
                        </div>
                        <figure class="company-about__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/company-about-illust1.png" alt="">
                        </figure>
                    </li>
                    <li class="company-about__item">
                        <div class="company-about__item--lead">
                            <h3>2. 私を支えてくださる専門業者がいます。</h3>
                            <p>
                                私を支えてくださるプロフェッショナルの方々がいらっしゃることで、たかやしろ住研があなたの信用を得られています。<br class="u-pc">
                                元請でも十分対応できる専門業者の方々、また気持ちが良い方々がいらっしゃいます。<br class="u-pc">
                                工事内容によって、その都度専門業者に担当してもらうため固定費（人件費・機械工具類）がかかりません。
                            </p>
                        </div>
                        <figure class="company-about__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/company-about-illust2.png" alt="">
                        </figure>
                    </li>
                    <li class="company-about__item">
                        <div class="company-about__item--lead">
                            <h3>3. こんな方は、他社をお勧めします。</h3>
                            <ul>
                                <li>
                                    ブランドや会社名などを気になされる方は、是非大手の会社を選ばれた方が良いです。<br class="u-pc">
                                    ただし、結局は、大手や名の知れている会社でも担当営業マンによることが大きいと思います。
                                </li>
                                <li>
                                    新築や大型リフォームはお受けできません。<br class="u-pc">
                                    どうしても人的要件で制約があり、扱うことができません。<br class="u-pc">
                                    大型物件になるとそれだけ私の時間が取られてしまいます。<br class="u-pc">
                                    そうすると、他の困っている方を助けてあげることができなくなってしまいます。<br class="u-pc">
                                    大型物件は、のどから手が出るほどやりたいと手を上げてくれる会社が数多くいらっしゃいますので、そういうものはそちらにお任せしています。
                                </li>
                                <li>
                                    判断基準が価格しかない方５つのお約束でもお話しているように、住まいのかかりつけ医にさせてもらいたく努力していますので、安ければいいとか相見積もりを希望される方は、専門業者や安くても工事をやってくれる会社がたくさんいると思いますので、そちらをお勧めします。
                                </li>
                            </ul>
                        </div>
                        <figure class="company-about__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/company-about-illust3.png" alt="">
                        </figure>
                    </li>
                    <li class="company-about__item">
                        <div class="company-about__item--lead">
                            <h3>4. 修繕から水廻り・外壁屋根などの個別リフォームに対応します。</h3>
                            <p>
                                「こんなのどこへ頼めばいいかわからない」と困っていられる方は、是非お待ちしております。
                            </p>
                        </div>
                        <figure class="company-about__item--img">
                            <img src="<?php bloginfo('template_url');?>/img/company-about-illust4.png" alt="">
                        </figure>
                    </li>
                </ul>
            </div>
        </section>

        <section class="company-profile">
            <div class="l-container">
                <div class="company-profile__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">会社概要</h2>
                        <span class="c-title--en">COMPANY PROFILE</span>
                    </div>
                </div>


                <article id="Company-table">                  
                    <dl>
                        <dt>社名</dt>
                        <dd>たかやしろ住研</dd>
                    </dl>
                    <dl>
                        <dt>代表者</dt>
                        <dd>小笹　正幸</dd>
                    </dl>
                    <dl>
                        <dt>設立</dt>
                        <dd>2008年1月</dd>
                    </dl>
                    <dl>
                        <dt>免許・登録</dt>
                        <dd>
                            2級土木施工管理技士<br>
                            住宅断熱施工技術者<br>
                            2級ファイナンシャル・プランニング技能士
                        </dd>
                    </dl>
                    <dl>
                        <dt>業務内容</dt>
                        <dd>
                            住まいの修繕（アミ戸張替え など）からリフォーム。<br>
                            工場や店舗の改修など。
                        </dd>
                    </dl>
                    <dl>
                        <dt>営業時間</dt>
                        <dd>13:00 - 18:00</dd>
                    </dl>
                    <dl>
                        <dt>営業日</dt>
                        <dd>月曜日 - 土曜日</dd>
                    </dl>
                </article>
            </div>
        </section>

        <section class="company-accses">
            <div class="l-container">
                <div class="company-profile__head">
                    <div class="c-title">
                        <h2 class="c-title--jp">所在地</h2>
                        <span class="c-title--en">LOCATION</span>
                    </div>
                </div>


                <article id="Company-accses">
                    <div class="company-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.3871653273513!2d138.3743341!3d36.737276900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d8aefe6c440fd%3A0x5c81de8c813377af!2z44Gf44GL44KE44GX44KN5L2P56CU!5e0!3m2!1sja!2sjp!4v1765263679814!5m2!1sja!2sjp" width="1080" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="company-accessinfo">
                        <table>
                            <tr>
                                <th>住所</th>
                                <td>
                                    〒383-0037<br>
                                    長野県中野市小田中402-6
                                </td>
                            </tr>
                            <tr>
                                <th>お問い合わせ</th>
                                <td>TEL 0269-23-2658</td>
                            </tr>
                        </table>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>
        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->

<?php get_footer(); ?>