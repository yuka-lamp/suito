<?
$post_type = $_GET['shop'];
$s = $_GET['s'];
$shop_category = $_GET['shop_category'][0]; //ジャンル
$shop_tag = $_GET['shop_tag']; //タグ

if ($shop_category !== "cat-nochoice"){ //「指定なし」ではなかったら （valueで比較）
  $taxquery_size = array(
     'taxonomy' => 'shop_category',
     'terms' => $shop_category, //選択されたタームを取得
     'field' => 'slug',
     );
   }

if (isset($shop_tag)){ //データがあったら
  $taxquery_color = array(
     'taxonomy' => 'shop_shop_tag',
     'terms' => $shop_tag, //選択されたタームを取得
     'field' => 'slug',
     );
   }
$args = array(
  'post_type' => 'shop',
  'paged' => get_query_var('paged'),
  'tax_query' => 'net'
  );
query_posts( $args );
?>
<h1>検索結果：<?php echo $wp_query->found_posts; ?>件</h1>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <?php endwhile; ?>
<?php endif; ?>
