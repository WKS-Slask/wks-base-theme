<?php

add_action('rest_api_init', 'sectionsRoutes');

function sectionsRoutes() {
    register_rest_route('wks/api', '/sections', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'get_sections'
    ));

    register_rest_route('wks/api', '/section/(?P<slug>[a-zA-Z0-9-]+)', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'get_single_section'
    ));
}

function get_sections($request) {
    $sections = get_posts(array(
        'post_type' => 'section',
        'posts_per_page' => -1
    ));

    if (empty($sections)) {
        return new WP_Error('No items found', array('status' => 404));
    }

    $result = array_map(function ($section) {
        return array(
            'id' => $section->ID,
            'title' => $section->post_title,
            'description' => $section->post_content,
            'slug' => $section->post_name,
            'image' => get_featured_image($section),
            'section_url' => get_page_link($section),
            'facebook' => get_field('facebook', $section->ID),
            'webpage' => get_field('webpage_url', $section->ID),
            'icon' => get_field('icon', $section->ID)
        );
    }, $sections);

    $response = new WP_REST_Response($result);
    $response->set_status(200);

    return $response;
}

function get_single_section($data) {
    $section = get_posts(array(
        'post_type' => 'section',
        "name" => $data['slug']
    ))[0];
    if (empty($section)) {
        return new WP_Error('No items found', array('status' => 404));
    }

    $result = array(
        'id' => $section->ID,
        'title' => $section->post_title,
        'description' => $section->post_content,
        'slug' => $section->post_name,
        'image' => get_featured_image($section),
        'facebook' => get_field('facebook', $section->ID),
        'webpage' => get_field('webpage_url', $section->ID),
        'releated_posts' => get_releated_posts($section->ID)
    );

    $response = new WP_REST_Response($result);
    $response->set_status(200);

    return $result;
}

function get_releated_posts($section_id) {
    $releated_posts_ids = get_field('realeted-posts', $section_id);
    $releated_posts = array_map(
        function ($section) {
            return array(
                'id' => $section->ID,
                'title' => $section->post_title,
                'description' => $section->post_content,
                'slug' => $section->post_name,
                'image' => get_featured_image($section)
            );
        },
        get_posts(array(
            'category' => $releated_posts_ids[0]
        ))
    );

    return $releated_posts;
}
