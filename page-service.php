<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<div class="lp__mv">
<div class="container">
<div class="lp__mv-wrap">
<div class="sp">
<img src="<?php echo $img_url; ?>lp_mv_txt_sp.png" alt="スイトタクシーが大切にお客様のもとへお届け" srcset="<?php echo $img_url; ?>lp_mv_txt_sp.png 1x, <?php echo $img_url; ?>lp_mv_txt_sp@2x.png 2x">
<img src="<?php echo $img_url; ?>lp_mv_illust_sp.png" alt="スイトタクシー運転手のイラスト" srcset="<?php echo $img_url; ?>lp_mv_illust_sp.png 1x, <?php echo $img_url; ?>lp_mv_illust_sp@2x.png 2x">
</div>

<div class="pc row align-items-center">
<div class="col-5">
<img class="w-100" src="<?php echo $img_url; ?>lp_mv_txt_pc.png" alt="スイトタクシーが大切にお客様のもとへお届け" srcset="<?php echo $img_url; ?>lp_mv_txt_pc.png 1x, <?php echo $img_url; ?>lp_mv_txt_pc@2x.png 2x">
</div>
<div class="col-7">
<img class="w-100" src="<?php echo $img_url; ?>lp_mv_illust_pc.png" alt="スイトタクシー運転手のイラスト" srcset="<?php echo $img_url; ?>lp_mv_illust_pc.png 1x, <?php echo $img_url; ?>lp_mv_illust_pc@2x.png 2x">
</div>
</div>

</div>
</div>
<!-- .lp__hero -->
</div>

<section class="pb-5 lp__takeeats bg-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="lp__takeeats__txt col-md-6">
        <h2 class="ttl-h2"><img src="<?php echo $img_url; ?>lp_takeeats_ttl.png" alt="料理の写真" srcset="<?php echo $img_url; ?>lp_takeeats_ttl.png 1x, <?php echo $img_url; ?>lp_takeeats_ttl@2x.png 2x">注文は<b class="text-primary">店舗オリジナル</b>の<br>オーダーサイトから</h2>
        <p>スイトタク配にお申し込みいただきましたら、店舗ごとにオリジナルのオーダーサイトをご用意しております。<br>そのため店舗様はサイト制作からデリバリーまでを初期導入費・月額費０円でご利用いただくことができます。</p>
        <p>スイトタク配では、TakeEatsのシステムを利用しています。<a href="http://take-eats.jp/" target="_blank">詳しくはこちら</a></p>
      </div>
      <div class="lp__takeeats__img col-md-6 text-center">
        <img src="<?php echo $img_url; ?>lp_takeeats_sp.png" alt="オーダーサイト" srcset="<?php echo $img_url; ?>lp_takeeats_sp.png 1x, <?php echo $img_url; ?>lp_takeeats_sp@2x.png 2x">
      </div>
    </div>
  </div>
</section>

<section class="pb-5 bg-light lp__about">
<div class="container">
<h2 class="ttl-h2 pt-5 mt-0">宅配はすべて<br>スイトタクシーにおまかせ</h2>
<div class="lp__about__list">
<div class="lp__about__list__inner bg-white">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_1.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_1.png 1x, <?php echo $img_url; ?>about_icon_1@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user text-white">お客様</p>
<h3>注文事前決済</h3>
<p>店舗サイトから注文の受け付けを行います。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner bg-white">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_2.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_2.png 1x, <?php echo $img_url; ?>about_icon_2@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user text-white">あなたの店舗</p>
<h3>料理を準備</h3>
<p>注文通知がきたらご注文を確認し料理を準備します。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner bg-white">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_3.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_3.png 1x, <?php echo $img_url; ?>about_icon_3@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user text-white">スイトタクシー</p>
<h3>商品のお受け取り</h3>
<p>スイトタクシーがあなたの店舗まで商品を取りに行きます。</p>
</div>
</div>
</div>
<div class="lp__about__list__inner bg-white">
<div class="lp__about__list__inner-wrap">
<div class="lp__about__list__inner-img">
<img src="<?php echo $img_url; ?>about_icon_4.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>about_icon_4.png 1x, <?php echo $img_url; ?>about_icon_4@2x.png 2x">
</div>
<div class="lp__about__list__inner-txt">
<p class="user text-white">スイトタクシー</p>
<h3>お客様に商品をお渡し</h3>
<p>スイトタクシーがお客様の元まで商品をお届けします。</p>
</div>
</div>
</div>
</div>
<p class="small mt-4">※感染症対策のため商品の積み込みは 飲食店様に行っていただきます。<br>※ 受付前日19時までのご注文に限る</p>
</div>
</section>

