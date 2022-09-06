<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Prime Shooter</title>
<meta name="description" content="プライムシューターのファンサイトです">
<!-- <meta name="keywords" content="サイトキーワードを,で区切って入力"> -->
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
  <section class="mv js-mv">
    <h1 class="mv--h1 js-mv--h1">プライムシューター</h1>
    <div class="mv--weaponSelectorContainer">
      <div class="mv--weaponSelector selected" data-weapon-id=1 data-weapon-name="プライムシューター">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mv--weapon1.jpeg" alt="">
      </div>
      <div class="mv--weaponSelector" data-weapon-id=2 data-weapon-name="プライムシューターコラボ">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mv--weapon2.jpeg" alt="">
      </div>
      <div class="mv--weaponSelector" data-weapon-id=3 data-weapon-name="プライムシューターベッチュー">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mv--weapon3.jpeg" alt="">
      </div>
    </div>
  </section>
  <!-- /mv -->
</body>
</html>

