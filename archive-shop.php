<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="container py-3">
<div class="search__free">

<form class="search__free__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
<div class="input-group">
<input type="hidden" name="post_type" value="shop">

<div class="input-group">
<div class="input-group-prepend">
<input type="text" class="form-control" name="s" placeholder="洋食" value="<?php echo get_search_query(); ?>" />
</div>
</div>
<div class="search__free__form-btn">
<input type="submit" class="btn btn-block btn-primary text-nowrap" value="検索">
</div>

</form>

</div>
</div>
</div>

<!-- ▼ ジャンル -->
<?php get_template_part('template-part/genre'); ?>
<!-- ▲ ジャンル -->

<div class="py-md-5 main-left  bg-secondary">
<div class="container">
<div class="row">

<div class="col-md-8">
<section class="search">

<?php
$post_type = $_GET['post_type'];
$s = $_GET['s'];
$shop_category = $_GET['shop_category']; //ジャンル
$cat_date = get_term_by( 'slug', $shop_category, 'shop_category' );
$cat_name = $cat_date->name;
$shop_tag = $_GET['shop_tag']; //タグ
$tag_date = get_term_by( 'slug', $shop_tag, 'shop_tag' );
$tag_name = $tag_date->name;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

if ($shop_category != null && $shop_category !== 'nochoice') {
$taxquery_category = array(
'taxonomy' => 'shop_category',
'terms' => $shop_category,
'field' => 'slug',
);
}

if ($shop_tag != null) {
$taxquery_tag = array(
'taxonomy' => 'shop_tag',
'terms' => $shop_tag,
'field' => 'slug',
);
}

$args = array(
'paged' => $paged,
'post_type' => 'shop',
's' => $s,
'tax_query' => array(
'relation' => 'AND',
$taxquery_category,
$taxquery_tag
),
);
query_posts($args);

if(have_posts()): ?>

<!-- ▼ 検索条件 -->
<div class="search__filter">
  <div>
  <?php if ($shop_category != null && $shop_category !== 'nochoice'): ?>
  <span class="shop-buzz__list-txt-tag"><?php echo $cat_name; ?></span>
  <?php endif; ?>

  <?php if ($shop_tag != null): ?>
  <span class="shop-buzz__list-txt-tag"><?php echo $tag_name; ?></span>
  <?php endif; ?>

  <?php if ($s != null): ?>
  <span class="shop-buzz__list-txt-tag"><?php echo $s; ?></span>
  <?php endif; ?>
  </div>
  <!-- ▼ 変更ボタン -->
  <button type="button" class="text-primary border-0 bg-white" data-toggle="modal" data-target="#search-restaurant">変更</button>
  <!-- ▲ 変更ボタン -->
</div>
<!-- ▲ 検索条件 -->

<!-- ▼ 検索件数 -->
<div class="mb-3">検索結果：<span><?php echo $wp_query->found_posts; ?></span>件</div>
<!-- ▲ 検索件数 -->

<?php while(have_posts()): the_post(); ?>

