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
  <!-- derive-top -->
  <section class="derive-top">
    <h1>派生</h1>
    <p></p>
  </section>
  <!-- /derive-top -->

  <?php
    set_query_var( 'derive_main_name', "プライムシューター" ); 
    set_query_var( 'derive_sub_name', "ポイントセンサー" ); 
    set_query_var( 'derive_special_name', "アメフラシ" ); 
    set_query_var( 'derive_main_image', get_template_directory_uri()."/images/mv--weapon1.jpeg" ); 
    set_query_var( 'derive_sub_image', get_template_directory_uri()."/images/pointsensor.jpeg" ); 
    set_query_var( 'derive_special_image', get_template_directory_uri()."/images/amefurashi.jpeg" ); 
    set_query_var( 'derive_text', "サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト" ); 
    get_template_part("templates/derive");

    set_query_var( 'derive_main_name', "プライムシューターコラボ" ); 
    set_query_var( 'derive_sub_name', "キューバンボム" ); 
    set_query_var( 'derive_special_name', "バブルランチャー" ); 
    set_query_var( 'derive_main_image', get_template_directory_uri()."/images/mv--weapon2.jpeg" ); 
    set_query_var( 'derive_sub_image', get_template_directory_uri()."/images/kyuban_bomb.jpeg" ); 
    set_query_var( 'derive_special_image', get_template_directory_uri()."/images/babble_launcher.jpeg" ); 
    set_query_var( 'derive_text', "サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト" ); 
    get_template_part("templates/derive");

    set_query_var( 'derive_main_name', "プライムシューターベッチュー" ); 
    set_query_var( 'derive_sub_name', "スプラッシュボム" ); 
    set_query_var( 'derive_special_name', "ナイスダマ" ); 
    set_query_var( 'derive_main_image', get_template_directory_uri()."/images/mv--weapon3.jpeg" ); 
    set_query_var( 'derive_sub_image', get_template_directory_uri()."/images/splash_bomb.jpeg" ); 
    set_query_var( 'derive_special_image', get_template_directory_uri()."/images/nice_dama.jpeg" ); 
    set_query_var( 'derive_text', "サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト" ); 
    get_template_part("templates/derive");
  ?>
</body>
</html>