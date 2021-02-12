<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<!-- ▼ 詳細検索モーダル -->
<div class="modal fade" id="search-restaurant" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <!-- ▼ コンテンツ -->
    <div class="modal-content bg-white">
      <div class="modal-body-name">
        <p class="f-18 mb-0 py-lg">詳細検索</p>
        <button type="button" class="close f-14 text-align-left text-body" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-chevron-left text-success mr-2"></i>戻る
        </button>
      </div>
      <div class="d-block">
        <?php get_template_part('template-part/search-form') ?>
      </div>
    </div>
    <!-- ▲ コンテンツ -->
  </div>
</div>
<!-- ▲ 詳細検索モーダル -->
