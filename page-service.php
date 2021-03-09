<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ お知らせ -->
<section class="info">
  <?php query_posts( array(
    'post_type' => 'post',
    'posts_per_page' => 1
  ));
  ?>

  <?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>

  <!-- ▼ お知らせ内容 -->
    <a href="<?php echo the_permalink(); ?>" class="info-content d-block">
      <p class="f-13 py-sm mb-0">
        <i class="fas fa-info-circle mr-1 f-18"></i>
        <?php
        if(mb_strlen($post->post_title, 'UTF-8')>20){
        	$title= mb_substr($post->post_title, 0, 22, 'UTF-8');
        	echo $title.'…';
        }else{
        	echo $post->post_title;
        }
        ?>
      </p>
    </a>
  <!-- ▲ お知らせ内容 -->
  <!-- ▼ お知らせ背景 -->
    <div class="info-bg">
    </div>
  <!-- ▲ お知らせ背景 -->

  <?php endwhile; else: ?>
  <?php endif; ?>
</section>
<!-- ▲ お知らせ -->

<!-- ▼ MV -->
<?php if( get_field('mv-bg',435) ): ?>
<div class="lp__mv" style="background: url('<?php the_field('mv-bg',435); ?>'); background-position: center; background-size: cover;">
<?php else: // ないとき ?>
<div class="lp__mv">
<?php endif; ?>
  <p class="lp__mv-ttl f-24 mb-0"><?php echo get_field('service-name',2); ?>をはじめたい方へ</p>
  <div class="lp__mv-bg"></div>
</div>
<!-- ▲ MV -->

<a class="btn btn-primary w-75 my-5" href="#contact" >
  今すぐお申し込み
  <i class="fas fa-angle-right ml-2"></i>
</a>

<!-- ▼ テイクイーツについて -->
<section class="mt-5 mb-3 pb-5 lp__takeeats">
  <div class="container">
    <h2 class="ttl-h2 mb-4"><?php echo get_field('service-name',2); ?>のシステム</h2>
    <div class="row align-items-center">
      <!-- ▼ テキストエリア -->
      <div class="lp__takeeats__txt col-md-6">
        <h3 class="f-24 font-weight-bold my-4 text-center">
          ネット注文システムを
          <br><span class="text-primary">無料</span>で導入！
        </h3>
        <p class="f-14">
          <?php echo get_field('service-name',2); ?>にお申し込みいただいた店舗様には、オリジナルのオーダーサイトをご用意しております。
          <br>そのため店舗様はサイト制作からデリバリーまでを初期導入費・月額費０円でご利用いただくことができます。
        </p>
        <p class="f-12 text-secondary">
          ※ <?php echo get_field('service-name',2); ?>では、テイクイーツのシステムを利用しています。
        </p>
        <a href="http://take-eats.jp/" class="d-block mt-3 f-14" target="_blank">
          詳しくはこちら
          <i class="fas fa-external-link-alt ml-1 text-primary"></i>
        </a>
      </div>
      <!-- ▲ テキストエリア -->
      <!-- ▼ 画像エリア -->
      <div class="lp__takeeats__img col-md-6 text-center">
        <img src="<?php echo $img_url; ?>lp_takeeats_sp.png" alt="ネット注文システムを無料で導入！" srcset="<?php echo $img_url; ?>lp_takeeats_sp.png 1x, <?php echo $img_url; ?>lp_takeeats_sp@2x.png 2x">
      </div>
      <!-- ▲ 画像エリア -->
    </div>
  </div>
</section>
<!-- ▲ テイクイーツについて -->

