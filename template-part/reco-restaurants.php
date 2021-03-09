<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<!-- ▼ 人気のお店 -->
<div class="shop-buzz">
  <h2 class="ttl-h2 mb-lg">人気のお店</h2>
    <div class="shop-buzz__list pb-lg">
      <?php
        $args = array(
          'post_type' => 'shop',
          'taxonomy' => 'shop_tag',
          'term' => 'reco',
          'posts_per_page'   => 10
          );
        $the_query = get_posts( $args );
        foreach ( $the_query as $post ) : setup_postdata( $post );
      ?>

      <!-- ▼ ループするコンテンツ -->
      <?php get_template_part('template-part/loop-restaurant') ?>
      <!-- ▲ ループするコンテンツ -->

      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <a class="btn btn-border" href="<?php echo $home; ?>/?post_type=shop&s=">すべての店舗を見る</a>

</div>

<!-- ▲ 人気のお店 -->
