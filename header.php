<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <meta name="vewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body class="l-body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="c-flex">
    <main class="l-main">
      <button class="c-slide--button"><a>Menu</a></button><!-- メニュー表示ボタン -->
      <header class="p-header l-header">
        <P class="c-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hamburger</a></P>
        <?php get_search_form(); ?><!-- サーチフォームの呼び出し -->
        <div class="c-color-board--black"></div><!-- メニュー展開時に画面を暗くする -->
      </header>