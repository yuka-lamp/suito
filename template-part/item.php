<?php
$home = esc_url(home_url());

/* 商品画像の取得  */
$img_1 = wp_get_attachment_image_src(get_field('menu_img_1'), 'medium', false);
$img_2 = wp_get_attachment_image_src(get_field('menu_img_2'), 'medium', false);
$img_3 = wp_get_attachment_image_src(get_field('menu_img_3'), 'medium', false);
$img_4 = wp_get_attachment_image_src(get_field('menu_img_4'), 'medium', false);
$img_5 = wp_get_attachment_image_src(get_field('menu_img_5'), 'medium', false);
?>

<!-- ▼ 商品① -->
<?php if(get_field('menu_img_1',$id)): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <img src="<?php echo $img_1[0]; ?>" alt="<?php the_title(); ?>の商品">
</div>
<?php else: // ないとき ?>
<?php endif; ?>
<!-- ▲ 商品① -->
<!-- ▼ 商品② -->
<?php if(get_field('menu_img_2',$id)): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <img src="<?php echo $img_2[0]; ?>" alt="<?php the_title(); ?>の商品">
</div>
<?php else: // ないとき ?>
<?php endif; ?>
<!-- ▲ 商品② -->
<!-- ▼ 商品③ -->
<?php if(get_field('menu_img_3',$id)): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <img src="<?php echo $img_3[0]; ?>" alt="<?php the_title(); ?>の商品">
</div>
<?php else: // ないとき ?>
<?php endif; ?>
<!-- ▲ 商品③ -->
<!-- ▼ 商品④ -->
<?php if(get_field('menu_img_4',$id)): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <img src="<?php echo $img_4[0]; ?>" alt="<?php the_title(); ?>の商品">
</div>
<?php else: // ないとき ?>
<?php endif; ?>
<!-- ▲ 商品④ -->
<!-- ▼ 商品⑤ -->
<?php if(get_field('menu_img_5',$id)): // 入力がある場合 ?>
<div class="shop-buzz__list-inner-img-item">
  <img src="<?php echo $img_5[0]; ?>" alt="<?php the_title(); ?>の商品">
</div>
  <?php else: // ないとき ?>
  <?php endif; ?>
<!-- ▲ 商品⑤ -->
