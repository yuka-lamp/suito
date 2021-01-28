<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<?php if (is_page('service')): //サービスページのみ ?>

<!-- ▼ フッター -->
<footer class="footer mt-0 mb-5">
  <div class="container pt-5">
    <!-- ▼ お問い合わせ -->
    <div class="footer__tel__inner">
      <p>サービス内容・システムに関する<br class="visible-md visible-lg">お問い合わせはこちらまで</p>
      <a href="tel:075-600-2721">075-600-2721</a>
      <p class="small">（株式会社ランプ TakeEatsカスタマーサポート）</p>
    </div>
    <!-- ▲ お問い合わせ -->
    <!-- ▼ ページリンク -->
    <div class="footer__link__inner">
      <ul>
      <li><a href="http://www.seino.co.jp/suito/index.htm" target="_blank">運営会社</a></li>
      <li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
      <li><a href="<?php echo $home; ?>/law/">特定商取引に関する方針</a></li>
      <li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
      </ul>
    </div>
    <!-- ▲ ページリンク -->
    <!-- ▼ コピーライト -->
    <p class="mb-0 pb-5 socket">
      <a href="<?php echo $home ?>" target="_blank">
        Copyright © 2020 スイトタク配 All Rights Reserved.
      </a>
    </p>
    <!-- ▲ コピーライト -->
  </div>
</footer>
<!-- ▲ フッター -->

<?php else: ?>

<!-- ▼ 加盟店募集 -->
<div class="cta d-block d-md-none">
  <div class="cta-takeeats mb-0">
    <div class="cta-takeeats-wrap">
      <a href="<?php echo $home ?>/service" target="_blank">
        <div class="cta-takeeats__img">
          <img class="cta-takeeats-wrap-bg" src="<?php echo $wp_url; ?>/dist/images/entry_img.png" alt="あなたのお店もデリバリー始めませんか？" srcset="<?php echo $wp_url; ?>/dist/images/entry_img.png 1x, <?php echo $wp_url; ?>/dist/images/entry_img@2x.png 2x">
        </div>
      </a>
    </div>
  </div>
</div>
<!-- ▲ 加盟店募集 -->

<!-- ▼ フッター -->
<footer class="footermt-0 bg-warning">
  <!-- ▼ お問い合わせ -->
  <div class="container pt-4">
    <div class="footer__tel__inner">
    <p>サービス内容・システムに関する<br class="visible-md visible-lg">お問い合わせはこちらまで</p>
    <a href="tel:075-600-2721">075-600-2721</a>
    <p class="small">（株式会社ランプ TakeEatsカスタマーサポート）</p>
    </div>
  </div>
  <!-- ▲ お問い合わせ -->
  <!-- ▼ 上段 -->
  <div class="container">
    <ul class="footer-links footer-links-main pt-4 pb-4">
    <li><a href="<?php echo $home; ?>/delivery/">ご利用方法</a></li>
    <li><a href="<?php echo $home; ?>/category/news/">お知らせ一覧</a></li>
    <li><a class="nav-item nav-link" href="<?php echo $home; ?>/service/">【飲食店向け】スイトタク配を始める</a></li>
    <li><a href="<?php echo $home; ?>/disclaimers/">【飲食店向け】免責事項</a></li>
    </ul>
  </div>
  <!-- ▲ 上段 -->
  <!-- ▼ 下段 -->
  <div class="bg-secondary">
    <div class="container">
    <ul class="footer-links footer-links-sub pt-5">
    <li><a href="http://www.seino.co.jp/suito/index.htm" target="_blank">運営会社</a></li>
    <li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
    <li><a href="<?php echo $home; ?>/law/">特定商取引に関する方針</a></li>
    <li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
    </ul>
    <p class="mb-0 pb-5 socket"><a href="<?php echo $home ?>" target="_blank">Copyright © 2020 スイトタク配 All Rights Reserved.</a></p>
    </div>
  </div>
  <!-- ▲ 下段 -->
</footer>
<!-- ▲ フッター -->

<?php endif; ?>


<?php wp_footer(); ?>
<!-- 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  new Swiper(".swiper-container", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    breakpoints: {
      768: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 10,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script> -->

</body>
</html>
