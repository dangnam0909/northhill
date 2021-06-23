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



<?php section('scripts');?>
<script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="<?php asset('js/intro.js');?>"></script>
<?php endsection();?>
<?php get_footer();?>