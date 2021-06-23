<footer>
    <div class="follow-contact" id="follow-contact">
        <a href="<?php url('contact')?>" class="follow-contact__btn">
            <span>お問い合わせ</span>
        </a>
    </div>
    <div class="nav-footer">
        <nav class="menu-mobile">
            <ul>
                <li class="menu-item menu-item-has-sub-level1">
                    <a href="<?php url('company')?>">会社情報</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="<?php url('company')?>/#company-profile">会社概要</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="javascript:void(0)">拠点紹介</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="<?php url('./')?>">大阪オフィス</a></li>
                                <li class="menu-item"><a href="<?php url('./')?>">東京オフィス</a></li>
                                <li class="menu-item"><a href="<?php url('./')?>">福岡オフィス</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="<?php url('company')?>/#history">沿革</a></li>
                        <li class="menu-item"><a href="<?php url('company')?>/#business-partners">主なお取引先</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="<?php url('web')?>">ウェブ制作</a></li>
                <li class="menu-item"><a href="<?php url('./')?>">グラフィック</a></li>
                <li class="menu-item"><a href="<?php url('./')?>">映像・動画</a></li>
                <li class="menu-item"><a href="<?php url('./')?>">プロジェクト</a></li>
                <li class="menu-item"><a href="h target="_blank">採用情報</a></li>
            </ul>
            <ul class="end-link">
                <li><a href="<?php url('./')?>">プライバシーポリシー</a></li>
                <li><a href="<?php url('./')?>">個人情報開示等の手続きについて</a></li>
                <li><a href="<?php url('sitemap')?>">サイトマップ</a></li>
            </ul>
        </nav>
    </div>
    <div class="footer-content">
        <div class="container">
            <div class="finner">
                <div class="footer-info">
                    <p>
                        大阪・東京・福岡の<br />
                        企画・デザイン会社
                    </p>
                    <div class="logo-foot">
                        <a href="<?php url('')?>"><img src="<?php asset('img/common/logo-footer.svg')?>" alt=""
                                width="200" height="35"></a>
                    </div>
                    <p class="footer-contact">
                        ［大阪本社］<br />
                        〒530-6013<br class="br-pc" />大阪市北区天満橋1-8-30<br class="br-pc" />OAPタワー13F<br />
                        TEL 06-6358-9160
                    </p>
                </div>
                <div class="footer-menu hide-sp">
                    <div class="ul-group">
                        <ul>
                            <li>
                                <a href="<?php url('company')?>">会社情報</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php url('company')?>/#company-profile">・会社概要</a></li>
                                    <li><a href="<?php url('company')?>/#base-company">・拠点紹介</a></li>
                                    <li><a href="<?php url('company')?>/#history">・沿革</a></li>
                                    <li><a href="<?php url('company')?>/#business-partners">・主なお取引先</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="ul-group">
                        <ul>
                            <li><a href="<?php url('web')?>">ウェブ制作</a></li>
                            <li><a href="<?php url('./')?>">グラフィック</a></li>
                            <li><a href="<?php url('./')?>">映像・動画</a></li>
                            <li><a href="<?php url('./')?>">プロジェクト</a></li>
                        </ul>
                    </div>

                    <div class="ul-group ul-group3">
                        <ul>
                            <li><a href="<?php url('contact')?>">お問い合わせ</a></li>
                            <li><a href="http://www.north-hill.co.jp/recruit/" target="_blank">採用情報</a></li>
                        </ul>
                        <ul class="end-link">
                            <li><a href="<?php url('./')?>">プライバシーポリシー</a></li>
                            <li><a href="<?php url('./')?>">個人情報開示等の手続きについて</a></li>
                            <li><a href="<?php url('sitemap')?>">サイトマップ</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="footer-sns">
                    <li><a href="https://twitter.com/nh_PR_osaka" target="_blank" class="tw">Twitter</a>
                    </li>
                    <li><a href="https://www.instagram.com/northhill.koho/" target="_blank" class="insta">Instagram</a></li>
                    <li><a href="https://www.facebook.com/northhill.koho" target="_blank" class="fb">Facebook</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="cinner">
                <p>copyright 2021 North-Hill Co.,Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<script src="//cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js"></script>
<?php scripts();?>
<script src="<?php asset('js/script.js');?>?v2904"></script>
<?php footer();?>
</body>

</html>