<?php
global $blogs;
require_once "../functions.php";
require_once __DIR__ . "/data.php";
set_title("株式会社ノース・ヒル");
set_desc("株式会社ノース・ヒルは、大阪、東京、福岡に拠点をもつ、広告制作会社です。ウェブ制作、グラフィック制作、映像制作等、広告制作全般に、真心と遊び心を込めてお応えいたします。");
?>
<?php section('stylesheet');?>
<link href="<?php asset('css/home.css?v3');?>" rel="stylesheet">
<link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css" />
<link href="<?php asset('css/jigyou.css'); ?>?1" rel="stylesheet">
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
                    <a href="<?php url('dtp')?>" class="link-shop">
                        グラフィック
                    </a>
                </li>
                <li>
                    <a href="<?php url('movie')?>" class="link-shop">
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
    <section id="about">
        <div class="container">
            <div class="heading">
                <div class="logo">
                    <img src="<?php img('dtp/about-logo.png'); ?>" alt="事業紹介">
                </div>
                <h1 class="title">事業紹介</h1>
            </div>
            <div class="graphic">映像・動画</div>
            <div class="text">
                テレビからPC、タブレット、スマートフォンへと映像が配信されるメディアは、多チャンネル化、高画質化も相まって、拡大の一途を<br class="br-pc" />辿っています。また、CG技術やアニメー<br
                    class="br-pc" />ション、インタラクティブなフラッシュコンテンツなど表現手法も多彩に広がってきました。<br>
                当社では、テレビ番組やCMのノウハウをベースに、グラフィックで培った高いデザイン性、ウェブとの連携による最新テクノロジーの導入により、「人を動かす」映像・動画を制作。<br>
                販促から営業支援、観光、教育、CSRなど、多彩な分野でストーリー性のある映像コンテンツを提供し、企業とユーザーの橋渡しを行っています。
            </div>
            <div class="main">
                <img class="pc" src="<?php img('movie/about_img_pc.jpg'); ?>" alt="映像・動画" />
                <img class="sp" src="<?php img('movie/about_img_sp.jpg'); ?>" alt="映像・動画" />
            </div>
        </div>
    </section>
    <section id="section-blog">
        <div class="conner top">
            <img src="<?php img('dtp/blog-conner-top.png'); ?>" alt="Blog">
        </div>
        <div class="container">
            <div class="blogs">
                <?php foreach ($blogs as $blog) : ?>
                <div class="blog">
                    <div class="blog-wrap">
                        <h2 class="title">
                            <img src="<?php img('dtp/' . $blog['image']); ?>" alt="<?php echo $blog['title']; ?>" />
                            <span><?php echo nl2br($blog['title']); ?></span>
                        </h2>
                        <div class="content">
                            <?php echo $blog['content']; ?>
                            <span class="line">
                                <img src="<?php img('/icons/icon-butterfly.svg'); ?>" alt="butterfly">
                            </span>
                            <?php echo $blog['extend']; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="conner bottom">
            <img src="<?php img('dtp/blog-conner-bottom.png'); ?>" alt="Blog">
        </div>
    </section>

    <section id="section-links">
        <div class="container">
            <div class="links">
                <a href="<?php url('web'); ?>" class="link ">ウェブ制作</a>
                <a href="<?php url('dtp'); ?>" class="link ">グラフィック</a>
                <a href="<?php url('movie'); ?>" class="link active">映像・動画</a>
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