<!-- ▼ 店舗い -->
<div class="shop-search-buzz__list">
  <!-- ▼ 店舗エリア -->
  <div class="scroll-content">
    <!-- ▼ 商品情報 -->
    <div id="scroll" class="shop-search-buzz__list-inner-img-wrap">
      <div class="shop-search-buzz__list-inner-img-list scroll-content">
      <?php if(post_custom('menu_price_1')): // 入力がある場合 ?>

      <a class="d-inline-block" href="<?php echo get_the_permalink(); ?>">
      <div class="shop-search-buzz__list-inner-img-item">
      <?php if(post_custom('menu_img_1')): // 入力がある場合 ?>
      <img src="<?php the_field('menu_img_1'); ?>" alt="<?php the_title(); ?>の商品">
      <?php else: // ないとき ?>
      <img src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
      <?php endif; ?>
      <p class="mb-0 text-white">¥<?php the_field('menu_price_1'); ?></p>
      </div>
      </a>

      <?php endif; ?>

      <?php if(post_custom('menu_price_2')): // 入力がある場合 ?>

      <a class="d-inline-block" href="<?php echo get_the_permalink(); ?>">
      <div class="shop-search-buzz__list-inner-img-item">
      <?php if(post_custom('menu_img_2')): // 入力がある場合 ?>
      <img src="<?php the_field('menu_img_2'); ?>" alt="<?php the_title(); ?>の商品">
      <?php else: // ないとき ?>
      <img src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
      <?php endif; ?>
      <p class="mb-0 text-white">¥<?php the_field('menu_price_2'); ?></p>
      </div>
      </a>

      <?php endif; ?>

      <?php if(post_custom('menu_price_3')): // 入力がある場合 ?>

      <a class="d-inline-block" href="<?php echo get_the_permalink(); ?>">
      <div class="shop-search-buzz__list-inner-img-item">
      <?php if(post_custom('menu_img_3')): // 入力がある場合 ?>
      <img src="<?php the_field('menu_img_3'); ?>" alt="<?php the_title(); ?>の商品">
      <?php else: // ないとき ?>
      <img src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
      <?php endif; ?>
      <p class="mb-0 text-white">¥<?php the_field('menu_price_3'); ?></p>
      </div>
      </a>

      <?php endif; ?>

      <?php if(post_custom('menu_price_4')): // 入力がある場合 ?>

      <a class="d-inline-block" href="<?php echo get_the_permalink(); ?>">
      <div class="shop-search-buzz__list-inner-img-item">
      <?php if(post_custom('menu_img_4')): // 入力がある場合 ?>
      <img src="<?php the_field('menu_img_4'); ?>" alt="<?php the_title(); ?>の商品">
      <?php else: // ないとき ?>
      <img src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
      <?php endif; ?>
      <p class="mb-0 text-white">¥<?php the_field('menu_price_4'); ?></p>
      </div>
      </a>

      <?php endif; ?>

      <?php if(post_custom('menu_price_5')): // 入力がある場合 ?>

      <a class="d-inline-block" href="<?php echo get_the_permalink(); ?>">
      <div class="shop-search-buzz__list-inner-img-item">
      <?php if(post_custom('menu_img_5')): // 入力がある場合 ?>
      <img src="<?php the_field('menu_img_5'); ?>" alt="<?php the_title(); ?>の商品">
      <?php else: // ないとき ?>
      <img src="<?php echo $wp_url; ?>/dist/images/noimg.png" alt="noimage">
      <?php endif; ?>
      <p class="mb-0 text-white">¥<?php the_field('menu_price_5'); ?></p>
      </div>
      </a>
      <?php endif; ?>
      </div>
    </div>
    <!-- ▲ 商品情報 -->
    <!-- ▼ 店舗情報 -->
    <a class="shop-search-buzz__list-inner" href="<?php echo get_the_permalink(); ?>">
      <div class="shop-search-buzz__list-intro bg-white py-3">
      <div class="shop-search-buzz__list-intro-txt">
      <h3 class="text-info"><?php the_title(); ?></h3>
      <p class="text-info">
      <?php
      if(mb_strlen(get_field('about'), 'UTF-8')>35){
      $title= mb_substr(get_field('about'), 0, 35, 'UTF-8');
      echo $title.'…';
      }else{
      echo get_field('about');
      }
      ?>
      </p>
      </div>
      </div>
    </a>
    <!-- ▲ 店舗情報 -->
  </div>
  <!-- ▲ 店舗エリア -->

<?php endwhile; ?>
</div>
<!-- ▲ 店舗一覧 -->

<div class="pagination d-none">
  <?php global $wp_rewrite;
  $paginate_base = get_pagenum_link(1);
  if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
      $paginate_format = '';
      $paginate_base = add_query_arg('paged','%#%');
  }
  else{
      $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
      user_trailingslashit('page/%#%/','paged');;
      $paginate_base .= '%_%';
  }
  echo paginate_links(array(
      'base' => $paginate_base,
      'format' => $paginate_format,
      'total' => $wp_query->max_num_pages,
      'mid_size' => 4,
      'current' => ($paged ? $paged : 1),
      'prev_text' => '<< 前へ',
      'next_text' => '次へ >>',
  )); ?>
</div>

<?php else: // ないとき ?>

<p class="txt-c">該当の店舗がありません。</p>

<?php endif;?>

</section>
</div>

  <!-- ▼ サイドバー -->
  <div class="col-md-4 d-md-block d-none">
  <?php get_template_part('template-part/sidebar') ?>
  </div>
  <!-- ▲ サイドバー -->

</div>
</div>
</div>
<?php get_footer();
