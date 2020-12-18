<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<a class="banner" href="<?php echo $home; ?>/service">
<img class="cta-takeeats-wrap-bg" src="<?php echo $wp_url; ?>/dist/images/entry_img.png" alt="あなたのお店もデリバリー始めませんか？" srcset="<?php echo $wp_url; ?>/dist/images/entry_img.png 1x, <?php echo $wp_url; ?>/dist/images/entry_img@2x.png 2x">
</a>

<div class="modal d-block position-static">
<?php get_template_part('search-form') ?>
</div>
