<?php

add_action('rest_api_init', 'sponsorsRoutes');

function sponsorsRoutes() {
    register_rest_route('wks/api', '/sponsors', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'get_sponsors'
    ));
}

function get_sponsors($request) {
    $sponsors = get_posts(array(
        'post_type' => 'sponsors',
        'posts_per_page' => -1
    ));

    if (empty($sponsors)) {
        return new WP_Error('No items found', array('status' => 404));
    }

    $result = array_map(function ($sponsor) {
        $test = get_field_object('white-logo', $sponsor->ID);
        $test1 = $test["value"]["sizes"]["footer-sponsor-logo-width"];
        return array(
            'id' => $sponsor->ID,
            'title' => $sponsor->post_title,
            'logo-white' => array(
                "width" => get_field_object('white-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo-width"],
                "height" => get_field_object('white-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo-height"],
                "url" => get_field_object('white-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo"]
            ),
            'logo-color' => array(
                "width" => get_field_object('color-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo-width"],
                "height" => get_field_object('color-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo-height"],
                "url" => get_field_object('color-logo', $sponsor->ID)["value"]["sizes"]["footer-sponsor-logo"]
            ),
            'sponsor-url' => get_field('sponsor-url', $sponsor->ID),
            'slug' => $sponsor->post_name
        );
    }, $sponsors);

    $response = new WP_REST_Response($result);
    $response->set_status(200);

    return $response;
}
