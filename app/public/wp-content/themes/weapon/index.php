<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Prime Shooter</title>
<meta name="description" content="プライムシューターのファンサイトです">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@4.5.1/dist/css/swiper.min.css"/>
<script src="//cdn.jsdelivr.net/npm/swiper@4.5.1/dist/js/swiper.min.js"></script> 
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
  <!-- header -->
  <header class="header">
    <div class="header--top">
      <p>
        Prime<br>Shooter
      </p>
    </div>
    <div class="header--nav">
      <ul>
        <li><a href="">ブキ性能（準備中）</a></li>
        <li><a href="">ギア構成（準備中）</a></li>
        <li><a href="/derive">派生</a></li>
      </ul>
    </div>
  </header>
  <!-- /header -->

  <div class="swiper-container _pc">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mv--weapon1.jpeg');">
        <h1 class="swiper--h1">プライムシューター</h1>
      </div>
      <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mv--weapon2.jpeg');">
        <h1 class="swiper--h1">プライムシューター<br>コラボ</h1>
      </div>
      <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mv--weapon3.jpeg');">
        <h1 class="swiper--h1">プライムシューター<br>ベッチュー</h1>
      </div>
    </div>
 
    <!-- pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
 
    <!-- navigation buttons -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>

  <section class="main">
    <h2 class="main--h2 fade">長い射程とブレない弾道</h2>
    <p class="main--txt fade">サンプルテキストサンプルテキスト<br>サンプルテキストサンプルテキストサンプルテキスト<br>サンプルテキストサンプルテキスト</p>
    <h2 class="main--h2 fade">圧倒的なキル速度</h2>
    <p class="main--txt fade">サンプルテキストサンプルテキスト<br>サンプルテキストサンプルテキストサンプルテキスト<br>サンプルテキストサンプルテキスト</p>
  </section>
</body>
</html>

