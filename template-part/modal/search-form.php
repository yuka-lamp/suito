<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<div class="modal fade" id="search-restaurant" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body-name">
<p>詳細検索</p>
</div>

<div class="modal d-block position-static">
<?php get_template_part('search-form') ?>
</div>

</div>
</div>
</div>
