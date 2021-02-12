<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
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
      <p class="f-13 py-sm">
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

<!-- ▼ メインビジュアル -->
<section id="mv" class="mv">

  <?php query_posts( array(
    'post_type' => 'slide',
    'posts_per_page' => 3
  ));
  ?>
  <?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>

  <!-- ▼ 画像 -->
  <?php if( get_field('url') != null): ?>

  <a href="<?php echo get_field('url'); ?>" target="_blank" class="">
  <?php else: // ないとき ?>
    <a href="<?php echo the_permalink(); ?>" class="">
  <?php endif; ?>
  <img class="w-100 br-7 shadow-sm" src="<?php echo get_field('img'); ?>" alt="<?php the_title(); ?>">
  </a>
  <!-- ▲ 画像 -->

  <?php endwhile; else: ?>
  <?php endif; ?>

</section>
<!-- ▲ メインビジュアル -->

<!-- ▼ 検索窓 -->
<section class="search__free pt-sm pb-lg">
  <div class="container">
    <div class="input-group">
      <form class="search__free__form d-flex w-100 shadow-sm" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="hidden" name="post_type" value="shop">
        <div class="input-group">
          <div class="input-group-prepend">
          <input type="text" class="form-control" name="s" placeholder="「店舗名」で検索" value="<?php echo get_search_query(); ?>" />
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- ▲ 検索窓 -->

<!-- ▼ ジャンル -->
<?php get_template_part('template-part/genre'); ?>
<!-- ▲ ジャンル -->

<!-- ▼ メインエリア -->
<div class="py-md-3 main-left front">
  <div class="container">
    <div class="row align-items-start">
      <!-- ▼ 人気のお店 -->
      <div class="col-md-8">
        <?php get_template_part('template-part/reco-restaurants'); ?>
      </div>
      <!-- ▲ おすすめ店舗 -->
      <!-- ▼ サイドバー -->
      <div class="col-md-4 d-md-block d-none">
        <?php get_template_part('template-part/search-form') ?>
      </div>
      <!-- ▲ サイドバー -->
    </div>
  </div>
</div>
<!-- ▲ メインエリア -->

<?php get_footer();
