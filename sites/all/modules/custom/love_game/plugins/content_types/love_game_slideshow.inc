<?php

$plugin = array(
  'title' => t('Love Game Slideshow'),
  'description' => t('Display Love Game Slideshow'),
  'category' => t('Love Game'),
  'edit form' => 'love_game_love_game_slideshow',
  'render callback' => 'love_game_love_game_slideshow_render',
  'defaults' => array(),
  'all contexts' => TRUE,
);

/**
 * Edit form.
 */
function love_game_love_game_slideshow($form, &$form_state) {
 	$conf = $form_state['conf'];

	$form['images'] = array(
	  '#type' => 'plupload',
	  '#title' => t('Upload Images'),
	  '#description' => t('This multi-upload widget uses Plupload library.'),
	  '#upload_validators' => array(
	    'file_validate_extensions' => array('jpg jpeg gif png'),
	  ),
	  '#plupload_settings' => array(
	    'runtimes' => 'html5',
	    'chunk_size' => '1mb',
	  ),
	);

 	return $form;
}

/**
 * Edit form submit function.
 */
function love_game_love_game_slideshow_submit($form, &$form_state) {
  if (!empty($form_state['values']['images'])) {
	  $saved_files = array();
	  $scheme = variable_get('file_default_scheme', 'public') . '://';
	  foreach ($form_state['values']['images'] as $uploaded_file) {
	    if ($uploaded_file['status'] == 'done') {
	      $source = $uploaded_file['tmppath'];
	      $destination = file_stream_wrapper_uri_normalize($scheme . $uploaded_file['name']);
	      // Rename it to its original name, and put it in its final home.
	      // Note - not using file_move here because if we call file_get_mime
	      // (in file_uri_to_object) while it has a .tmp extension, it horks.
	      $destination = file_unmanaged_move($source, $destination, FILE_EXISTS_RENAME);
	      $file = plupload_file_uri_to_object($destination);
	      file_save($file);
	      $saved_files[] = $file;
	    }
	    else {
	      // @todo: move this to element validate or something and clean up t().
	      form_set_error('images', "Upload of {$uploaded_file['name']} failed");
	    }
	  }
	  $form_state['conf']['images'] = $saved_files;
  }
}

/**
 * Render the panel.
 */
function love_game_love_game_slideshow_render($subtype, $conf, $args, $contexts) {
  $block = new stdClass();
  $images = array();

  if (empty($conf['images'])) {
  	return $block;	
  }
	
	foreach ($conf['images'] as $image) {
		$images[$image->fid] = image_style_url('love_game_slideshow', $image->uri);
	}
  
  // Render as a block.
  $block->content = theme('love_game_slideshow', array('images' => $images));
  return $block;
}