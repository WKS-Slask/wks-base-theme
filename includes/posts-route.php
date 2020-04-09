<?php

add_action('rest_api_init', 'posts_routes');

function posts_routes() {
  register_rest_route('wks/api', '/posts', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'get_all_posts'
  ));

  register_rest_route('wks/api', '/post/(?P<id>\d+)', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'get_single_post'
  ));
}

function get_all_posts($request) {
  $posts = get_posts(array(
    'post_type' => 'post',
    'posts_per_page' => $request['per_page'],
    'paged' => $request['page']
  ));

  if ( empty( $posts ) ) {
    return new WP_Error( 'No items found', array('status' => 404) );
  }

  $result = array_map(function ($post) {
    return array(
      'id' => $post->ID,
      'title' => $post->post_title,
      'content' => $post->post_content,
      'slug' => $post->post_name,
      'image' => get_featured_image($post),
      'categories' => wks_get_post_categories($post->ID),
      'date' => $post->post_date,
      'excerpt' => get_the_excerpt($post->ID)
    );
  }, $posts);

  $response = new WP_REST_Response($result);
  $response->set_status(200);

  return $response;      
}

function get_single_post($request) {
  $post = get_posts(array(
    'post_type' => 'post',
    'p' => $request['id']
  ))[0];

  if ( empty( $post ) ) {
    return new WP_Error( 'Post with given ID not exist', array('status' => 404) );
  }

  $result = array(
    'id' => $post->ID,
    'title' => $post->post_title,
    'content' => $post->post_content,
    'slug' => $post->post_name,
    'image' => get_featured_image($post),
    'categories' => wks_get_post_categories($post->ID),
    'date' => $post->post_date,
    'excerpt' => get_the_excerpt($post->ID)
  );

  $response = new WP_REST_Response($result);
  $response->set_status(200);

  return $response;
}