<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$flag = false;
get_header(); ?>

<!-- ▼ 検索窓 -->
<section class="search__free py-md d-block d-md-none">
  <div class="container">
    <div class="input-group">
      <form class="search__free__form d-flex w-100 shadow-sm" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="hidden" name="post_type" value="shop">
        <div class="input-group">
          <div class="input-group-prepend">
          <input type="text" class="form-control" name="s" placeholder="「店舗名」で検索" value="<?php echo get_search_query(); ?>" />
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- ▲ 検索窓 -->

<!-- ▼ ジャンル -->
<?php get_template_part('template-part/genre'); ?>
<!-- ▲ ジャンル -->

<?php if ($wp_query->found_posts >= 10) {
  echo '<input type="hidden" name="shop_flag" value="true">';
} else {
  echo '<input type="hidden" name="shop_flag" value="false">';
} ?>

<div class="main-left  bg-white">
<div class="container">
<div class="row">
  <!-- ▼ メイン -->
  <div class="col-md-8">
    <section class="search mb-5">

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

      <!-- ▼ 検索条件 + 表示件数 -->
      <div class="d-flex justify-content-between">
        <div class="search__filter d-flex align-items-end">
          <!-- ▼ 検索中のキーワード・タグ -->
          <p class="f-13 text-success">
            <?php if ($shop_category != null && $shop_category !== 'nochoice'): $flag = true; ?>
            <span class="font-weight-bold f-15 d-inline mr-1 text-body"><?php echo $cat_name; ?></span>
            <?php endif; ?>

            <?php if ($shop_tag != null): $flag = true; ?>
            <span class="font-weight-bold f-15 d-inline mr-1 text-body"><?php echo $tag_name; ?></span>
            <?php endif; ?>

            <?php if ($s != null): $flag = true; ?>
            <span class="font-weight-bold f-15 d-inline mr-1 text-body"><?php echo $s; ?></span>
            <?php endif; ?>

            <?php if ($flag === false): // 入力しなかった場合 ?>
              <span class="font-weight-bold f-15 d-inline mr-1 text-body">すべて</span>
              <?php else: // ないとき ?>
                の検索結果
            <?php endif; ?>
          </p>

          <!-- ▲ 検索中のキーワード・タグ -->
        </div>
        <div class="f-13 text-secondary">検索結果：<span><?php echo $wp_query->found_posts; ?></span>件</div>
        <!-- ▲ 検索条件 + 表示件数 -->

        <!-- ▼ 条件を変更 -->
        <button type="button" class="btn-change btn-change-fix text-bk" data-toggle="modal" data-target="#search-restaurant">
          <i class="fas fa-search mr-2"></i>
          条件を変更
        </button>
        <!-- ▲ 条件を変更 -->
      </div>

      <!-- ▼ 一覧 (.shop-buzz__list) -->
      <div id="scroll" class="shop-buzz__list">
      <?php while(have_posts()): the_post(); ?>

        <!-- ▼ ループするコンテンツ -->
        <?php get_template_part('template-part/looop-restaurant') ?>
        <!-- ▲ ループするコンテンツ -->

      <?php endwhile; ?>
      </div>

      <!-- ▼ ページネーション -->
      <?php
      if (function_exists('wp_pagenavi')) {
      wp_pagenavi(['query' => $wp_query]);
      }
      ?>
      <!-- ▲ ページネーション -->

      <?php else: // ないとき ?>

      <p class="text-center pt-5 pb-1 d-block w-100">該当の店舗がありません。<br>条件を変更して検索してください。</p>
      <!-- ▼ 条件を変更 -->
      <button type="button" class="btn-change d-block text-bk" data-toggle="modal" data-target="#search-restaurant">
        <i class="fas fa-search mr-2"></i>
        条件を変更
      </button>
      <!-- ▲ 条件を変更 -->

      <?php endif;?>

    </div>
    <!-- ▲ 一覧 (.shop-buzz__list) -->
  </section>
  <!-- ▲ メイン -->

  <!-- ▼ サイドバー -->
  <div class="col-md-4 d-md-block d-none">
  <?php get_template_part('template-part/sidebar') ?>
  </div>
  <!-- ▲ サイドバー -->

</div>
</div>
</div>
<?php get_footer();
