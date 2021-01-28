<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ メインビジュアル -->
<section id="mv" class="mv">
  <div class="mv__bg">
    <div class="container">
      <div class="mv__inner row justify-content-center align-items-center">
        <h2 class="mv__img-wrap col-md-5">
          <img class="d-block d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png" alt="ご自宅までスイトタクシーがお届けします" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_sp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_sp@2x.png 2x">
          <img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png" alt="ご自宅までスイトタクシーがお届けします" srcset="<?php echo $wp_url; ?>/dist/images/mv_txt_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_txt_pc@2x.png 2x">
        </h2>
        <div class="mv__img-wrap col-md-7">
          <img class="d-block d-md-none" src="<?php echo $wp_url; ?>/dist/images/mv_photo_sp.png" alt="食事する家族" srcset="<?php echo $wp_url; ?>/dist/images/mv_photo_sp.png 1x, <?php echo $wp_url; ?>/dist/images/mv_photo_sp@2x.png 2x">
          <img class="d-none d-md-block" src="<?php echo $wp_url; ?>/dist/images/mv_photo_pc.png" alt="食事する家族" srcset="<?php echo $wp_url; ?>/dist/images/mv_photo_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_photo_pc@2x.png 2x">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <!-- ▼ 検索窓 -->
    <div class="search__free mv__search">
      <form class="search__free__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
      <div class="input-group">
        <input type="hidden" name="post_type" value="shop">
          <div class="input-group">
            <div class="input-group-prepend">
              <input type="text" class="form-control" name="s" placeholder="洋食" value="<?php echo get_search_query(); ?>" />
            </div>
          </div>
          <div class="search__free__form-btn">
            <input type="submit" class="btn btn-block btn-primary text-nowrap" value="検索">
          </div>
        </div>
      </form>
    </div>
    <!-- ▲ 検索窓 -->
  </div>
</section>
<!-- ▲ メインビジュアル -->

<div class="container bg-white pb-3">
  <div class="d-md-none d-block bg-info">
    <div class="cta-takeeats-btn m-0 p-0">
      <a class="btn text-white py-3" href="<?php echo $home; ?>/delivery/">ご利用方法はこちら<i class="ml-3 fas fa-chevron-right"></i></a>
    </div>
  </div>
</div>

<!-- ▼ ジャンル -->
<?php get_template_part('template-part/genre'); ?>
<!-- ▲ ジャンル -->

<!-- search -->
<div class="py-md-5 main-left front">
<div class="container">
<div class="row">
<div class="col-md-8">
<?php get_template_part('template-part/reco-restaurants'); ?>
<!-- buzz -->
</div>
<div class="col-md-4 d-md-block d-none">
<?php get_template_part('template-part/sidebar') ?>
</div>
<!-- sidebar -->
</div>
</div>
</div>
<?php get_footer();
