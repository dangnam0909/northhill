<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php title();?></title>
    <meta name="description" content="<?php desc();?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="<?php url() ?>">
	<meta property="og:site_name" content="">
	<meta property="og:image" content="<?php asset('img/ogp_northhill.jpg') ?>">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:locale" content="ja_JP">
	<meta property="fb:app_id" content="">
	<meta name="twitter:image" content="<?php asset('img/ogp_northhill.jpg') ?>">
	<meta name="twitter:card" content="summary_large_image">
	<link rel="icon" href="<?php asset('img/favicon.png') ?>" sizes="32x32">
	<link rel="apple-touch-icon-precomposed" href="<?php asset('img/favicon.png') ?>">
	<meta name="msapplication-TileImage" content="<?php asset('img/favicon.png') ?>">

    <link rel="stylesheet" href="<?php asset('css/normalize.css')?>">
    <link rel="stylesheet" href="<?php asset('css/common.css')?>?v2.3">
    <link rel="stylesheet" href="<?php asset('css/font.css')?>?v2.1">
    <?php stylesheet();?>
    <?php head();?>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26104621-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
    <?php after_body();?>
    <?php welcome();?>
    <header id="header">
        <div class="header-content">
            <div class="container">
                <div class="inner">
                    <div class="header-logo">
                        <a href="<?php url()?>"><img src="<?php asset('img/common/northhill-logo.svg')?>" alt=""
                                width="156" height="49"></a>
                    </div>
                    <div class="header-menu">
                        <nav>
                            <ul>
                                <li><a href="<?php url('company')?>">????????????</a></li>
                                <li><a href="<?php url('web')?>">???????????????</a></li>
                                <li><a href="<?php url('./')?>">??????????????????</a></li>
                                <li><a href="<?php url('./')?>">???????????????</a></li>
                                <li><a href="<?php url('./')?>">??????????????????</a></li>
                                <li><a href="http://www.north-hill.co.jp/recruit/" target="_blank">????????????</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="btn-info">
                        <a href="http://www.north-hill.co.jp/recruit/" class="" target="blank_">????????????</a>
                    </div>
                </div>
            </div>
            <nav class="menu-mobile">
                <div class="nav-header">
                    <a href="" class="nav-logo">
                        <img src="<?php asset('img/common/northhill-logo-white.svg')?>" alt="" width="156" height="49">
                    </a>
                </div>
                <ul>
                    <li class="menu-item menu-item-has-sub-level1">
                        <a href="<?php url('company')?>">????????????</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="<?php url('company')?>#company-profile">????????????</a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="javascript:void(0)">????????????</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="<?php url('./')?>">??????????????????</a></li>
                                    <li class="menu-item"><a href="<?php url('./')?>">??????????????????</a></li>
                                    <li class="menu-item"><a href="<?php url('./')?>">??????????????????</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="<?php url('company')?>/#history">??????</a></li>
                            <li class="menu-item"><a href="<?php url('company')?>/#business-partners">??????????????????</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="<?php url('web')?>">???????????????</a></li>
                    <li class="menu-item"><a href="<?php url('./')?>">??????????????????</a></li>
                    <li class="menu-item"><a href="<?php url('./')?>">???????????????</a></li>
                    <li class="menu-item"><a href="<?php url('./')?>">??????????????????</a></li>
                    <li class="menu-item"><a href="http://www.north-hill.co.jp/recruit/" target="blank_">????????????</a></li>
                </ul>
                <a href="<?php url('contact') ?>" class="btn btn-contact">????????????????????????????????????</a>
                <ul class="end-link">
                    <li><a href="<?php url('./')?>">??????????????????????????????</a></li>
                    <li><a href="<?php url('./')?>">?????????????????????????????????????????????</a></li>
                    <li><a href="<?php url('sitemap')?>">??????????????????</a></li>
                </ul>
            </nav>
        </div>
        <div id="hamburger"><span></span><span></span><span></span></div>
        <div id="menu_mask"></div>

    </header>