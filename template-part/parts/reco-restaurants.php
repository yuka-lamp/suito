<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<div class="shop-buzz">
<h2 class="ttl-h2">人気のお店</h2>

<div class="shop-buzz__list">

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

<a class="shop-buzz__list-inner" href="<?php the_permalink(); ?>">
<div class="shop-buzz__list-img">
<img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
</div>

<div class="shop-buzz__list-txt">
<p class="shop-buzz__list-txt-tag">
<?php
if ($terms = get_the_terms($post->ID, 'shop_category')) {
foreach ( $terms as $term ) {
echo esc_html($term->name);
}
}
?>
</p>
<h3><?php the_title(); ?></h3>
<p class="shop-buzz__list-txt-time">営業時間：<?php the_field('time'); ?></p>
<p class="shop-buzz__list-txt-time">定休日：<?php the_field('day'); ?></p>
</div>
</a>

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>

</div>
</div>
