<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<?php if (is_page('service')): ?>

<footer class="footer mt-0 mb-5">
<div class="container pt-5">
<div class="footer__tel__inner">
<p>サービス内容・システムに関する<br class="visible-md visible-lg">お問い合わせはこちらまで</p>
<a href="tel:075-600-2721">075-600-2721</a>
<p class="small">（株式会社ランプ TakeEatsカスタマーサポート）</p>
</div>
<div class="footer__link__inner">
<ul>
<li><a href="http://www.seino.co.jp/suito/index.htm" target="_blank">運営会社</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引に関する方針</a></li>
<li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
</ul>
</div>
<p class="mb-0 pb-5 socket"><a href="<?php echo $home ?>" target="_blank">Copyright © 2020 スイトタク配 All Rights Reserved.</a></p>
<!-- footer__link__inner -->
</div>
</div>
<!-- footer__link -->
</footer>

<?php else: ?>

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

<footer class="footermt-0 bg-warning">
<div class="container">
  <div class="footer__tel__inner">
  <p>サービス内容・システムに関する<br class="visible-md visible-lg">お問い合わせはこちらまで</p>
  <a href="tel:075-600-2721">075-600-2721</a>
  <p class="small">（株式会社ランプ TakeEatsカスタマーサポート）</p>
  </div>
</div>
<div class="container">
<ul class="footer-links footer-links-main pt-4 pb-4">
<li><a href="<?php echo $home; ?>/delivery/">ご利用方法</a></li>
<li><a href="<?php echo $home; ?>/category/news/">お知らせ一覧</a></li>
<li><a class="nav-item nav-link" href="<?php echo $home; ?>/service/">【飲食店向け】スイトタク配を始める</a></li>
<li><a href="<?php echo $home; ?>/disclaimers/">免責事項</a></li>
</ul>
</div>
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
</div>
</footer>

<?php endif; ?>


<?php wp_footer(); ?>
<?php if (is_home() || is_front_page()): ?>
<!-- <script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<!-- <script src="//maps.google.com/maps/api/js?key=AIzaSyA6caobCHn-IcFLznnEERoWzgHlEQi-YoI"></script> -->
<!-- <script src="<?php echo $wp_url; ?>/dist/js/perf-genre.js"></script> -->

<!-- <script>
$(document).ajaxStop(function() {
  $('#spinner-load').css('display', 'none');
});

navigator.geolocation.getCurrentPosition(success, fail);
function success(pos) {
  let latlng = {
    lat: pos.coords.latitude,
    lng: pos.coords.longitude,
  };
  const geocoder = new google.maps.Geocoder();
  geocoder.geocode(
    {
      latLng: latlng,
    },
    function (results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        let address = results[0].address_components[4].long_name+results[0].address_components[3].long_name;
        console.log(address);
        $('.search__genre-list a').each(function() {
          let temp_url = $(this).attr('href')+"&keyword="+address;
          $(this).attr('href', temp_url);
        });
      }
    }
  );
}

function fail(error){
  alert('位置情報が取得できませんでした。');
}
</script> -->

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
</script>
<?php endif; ?>
<script>
// $(function ($) {
//   $("#lpcase").slick({
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 5000,
//     arrows: false,
//     dots: false,
//     centerMode: true,
//     centerPadding: "20vw",
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 2,
//         },
//       },
//     ],
//   });
//   });
</script>
</body>
</html>
