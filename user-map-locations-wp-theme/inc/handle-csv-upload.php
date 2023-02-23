<?php
if (!empty($_FILES)) :

  $file = $_FILES['csv-file'];

  $post_id = wp_insert_post(array(
    'post_title' => $file['name'],
    'post_status'   => 'publish',
    'post_type' => 'submission',
  ));

  $fileManager = new File_Manager();
  $attach_id = $fileManager->upload_file($file, $post_id);
  update_post_meta($post_id, '_csv-file-id', $attach_id);

  if ($post_id) {
    wp_redirect(get_permalink($post_id)); exit;
  } else {
    wp_redirect(home_url()); exit;
  }

endif;
