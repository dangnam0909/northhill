<?php
require_once "./functions.php";
set_title("株式会社ノース・ヒル");
set_desc("株式会社ノース・ヒルは、大阪、東京、福岡に拠点をもつ、広告制作会社です。ウェブ制作、グラフィック制作、映像制作等、広告制作全般に、真心と遊び心を込めてお応えいたします。");
?>
<?php section('stylesheet');?>
<link href="<?php asset('css/home.css?v3');?>" rel="stylesheet">
<link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<?php endsection();?>
<?php section('welcome');?>
<div class="top-welcome">
    <div class="top-welcome__img" id="mainImg">
        <div class="container-wel">
            <ul class="link-shop--wrap">
                <li>
                    <a href="<?php url('web')?>" class="link-shop">
                        ウェブ制作
                    </a>
                </li>
                <li>
                    <a href="<?php url('./')?>" class="link-shop">
                        グラフィック
                    </a>
                </li>
                <li>
                    <a href="<?php url('./')?>" class="link-shop">
                        映像・動画
                    </a>
                </li>
                <li>
                    <a href="http://www.north-hill.co.jp/recruit/" target="blank_" class="link-shop">
                        職人募集中！
                    </a>
                </li>
                <li class="">
                    <a href="javascript:void(0)" class="link-shop daihuku">
                        名物・塩大福
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="news-header">
    <div class="container">
        <div class="head-news">
            <div class="head-news__label">
                <span>NEWS》</span>
            </div>
            <marquee scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
                <a href="<?php url('news/210427.php') ?>">「新型コロナウイルスのリスク拡大に対する取り組みについて」掲示しました。</a>
            </marquee>
        </div>
    </div>
