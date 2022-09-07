<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Prime Shooter</title>
<meta name="description" content="プライムシューターのファンサイトです">
<!-- <meta name="keywords" content="サイトキーワードを,で区切って入力"> -->

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
        <li><a href="">ブキ性能</a></li>
        <li><a href="">ギア構成</a></li>
        <li><a href="">派生</a></li>
      </ul>
    </div>
  </header>
  <!-- /header -->

  <!-- mv -->
<!--
  <section class="mv js-mv">
    <div class="mv--bg _1 _selected">
      <h1 class="mv--h1 js-mv--h1">プライムシューター</h1>
    </div>
    <div class="mv--bg _2">
      <h1 class="mv--h1 js-mv--h1">プライムシューター<br>コラボ</h1>
    </div>
    <div class="mv--bg _3">
      <h1 class="mv--h1 js-mv--h1">プライムシューター<br>ベッチュー</h1>
    </div>
    <div class="mv--weaponSelectorContainer">
      <div class="mv--weaponSelector _selected" data-weapon-id=1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/mv--weapon1.jpeg" alt="">
      </div>
      <div class="mv--weaponSelector" data-weapon-id=2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/mv--weapon2.jpeg" alt="">
      </div>
      <div class="mv--weaponSelector" data-weapon-id=3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/mv--weapon3.jpeg" alt="">
      </div>
    </div>
  </section>
-->
  <!-- /mv -->

  <div class="swiper-container">
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
</body>
</html>