<section class="lp__feature">
<div class="container">
<h2 class="ttl-h2 pt-5"><span>スイトタク配の特長</span></h2>
<div class="lp__feature__list">
<div class="lp__feature__list__inner">
<img class="w-100" src="<?php echo $img_url; ?>lp_feature_1.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_1.png 1x, <?php echo $img_url; ?>lp_feature_1@2x.png 2x">
<div class="lp__feature__list__inner-wrap">
<h3>大垣市内及び西濃地区に<br>お届けいたします！</h3>
<p>テイクアウトやデリバリーに注力されている飲食店の配送をお手伝いするべく、飲食店向けのサービスとして、タクシーで料理の配達を行う「スイトのタク配」を実施し、京都市内を中心に商品をお客様のもとへお届けいたします。</p>
</div>
</div>
<div class="lp__feature__list__inner">
<img class="w-100" src="<?php echo $img_url; ?>lp_feature_2.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
<div class="lp__feature__list__inner-wrap">
<h3>スイトタクシーが<br>大切お届けします！</h3>
<p>スイトタクシーが店舗様へ商品を受け取りに向かいます。お預かりした商品をお客様のもとへ大切にお届けいたします。<br>※ 容器や梱包は店舗様でお願いいたします。</p>
</div>
</div>
<div class="lp__feature__list__inner">
<img class="w-100" src="<?php echo $img_url; ?>lp_feature_3.png" alt="京都を中心にどこでもお届けいたします！" srcset="<?php echo $img_url; ?>lp_feature_3.png 1x, <?php echo $img_url; ?>lp_feature_3@2x.png 2x">
<div class="lp__feature__list__inner-wrap">
<h3>導入費・月額費は0円！<br>店舗の負担を最小限に</h3>
<p>初期導入費・月額利用料は全て無料！店舗が負担するのは注文時のサービス手数料のみで、固定費はかかりません。<br>※ オプションをご選択の場合は別途費用</p>
</div>
</div>
</div>
</div>
</section>

<section class="lp__price mb-5">
<div class="container">
<h2 class="ttl-h2 pt-5"><span class="marks">料金について</span></h2>
<div class="txt-c">
<img src="<?php echo $img_url; ?>lp_price_img.png" alt="初期費用・月額利用料¥0で導入可能！" srcset="<?php echo $img_url; ?>lp_price_img.png 1x, <?php echo $img_url; ?>lp_price_img@2x.png 2x">
</div>
<p class="small my-3 text-md-center">※ 宅配は1回のご注文につき＋宅配料600円がお客様に加算されます。（宅配料は原則お客様負担）
<br>※オプションをご選択の場合は別途費用がかかります。
<br>※クレジットカードでの決済の場合手数料3.6%が別途発生します。</p>
</div>
</section>

<section class="lp__flow bg-light">
<div class="container">
<h2 class="ttl-h2 pt-5"><span>導入の流れ</span></h2>

<div class="lp__flow__wrap">
<ol class="lp__flow__list">
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>01</span></div>
<h3>お申し込み</h3>
<p>お申込みフォームより必要事項のご入力をお願い致します。TakeEatsカスタマーサポートよりお電話にてご連絡致します。</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>02</span></div>
<h3>アカウント発行</h3>
<p>お店の専用サイトを作成しアカウントを発行致します。</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>03</span></div>
<h3>メニュー登録</h3>
<p>販売する商品の登録を行います。<br>(※無料代行サービス実施中)</p>
</li>
<!-- lp__flow__list__inner -->
<li class="lp__flow__list__inner">
<div class="lp__flow__list__inner-step">STEP<span>04</span></div>
<h3>ご利用スタート</h3>
<p>準備が整ったら早速注文の受け付けを行いましょう。</p>
</li>
<!-- lp__flow__list__inner -->
</ol>
<!-- lp__flow__list -->
</div>
</div>
</section>
<!-- flow -->

<div id="toform" class="lp__cta mt-5 footer-ctabtn">
<div class="lp__cta__box">
<a class="smooth-scroll lp__cta__box_btn" href="#contact"><img class="mr-2" src="<?php echo $img_url; ?>cta_btn.svg" style="width:18px;
height:auto" alt="吹き出しアイコン">まずはお申し込み</a>
</div>
</div>

<section id="contact" class="lp__form">
<div class="container">
<div class="text-center lp__form-top">
<h2 class="ttl-h2 pt-5"><span class="marks">お申し込み</span></h2>
<img src="<?php echo $img_url; ?>contact_txt.png" alt="初期費用0円" srcset="<?php echo $img_url; ?>contact_txt.png 1x, <?php echo $img_url; ?>contact_txt@2x.png 2x">
<div class="lp-btn">
<a href="#">いますぐお申し込み</a>
</div>
</div>
<div><?php the_content(); ?></div>
</div>
</section>

<?php get_footer();
