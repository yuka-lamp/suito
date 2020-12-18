<?php

// title上書き
function edit_wpseo_title($title)
{
    global $shop_name,$shop_address1,$pref_name,$genre_name;
    if (is_page('restaurant')) {
        return 'デリバリー可のお店「'.$shop_name.'['.$shop_address1.']」 | MKタク配';
    } elseif (is_page('search')) {
        if ($pref_name != null && $genre_name != null) {
            return $pref_name.'で'.$genre_name.'がデリバリーできるおすすめのお店 | MKタク配';
        } elseif ($pref_name == null && $genre_name != null) {
            return $genre_name.'がデリバリーできるおすすめのお店 | MKタク配';
        } elseif ($pref_name != null && $genre_name == null) {
            return $pref_name.'でデリバリーできるおすすめのお店 | MKタク配';
        } else {
            return $title;
        }
    } else {
        return $title;
    }
}
add_filter('wpseo_title', 'edit_wpseo_title', 10, 1);

// description上書き
function filter_wpseo_metadesc($wpseo_replace_vars)
{
    global $shop_name,$shop_address1,$pref_name,$genre_name;
    if (is_page('restaurant')) {
        return $shop_name.'('.$shop_address1.')'.'でデリバリーしてお家で美味しいごはんを食べませんか？';
    } elseif (is_page('search')) {
        if ($pref_name != null && $genre_name != null) {
            return $pref_name.'で'.$genre_name.'がデリバリーできるおすすめのお店一覧ページです。デリバリーを活用してお家で美味しいごはんを食べませんか？';
        } elseif ($pref_name == null && $genre_name != null) {
            return $genre_name.'がデリバリーできるおすすめのお店一覧ページです。デリバリーを活用してお家で美味しいごはんを食べませんか？';
        } elseif ($pref_name != null && $genre_name == null) {
            return $pref_name.'でデリバリーできるおすすめのお店一覧ページです。デリバリーを活用してお家で美味しいごはんを食べませんか？';
        } else {
            return $wpseo_replace_vars;
        }
    } else {
        return $wpseo_replace_vars;
    }
}
add_filter('wpseo_metadesc', 'filter_wpseo_metadesc', 10, 1);


// canonical上書き
function filter_wpseo_canonical($canonical)
{
    global $pref_id,$genre_id;
    if (is_page('restaurant')) {
        return (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    } elseif (is_page('search')) {
        if ($pref_id != null && $genre_id != null) {
            return get_the_permalink().'?pref='.$pref_id.'&genre='.$genre_id;
        } elseif ($pref_id == null && $genre_id != null) {
            return get_the_permalink().'?genre='.$genre_id;
        } elseif ($pref_id != null && $genre_id == null) {
            return get_the_permalink().'?pref='.$pref_id;
        } else {
            return $canonical;
        }
    } else {
        return $canonical;
    }
};
add_filter('wpseo_canonical', 'filter_wpseo_canonical', 10, 1);
