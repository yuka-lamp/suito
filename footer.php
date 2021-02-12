<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<!-- ▼ 加盟店募集 -->
<?php if( get_field('start-bg',2)): ?>
<div class="start" style="background: url('<?php echo get_field('start-bg',2); ?>'); background-position: center; background-size: cover;">
<?php else: // ないとき ?>
<div class="start">
<?php endif; ?>
  <div class="">
    <h2 class="f-18 text-center">
      <span class="text-body bg-white mr-2">無料</span><?php echo get_field('service-name',2); ?>をはじめませんか？
    </h2>
    <a href="<?php echo $home; ?>/service/">今すぐ申し込む</a>
  </div>
  <!-- ▼ 背景黒 -->
  <div class="start-bg"></div>
  <!-- ▲ 背景黒 -->
</div>
<!-- ▲ 加盟店募集 -->

<!-- ▼ 加盟店募集 -->
<div class="d-flex justify-content-center">
  <div class="bg-light p-4 text-center w-100">
    <p class="f-14 mb-1">サービス内容・システムに関する<br>お問い合わせはこちらまで</p>
    <a class="f-24 font-weight-bold" href="tel:075-600-2721"><i class="fas fa-phone-alt"></i>075-600-2721</a>
    <p class="f-12 mb-0">テイクイーツカスタマーサポート</p>
  </div>
</div>
<!-- ▲ 加盟店募集 -->

<!-- ▼ フッター -->
<footer class="footer mt-0 mb-5">
  <div class="nav">
    <!-- ▼ メインリンク -->
    <div class="navbar-nav main w-100">
      <a class="nav-item nav-link" href="<?php echo $home; ?>/delivery">ご利用方法</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/news">お知らせ</a>
      <a class="nav-item nav-link" href="<?php echo $home; ?>/service"><?php echo get_field('service-name',2); ?>を始める</a>
      <a class="nav-item nav-link f-14 pr-4 mr-0" href="<?php echo $home; ?>/contact">お問い合わせ</a>
    </div>
    <!-- ▲ メインリンク -->
    <!-- ▼ サブリンク -->
    <div class="navbar-nav sub py-lg">
      <a class="f-12" href="<?php echo get_field('taxi-url',2); ?>" target="_blank">運営会社</a>
      <a class="f-12" href="<?php echo $home; ?>/disclaimers">免責事項</a>
      <a class="f-12" href="<?php echo $home; ?>/term">利用規約</a>
      <br>
      <a class="f-12" href="<?php echo $home; ?>/law">特定商取引に関する方針</a>
      <a class="f-12" href="<?php echo $home; ?>/privacy-policy">プライバシーポリシー</a>
    </div>
    <!-- ▲ サブリンク -->
    <small class="text-success f-10 text-center mb-3 d-block w-100"><?php echo get_field('copyright',2); ?></small>
  </div>
</footer>
<!-- ▲ フッター -->

<?php wp_footer(); ?>

</body>
</html>
