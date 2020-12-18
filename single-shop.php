<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="py-md-5 bg-light">

<?php if(post_custom('order_url')): // 入力がある場合 ?>
<div id="restaurant-btn" class="border-top">
<a class="btn btn-primary w-100 mt-3" href="<?php the_field('order_url'); ?>" target="_blank" >ネットで今すぐ注文<i class="fas fa-angle-right ml-2"></i></a>
</div>
<?php endif; ?>

<div class="container">
<div class="row">

<div class="col-md-8">

<section class="pb-4 restaurant">
<div class="sp-mode">

<div class="restaurant__mv">
<img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
</div>

<div class="search__result__inner__wrap mb-0 position-relative">
<p class="search__result__inner__wrap-name"><?php the_title() ?></p>
<p class="search__result__inner__wrap-info">

<span><?php echo get_the_term_list($post->ID,'shop_category'); ?></span>

<?php if(post_custom('price')): // 入力がある場合 ?>
<span>¥<?php the_field('price'); ?>から注文可</span>
<?php endif; ?>

</p>

<p class="search__result__inner__wrap-about"><?php the_field('about'); ?></p>

<?php if(post_custom('order_url')): // 入力がある場合 ?>
<a class="btn btn-primary w-100 mt-3" href="<?php the_field('order_url'); ?>" target="_blank" >ネットで今すぐ注文<i class="fas fa-angle-right ml-2"></i></a>
<?php endif; ?>

</div>

<?php if( get_field('menu') === "はい"): ?>
<!-- search__result__inner__wrap -->
<div class="restaurant__menu restaurant-block">
<h2 class="restaurant-ttl"><i class="far fa-star"></i>人気デリバリーメニュー</h2>

<div class="shop-search-buzz__list-inner-img-wrap container">
<div class="shop-search-buzz__list-inner-img-list">

<!-- 商品 -->
<?php if(post_custom('menu_price_1')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<?php if(post_custom('menu_img_1')): // 入力がある場合 ?>
<img src="<?php the_field('menu_img_1'); ?>" alt="<?php the_title(); ?>の商品">
<?php else: // ないとき ?>
<img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
<?php endif; ?>
<p class="mb-0 text-white">¥<?php the_field('menu_price_1'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_price_2')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<?php if(post_custom('menu_img_2')): // 入力がある場合 ?>
<img src="<?php the_field('menu_img_2'); ?>" alt="<?php the_title(); ?>の商品">
<?php else: // ないとき ?>
<img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
<?php endif; ?>
<p class="mb-0 text-white">¥<?php the_field('menu_price_2'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_price_3')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<?php if(post_custom('menu_img_3')): // 入力がある場合 ?>
<img src="<?php the_field('menu_img_3'); ?>" alt="<?php the_title(); ?>の商品">
<?php else: // ないとき ?>
<img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
<?php endif; ?>
<p class="mb-0 text-white">¥<?php the_field('menu_price_3'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_price_4')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<?php if(post_custom('menu_img_4')): // 入力がある場合 ?>
<img src="<?php the_field('menu_img_4'); ?>" alt="<?php the_title(); ?>の商品">
<?php else: // ないとき ?>
<img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
<?php endif; ?>
<p class="mb-0 text-white">¥<?php the_field('menu_price_4'); ?></p>
</div>
<?php endif; ?>

<?php if(post_custom('menu_price_5')): // 入力がある場合 ?>
<div class="shop-search-buzz__list-inner-img-item">
<?php if(post_custom('menu_img_5')): // 入力がある場合 ?>
<img src="<?php the_field('menu_img_5'); ?>" alt="<?php the_title(); ?>の商品">
<?php else: // ないとき ?>
<img class="d-block" src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
<?php endif; ?>
<p class="mb-0 text-white">¥<?php the_field('menu_price_5'); ?></p>
</div>
<?php endif; ?>

</div>
</div>

<div class="text-center">
<?php if(post_custom('order_url')): // 入力がある場合 ?>
<a class="restaurant-btn py-3" href="<?php echo post_custom('order_url'); ?>" target="_blank">メニュー一覧をみる</a>
<?php endif; ?>
</div>
</div>
<?php elseif( get_field('menu') === "いいえ"): ?>

<?php endif; ?>

<div class="restaurant__overview restaurant-block">
<h2 class="restaurant-ttl"><i class="fas fa-info-circle"></i>店舗情報</h2>
<div class="container">
<table class="">
<tbody>
<tr>
<th>住所</th>
<td><?php the_field('address'); ?></td>
</tr>
<tr>
<th class="text-nowrap">電話番号</th>
<td><div class="btn bg-primary"><a href="tel:<?php the_field('tel'); ?>"><i class="fas fa-phone mr-1 text-info"></i><?php the_field('tel'); ?></a></div></td>
</tr>
<tr>
<th>営業日・時間</th>
<td><?php the_field('time'); ?></td>
</tr>
<tr>
<th>定休日</th>
<td><?php the_field('day'); ?></td>
</tr>

<?php if(post_custom('hp')): // 入力がある場合 ?>
<tr>
<th class="text-nowrap">公式HP</th>
<td>
<a class="text-body" href="<?php the_field('hp'); ?>" target="_blank"><?php the_field('hp'); ?><i class="fas fa-external-link-alt ml-1"></i></a>
</td>
</tr>
<?php endif; ?>

</tbody>
</table>
</div>

<!-- restaurant__external -->
</div>

<div class="mt-4 text-center">
<a class="btn btn-sm btn-default font-weight-bold bg-white" href="<?php echo $referer; ?>">一覧ページに戻る</a>
</div>

</section>

</div>
<div class="col-md-4 d-md-block d-none">
<?php get_template_part('template-part/parts/search-restaurants') ?>
</div>
</div>
</div>
</div>
<?php get_footer();
