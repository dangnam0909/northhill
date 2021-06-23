<?php

global $blogs;
global $groups;
require_once "../functions.php";
require_once __DIR__ . "/data.php";

set_title("ウェブ制作｜株式会社ノース・ヒル");
set_desc("株式会社ノース・ヒルでは、Webサイトの構築、アプリ開発からコンテンツ企画・運用まで、様々なウェブサイト制作、システム開発を手掛けています。制作実績や、ご依頼から納品までの流れも掲載しております。");
?>
<?php section('stylesheet'); ?>
<link href="<?php asset('libs/fancybox/style.css'); ?>?1" rel="stylesheet">
<link href="<?php asset('libs/swiper/swiper.min.css'); ?>" rel="stylesheet">
<link href="<?php asset('css/jigyou.css'); ?>?1" rel="stylesheet">
<?php endsection(); ?>
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
      <div class="graphic"><p>ウェブ制作</p></div>
      <div class="text">
        全世界で飛躍的にIT化が推進される今、インターネットのインタラクティブ性やテクノロ<br class="br-pc"/>ジーを、いかにビジネス・コミュニケーションに展開していくかが鍵となります。<br>
        ウェブサイトの企画・デザイン・構築はもちろん、効果的なネット広告による誘客率アップや、ユーザビリティの分析、離脱率ダウン、コンテンツの充実化、CMS導入による更新頻度の向上など、成果を上げるための運用業務も担います。<br>
        加速するDX化の波に即座に対応できるよう、各デバイスへの対応サイト制作やアプリ開発など、領域を広げて総合的なコミュニケーションをご提案します。
      </div>
      <div class="main">
        <img class="pc" src="<?php img('web/about_img_pc.jpg'); ?>" alt="事業紹介" />
        <img class="sp" src="<?php img('web/about_img_sp.jpg'); ?>" alt="事業紹介" />
      </div>
    </div>
  </section>
  <section id="section-blog">
    <div class="conner top">
      <img src="<?php img('web/blog-conner-top.png'); ?>" alt="Blog">
    </div>
    <div class="container">
      <div class="blogs">
        <?php foreach ($blogs as $blog) : ?>
        <div class="blog">
          <div class="blog-wrap">
            <h2 class="title">
              <img src="<?php img('web/' . $blog['image']); ?>" alt="<?php echo $blog['title']; ?>" />
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
      <img src="<?php img('web/blog-conner-bottom.png'); ?>" alt="Blog">
    </div>
  </section>
  <section id="section-products">
    <div class="container">
      <h2 class="title">制作実績</h2>
      <div class="products" id="production-group">
        <div class="swiper-container" id="production-swiper">
          <div class="swiper-wrapper">
            <?php foreach ($groups as $group) : ?>
            <div class="swiper-slide product">
              <a class="product-wrap" href="<?php img($group['image']); ?>" data-fancybox="product" data-caption="<?php echo nl2br($group['title']); ?>">
                <div class="image">
                  <img src="<?php img($group['thumb']); ?>" alt="<?php echo $group['title']; ?>">
                </div>
                <div class="product-title"><?php echo nl2br(trim($group['title'])); ?></div>
              </a>
            </div>
            <?php endforeach; ?>

          </div>
          <div class="swiper-controls">
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
      <a href="javascript:void(0)" id="more-product">
        もっと見る
      </a>
    </div>
  </section>
  <section id="request-delivery">
    <div class="container">
      <div class="request-delivery">
        <h2 class="title">
          ご依頼から納品までの流れ
          <small>（ウェブサイトの場合）</small>
        </h2>
        <div class="steps">
          <?php global $steps; ?>
          <?php foreach ($steps as $num => $step) : ?>
          <div class="step">
            <div class="step-wrap">
              <h3 class="step-title">
                <span class="num"><?php echo $num + 1; ?></span>
                <?php echo nl2br($step['title']); ?>
              </h3>
              <div class="step-content">
                <?php echo nl2br($step['content']); ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="request-action">
        <a href="<?php url('contact') ?>" class="btn-request">ご依頼・お問い合わせはこちらから</a>
      </div>
    </div>
  </section>
  <section id="section-links">
    <div class="container">
      <div class="links">
        <a href="<?php url('web'); ?>" class="link active">ウェブ制作</a>
        <a href="<?php url('dtp'); ?>" class="link ">グラフィック</a>
        <a href="<?php url('movie'); ?>" class="link">映像・動画</a>
      </div>
    </div>
  </section>
</main>

<?php section('footer'); ?>

<script src="<?php asset('libs/fancybox/script.js'); ?>"></script>
<script src="<?php asset('libs/swiper/swiper.min.js'); ?>"></script>
<script src="<?php asset('js/jigyou.js'); ?>?v=1.0.2"></script>
<?php endsection(); ?>
<?php get_footer(); ?>