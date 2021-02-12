<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="search mb-lg">
  <div class="search__genre mb-lg">
    <div class="container">
      <div class="search__genre-list">
        <!-- ▼ ジャンル一覧 -->
        <ul>
          <?php
          $terms = get_terms( 'shop_category', array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false
          ));
          foreach($terms as $term):
          $genre_id = $term->term_id;
          $genre_name = $term->name; //ジャンル名
          $genre_slug = $term->slug; //ジャンルスラッグ
          $genre_img = get_field('genre_img', 'shop_category_'.$genre_id); //ジャンル画像
          ?>

          <!-- ▼ ループするコンテンツ -->
          <li class="br-7 shadow-sm" style="background: url('<?php echo $genre_img; ?>'); background-position: center; background-size: cover;">
            <a class="text-body" href="<?php echo $home; ?>/?post_type=shop&s=&shop_category=<?php echo $genre_slug ?>">
              <p class="f-14 text-center m-0"><?php echo $genre_name ?></p>
            </a>
          </li>
          <!-- ▲ ループするコンテンツ -->

          <?php endforeach; ?>
        </ul>
        <!-- ▼ ジャンル一覧 -->
      </div>
    </div>
  </div>
</section>