<!-- ▼ 注文受付からお届けまでの流れ -->
<section class="lp__about pb-5 mb-3">
  <div class="container">
  <h2 class="ttl-h2 mb-4">注文受付からお届けまでの流れ</h2>
    <div class="home__about__wrap d-md-flex flex-wrap justify-content-between">
      <!-- ▼ 流れ① -->
      <div class="lp__about__item bg-light">
        <div class="lp__about__item-text">
          <h3 class="lp__about__item-ttl f-18 text-center py-4 text-primary font-weight-bold m-0">ネット注文/決済</h3>
          <p class="f-14 text-center py-4 m-0">お客様が<br><?php echo get_field('service-name',2); ?>から<br>注文/決済を行います。</p>
        </div>
      </div>
      <!-- ▲ 流れ① -->
      <!-- ▼ 流れ② -->
      <div class="lp__about__item bg-light">
        <div class="lp__about__item-text">
          <h3 class="lp__about__item-ttl f-18 text-center py-4 text-primary font-weight-bold m-0">料理を準備</h3>
          <p class="f-14 text-center py-4 m-0">電話orメールで<br>注文通知を確認したら<br>料理を準備します。</p>
        </div>
      </div>
      <!-- ▲ 流れ② -->
      <!-- ▼ 流れ③ -->
      <div class="lp__about__item bg-light">
        <div class="lp__about__item-text">
          <h3 class="lp__about__item-ttl f-18 text-center py-4 text-primary font-weight-bold m-0">料理の受取</h3>
          <p class="f-13 text-center py-4 m-0">予定の時間に<br><?php echo get_field('taxi-name',2); ?>が<br>あなたのお店に伺います。</p>
        </div>
      </div>
      <!-- ▲ 流れ③ -->
      <!-- ▼ 流れ④ -->
      <div class="lp__about__item bg-light">
        <div class="lp__about__item-text">
          <h3 class="lp__about__item-ttl f-18 text-center py-4 text-primary font-weight-bold m-0">お届け完了！</h3>
          <p class="f-13 text-center py-4 m-0"><?php echo get_field('taxi-name',2); ?>が<br>お客様の元まで<br>商品をお届けします。</p>
        </div>
      </div>
      <!-- ▲ 流れ④ -->
    </div>
  </div>
</section>
<!-- ▲ 注文受付からお届けまでの流れ -->

<!-- ▼ タク配の特徴 -->
<section class="lp__feature pb-5 mb-4">
  <div class="container">
    <h2 class="ttl-h2 mb-4"><span><?php echo get_field('service-name',2); ?>の特長</span></h2>
    <div class="lp__feature__list">
      <!-- ▼ ポイント① -->
      <div class="lp__feature__list__inner">
        <div class="lp__feature__list__inner-wrap">
          <h3 class="lp__feature_list_inner_ttl f-16 font-weight-bold my-3">
            <span class="text-primary mr-2">▶</span>
            <?php the_field('point_1_ttl',435); ?>
          </h3>
          <p class="f-14">
            <?php the_field('point_1_text',435); ?>
          </p>
        </div>
      </div>
      <!-- ▲ ポイント① -->
      <!-- ▼ ポイント② -->
      <div class="lp__feature__list__inner">
        <div class="lp__feature__list__inner-wrap">
          <h3 class="lp__feature_list_inner_ttl f-16 font-weight-bold my-3">
            <span class="text-primary mr-2">▶</span>
            <?php the_field('point_2_ttl',435); ?>
          </h3>
          <p class="f-14">
            <?php the_field('point_2_text',435); ?>
          </p>
        </div>
      </div>
      <!-- ▲ ポイント② -->
      <!-- ▼ ポイント③ -->
      <div class="lp__feature__list__inner">
          <div class="lp__feature__list__inner-wrap">
            <h3 class="lp__feature_list_inner_ttl f-16 font-weight-bold my-3">
              <span class="text-primary mr-2">▶</span>
              <?php the_field('point_3_ttl',435); ?>
            </h3>
            <p class="f-14">
              <?php the_field('point_3_text',435); ?>
            </p>
        </div>
      </div>
      <!-- ▲ ポイント③ -->
    </div>
  </div>
</section>
<!-- ▲ タク配の特徴 -->