</div>
<?php endsection();?>
<?php
get_header();
?>
<main>
    <section id="intro-product">
        <div class="intro-product__content">
            <div class="intro-product__item">
                <a href="<?php url('./')?>" class="intro-product__item--in">
                    <p>ウェブ制作</p>
                </a>
            </div>
            <div class="intro-product__item">
                <a href="<?php url('./')?>" class="intro-product__item--in">
                    <p>グラフィック</p>
                </a>
            </div>
            <div class="intro-product__item">
                <a href="<?php url('./')?>" class="intro-product__item--in">
                    <p>映像・動画</p>
                </a>
            </div>
            <div class="intro-product__item">
                <a href="<?php url('./')?>" class="intro-product__item--in">
                    <p>プロジェクト</p>
                </a>
            </div>
        </div>
    </section>
    <section id="commit-product">
        <div class="container">
            <div class="commit-product__content">
                <div class="text-note">
                    <p>イラストをタップ</p>
                </div>
                <div class="cp__center">
                    <a href="<?php asset('img/home/sono1.gif')?>" rel="cp-gallery" data-fancybox="cp-gallery"
                        class="cp-item" id="cp-item-01">
                        <div class="item-move_v">
                            <div class="item-move_h">
                                <div class="cp-item_img">
                                    <img src="<?php asset('img/home/cp-img_01.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php asset('img/home/sono2.gif')?>" rel="cp-gallery" data-fancybox="cp-gallery"
                        class="cp-item" id="cp-item-02">
                        <div class="item-move_v">
                            <div class="item-move_h">
                                <div class="cp-item_img">
                                    <img src="<?php asset('img/home/cp-img_02.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php asset('img/home/sono3.jpg')?>" rel="cp-gallery" data-fancybox="cp-gallery"
                        class="cp-item" id="cp-item-03">
                        <div class="item-move_v">
                            <div class="item-move_h">
                                <div class="cp-item_img">
                                    <img src="<?php asset('img/home/cp-img_03.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php asset('img/home/sono4.gif')?>" rel="cp-gallery" data-fancybox="cp-gallery"
                        class="cp-item" id="cp-item-04">
                        <div class="item-move_v">
                            <div class="item-move_h">
                                <div class="cp-item_img">
                                    <img src="<?php asset('img/home/cp-img_04.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php asset('img/home/sono5.jpg')?>" rel="cp-gallery" data-fancybox="cp-gallery"
                        class="cp-item" id="cp-item-05">
                        <div class="item-move_v">
                            <div class="item-move_h">
                                <div class="cp-item_img">
                                    <img src="<?php asset('img/home/cp-img_05.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php asset('img/home/sono6.gif')?>" rel="cp-gallery" data-fancybox="cp-gallery"
                        class="cp-item" id="cp-item-06">
                        <div class="item-move_v">
                            <div class="item-move_h">
                                <div class="cp-item_img">
                                    <img src="<?php asset('img/home/cp-img_06.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php asset('img/home/sono7.jpg')?>" rel="cp-gallery" data-fancybox="cp-gallery"
                        class="cp-item" id="cp-item-07">
                        <div class="item-move_v">
                            <div class="item-move_h">
                                <div class="cp-item_img">
                                    <img src="<?php asset('img/home/cp-img_07.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="cp-item-center">
                        <h2 class="cp-title">
                            <!-- 商品への<br /><span>こだわり</span> -->
                        </h2>
                        <p>
                            お客様のオーダーに<br />
                            真心と遊び心を込めてお応えいたします。
                        </p>
                    </div>
                </div>
                <div class="snippet">
                    <p>
                        お客様のオーダーに<br />
                        真心と遊び心を込めてお応えいたします。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="dignity">
        <div class="container">
            <div class="dignity-wrap">
                <h2 class="d-title">
                    <span>
                        <!-- 北丘の品格 -->
                    </span>
                </h2>
                <div class="dignity-content swiper-container">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <div class="dignity-item di-01">
                                <div class="dignity-item--in">
                                    <h3 class="dignity-item--in__ttl">
                                        <!-- 簡潔の美 -->
                                    </h3>
                                    <div class="dignity-item--in__content">
                                        <p>
                                            広告や販促はいわば企業から<br />
                                            <br />
                                            ユーザーへのメッセージ。<br />
                                            <br />
                                            よりシンプルに、分かりやすく、<br />
                                            <br />
                                            ユーザーの心に響かせる<br />
                                            <br />
                                            コミュニケーションに美しさを見出します。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="dignity-item di-02">
                                <div class="dignity-item--in">
                                    <h3 class="dignity-item--in__ttl">
                                        <!-- 遊びの精神 -->
                                    </h3>
                                    <div class="dignity-item--in__content">
                                        <p>
                                            かたい頭をいくら捻っても、<br />
                                            <br />
                                            新鮮なアイデアは生まれません。<br />
                                            <br />
                                            私たちは常に柔らかな発想を生む<br />
                                            <br />
                                            「遊びゴコロ」を大切にしています。
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="swiper-slide">
                            <div class="dignity-item di-03">
                                <div class="dignity-item--in">
                                    <h3 class="dignity-item--in__ttl">
                                        <!-- 洗練されたセンス -->
                                    </h3>
                                    <div class="dignity-item--in__content">
                                        <p>
                                            流行だけにとらわれない、<br />
                                            <br />
                                            本質を理解した表現こそ<br />
                                            <br />
                                            本当の意味での「センスのよさ」だと捉え、<br />
                                            <br />
                                            日々、プロ意識を持って<br />
                                            <br />
                                            磨き続けています。
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="project">
        <div class="container">
            <div class="project__wrap">
                <div class="col-p">
                    <h2 class="p-title">
                        <span>プロジェクト</span>
                    </h2>
                    <div class="project-gallery">
                        <div class="project-item p01">
                            <h3 class="project-item__ttl">EC事業</h3>
                            <div class="project-item__content">
                                <a href="https://www.toy-garage.jp/" target="blank_">
                                    <img src="<?php asset('img/home/bn_toygarage.jpg')?>" alt="EC事業">
                                </a>
                            </div>
                        </div>
                        <div class="project-item p02">
                            <h3 class="project-item__ttl">観光ガイド開発事業</h3>
                            <div class="project-item__content">
                                Coming Soon
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-p">
                    <div class="btn-twitter">
                        <a href="https://twitter.com/nh_PR_osaka" target="blank_">
                            <img src="<?php asset('img/home/northhill-twitter.svg')?>" alt="" width="600" height="110">
                        </a>
                    </div>
                    <div class="twitter_timeline">
                        <div class="tw-title">
                            <span>Twitter</span>
                        </div>
                        <div class="timeline-wrap">
                            <a class="twitter-timeline" data-lang="ja" data-height="600"
                                href="https://twitter.com/nh_PR_osaka">Tweets by nh_PR_osaka</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_content">
        <div class="container">
            <div class="col-12">
                
            </div>
        </div>
    </section>
</main>

<?php section('scripts');?>
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="<?php asset('js/intro.js');?>"></script>
<?php endsection();?>
<?php get_footer();?>