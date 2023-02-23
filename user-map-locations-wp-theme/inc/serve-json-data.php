<?php

add_action('template_redirect', function () {

  if (empty($_GET['json']) || !is_single()) return;

  global $post;

  $attach_id = get_post_meta($post->ID, '_csv-file-id', true);

  $attach = get_post($attach_id);
  $FileManager = new File_Manager();

  $data = $FileManager->parse_csv($attach->guid);
  echo json_encode($data);

  die;
  
});