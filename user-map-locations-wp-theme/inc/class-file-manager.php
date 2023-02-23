<?php

class File_Manager
{

	/**
	 * Upload File
	 * @param string $file file
	 * @param string $parent_post_id
	 * @return string attachment id
	 */
	function upload_file($file, $parent_post_id)
	{
		require_once(ABSPATH . 'wp-admin/includes/file.php');

		if (empty($file)) {
			wp_die('No files selected.');
		}

		$upload = wp_handle_upload(
			$file,
			array('test_form' => false)
		);

		if (!empty($upload['error'])) {
			wp_die($upload['error']);
		}

		$attachment_id = wp_insert_attachment(
			array(
				'guid'           => $upload['url'],
				'post_mime_type' => $upload['type'],
				'post_title'     => basename($upload['file']),
				'post_content'   => '',
				'post_status'    => 'inherit',
			),
			$upload['file'],
			$parent_post_id
		);

		if (is_wp_error($attachment_id) || !$attachment_id) {
			wp_die('Upload error.');
		}

		// update medatata, regenerate image sizes
		require_once(ABSPATH . 'wp-admin/includes/image.php');

		wp_update_attachment_metadata(
			$attachment_id,
			wp_generate_attachment_metadata($attachment_id, $upload['file'])
		);

		return $attachment_id;
	}

	/**
	 * Handle CSV files
	 * 
	 * @param string filepath
	 * @return array
	 */
	function parse_csv($file)
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
		}
	}
}