<!-- ▼ 料金について -->
<section class="lp__price pb-5 mb-4">
  <div class="container">
    <h2 class="ttl-h2 mb-4"><span class="marks">料金について</span></h2>
    <div class="lp__price__list d-flex">
      <div class="lp__price__list-content">
        <p class="py-2 f-12 bg-primary text-center text-white mb-0 rounded-top">初期費用</p>
        <p class="py-3 f-32 font-weight-bold text-center border rounded-bottom">¥0</p>
      </div>
      <div class="lp__price__list-content">
        <p class="py-2 f-12 bg-primary text-center text-white mb-0 rounded-top">月額費用</p>
        <p class="py-3 f-32 font-weight-bold text-center border rounded-bottom">¥0</p>
      </div>
      <div class="lp__price__list-content">
        <p class="py-2 f-12 bg-primary text-center text-white mb-0 rounded-top">サイト制作費</p>
        <p class="py-3 f-32 font-weight-bold text-center border rounded-bottom">¥0</p>
      </div>
      <div class="lp__price__list-content">
        <p class="py-2 f-12 bg-secondary text-center text-white mb-0 rounded-top">販売手数料</p>
        <p class="py-3 f-32 font-weight-bold text-center border rounded-bottom">8%</p>
      </div>
    </div>
    <div class="txt-c">
      <p class="small mb-0 text-md-center">
        <?php echo get_field('service-name',2); ?>では、株式会社ランプが提供する
        <span class="font-weight-bold">テイクイーツのシステム</span>を利用しています。
        <br>システム利用料（テイクイーツ）以外で店舗様にかかる費用はございません。
      </p>
    </div>
  </div>
</section>
<!-- ▲ 料金について -->

<!-- ▼ 導入の流れ -->
<section class="lp__flow pb-5 mb-4">
  <div class="container">
  <h2 class="ttl-h2"><span>導入の流れ</span></h2>
  <p class="f-24 font-weight-bold text-center my-3">
    \ 最短<span class="f-32 px-1 text-primary">1日</span>でスタート！ /
  </p>
  <!-- ▼ 図 -->
  <div class="lp__flow__figre d-flex justify-content-center p-0">
    <div class="lp__flow__figre-step col-md-10 p-0">
      <div class="lp__flow__figre-step-item">
        <h3 class="f-16 font-weight-bold text-primary">お申し込み</h3>
        <p class="f-13 mb-0">お申込みフォームよりお申し込みください。<br>担当者よりお電話にてご連絡致します。</p>
      </div>
      <!-- ▲ ステップ 1 -->
      <div class="lp__flow__figre-step-item f-16">
        <h3 class="f-16 font-weight-bold text-primary">アカウント発行</h3>
        <p class="f-13 mb-0">お店の専用サイトを作成しアカウントを発行致します。</p>
      </div>
      <!-- ▲ ステップ 2 -->
      <div class="lp__flow__figre-step-item f-16">
        <h3 class="f-16 font-weight-bold text-primary">メニュー登録</h3>
        <p class="f-13 mb-0">販売する商品の登録を行います。<br>(※無料代行サービス実施中)</p>
      </div>
      <!-- ▲ ステップ 3 -->
      <div class="lp__flow__figre-step-item f-16">
        <h3 class="f-16 font-weight-bold text-primary">ご利用スタート</h3>
        <p class="f-13 mb-0">準備が整ったら<br>早速注文の受け付けを行いましょう！</p>
      </div>
      <!-- ▲ ステップ 4 -->
    </div>
  </div>
  <!-- ▲ 図 -->
  </div>
</section>
<!-- ▲ 導入の流れ -->

<!-- ▼ 注意事項 -->
<section class="lp__form pb-5 mb-4">
  <div class="container">
    <h2 class="ttl-h2"><span class="marks">注意事項</span></h2>
      <!-- ▼ 管理画面入力 -->
      <div class="post-main">
        <?php the_field('attention',435); ?>
      </div>
      <!-- ▲ 管理画面入力 -->
  </div>
</section>
<!-- ▲ 注意事項 -->

<!-- ▼ お申し込み -->
<section id="contact" class="lp__form py-5 bg-light">
  <div class="container">
    <div class="text-center lp__form-top">
    <h2 class="ttl-h2"><span class="marks">お申し込み</span></h2>
      <!-- ▼ 電話番号 -->
      <div class="text-center mt-3">
        <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
        <a class="cta__phone f-32 font-weight-bold" href="tel:0120538205">0120-538-205</a>
        <p class="f-12 text-muted mb-4">受付時間｜10:00~18:00（土日・祝除く）</p>
      </div>
      <!-- ▲ 電話番号 -->
      <!-- ▼ お問い合せフォーム -->
      <div class="cta__form bg-white p-3 p-md-4 mt-4">
        <?php
        $page_data = get_page_by_path('service');
        $page = get_post($page_data);
        $content = $page -> post_content;
        echo $content; ?>
      </div>
    <!-- ▲ お問い合せフォーム -->
    </div>
  </div>
</section>
<!-- ▲ お申し込み -->

<?php get_footer();
