<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="mv" class="mv">
  <div class="mv__bg">
    <div class="container">
    <div class="mv__inner row justify-content-center align-items-center">
    <h2 class="mv__img-wrap col-md-5">
    <img class="d-block d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png" alt="ご自宅までスイトタクシーがお届けします" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_sp@2x.png 2x">
    <img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png" alt="ご自宅までスイトタクシーがお届けします" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_pc@2x.png 2x">
    </h2>
    <div class="mv__img-wrap col-md-7">
    <img class="d-block d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_photo_sp.png" alt="食事する家族" srcset="<?php echo $wp_url; ?>/dist/images/mv_photo_sp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_photo_sp@2x.png 2x">
    <img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/mv_photo_pc.png" alt="食事する家族" srcset="<?php echo $wp_url; ?>/dist/images/mv_photo_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_photo_pc@2x.png 2x">
    </div>
    </div>
    </div>
  </div>
  <div class="container">
    <div class="search__free mv__search">
    <form class="search__free__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
    <input type="hidden" name="post_type" value="shop">
    <div class="input-group">
    <div class="input-group-prepend">
    <input type="text" class="form-control" name="s" placeholder="お弁当" value="<?php echo get_search_query(); ?>" />
    </div>
    </div>
    <div class="search__free__form-btn">
    <input type="submit" class="btn btn-block btn-primary text-nowrap" value="検索">
    </div>
    </form>
    </div>
    </div>
  </div>
</section>
<!-- mv -->

<section class="search">
<div class="search__genre bg-warning">
<div class="container">
<div class="search__genre-list">
<ul>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/obento/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_obento.png" alt="お弁当" srcset="<?php echo $wp_url; ?>/dist/images/genre_obento.png 1x, <?php echo $wp_url; ?>/dist/images/genre_obento@2x.png 2x">
<span>お弁当</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/vegetable/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png" alt="生鮮食品" srcset="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png 1x, <?php echo $wp_url; ?>/dist/images/genre_vegetable@2x.png 2x">
<span>生鮮食品</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/yoshoku/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png" alt="洋食" srcset="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yoshoku@2x.png 2x">
<span>洋食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/curry/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_curry.png" alt="カレー" srcset="<?php echo $wp_url; ?>/dist/images/genre_curry.png 1x, <?php echo $wp_url; ?>/dist/images/genre_curry@2x.png 2x">
<span>カレー</span>
</a>
</li>


<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/obento/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_obento.png" alt="お弁当" srcset="<?php echo $wp_url; ?>/dist/images/genre_obento.png 1x, <?php echo $wp_url; ?>/dist/images/genre_obento@2x.png 2x">
<span>お弁当</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/vegetable/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png" alt="生鮮食品" srcset="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png 1x, <?php echo $wp_url; ?>/dist/images/genre_vegetable@2x.png 2x">
<span>生鮮食品</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/yoshoku/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png" alt="洋食" srcset="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yoshoku@2x.png 2x">
<span>洋食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/curry/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_curry.png" alt="カレー" srcset="<?php echo $wp_url; ?>/dist/images/genre_curry.png 1x, <?php echo $wp_url; ?>/dist/images/genre_curry@2x.png 2x">
<span>カレー</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/obento/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_obento.png" alt="お弁当" srcset="<?php echo $wp_url; ?>/dist/images/genre_obento.png 1x, <?php echo $wp_url; ?>/dist/images/genre_obento@2x.png 2x">
<span>お弁当</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/vegetable/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png" alt="生鮮食品" srcset="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png 1x, <?php echo $wp_url; ?>/dist/images/genre_vegetable@2x.png 2x">
<span>生鮮食品</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/yoshoku/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png" alt="洋食" srcset="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yoshoku@2x.png 2x">
<span>洋食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/curry/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_curry.png" alt="カレー" srcset="<?php echo $wp_url; ?>/dist/images/genre_curry.png 1x, <?php echo $wp_url; ?>/dist/images/genre_curry@2x.png 2x">
<span>カレー</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/obento/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_obento.png" alt="お弁当" srcset="<?php echo $wp_url; ?>/dist/images/genre_obento.png 1x, <?php echo $wp_url; ?>/dist/images/genre_obento@2x.png 2x">
<span>お弁当</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/vegetable/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png" alt="生鮮食品" srcset="<?php echo $wp_url; ?>/dist/images/genre_vegetable.png 1x, <?php echo $wp_url; ?>/dist/images/genre_vegetable@2x.png 2x">
<span>生鮮食品</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/yoshoku/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png" alt="洋食" srcset="<?php echo $wp_url; ?>/dist/images/genre_yoshoku.png 1x, <?php echo $wp_url; ?>/dist/images/genre_yoshoku@2x.png 2x">
<span>洋食</span>
</a>
</li>
<li>
<a class="text-body" href="<?php echo $home; ?>/shop_category/curry/">
<img src="<?php echo $wp_url; ?>/dist/images/genre_curry.png" alt="カレー" srcset="<?php echo $wp_url; ?>/dist/images/genre_curry.png 1x, <?php echo $wp_url; ?>/dist/images/genre_curry@2x.png 2x">
<span>カレー</span>
</a>
</li>

</ul>
</div>
</div>
</div>
</section>
<!-- search -->
<div class="py-md-5 main-left front">
<div class="container">
<div class="row">
<div class="col-md-8">
<?php get_template_part('template-part/parts/reco-restaurants'); ?>
<!-- buzz -->
</div>
<div class="col-md-4 d-md-block d-none">
<?php get_template_part('template-part/parts/search-restaurants') ?>
</div>
<!-- sidebar -->
</div>
</div>
</div>
<?php get_footer();
