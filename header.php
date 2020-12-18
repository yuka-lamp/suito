<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php if (is_home() || is_front_page()): ?>
<link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css">
<?php endif;?>
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<?php if (!is_page(['search', 'geo','service']) && !is_single()): ?>
<body class="bg-light">
<?php else: ?>
<body>
<?php endif; ?>
<?php wp_body_open(); ?>

<header class="lp__header">
<nav class="navbar">
  <div class="lp__header-wrap">
    <h1 class="navbar-brand p-0 m-0">
    <a class="d-inline-block align-middle" href="<?php echo $home; ?>">
    <img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="スイトタク配ロゴ" srcset="<?php echo $wp_url; ?>/dist/images/logo.png 1x, <?php echo $wp_url; ?>/dist/images/logo@2x.png 2x">
    </a>
    </h1>
    <button type="button" class="text-primary border-0 bg-white search" data-toggle="modal" data-target="#search-restaurant">
      <img src="<?php echo $wp_url; ?>/dist/images/icon_search.svg" alt="虫眼鏡アイコン">
      <p>検索</p>
    </button>
    <button class="navbar-toggler" type="button"
        data-toggle="collapse"
        data-target="#navmenu1"
        aria-controls="navmenu1"
        aria-expanded="false"
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <p>メニュー</p>
    </button>
  </div>
  <div class="collapse navbar-collapse" id="navmenu1">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?php echo $home; ?>/delivery">ご利用方法</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/news">お知らせ一覧</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/service">【飲食店向け】スイトタク配を始める</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/disclaimers">免責事項</a>
    </div>
  </div>
</nav>
</header>



<?php get_template_part('template-part/modal/search-form'); ?>
<main>
