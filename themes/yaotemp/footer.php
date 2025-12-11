    <section class="c-contact">
        <div class="l-container">

            <!-- 共通セクションタイトル -->
            <div class="c-section-header c-contact__header">
                <h2 class="c-section-header__title">お問い合わせ</h2>
                <span class="c-section-header__sub">CONTACT</span>
            </div>

            <p class="c-contact__lead">お気軽にお問合せください！</p>

            <div class="c-contact__list">

                <!-- Mail Box -->
                <div class="c-contact__item c-contact__item--mail">
                    <figure class="c-contact__icon-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/ico-mail.svg" alt="" class="c-contact__icon">
                    </figure>
                    <h3 class="c-contact__item-title">お問い合わせ</h3>
                    <p class="c-contact__text">
                        ご不明点やご相談は、お気軽に<br>お問い合わせください。
                    </p>
                    <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-white c-btn-white--orange">
                        問い合わせる
                        <span class="c-btn-white__icon"></span>
                    </a>
                </div>

                <!-- Tel Box -->
                <div class="c-contact__item c-contact__item--tel">
                    <figure class="c-contact__icon-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/ico-tel.svg" alt="" class="c-contact__icon">
                    </figure>
                    <h3 class="c-contact__item-title">お電話</h3>
                    <p class="c-contact__text">
                        ちょっとしたご相談も、お電話で<br>丁寧に対応いたします。
                    </p>
                    <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-white c-btn-white--green">
                        電話をする
                        <span class="c-btn-white__icon"></span>
                    </a>
                </div>

                <!-- LINE Box -->
                <div class="c-contact__item c-contact__item--line">
                    <figure class="c-contact__icon-wrapper">
                        <img src="<?php bloginfo('template_url');?>/img/ico-line.png" alt="" class="c-contact__icon">
                    </figure>
                    <h3 class="c-contact__item-title">LINE</h3>
                    <p class="c-contact__text">
                        LINEでも簡単にお問い合わせ<br>ご相談いただけます。
                    </p>
                    <a href="<?php bloginfo('url'); ?>/works/" class="c-btn-white c-btn-white--line">
                        相談をする
                        <span class="c-btn-white__icon"></span>
                    </a>
                </div>

            </div>

        </div>
    </section>
    <!--l-footer-->
    <footer class="l-footer">
        <div class="l-container">

            <div class="l-footer__content">

                <!-- 左エリア：会社情報 -->
                <div class="l-footer__info">
                    <div class="l-footer__logo">
                        <a href="<?php bloginfo('url'); ?>/">
                            <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="たかやしろ住研">
                        </a>
                    </div>
                    <address class="l-footer__address">
                        <p class="l-footer__company-name">たかやしろ住研</p>
                        <p class="l-footer__zip">〒383-0037</p>
                        <p class="l-footer__location">長野県中野市小田中402-6</p>
                    </address>
                    <div class="l-footer__contact">
                        <p class="l-footer__tel">TEL : 0269-23-2658</p>
                        <p class="l-footer__fax">FAX : 0269-23-4658</p>
                    </div>
                </div>

                <!-- 中央エリア：装飾イラスト（1枚画像） -->
                <div class="l-footer__deco">
                    <picture>
                        <!-- PC用画像：768px以上 -->
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/img/footer-deco.png">
                        <!-- SP用画像：デフォルト -->
                        <img src="<?php bloginfo('template_url');?>/img/footer-deco-sp.png" alt=""
                            class="l-footer__deco-img">
                    </picture>
                </div>

                <!-- 右エリア：サイトマップ -->
                <div class="l-footer__nav">

                    <!-- ナビゲーション左列 -->
                    <div class="l-footer__nav-col">
                        <ul class="l-footer__nav-list">
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/"
                                    class="l-footer__nav-link l-footer__nav-link--head u-font-bold">トップページ</a>
                            </li>
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/works/"
                                    class="l-footer__nav-link l-footer__nav-link--head">たかやしろ住研について</a>
                            </li>
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/works/"
                                    class="l-footer__nav-link l-footer__nav-link--head">サービス</a>
                                <ul class="l-footer__sub-list">
                                    <li class="l-footer__sub-item"><a
                                            href="<?php bloginfo('url'); ?>/works/">外壁・屋根塗装</a></li>
                                    <li class="l-footer__sub-item"><a
                                            href="<?php bloginfo('url'); ?>/works/">屋根工事・外壁工事</a></li>
                                    <li class="l-footer__sub-item"><a href="<?php bloginfo('url'); ?>/works/">雨樋工事</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/works/"
                                    class="l-footer__nav-link l-footer__nav-link--head">料金情報</a>
                            </li>
                        </ul>
                    </div>

                    <!-- ナビゲーション右列 -->
                    <div class="l-footer__nav-col">
                        <ul class="l-footer__nav-list">
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/works/"
                                    class="l-footer__nav-link l-footer__nav-link--head">施工事例＆お客様の声</a>
                            </li>
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/works/"
                                    class="l-footer__nav-link l-footer__nav-link--head">ブログ</a>
                                <ul class="l-footer__sub-list">
                                    <li class="l-footer__sub-item"><a href="<?php bloginfo('url'); ?>/works/">お知らせ</a>
                                    </li>
                                    <li class="l-footer__sub-item"><a
                                            href="<?php bloginfo('url'); ?>/works/">お役立ちコラム</a></li>
                                    <li class="l-footer__sub-item"><a
                                            href="<?php bloginfo('url'); ?>/works/">スタッフブログ</a></li>
                                </ul>
                            </li>
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/works/"
                                    class="l-footer__nav-link l-footer__nav-link--head">会社概要</a>
                            </li>
                            <li class="l-footer__nav-item">
                                <a href="<?php bloginfo('url'); ?>/works/"
                                    class="l-footer__nav-link l-footer__nav-link--head">お問い合わせ</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- フッター下部 -->
            <div class="l-footer__bottom">
                <a href="<?php bloginfo('url'); ?>/works/" class="l-footer__privacy">プライバシーポリシー</a>
                <p class="l-footer__copyright">Copyright たかやしろ住研. All Rights Reserved.</p>
            </div>

        </div>
    </footer>
    <!-- /l-footer -->
    <?php wp_footer(); ?>
    </body>

    </html>