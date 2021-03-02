<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$id = $post->ID;

$img_1 = wp_get_attachment_image_src(get_field('menu_img_1'), 'medium', false);
$img_2 = wp_get_attachment_image_src(get_field('menu_img_2'), 'medium', false);
$img_3 = wp_get_attachment_image_src(get_field('menu_img_3'), 'medium', false);
$img_4 = wp_get_attachment_image_src(get_field('menu_img_4'), 'medium', false);
$img_5 = wp_get_attachment_image_src(get_field('menu_img_5'), 'medium', false);

get_header();
?>

<!-- ▼ 画面下固定ボタン -->
<div id="restaurant-btn" class="border-top">
  <!-- ▼ ネット注文 -->
  <?php if(post_custom('order_url')): // 入力がある場合 ?>
  <a class="btn btn-primary w-100" href="<?php the_field('order_url'); ?>" target="_blank" >
    ネットで今すぐ注文
    <i class="fas fa-angle-right ml-2"></i>
  </a>
  <?php endif; ?>
  <!-- ▲ ネット注文 -->
</div>
<!-- ▲ 画面下固定ボタン -->

<!-- ▼ メイン -->
<div class="restaurant container">
  <div class="row pt-md-4">
    <div class="col-md-8">
      <section class="pb-4 restaurant">
        <!-- ▼ メインビジュアル -->
        <div class="restaurant__mv">
        <img src="<?php the_field('main_img'); ?>" alt="<?php the_title(); ?>">
        </div>
        <!-- ▲ メインビジュアル -->
        <!-- ▼ 導入文 -->
        <div class="restaurant__wrap mt-lg position-relative">
          <p class="f-18 font-weight-bold mb-1"><?php the_title() ?></p>
          <p class="f-13 text-secondary mb-0">
            <?php echo get_the_term_list($post->ID,'shop_category'); ?>
            <?php if(post_custom('price')): // 入力がある場合 ?>
               <span class="ml-1">¥<?php the_field('price'); ?>から注文可</span>
            <?php endif; ?>
          </p>
          <p class="restaurant__wrap-about f-13 py-md pb-lg mb-0"><?php the_field('about'); ?></p>
          <div class="d-block mb-lg">
            <?php if(post_custom('order_url')): // 入力がある場合 ?>
            <a class="btn btn-primary w-100 mt-3" href="<?php the_field('order_url'); ?>" target="_blank" >
              ネットで今すぐ注文
              <i class="fas fa-angle-right ml-2"></i>
            </a>
            <?php endif; ?>
          </div>
        </div>
        <!-- ▲ 導入文 -->
        <!-- ▼ メニュー -->
        <div class="restaurant__menu restaurant-block w-100">
          <h2 class="ttl-h2 py-md m-0 f-16">人気デリバリーメニュー</h2>
          <a href="<?php the_field('order_url'); ?>" class="shop-buzz__list-inner-img-wrap mb-lg d-block text-decoration-none">
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
          </a>
        </div>

        <!-- ▲ メニュー -->
        <!-- ▼ 店舗情報 -->
        <div class="restaurant__overview restaurant-block">
          <h2 class="ttl-h2 py-md m-0 f-16">店舗情報</h2>
            <p class="font-weight-bold f-13 mb-1"><?php the_title(); ?></p>
            <p class="f-13 text-secondary"><?php the_field('address'); ?></p>
            <!-- ▼ 電話番号 -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">電話番号</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <a href="tel:<?php the_field('tel'); ?>">
                  <i class="fas fa-phone mr-1 text-primary"></i>
                  <?php the_field('tel'); ?>
                </a>
              </p>
            </div>
            <!-- ▲ 電話番号 -->
            <!-- ▼ 営業日・時間 -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">営業日・時間</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <?php the_field('time'); ?>
              </p>
            </div>
            <!-- ▲ 営業日・時間 -->
            <!-- ▼ 定休日 -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">定休日</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <?php the_field('day'); ?>
              </p>
            </div>
            <!-- ▲ 定休日 -->

            <?php if(post_custom('hp')): // 入力がある場合 ?>
            <!-- ▼ 公式HP -->
            <div class="d-flex">
              <p class="col-4 f-13 text-secondary mb-3 p-0">公式HP</p>
              <p class="col-8 f-13 text-secondary mb-3 p-0">
                <a class="text-primary" href="<?php the_field('hp'); ?>" target="_blank">
                  <?php the_field('hp'); ?>
                  <i class="fas fa-external-link-alt ml-1 text-primary"></i>
                </a>
              </p>
            </div>
            <!-- ▲ 公式HP -->
            <?php endif; ?>
          <!-- ▲ 店舗情報 -->

        </div>
      </section>
    </div>
    <div class="col-md-4 d-md-block d-none">
    <?php get_template_part('template-part/sidebar') ?>
    </div>
  </div>
</div>
<!-- ▲ メイン -->
<?php get_footer();
