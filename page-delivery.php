<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<section class="delivery">
  <div class="container">
    <h2 class="ttl-h2 pt-5 pb-4">ご利用方法</h2>
    <!-- ▼ 注文の流れ -->
    <div class="delivery__items">
      <!-- ▼ ステップ1 -->
      <div class="delivery__item">
        <div class="delivery__item__inner">
          <img class="sp mb-4" src="<?php echo $img_url; ?>delivery_1.png" alt="ステップ1" srcset="<?php echo $img_url; ?>delivery_1.png 1x, <?php echo $img_url; ?>delivery_1@2x.png 2x">
          <div class="delivery__item__inner-text">
            <p class="delivery__item__inner-text-main f-16">一覧から注文したい店舗を選択してください。</p>
            <p class="delivery__item__inner-text-sub f-14"><?php echo get_field('step_1'); ?></p>
          </div>
        </div>
      </div>
      <!-- ▲ ステップ1 -->
      <!-- ▼ ステップ2 -->
      <div class="delivery__item">
        <div class="delivery__item__inner">
          <img class="sp mb-4" src="<?php echo $img_url; ?>delivery_2.png" alt="ステップ2" srcset="<?php echo $img_url; ?>delivery_2.png 1x, <?php echo $img_url; ?>delivery_2@2x.png 2x">
          <div class="delivery__item__inner-text">
            <p class="delivery__item__inner-text-main f-16">店舗の詳細のネットで<span class="text-primary">今すぐ注文ボタン</span>から注文サイトへ移動する事ができます。</p>
            <p class="delivery__item__inner-text-sub f-14"><?php echo get_field('step_2'); ?></p>
          </div>
        </div>
      </div>
      <!-- ▲ ステップ2 -->
      <!-- ▼ ステップ3 -->
      <div class="delivery__item">
        <div class="delivery__item__inner">
          <img class="sp mb-4" src="<?php echo $img_url; ?>delivery_3.png" alt="ステップ3" srcset="<?php echo $img_url; ?>delivery_3.png 1x, <?php echo $img_url; ?>delivery_3@2x.png 2x">
          <div class="delivery__item__inner-text">
            <p class="delivery__item__inner-text-main f-16">注文サイトに入ったら、<span class="text-primary"><?php echo get_field('service-name',2); ?></span>を選択してください。</p>
            <p class="delivery__item__inner-text-sub f-14"><?php echo get_field('step_3'); ?></p>
          </div>
        </div>
      </div>
      <!-- ▲ ステップ3 -->
      <!-- ▼ ステップ4 -->
      <div class="delivery__item">
        <div class="delivery__item__inner">
          <img class="sp mb-4" src="<?php echo $img_url; ?>delivery_4.png" alt="ステップ4" srcset="<?php echo $img_url; ?>delivery_4.png 1x, <?php echo $img_url; ?>delivery_4@2x.png 2x">
          <div class="delivery__item__inner-text">
            <p class="delivery__item__inner-text-main f-16">注文したい商品をタップし、数量・オプションを選択しカートに入れます。</p>
            <p class="delivery__item__inner-text-sub f-14"><?php echo get_field('step_4'); ?></p>
          </div>
        </div>
      </div>
      <!-- ▲ ステップ4 -->
      <!-- ▼ ステップ5 -->
      <div class="delivery__item">
        <div class="delivery__item__inner">
          <img class="sp mb-4" src="<?php echo $img_url; ?>delivery_5.png" alt="ステップ5" srcset="<?php echo $img_url; ?>delivery_5.png 1x, <?php echo $img_url; ?>delivery_5@2x.png 2x">
          <div class="delivery__item__inner-text">
            <p class="delivery__item__inner-text-main f-16">画面に従いお届け先とお支払情報を入力すれば注文完了です。メールでも詳細が確認できます。</p>
            <p class="delivery__item__inner-text-sub f-14"><?php echo get_field('step_5'); ?></p>
          </div>
        </div>
      </div>
      <!-- ▲ ステップ5 -->
      <!-- ▼ ステップ6 -->
      <div class="delivery__item">
        <div class="delivery__item__inner">
          <p class="step6 text-primary font-weight-bold">お受け取り</p>
          <div class="delivery__item__inner-text">
            <p class="delivery__item__inner-text-main f-16">配達場所の近くに到着しましたら、<?php echo get_field('taxi-name',2); ?>ドライバーからお客様にお電話いたします。</p>
            <p class="delivery__item__inner-text-sub f-14"><?php echo get_field('step_6'); ?></p>
          </div>
        </div>
      </div>
      <!-- ▲ ステップ6 -->
    </div>
    <!-- ▲ 注文の流れ -->
    <!-- ▼ ご注意ください。 -->
    <div class="delivery__attn">
      <img src="<?php echo $img_url; ?>delivery_attn.svg" alt="ご注意ください">
      <h2 class="d-inline f-18 font-weight-bold">ご注意ください</h2>
      <p><?php echo get_field('attn'); ?></p>
    </div>
    <!-- ▲ ご注意ください。 -->
  </div>
</section>

<?php get_footer();
