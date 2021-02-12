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

<?php wp_body_open(); ?>

<body class="<?php if(is_archive('shop')) {
  echo "archives-shop";
} ?>">
<?php wp_body_open(); ?>

<!-- ▼ ヘッダー -->
<header class="header shadow-sm">
  <nav class="navbar navbar-expand-lg">
    <!-- ▼ スマホで見えている部分 -->
    <div class="header-wrap">
      <!-- ▼ タク配ロゴ -->
      <h1 class="navbar-brand p-0 m-0">
      <a class="d-inline-block align-middle" href="<?php echo $home; ?>">
        <img src="<?php echo get_field('service-logo',2); ?>" alt="<?php echo get_field('service-name',2); ?>ロゴ">
        <span class="f-32 text-body font-weight-bold"></span>
      </a>
      </h1>
      <!-- ▲ タク配ロゴ -->

      <div class="header-btn">
        <!-- ▼ 検索ボタン -->
        <button type="button" class="header-btn-item border-0 bg-white search d-block d-lg-none f-10" data-toggle="modal" data-target="#search-restaurant">
          <i class="fas fa-search"></i>
          <br>検索
        </button>
        <!-- ▲ 検索ボタン -->
        <!-- ▼ メニューボタン -->
        <button class="header-btn-item navbar-toggler hum f-10" type="button"
            data-toggle="collapse"
            data-target="#navmenu1"
            aria-controls="navmenu1"
            aria-expanded="false"
            aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <br>メニュー
        </button>
        <!-- ▲ メニューボタン -->
      </div>
      <!-- ▲ スマホで見えている部分 -->
      <!-- ▼ メニュー開 -->
      <div class="nav collapse navbar-collapse" id="navmenu1">
        <!-- ▼ メインリンク -->
        <div class="navbar-nav main">
          <a class="nav-item nav-link f-14 pr-4 mr-0" href="<?php echo $home; ?>/delivery">ご利用方法</a>
          <a class="nav-item nav-link f-14 pr-4 mr-0" href="<?php echo $home; ?>/news">お知らせ</a>
          <a class="nav-item nav-link f-14 pr-4 mr-0" href="<?php echo $home; ?>/service"><?php echo get_field('service-name',2); ?>を始める</a>
          <a class="nav-item nav-link f-14 pr-4 mr-0" href="<?php echo $home; ?>/contact">お問い合わせ</a>
        </div>
        <!-- ▲ メインリンク -->
        <!-- ▼ サブリンク -->
        <div class="navbar-nav sub py-lg d-block d-lg-none">
          <a class="f-12" href="<?php echo get_field('taxi-url',2); ?>" target="_blank">運営会社</a>
          <a class="f-12" href="<?php echo $home; ?>/disclaimers">免責事項</a>
          <a class="f-12" href="<?php echo $home; ?>/term">利用規約</a>
          <br>
          <a class="f-12" href="<?php echo $home; ?>/law">特定商取引に関する方針</a>
          <a class="f-12" href="<?php echo $home; ?>/privacy-policy">プライバシーポリシー</a>
        </div>
        <!-- ▲ サブリンク -->
      </div>
      <!-- ▲ メニュー開 -->
    </div>
  </nav>
</header>
<!-- ▲ ヘッダー -->

<!-- ▼ モーダル -->
<?php get_template_part('template-part/modal-search'); ?>
<!-- ▲ モーダル -->
<main>
