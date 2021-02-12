<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<div class="modal d-block position-static">
<?php get_template_part('template-part/search-form') ?>
</div>
