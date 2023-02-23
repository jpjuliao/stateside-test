<?php

add_action('template_redirect', function () {

  global $post;

  $data = get_post_meta($post->ID, '_raw_data');

  var_dump(  $data[0] );

  die;
});