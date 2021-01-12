<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<div class="d-none d-md-block bg-info mb-4">
<div class="cta-takeeats-btn m-0">
<a class="btn text-white py-3" href="<?php echo $home; ?>/delivery/">ご利用方法はこちら<i class="ml-3 fas fa-chevron-right"></i></a>
</div>
</div>

<a href="<?php echo $home ?>/service" target="_blank">
<img class="cta-takeeats-wrap-bg" src="<?php echo $wp_url; ?>/dist/images/entry_img.png" alt="あなたのお店もデリバリー始めませんか？" srcset="<?php echo $wp_url; ?>/dist/images/entry_img.png 1x, <?php echo $wp_url; ?>/dist/images/entry_img@2x.png 2x">
</a>

<div class="modal d-block position-static">
<?php get_template_part('search-form') ?>
</div>
