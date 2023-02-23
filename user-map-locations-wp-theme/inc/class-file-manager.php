<?php

class File_Manager
{

	function upload_file_by_url($image_url)
	{

		// it allows us to use download_url() and wp_handle_sideload() functions
		require_once(ABSPATH . 'wp-admin/includes/file.php');

		// download to temp dir
		$temp_file = download_url($image_url);

		if (is_wp_error($temp_file)) {
			return false;
		}

		// move the temp file into the uploads directory
		$file = array(
			'name'     => basename($image_url),
			'type'     => mime_content_type($temp_file),
			'tmp_name' => $temp_file,
			'size'     => filesize($temp_file),
		);
		$sideload = wp_handle_sideload(
			$file,
			array(
				'test_form'   => false // no needs to check 'action' parameter
			)
		);

		if (!empty($sideload['error'])) {
			// you may return error message if you want
			return false;
		}

		// it is time to add our uploaded image into WordPress media library
		$attachment_id = wp_insert_attachment(
			array(
				'guid'           => $sideload['url'],
				'post_mime_type' => $sideload['type'],
				'post_title'     => basename($sideload['file']),
				'post_content'   => '',
				'post_status'    => 'inherit',
			),
			$sideload['file']
		);

		if (is_wp_error($attachment_id) || !$attachment_id) {
			return false;
		}

		// update medatata, regenerate image sizes
		require_once(ABSPATH . 'wp-admin/includes/image.php');

		wp_update_attachment_metadata(
			$attachment_id,
			wp_generate_attachment_metadata($attachment_id, $sideload['file'])
		);

		return $attachment_id;
	}

	/**
	 * Handle CSV files
	 * 
	 * @param string filepath
	 * @return array
	 */
	function handle_csv_file($file)
	{
		$row = 1;
		if (($handle = fopen($file, "r")) !== FALSE) {

			$content = array();

			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$num = count($data);
				$row++;
				$col = array();
				for ($c = 0; $c < $num; $c++) {
					$col[] = $data[$c];
				}
				$content[] = $col;
			}

			fclose($handle);

			return $content;

			// $post_id = wp_insert_post(array(
			// 	'post_status'   => 'publish',
			// 	'post_type' => 'submission',
			// ));

			// update_post_meta($post_id, '_raw_data', maybe_serialize($content));

			// if ($post_id) {
			// 	wp_redirect(get_permalink($post_id));
			// } else {
			// 	wp_redirect(home_url());
			// }
		}
	}
}
