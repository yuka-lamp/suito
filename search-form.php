<div class="modal-body">

<form class="form-control" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">

<input type="hidden" name="post_type" value="shop">

<div class="search-form mt-3">
<h3 class="modal-body-title">フリーワード</h3>
<div class="input-group-prepend">
<input type="search" class="border-0 hidden-search-field" name="s" placeholder="店舗やメニュー名で検索" value="<?php echo get_search_query(); ?>" />
</div>
</div>

<div class="search-form my-4">
<h3 class="modal-body-title">ジャンル</h3>
<select class="border-0" name="shop_category">
<label><option name="shop_category" value="nochoice" checked="checked">指定なし</label>
<?php
$taxonomy_name = 'shop_category';
$args = array( 'hide_empty' => 0 );
$taxonomys = get_terms($taxonomy_name,$args);
if( !empty( $taxonomys ) && !is_wp_error( $taxonomys ) ):
foreach($taxonomys as $taxonomy):
?><option name="shop_category" value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?>
<?php endforeach; ?>
<?php endif;?>
</select>
</div>

<input type="submit" class="btn btn-block btn-primary" value="絞り込み">

</form>

</div>
