<?php

function get_featured_image($post) {
    $image_id = get_post_thumbnail_id($post);
    $post->thumbnail = wp_get_attachment_image_src($image_id, 'full');

    return $post->thumbnail[0];
}

function wks_get_post_categories($post_id) {
    $post_categories = get_the_category($post_id);

    return array_map(function ($category) {
        return array(
            "name" => $category->name,
            "id" => $category->cat_ID
        );
    }, $post_categories);
}

function wks_echo_svg($src) {
    $svg_file = file_get_contents($src);
    $find_string = '<svg';
    $position = strpos($svg_file, $find_string);
    $svg_file_new = substr($svg_file, $position);
    echo $svg_file_new;
}

function wks_get_svg($src) {
    $svg_file = file_get_contents($src);
    $find_string = '<svg';
    $position = strpos($svg_file, $find_string);
    $svg_file_new = substr($svg_file, $position);
    return $svg_file_new;
}

function wks_the_post_thumbnail_url() {
    if (has_post_thumbnail()) {
        echo the_post_thumbnail_url('full');
    } else {
        echo "https://wks-slask.wroc.pl/wp-content/uploads/2020/03/wks-default.jpg";
    }
}

function console_log($data) {
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

function wks_gallery_meta($title) {
    preg_match('/[^-]*/', $title, $date);
    preg_match('/(?<= - )(.*)(?=:)/', $title, $category);

    echo trim($date[0]) . ", " . $category[0];
}

function wks_gallery_title($full_title) {
    preg_match('/(?<=:).*$/', $full_title, $title);
    console_log($full_title);
    console_log($title);
    echo trim($title[0]);
}
