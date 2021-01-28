<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="search">
<div class="search__genre bg-white">
<div class="container">
<div class="search__genre-list">

  <!-- ▼ ジャンル一覧 -->
  <ul>
    <!-- ▼ ネット予約 -->
    <li>
      <a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=&shop_tag=net">
        <img src="<?php echo $wp_url ?>/dist/images/genre_net.png" alt="<?php echo $genre_name ?>" srcset="<?php echo $wp_url ?>/dist/images/genre_net.png 1x, <?php echo $wp_url ?>/dist/images/genre_net@2x.png 2x">
        <p class="f-12 text-center mt-2 mb-0">ネット予約可</p>
      </a>
    </li>
    <!-- ▲ ネット予約 -->
    <?php
    $terms = get_terms( 'shop_category', array(
      'orderby' => 'name',
      'order' => 'ASC',
      'hide_empty' => false
    ));
    foreach($terms as $term):
    $genre_id = $term->term_id;
    $genre_name = $term->name; //ジャンル名
    $genre_slug = $term->slug; //ジャンルスラッグ
    $genre_img = get_field('genre_img', 'shop_category_'.$genre_id); //ジャンル画像
    ?>

    <!-- ▼ ループするコンテンツ -->
    <li>
      <a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=<?php echo $genre_slug ?>">
        <?php if($genre_img !== null):  // 画像がある場合 ?>
          <img src="<?php echo $genre_img; ?>" alt="<?php echo $genre_name ?>">
        <?php else: // 画像がない場合 ?>
          <img src="<?php echo $wp_url ?>/dist/images/noimg.png" alt="<?php echo $genre_name ?>" srcset="<?php echo $wp_url ?>/dist/images/noimg.png 1x, <?php echo $wp_url ?>/dist/images/noimg@2x.png 2x">
        <?php endif; ?>
        <p class="f-12 text-center mt-2 mb-0"><?php echo $genre_name ?></p>
      </a>
    </li>
    <!-- ▲ ループするコンテンツ -->

    <?php endforeach; ?>
  </ul>
  <!-- ▼ ジャンル一覧 -->

</div>
</div>
</div>
</section>
