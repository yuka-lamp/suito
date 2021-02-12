<?php
global $shop_name,$shop_address1;
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$referer = $_SERVER['HTTP_REFERER'];
$pref = get_pref();
$genres = get_genres();
$data = get_restaurant_detail($_GET['id']);
$shop_id = $data['id'];
$shop_name = $data['name'];
$shop_zipcode = $data['zipcode'];
$shop_address1 = $data['address1'];
$shop_address2 = $data['address2'];
$shop_access = $data['access'];
$shop_genre = $genres[((int)$data['cuisine_genre_id']-1)]['name'];
$business_hours = $data['business_hours'];
$regular_holiday = $data['regular_holiday'];
$gmap_url = $data['gmap_url'];
$shop_tel = $data['tel'];
$parking_flag = $data['parking_flag'];
if ($parking_flag) {
    $parking_text = $data['parking_text'];
}
$credit_card = $data['credit_card'];
$electronic_money = $data['electronic_money'];
$hp_url = $data['hp_url'];
$gnavi_url = $data['gnavi_url'];
$tabelog_url = $data['tabelog_url'];
$demaecan_url = $data['demaecan_url'];
$ubereats_url = $data['ubereats_url'];
$takeeats_url = $data['takeeats_url'];
$tags = explode(',', $data['tags']);
if ($takeeats_url != '' && $takeeats_url != null) {
    $recommend = true;
    $menus = get_menu($shop_id)['data'];
} else {
    $recommend = false;
}
get_header(); ?>

<div class="py-md-5">
<div class="container">
<div class="row">

<div class="col-md-8">

<section class="pb-4 restaurant">
<div class="sp-mode">

<div class="restaurant__mv mt-4">
<img src="<?php echo $wp_url; ?>/dist/images/topic_sample.png" alt="<?php echo $shop_name; ?>">
</div>

<div class="search__result__inner__wrap mt-4 mb-0 position-relative">
<p class="search__result__inner__wrap-name">TakeCafe</p>
<p class="search__result__inner__wrap-info">
<span>カフェ</span>
<span>¥800円から注文可</span>
</p>
<p class="search__result__inner-time">2行から3行程度の店舗紹介テキストが入ります。2行から3行程度の店舗紹介テキストが入ります。2行から3行程度の店舗紹介テキストが入ります。</p>
<div class="text-center mt-3">
<a class="btn btn-primary w-100" href="<?php echo $takeeats_url; ?>" target="_blank" onclick="gtag('event','click',{'event_category':'button','event_label':'テイクアウト予約する'});" style="min-width:1px;">ネットで今すぐ注文<i class="fas fa-angle-right ml-2"></i></a>
</div>
</div>
<!-- search__result__inner__wrap -->
<div class="restaurant__menu restaurant-block">
<h2 class="restaurant-ttl"><i class="far fa-star"></i>人気デリバリーメニュー</h2>
<div class="shop-search-buzz__list-inner-img-wrap container">
<div class="shop-search-buzz__list-inner-img-list">
<!-- 商品画像 -->
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<?php echo $shop_name; ?>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<?php echo $shop_name; ?>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<?php echo $shop_name; ?>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<?php echo $shop_name; ?>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
<div class="shop-search-buzz__list-inner-img-item">
<img src="<?php echo $wp_url; ?>/dist/images/sample_item.png" alt="<?php echo $shop_name; ?>の商品">
<p class="mb-0 text-white">¥1,000</p>
</div>
</div>
</div>
<div class="text-center">
<a class="restaurant-btn py-3" href="<?php echo $takeeats_url; ?>" target="_blank">メニュー一覧をみる</a>
</div>
</div>
<!-- restaurant__menu -->
<div class="restaurant__overview restaurant-block">
<h2 class="restaurant-ttl"><i class="fas fa-info-circle"></i>店舗情報</h2>
<div class="container">
<p class="search__result__inner-time mt-0">2行から3行程度の店舗紹介テキストが入ります。2行から3行程度の店舗紹介テキストが入ります。2行から3行程度の店舗紹介テキストが入ります。</p>
<table class="mt-3">
<tbody>
<tr>
<th>住所</th>
<td>〒000-0000<br>住所が入ります。</td>
</tr>
<tr>
<th class="text-nowrap">電話番号</th>
<td><div class="btn bg-primary"><a href="tel:<?php echo $shop_tel; ?>"><i class="fas fa-phone mr-1 text-info"></i>012-3456-7890</a></div></td>
</tr>
<tr>
<th>営業日・時間</th>
<td>10:00~19:00</td>
</tr>
<tr>
<th>定休日</th>
<td>水曜日</td>
</tr>
<tr>
<th class="text-nowrap"><?php if ($recommend) {
    echo "予約サイト";
} else {
    echo "公式HP";
} ?></th>
<td>
<?php if ($takeeats_url != null): ?>
<a class="text-body" href="<?php echo $takeeats_url; ?>" target="_blank" onclick="gtag('event','click',{'event_category':'button','event_label':'テイクアウト予約する'});"><?php echo $takeeats_url; ?></a>
<?php else: ?>
<?php if ($hp_url != null): ?>
<a class="text-body" href="<?php echo $hp_url; ?>" target="_blank"><?php echo $hp_url; ?></a>
<?php else: ?>
なし
<?php endif; ?>
<?php endif; ?>
</td>
</tr>
</tbody>
</table>
</div>

<!-- restaurant__external -->
</div>

<div class="mt-4 text-center">
<a class="btn btn-sm btn-default font-weight-bold bg-white" href="<?php echo $referer; ?>">一覧ページに戻る</a>
</div>

</section>
<?php if ($recommend): ?>
<div id="restaurant-btn" class="border-top">
<a class="restaurant-link" href="<?php echo $takeeats_url; ?>" target="_blank" onclick="gtag('event','click',{'event_category':'button','event_label':'<?php echo $shop_name; ?>'});">ネットで注文する<i class="fas fa-angle-right ml-2"></i></a>
</div>
<?php endif; ?>

</div>
<div class="col-md-4 d-md-block d-none">
<?php get_template_part('template-part/sidebar') ?>
</div>
</div>
</div>
</div>
<?php get_footer();
